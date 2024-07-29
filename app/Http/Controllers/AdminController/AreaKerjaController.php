<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\AreaKerja;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class AreaKerjaController extends Controller
{
    function index()
    {
        $data['list_areakerja'] = AreaKerja::all();
        return view('Admin.AreaKerja.index',$data);
    }

    function create()
    {
        $data ['list_pegawai']= Pegawai::all();
        return view('Admin.AreaKerja.create',$data);
    }


    function store(Request $request)
    {
        $areakerja = new AreaKerja();
        $areakerja->pegawai_id = $request->input('pegawai_id');

        // $areakerja->Nama = request('Nama');
        $areakerja->Lokasi_UnitKerja = request('Lokasi_UnitKerja');
        $areakerja->Klasifikasi_Bidang = request('Klasifikasi_Bidang');
        $areakerja->Tanggal_Mulai = request('Tanggal_Mulai');
        $areakerja->Tanggal_Selesai = request('Tanggal_Selesai');




        $areakerja->save();

        return redirect('AreaKerja')->with('success', 'Data Area Kerja Berhasil Di Simpan');
    }

    public function show($id)
    {
        return view('Admin.AreaKerja.show', [
            'areakerja' => AreaKerja::findOrFail($id),
        ]);
    }


    public function edit($id)
    {
        $areakerja = AreaKerja::findOrFail($id);
        $list_pegawai = Pegawai::all(); // Ambil semua pegawai
        return view('Admin.AreaKerja.edit', [
            'areakerja' => $areakerja,
            'list_pegawai' => $list_pegawai,
        ]);
    }


    public function update(Request $request, $id)
    {

            // Validasi data
            $request->validate([
                'pegawai_id' => 'required',
                'Lokasi_UnitKerja' => 'required',
                'Klasifikasi_Bidang' => 'required',
                'Tanggal_Mulai' => 'required|date',
                'Tanggal_Selesai' => 'required|date',
            ]);

            // Cari data AreaKerja
            $areakerja = AreaKerja::findOrFail($id);

            // Update data
            $areakerja->pegawai_id = $request->pegawai_id;
            $areakerja->Lokasi_UnitKerja = $request->Lokasi_UnitKerja;
            $areakerja->Klasifikasi_Bidang = $request->Klasifikasi_Bidang;
            $areakerja->Tanggal_Mulai = $request->Tanggal_Mulai;
            $areakerja->Tanggal_Selesai = $request->Tanggal_Selesai;


            $areakerja->save();



        return redirect('AreaKerja')->with('success', 'Area Kerja Berhasil di Edit');
    }


    function destroy($id)
    {
        $areakerja = AreaKerja::find($id);
        $areakerja->handleDelete();
        $areakerja->delete();
        return redirect('AreaKerja')->with('danger', 'Data Area Kerja Berhasil Dihapus');
    }
}
