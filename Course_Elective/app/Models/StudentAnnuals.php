<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAnnuals extends Model
{
    use HasFactory;

    protected $table = "student_annuals";
    protected $primarykey = 'id';
    protected $fillable = [
        'group',
        'active',
        'promotion_id',
        'department_id',
        'degree_id',
        'grade_id',
        'academic_year_id',
        'student_id',
        'history_id',
        'department_option_id'
    ];

    public function students(){
        return $this->belongsTo(Students::class);
    }
}
