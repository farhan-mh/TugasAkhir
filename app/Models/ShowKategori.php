<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowKategori extends Model
{
    use HasFactory;
     /**
     * fillable
     * 
     * @var array
     */

     protected $fillable = [
        'img',
        'text',
        'kategori',
    ];
    
}
