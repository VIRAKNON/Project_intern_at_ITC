<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarships extends Model
{
    use HasFactory;

    protected $table = 'scholarships';
    protected $primaryKey = 'id';
    protected $fillable = ['code'];
}
