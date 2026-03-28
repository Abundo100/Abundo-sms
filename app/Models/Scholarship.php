<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'deadline',
    ];
}