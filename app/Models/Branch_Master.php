<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch_Master extends Model
{
    use HasFactory;
    public $table = "Branch_Master";
    public $timestamps = false;
    protected $primaryKey = 'Branch_Id';
}
