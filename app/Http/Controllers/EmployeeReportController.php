<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Attendance;

class EmployeeReportController extends Controller
{
//     public function index()
// {
//     $employees = Employee::all(); 

//     return view('reports.employee_report', compact('employees'));
// }
public function index()
{
    $employees = Employee::with('attendances')->get();
    return view('employee_report', compact('employees'));
}

}
