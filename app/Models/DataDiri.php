<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataDiri extends Model
{
    protected $fillable = [
        'NIK',
        'nama',
        'tempat_tglLahir',
        'Jenis_kelamin',
        'Alamat',
        'Rt_Rw',
        'KelDesa',
        'Kecamatan',
        'Agama',
        'Status_Perkawinan',
        'Pekerjaan',
        'Kewarganegaraan',
        'Berlaku_Hingga'
    ];
}
