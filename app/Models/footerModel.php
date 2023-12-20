<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class footerModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'teksFooter',
        'warnaBg',
        'copyright',
        'svg',
        'svg2',
        'svg3',
        'link',
        'link2',
        'link3',
    ];
}
