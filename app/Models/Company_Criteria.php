<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company_Criteria extends Model
{
    use HasFactory;
    public $table = "Company_Criteria";
    public $timestamps = false;
    protected $primaryKey = 'Company_Criteria_Id';
}
