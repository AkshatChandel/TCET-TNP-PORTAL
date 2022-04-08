<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{
    use HasFactory;
    public $table = "Student_Class";
    public $timestamps = false;
    protected $primaryKey = 'Student_Class_Id';
}
