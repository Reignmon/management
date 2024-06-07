<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class EmployeConroller extends Controller
{
    public function index(){
    
        return view('employe.index');
    }

    public function store(Request $request){
        $request->validate(
            [
                'firstname'=>'required|regex:/^[a-zA-Z]+$/u|max:255',
                'lastname'=>'required|regex:/^[a-zA-Z]+$/u|max:255',
                'dateofbirth'=>'required|date|before:today',
                'phone'=>'required|regex:/^[0-9\-]+$/|max:11',
            ]
        );
       
        EmployeeModel::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'dateofbirth'=>$request->dateofbirth,
            'phone'=>$request->phone,
        ]);
        return redirect('employe');
    }
}
