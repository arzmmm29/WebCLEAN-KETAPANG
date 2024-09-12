<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;



class AbsensiController extends Controller
{
    function index()
    {
        $data['list_absensi'] = Absensi::with('Pegawai')->get();
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.Absensi.index', $data);
    }

    function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.Absensi.create', $data);
    }


    public function store(Request $request)
    {
        $request->validate([
            'shif' => 'required|string',
            'Hari_Kerja' => 'required|string',
            'pegawai_id' => 'required|array|min:1',
            'pegawai_id.*' => 'exists:pegawai,id',
        ], [
            'shif.required' => 'Shift harus diisi.',
            'Hari_Kerja.required' => 'Status hari kerja harus diisi.',
            'pegawai_id.required' => 'Pilih setidaknya satu pegawai.',
            'pegawai_id.min' => 'Pilih setidaknya satu pegawai.',
            'pegawai_id.*.exists' => 'Pegawai tidak valid.',
        ]);

        // Ambil nilai shift dan hari kerja dari request
        $shift = $request->input('shif');
        $tglAbsensi = $request->input('tgl_absensi');
        $hariKerja = $request->input('Hari_Kerja');

        // Ambil ID pegawai dan status kehadiran
        $pegawaiIds = $request->input('pegawai_id');
        $statusKehadiran = $request->input('Status_Kehadiran');

        // Iterasi setiap data pegawai
        foreach ($pegawaiIds as $index => $pegawaiId) {
            $absensi = new Absensi();
            $absensi->pegawai_id = $pegawaiId;
            $absensi->Status_Kehadiran = $statusKehadiran[$index] ?? '';
            $absensi->Hari_Kerja = $hariKerja;
            $absensi->shif = $shift;
            $absensi->tgl_absensi = $tglAbsensi;
            $absensi->save();
        }

        return redirect('Absensi')->with('success', 'Data Absensi berhasil disimpan.');
    }

    public function edit($id)
    {

        return view('Admin.Absensi.edit', [
            'absensi' => Absensi::findOrFail($id),
        ]);
    }


    function update($id)
    {
    // Validasi input
    request()->validate([
        'Status_Kehadiran' => 'required',
        'Hari_Kerja' => 'required',
        'shif' => 'required',
    ], [
        'Status_Kehadiran.required' => 'Status Kehadiran harus diisi',
        'Hari_Kerja.required' => 'Hari Kerja harus diisi',
        'shif.required' => 'Shif harus diisi',
    ]);

        $absensi = Absensi::find($id);
        // if (request('Nama')) $absensi->Nama = request('Nama');
        // if (request('Kode_PRK')) $absensi->Kode_PRK = request('Kode_PRK');
        // if (request('NIK')) $absensi->NIK = request('NIK');
        // if (request('Status')) $absensi->Status = request('Status');
        // if (request('Bagian')) $absensi->Bagian = request('Bagian');
        if (request('Status_Kehadiran')) $absensi->Status_Kehadiran = request('Status_Kehadiran');
        if (request('Hari_Kerja')) $absensi->Hari_Kerja = request('Hari_Kerja');
        if (request('shif')) $absensi->shif = request('shif');



        $absensi->save();


        return redirect('Absensi')->with('success', 'Absensi Berhasil di Edit');
    }


    function destroy($id)
    {
        $absensi = Absensi::find($id);
        $absensi->handleDelete();
        $absensi->delete();
        return redirect('Absensi')->with('danger', 'Data Absensi Berhasil Dihapus');
    }



    public function RekapAbsensi(Request $request)
    {
        // Ambil parameter filter bulan dari request
        $filterMonth = $request->input('filter_month');

        // Mengambil data dari tabel Absensi dan Pegawai
        $absensiQuery = Absensi::query();

        if ($filterMonth) {
            // Mengambil data untuk bulan tertentu
            $startDate = $filterMonth . '-01'; // Mengambil tanggal awal bulan
            $endDate = date('Y-m-t', strtotime($startDate)); // Mengambil tanggal akhir bulan

            $absensiQuery->whereBetween('tgl_absensi', [$startDate, $endDate]);
        }

        $absensiData = $absensiQuery->get();
        $pegawaiData = Pegawai::all();

        // Menyiapkan array default untuk setiap nama
        $RekapAbsensi = [];

        // Mengelompokkan data berdasarkan nama
        foreach ($absensiData as $data) {
            $pegawai = $pegawaiData->firstWhere('id', $data->pegawai_id);
            if ($pegawai) {
                $namaPegawai = $pegawai->Nama;
                $statusHari = $data->hari_kerja;
                $shiftType = $data->shif;
                $statusKehadiran = $data->Status_Kehadiran;

                if (!isset($RekapAbsensi[$namaPegawai])) {
                    $RekapAbsensi[$namaPegawai] = [
                        'nama' => $namaPegawai,
                        'Hari Kerja' => 0,
                        'Hari Libur' => 0,
                        'SM' => 0,
                        'PS' => 0,
                        'MP' => 0,
                        'S' => 0,
                        'M' => 0,
                        'P' => 0,
                        'Hadir' => 0,
                        'Tidak Hadir' => 0,
                        'Izin' => 0,
                        'Sakit' => 0,
                    ];
                }

                if ($statusHari === 'Hari kerja') {
                    $RekapAbsensi[$namaPegawai]['Hari Kerja'] += 1;
                } elseif ($statusHari === 'libur') {
                    $RekapAbsensi[$namaPegawai]['Hari Libur'] += 1;
                }

                if (in_array($shiftType, ['SM', 'PS', 'MP', 'S', 'M', 'P'])) {
                    $RekapAbsensi[$namaPegawai][$shiftType] += 1;
                }

                if ($statusKehadiran === 'Hadir') {
                    $RekapAbsensi[$namaPegawai]['Hadir'] += 1;
                } elseif ($statusKehadiran === 'Tidak Hadir') {
                    $RekapAbsensi[$namaPegawai]['Tidak Hadir'] += 1;
                } elseif ($statusKehadiran === 'Izin') {
                    $RekapAbsensi[$namaPegawai]['Izin'] += 1;
                } elseif ($statusKehadiran === 'Sakit') {
                    $RekapAbsensi[$namaPegawai]['Sakit'] += 1;
                }
            }
        }

        // Mengirim data ke view
        return view('Admin.Absensi.RekapAbsensi', [
            'RekapAbsensi' => $RekapAbsensi,
            'filterMonth' => $filterMonth
        ]);
    }


    public function generatePDF()
    {
        // Mengambil hanya nama pegawai
        $data['list_absensi'] = Absensi::with(['Pegawai' => function($query) {
            $query->select('id', 'Nama'); // hanya ambil id dan nama
        }])->get();

        return view('Admin.Absensi.Absensi-pdf', $data);
    }
}
