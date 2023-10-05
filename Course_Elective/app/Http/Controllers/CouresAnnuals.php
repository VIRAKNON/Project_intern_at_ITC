<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Scores;

class CouresAnnuals extends Controller
{
    public function index()
    {
        return view("coursesAnnually");
    }

    public function inputScores(){
        $students = Scores::orderBy('id', 'asc')->get(); // desc to display by order big to small , asc to display small to big
        return view('inputScore', compact('students'));
    }
}
