<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;

class EmployeConroller extends Controller
{
    public function index(){
        $employees =  EmployeeModel::get();

        return view('employe.index',compact('employees'));
    }

    public function store(Request $request){
    
        EmployeeModel::create([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'dateofbirth'=>$request->dateofbirth,
            'phone'=>$request->phone,
        ]);
        return redirect('employe');
    }

    public function edit(int $id){
        $employees = EmployeeModel::findOrFail($id);
        return view('employe.update', compact('employees'));
    }

    public function update(Request $request ,int $id){
        EmployeeModel::findOrFail($id)->update([
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'dateofbirth'=>$request->dateofbirth,
            'phone'=>$request->phone,
        ]);
        return redirect('employe');
    }
    public function destroy(int $id){
        $employees = EmployeeModel::findOrFail($id);
        $employees->delete();
        return redirect('employe');
    }

}
