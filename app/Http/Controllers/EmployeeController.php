<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //show all employee
    public function index(){
        return view(
            'employee.index',
            [
                'employees' => Employee::orderBy('last_name', 'ASC')
                                ->filter(request(['search']))
                                ->paginate(8)
            ],
        );
    }

    //show single employee
    public function show(Employee $employee){
        return view(
            'employee.show',
            [
                'employee' => $employee
            ]
        );
    }

    //show create form
    public function create(){
        return view('employee.create');
    }

    //process add
    public function store(Employee $employee){
        return redirect('/employee/$employee')->with('message', 'Employee Added Successfully!');
    }

    //show edit form
    public function edit(Employee $employee){
        return view(
            'employee.edit',
            [
                'employee' => $employee
            ]
        );
    }

    //process update
    public function update(Employee $employee){
        return redirect('/employee/$employee')->with('message', 'Employee Updated Successfully!');
    }

    //process deletion
    public function destroy(){
        return redirect('/')->with('message', 'Employee Deleted Successfully!');
    }
}
