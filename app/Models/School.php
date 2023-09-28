<?php

namespace App\Models;
use App\Models\Student;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use CrudTrait;
    use HasFactory;
    protected $fillable =[
        'name',
        'location',
        'ownership',
        //'file'
    ];

public function school()
{
    return $this->belongsTo(School::class);
}

    }