<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeConroller extends Controller
{
    public function index(){
    
        return view('employe.index');
    }
}
