<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_Question_Option extends Model
{
    use HasFactory;
    public $table = "Quiz_Question_Option";
    public $timestamps = false;
}
