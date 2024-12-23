<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'studentName',
        'studentRegistation',
        'studentFatherName',
        'studentMotherName',
        'studentPhone',
        'studentAddress',
        'studentDepartment',
        'studentImage'
    ];

    protected $table = 'students';
}
