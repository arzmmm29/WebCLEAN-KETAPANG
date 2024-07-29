<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Absensi extends Model
{
    protected $table = 'absensi';
    protected $fillable = [
        'id','pegawai_id','Hari_Kerja','Status_Kehadiran','hari_kerja','shif'
    ];
    function handLeUploadFoto()
    {

        $this->handleDelete();
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "images/absensi";
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
    public function pegawai(){
        return $this->belongsTo(Pegawai::class,'pegawai_id');
    }
}
