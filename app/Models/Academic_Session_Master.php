<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_Session_Master extends Model
{
    use HasFactory;
    public $table = "Academic_Session_Master";
    public $timestamps = false;
    protected $primaryKey = 'Academic_Session_Id';
}
