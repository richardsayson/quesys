<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chemistries extends Model
{
    use HasFactory;
    protected $fillable = [
        "lastname",
        "firstname",
        "priorityStatus",
        "laboratory",
        "status",
    ] ;
}
