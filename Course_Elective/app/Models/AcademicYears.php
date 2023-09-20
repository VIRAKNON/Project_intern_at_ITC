<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcademicYears extends Model
{
    use HasFactory;

    protected $table = 'academicYears';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_latin',
        'date_start',
        'date_end',
        'description',
        'active',
        'create_uid',
        'write_uid'
    ];
}
