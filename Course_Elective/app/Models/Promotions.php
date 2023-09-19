<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotions extends Model
{
    use HasFactory;

    protected $table = 'promotions';
    protected $primaryKey  ='id' ;
    protected $fillable = [
        'name',
        'observation',
        'active',
        'create_uid',
        'write_uid'
    ];
}
