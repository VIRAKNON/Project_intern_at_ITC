<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeighSchools extends Model
{
    use HasFactory;
    protected $table = 'highSchools';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_en',
        'name_kh'
    ];
}
