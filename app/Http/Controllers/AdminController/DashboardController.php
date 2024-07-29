<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use App\Models\AbsensiBriefing;
use App\Models\AreaKerja;
use App\Models\MonitoringOvertime;
use Illuminate\Http\Request;
use App\Models\Pegawai;
class DashboardController extends Controller
{
    public function index()
    {
            // Menghitung jumlah pegawai
            $jumlah_pegawai = Pegawai::count();
            $jumlah_absensi = Absensi::count();
            $jumlah_monitoring = MonitoringOvertime::count();
            $jumlah_areakerja = AreaKerja::count();
            $jumlah_absensibriefing = AbsensiBriefing::count();
            // Mengirimkan data jumlah pegawai ke view dashboard
            return view('Admin.Dashboard.index', compact('jumlah_pegawai','jumlah_absensi','jumlah_monitoring','jumlah_areakerja','jumlah_absensibriefing'));
        }
}
