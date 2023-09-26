<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scores extends Model
{
    use HasFactory;
    protected $table = 'studentScores';
    protected $primarykey = 'id';
    protected $fillable = [
        'student_id',
        'student_name',
        'gender_id',
        'abs',
        'abs_10%',
        'midterm_40%',
        'final_50%',
        'notation'
    ];

}
