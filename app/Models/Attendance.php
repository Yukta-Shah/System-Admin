<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable = ['employee_id', 'attendance_date', 'status'];
    
    public function employee()
{
    return $this->belongsTo(Employee::class);
}
}
