<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Round_Student_Selected extends Model
{
    use HasFactory;
    public $table = "Company_Round_Student_Selected";
    public $timestamps = false;
    protected $primaryKey = 'Company_Round_Student_Selected_Id';
}
