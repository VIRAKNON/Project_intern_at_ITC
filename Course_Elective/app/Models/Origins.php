<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origins extends Model
{
    use HasFactory;
    protected $table = 'origins';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_en',
        'name_fr',
        'code',
        'prefix',
        'is_province',
        'locp_code',
        'active',
    ];
}
