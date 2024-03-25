<?php

namespace App\Http\Controllers;

use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('room')->paginate(5);

        return view('employees.index', compact('employees'));
    }
}
