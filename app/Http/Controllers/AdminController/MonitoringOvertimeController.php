<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\MonitoringOvertime;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MonitoringOvertimeController extends Controller
{
    function index()
    {
        $data['list_monitoringovertime'] = MonitoringOvertime::with('Pegawai')->get();
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.MonitoringOvertime.index', $data);
    }

    function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.MonitoringOvertime.create', $data);
    }


    public function store(Request $request)
    {
        // Validasi input
        // $request->validate([
        //     'pegawai_id' => 'required|array|min:1', // Memastikan bahwa pegawai_id adalah array dan memiliki minimal 1 elemen
        //     'pegawai_id.*' => 'exists:pegawai,id', // Memastikan setiap ID pegawai ada dalam tabel pegawai
        //     'Jam_Lembur' => 'required|string|max:5', // Menyesuaikan panjang maksimum dengan ukuran kolom di database
        // ]);

        // Ambil ID pegawai dan jam lembur dari input
        $pegawaiIds = $request->input('pegawai_id', []);
        $jamLembur = $request->input('Jam_Lembur');

        // Iterasi setiap ID pegawai dan simpan data ke database
        foreach ($pegawaiIds as $pegawaiId) {
            $monitoringovertime = new MonitoringOvertime();
            $monitoringovertime->pegawai_id = $pegawaiId;
            $monitoringovertime->Jam_Lembur = $jamLembur;

            // Simpan setiap entri secara terpisah
            $monitoringovertime->save();
        }

        // Redirect dengan pesan sukses
        return redirect('MonitoringOvertime')->with('success', 'Data Monitoring Berhasil Di Simpan');
    }

    public function show($id)
    {
        return view('Admin.MonitoringOvertime.show', [
            'monitoringovertime' => MonitoringOvertime::findOrFail($id),
        ]);
    }


    public function edit($id)
    {
        return view('Admin.MonitoringOvertime.edit', [
            'monitoringovertime' => MonitoringOvertime::findOrFail($id),
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|string|max:255',
            'Tanggal_Lahir' => 'required|date',
            'Kota_Kelahiran' => 'required|string|max:255',
            'jam_lembur' => 'required|numeric',
        ]);

        // Temukan data berdasarkan ID
        $monitoringovertime = MonitoringOvertime::find($id);

        if ($monitoringovertime) {
            // Log data sebelum update
            Log::info('Data before update:', $monitoringovertime->toArray());

            // Perbarui data

            $monitoringovertime->Jam_Lembur = $request->input('jam_lembur');

            // Simpan perubahan
            $monitoringovertime->save();

            // Log data setelah update
            Log::info('Data after update:', $monitoringovertime->toArray());

            // Redirect dengan pesan sukses
            return redirect('MonitoringOvertime')->with('success', 'Data Monitoring Berhasil di Edit');
        } else {
            return redirect('MonitoringOvertime')->with('error', 'Data tidak ditemukan');
        }
    }




    function destroy($id)
    {
        $monitoringovertime = MonitoringOvertime::find($id);
        $monitoringovertime->handleDelete();
        $monitoringovertime->delete();
        return redirect('MonitoringOvertime')->with('danger', 'Data Monitoring Berhasil Dihapus');
    }

    public function RekapMonitoring()
    {
        // Mengambil data dari tabel MonitoringOvertime dan Pegawai
        $monitoringovertimeData = MonitoringOvertime::all();
        $pegawaiData = Pegawai::all();

        // Menyiapkan array default untuk setiap nama
        $RekapMonitoring = [];

        // Mengelompokkan data berdasarkan nama
        foreach ($monitoringovertimeData as $data) {
            $pegawai = $pegawaiData->firstWhere('id', $data->pegawai_id);
            if ($pegawai) {
                $namaPegawai = $pegawai->Nama;
                $jamLembur = $data->Jam_Lembur;

                if (!isset($RekapMonitoring[$namaPegawai])) {
                    $RekapMonitoring[$namaPegawai] = [
                        'nama' => $namaPegawai,
                        'Total Jam Lembur' => 0,
                    ];
                }

                // Menghitung total jam lembur
                $RekapMonitoring[$namaPegawai]['Total Jam Lembur'] += $jamLembur;
            }
        }

        // Mengirim data ke view
        return view('Admin.MonitoringOvertime.RekapMonitoring', ['RekapMonitoring' => $RekapMonitoring]);
    }
}
