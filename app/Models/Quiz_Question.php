<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_Question extends Model
{
    use HasFactory;
    public $table = "Quiz_Question";
    public $timestamps = false;
}
