<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semesters extends Model
{
    use HasFactory;
    protected $table = 'semesters';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_en',
        'name_fr',
        'active',
        'create_uid',
        'write_uid'
    ];
}
