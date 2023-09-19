<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = [
        'id_card',
        'mcs_no',
        'can_id',
        'name_latin',
        'name_kh',
        'dob',
        'photo',
        'radie',
        'observation',
        'phone',
        'email',
        'admissin_date',
        'address',
        'address_current',
        'parent_name',
        'parent_occupation',
        'parent_address',
        'parent_phone',
        'active',
        'user_id',
        'pob',
        'gender_id',
        'high_school_id',
        'origin_id',
        'candidate_id',
        'create_uid',
        'write_uid',
        'certificate'
    ];
}
