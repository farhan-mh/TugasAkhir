<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class header extends Model
{
    use HasFactory;
      /**
     * fillable
     * 
     * @var array
     */

     protected $fillable = [
        'logo',
        'judulWeb',
        'menu',
        'txt',
    ];
}
