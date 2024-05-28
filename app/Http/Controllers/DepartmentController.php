<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
    //

    public function index(){
        $department = Department::all();
        return view('department.index', ['department' => $department]);
    }

    public function create(){
        return view('department.create');
    }

    public function list(Request $request){
        $data = $request->validate([
            'dept_list' => 'required'
        ]);

        $newDepartment = Department::create($data);
        
        return redirect(route('department.index'));
    }
}
