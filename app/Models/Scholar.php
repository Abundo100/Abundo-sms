<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholar extends Model
{
    use HasFactory;

    // This tells Laravel which columns are allowed to receive data
    protected $fillable = [
        'student_id',
        'name',
        'email',
        'course',
        'gpa'
    ];
}