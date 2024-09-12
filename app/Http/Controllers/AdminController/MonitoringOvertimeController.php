<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\MonitoringOvertime;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class MonitoringOvertimeController extends Controller
{
    function index()
    {
        $data['list_monitoringovertime'] = MonitoringOvertime::with('Pegawai')->get();
        $data['list_pegawai'] = Pegawai::all();

        // Periksa apakah ada pegawai dengan jam lembur melebihi 48 jam
        $overtimeExceeded = MonitoringOvertime::where('Jam_Lembur', '>', 48)->exists();

        if ($overtimeExceeded) {
            Session::flash('warning', 'Ada pegawai yang jam lemburnya melebihi 48 jam!');
        }

        return view('Admin.MonitoringOvertime.index', $data);
    }

    function create()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('Admin.MonitoringOvertime.create', $data);
    }

    public function store(Request $request)
    {
        $pegawaiIds = $request->input('pegawai_id', []);
        $jamLembur = $request->input('Jam_Lembur');

        foreach ($pegawaiIds as $pegawaiId) {
            $monitoringovertime = new MonitoringOvertime();
            $monitoringovertime->pegawai_id = $pegawaiId;
            $monitoringovertime->Jam_Lembur = $jamLembur;

            if ($jamLembur > 48) {
                Log::warning('Jam lembur melebihi 48 jam untuk Pegawai ID: ' . $pegawaiId);
            }

            $monitoringovertime->save();
        }

        return redirect('MonitoringOvertime')->with('success', 'Data Monitoring Berhasil Disimpan');
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

        $monitoringovertime = MonitoringOvertime::find($id);

        if ($monitoringovertime) {
            Log::info('Data before update:', $monitoringovertime->toArray());

            $monitoringovertime->Jam_Lembur = $request->input('jam_lembur');
            $monitoringovertime->save();

            Log::info('Data after update:', $monitoringovertime->toArray());

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
        $monitoringovertimeData = MonitoringOvertime::all();
        $pegawaiData = Pegawai::all();

        $RekapMonitoring = [];

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

                $RekapMonitoring[$namaPegawai]['Total Jam Lembur'] += $jamLembur;
            }
        }

        return view('Admin.MonitoringOvertime.RekapMonitoring', ['RekapMonitoring' => $RekapMonitoring]);
    }

    public function generatePDF()
    {
        // Mengambil hanya nama pegawai
        $data['list_monitoringovertime'] = MonitoringOvertime::with(['Pegawai' => function($query) {
            $query->select('id', 'Nama', 'Kota_Kelahiran', 'Tanggal_Lahir', 'Jenis_Kelamin'); // hanya ambil id dan nama
        }])->get();

        return view('Admin.MonitoringOvertime.Monitoring-pdf', $data);
    }
}
