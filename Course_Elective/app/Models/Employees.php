<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primarykey = 'id';
    protected $fillable = [
        'name_kh',
        'name_latin',
        'email',
        'phone',
        'birthdate',
        'address',
        'active',
        'create_at',
        'updated_at',
        'gender_id',
        'department_id',

    ];

}
