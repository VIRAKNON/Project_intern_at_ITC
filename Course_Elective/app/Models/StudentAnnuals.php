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
        'student_id',
        'academic_year_id',
        'promotion_id',
        'degree_id',
        'grade_id',
        'department_id',
        'department_option_id',
        'group',
        'history_id',
        'scholarships_id'
    ];

    public function students(){
        return $this->belongsTo(Students::class);
    }
}
