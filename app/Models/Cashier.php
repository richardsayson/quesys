<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashier extends Model
{
    use HasFactory;
    protected $fillable = [
        // "id" auto generated
        "lastname",
        "firstname",
        "priorityStatus",
        "laboratory",
        "status",
    ];
}
