<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training_Lecture_Branch extends Model
{
    use HasFactory;
    public $table = "Training_Lecture_Branch";
    public $timestamps = false;
    protected $primaryKey = 'Training_Lecture_Branch_Id';
}
