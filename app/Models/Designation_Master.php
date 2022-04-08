<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Designation_Master extends Model
{
    use HasFactory;
    public $table = "Designation_Master";
    public $timestamps = false;
    protected $primaryKey = 'Designation_Id';
}
