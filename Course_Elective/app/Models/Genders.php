<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{
    use HasFactory;

    protected $table = 'genders';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_en',
        'name_fr',
        'code',
        'active',
        'create_uid',
        'write_uid'
    ];
}
