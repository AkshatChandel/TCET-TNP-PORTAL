<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message_Draft extends Model
{
    use HasFactory;
    public $table = "Message_Draft";
    public $timestamps = false;
}
