<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

<<<<<<< HEAD
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'student_id',
=======
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name', 
        'email',
>>>>>>> 3789cedb9a592f7d3901a78aaeb1ba123778b451
        'phone',
        'address',
        'course',
        'year_level',
<<<<<<< HEAD
        'scholarship_id',
        'date_applied',
        'status'
    ];

    // Relationship to Scholarship
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
=======
        'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the applications for this applicant.
     */
    public function applications()
    {
        return $this->hasMany(Application::class);
    }

    /**
     * Get the documents for this applicant.
     */
    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    /**
     * Get the full name attribute.
     */
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
>>>>>>> 3789cedb9a592f7d3901a78aaeb1ba123778b451
    }
}