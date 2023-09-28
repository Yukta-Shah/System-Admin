<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable =[
        'name',
        'email',
        'category'
    ];
    public function attendances()
{
    return $this->hasMany(Attendance::class);
}
}
