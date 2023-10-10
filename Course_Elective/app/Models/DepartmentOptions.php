<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartmentOptions extends Model
{
    use HasFactory;

    protected $table = 'departmentOptions';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_en',
        'name_fr',
        'code',
        'active',
        'department_id',
        'degree_id',
        'create_uid',
        'write_uid'
    ];
}
