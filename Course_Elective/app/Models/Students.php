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
        'name_kh',
        'name_latin',
        'gender_id',
        'dob',
        'pob',
        'radie',
        'observation',
        'origin_id',
        'tel',
        'email',
        'address_current',
        'address_permanent',
        'parent_name',
        'parent_occupation',
        'parent_address',
        'parent_tel',
        'highschool_id',
        'mcs_no',
        'can_id',
        'photo',
    ];

    // one-to-one relationship
    public function studentAnnuals(){
        return $this->hasOne(StudentAnnuals::class);
    }
}






