<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function studentAannully(){
        return view('studentAnnuals');
    }
    
    public function __construct()
    {
        $this->middleware('auth');
    } 
}
