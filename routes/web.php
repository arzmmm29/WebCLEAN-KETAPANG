<?php

use App\Http\Controllers\AdminController\AbsensiBriefingController;
use App\Http\Controllers\AdminController\AbsensiController;
use App\Http\Controllers\AdminController\AreaKerjaController;
use App\Http\Controllers\AdminController\AuthController;
use App\Http\Controllers\AdminController\DashboardController;
use App\Http\Controllers\AdminController\DataPegawaiController;
use App\Http\Controllers\AdminController\MonitoringOvertimeController;
use App\Http\Controllers\LandingPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Landing Page//
Route::get('LandingPage',[LandingPageController::class,'index']);
Route::get('Login',[AuthController::class,'login']);
Route::post('Login',[AuthController::class,'loginProcess']);
Route::get('Register',[AuthController::class,'Register']);
Route::post('Register',[AuthController::class,'createAcount']);


//Dashboard//
Route::get('/Dashboard', [DashboardController::class, 'index']);


//Data Pegawai//
Route::get('DataPegawai', [DataPegawaiController::class, 'index']);
Route::get('DataPegawai/create', [DataPegawaiController::class, 'create']);
Route::post('DataPegawai', [DataPegawaiController::class, 'store']);
Route::get('DataPegawai/{pegawai}', [DataPegawaiController::class, 'show']);
Route::get('DataPegawai/{pegawai}/edit', [DataPegawaiController::class, 'edit']);
Route::put('DataPegawai/{pegawai}', [DataPegawaiController::class, 'update']);
Route::delete('DataPegawai/{pegawai}', [DataPegawaiController::class, 'destroy']);
Route::post('DataPegawai/import', [DataPegawaiController::class, 'import_process']);
Route::get('/search-pegawai', [AbsensiController::class, 'searchPegawai']);





//Absensi//
Route::get('Absensi',[AbsensiController::class,'index']);
Route::get('Absensi/create',[AbsensiController::class,'create']);
Route::post('Absensi',[AbsensiController::class,'store']);
Route::get('Absensi/{absensi}',[AbsensiController::class,'show']);
Route::get('Absensi/{absensi}/edit',[AbsensiController::class,'edit']);
Route::put('Absensi/{absensi}',[AbsensiController::class,'update']);
Route::delete('Absensi/{absensi}',[AbsensiController::class,'destroy']);
Route::get('RekapAbsensi', [AbsensiController::class, 'RekapAbsensi']);



//Monitoring Overtime//
Route::get('MonitoringOvertime',[MonitoringOvertimeController::class,'index']);
Route::get('MonitoringOvertime/create',[MonitoringOvertimeController::class,'create']);
Route::post('MonitoringOvertime',[MonitoringOvertimeController::class,'store']);
Route::get('MonitoringOvertime/{monitoringovertime}',[MonitoringOvertimeController::class,'show']);
Route::get('MonitoringOvertime/{monitoringovertime}/edit',[MonitoringOvertimeController::class,'edit']);
Route::put('MonitoringOvertime/{monitoringovertime}',[MonitoringOvertimeController::class,'update']);
Route::delete('MonitoringOvertime/{monitoringovertime}',[MonitoringOvertimeController::class,'destroy']);
Route::get('RekapMonitoring',[MonitoringOvertimeController::class,'RekapMonitoring']);



//Area Kerja//
Route::get('AreaKerja',[AreaKerjaController::class,'index']);
Route::get('AreaKerja/create',[AreaKerjaController::class,'create']);
Route::post('AreaKerja',[AreaKerjaController::class,'store']);
Route::get('AreaKerja/{areakerja}',[AreaKerjaController::class,'show']);
Route::get('AreaKerja/{areakerja}/edit',[AreaKerjaController::class,'edit']);
Route::put('AreaKerja/{areakerja}',[AreaKerjaController::class,'update']);
Route::delete('AreaKerja/{areakerja}',[AreaKerjaController::class,'destroy']);



//Absensi Briefing//
Route::get('AbsensiBriefing',[AbsensiBriefingController::class,'index']);
Route::get('AbsensiBriefing/create',[AbsensiBriefingController::class,'create']);
Route::post('AbsensiBriefing',[AbsensiBriefingController::class,'store']);
Route::get('AbsensiBriefing/{absensibriefing}/edit',[AbsensiBriefingController::class,'edit']);
Route::put('AbsensiBriefing/{absensibriefing}',[AbsensiBriefingController::class,'update']);
Route::delete('AbsensiBriefing/{absensibriefing}',[AbsensiBriefingController::class,'destroy']);
Route::get('RekapAbsensiBriefing',[AbsensiBriefingController::class,'RekapAbsensiBriefing']);

