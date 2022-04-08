<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Academics extends Model
{
    use HasFactory;
    public $table = "Student_Academics";
    public $timestamps = false;
    protected $primaryKey = 'Student_Academics_Id';
}
