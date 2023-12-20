<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class KTP extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nik',
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

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
   
}
