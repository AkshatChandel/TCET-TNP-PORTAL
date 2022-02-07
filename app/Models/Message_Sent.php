<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_Sent extends Model
{
    use HasFactory;
    public $table = "Message_Sent";
    public $timestamps = false;
}
