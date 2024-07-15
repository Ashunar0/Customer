<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use HasFactory, SoftDeletes;
    
    protected $fillable = [
        'name', 'kana', 'email', 'course_id', 'classroom_id', 'phone_number',
        'postcode', 'prefecture', 'city', 'street', 'birthdate', 'age', 'gender',
        'university', 'faculty', 'department', 'grade', 'highschool', 'emergency_contact', 'notes'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }
}
