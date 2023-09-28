<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveHistory extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable=[
        'employee_id',
        'leave_type',
        'start_date',
        'end_date'
    ];
}
