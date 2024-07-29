<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AbsensiBriefing;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AbsensiBriefingController extends Controller
{
    public function index()
    {
        $data['list_absensibriefing'] = AbsensiBriefing::all();
        return view('Admin.AbsensiBriefing.index', $data);
    }

    public function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.AbsensiBriefing.create', $data);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'pegawai_id' => 'required|array|min:1',
            'pegawai_id.*' => 'exists:pegawai,id',
            'keterangan' => 'required|string|in:Pagi,Sore',
        ]);

        // Ambil ID pegawai dan keterangan dari input
        $pegawaiIds = $request->input('pegawai_id', []);
        $keterangan = $request->input('keterangan');

        // Iterasi setiap ID pegawai dan simpan data ke database
        foreach ($pegawaiIds as $pegawaiId) {
            $absensibriefing = new AbsensiBriefing();
            $absensibriefing->pegawai_id = $pegawaiId;
            $absensibriefing->keterangan = $keterangan;
            $absensibriefing->save(); // Simpan setiap entri secara terpisah
        }

        // Redirect dengan pesan sukses
        return redirect('AbsensiBriefing')->with('success', 'Data Absensi Briefing Berhasil Di Simpan');
    }

    public function show($id)
    {
        return view('Admin.AbsensiBriefing.show', [
            'absensibriefing' => AbsensiBriefing::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        return view('Admin.AbsensiBriefing.edit', [
            'absensibriefing' => AbsensiBriefing::findOrFail($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required|string|in:Pagi,Sore',
        ]);

        $absensibriefing = AbsensiBriefing::find($id);

        if ($absensibriefing) {
            $absensibriefing->keterangan = $request->input('keterangan');
            $absensibriefing->save();
            return redirect('AbsensiBriefing')->with('success', 'Absensi Briefing Berhasil di Edit');
        } else {
            return redirect('AbsensiBriefing')->withErrors(['error' => 'Data tidak ditemukan']);
        }
    }

    public function destroy($id)
    {
        $absensibriefing = AbsensiBriefing::find($id);
        if ($absensibriefing) {
            $absensibriefing->delete();
            return redirect('AbsensiBriefing')->with('danger', 'Data Absensi Briefing Berhasil Dihapus');
        } else {
            return redirect('AbsensiBriefing')->withErrors(['error' => 'Data tidak ditemukan']);
        }
    }

    public function RekapAbsensiBriefing()
    {
        // Mengambil data dari tabel AbsensiBriefing dan Pegawai
        $absensibriefingData = AbsensiBriefing::all();
        $pegawaiData = Pegawai::all();

        // Menyiapkan array default untuk setiap nama
        $RekapAbsensiBriefing = [];

        // Mengelompokkan data berdasarkan nama
        foreach ($absensibriefingData as $data) {
            $pegawai = $pegawaiData->firstWhere('id', $data->pegawai_id);
            if ($pegawai) {
                $namaPegawai = $pegawai->Nama;
                $nidPegawai = $pegawai->NID;
                $bagianPegawai = $pegawai->Bagian;
                $keterangan = $data->keterangan;

                if (!isset($RekapAbsensiBriefing[$namaPegawai])) {
                    $RekapAbsensiBriefing[$namaPegawai] = [
                        'nama' => $namaPegawai,
                        'nid' => $nidPegawai,
                        'bagian' => $bagianPegawai,
                        'pagi' => 0,
                        'sore' => 0,
                    ];
                }

                // Menghitung jumlah kehadiran pagi dan sore
                if ($keterangan == 'Pagi') {
                    $RekapAbsensiBriefing[$namaPegawai]['pagi']++;
                } elseif ($keterangan == 'Sore') {
                    $RekapAbsensiBriefing[$namaPegawai]['sore']++;
                }
            }
        }

        // Mengirim data ke view
        return view('Admin.AbsensiBriefing.RekapAbsensiBriefing', ['RekapAbsensiBriefing' => $RekapAbsensiBriefing]);
    }
}
