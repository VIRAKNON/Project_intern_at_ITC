<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Degrees extends Model
{
    use HasFactory;

    protected $table = 'degrees';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_en',
        'name_fr',
        'code',
        'description',
        'active',
        'school_id',
        'create_uid',
        'write_uid'
    ];
}
