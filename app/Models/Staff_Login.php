<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_Login extends Model
{
    use HasFactory;
    public $table = "Staff_Login";
    public $timestamps = false;
    protected $primaryKey = 'Staff_Login_Id';
}
