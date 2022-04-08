<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz_Master extends Model
{
    use HasFactory;
    public $table = "Quiz_Master";
    public $timestamps = false;
    protected $primaryKey = 'Quiz_Id';
}
