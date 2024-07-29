<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Pegawai extends Model
{
    protected $table = 'pegawai';
    protected $fillable = [
        'id','NID','Nama','Kota_Kelahiran','Tanggal_Lahir','Jenis_Kelamin','Status_Pernikahan','Pendidikan','Sekolah_Universitas','Alamat_KTP','Alamat_Domisili','Nomor_Hp','Email','FTK_NonFTK','Jabatan','Kode_PRK','Status','Klasifikasi_Bidang','Bagian','Nomor_BPJS_Kesehatan',
        'Status_Kepersertaan_BPJS_Kesehatan','Nomor_BPJS_Ketenagakerjaan','Status_Kepersertaan_BPJS_Ketenagakerjaan','Lokasi_UnitKerja','Perusahaan_Penyedia',
        'NIK_KTP','AGAMA','Atasan','Kabupaten_Kota','Provinsi','foto'
    ];

    protected $dates = ['Tanggal_Lahir'];
    function handLeUploadFoto()
    {

        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/pegawai";
            $randomStr = Str::random(5);
            $filename = $this->id . "-" . time() . "-" . $randomStr . "." . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "" . $url;
            $this->save();
        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if ($foto) {
            $path = public_path($foto);
            if (file_exists($path)) {
                unlink($path);
            }
        }
        return true;
    }
    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'pegawai_id');
    }
    public function monitoringovertime()
    {
        return $this->hasMany(MonitoringOvertime::class, 'pegawai_id');
    }
    public function areakerja()
    {
        return $this->hasMany(AreaKerja::class, 'pegawai_id');
    }
    public function absensibriefing()
    {
        return $this->hasMany(AbsensiBriefing::class, 'pegawai_id');
    }
}
