<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Notifications\LeaveNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Http\Request;

class LeaveNotificationController extends Controller
{
    public function notification()
    {
    $employee = Employee::first();
        Notification::send($employee, new LeaveNotification);
        return view('leave');
    }
}
