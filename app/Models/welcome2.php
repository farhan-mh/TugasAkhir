<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class welcome2 extends Model
{
    use HasFactory;

    protected $fillable = [
        'img',
        'judul', 
        'text1',
        'text2',
        'text3',
        'text4',
    ];
}
