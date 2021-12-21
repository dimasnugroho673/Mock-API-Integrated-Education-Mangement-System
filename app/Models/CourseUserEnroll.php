<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseUserEnroll extends Model
{
    use HasFactory;

    protected $table = "course_users_enroll";
    protected $guarded = [];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'idUser');
    }

    public function course()
    {
        return $this->hasOne(Course::class, 'courseID', 'idCourse');
    }

    public function courseSession()
    {
        return $this->hasOne(CourseSession::class, 'courseSessionID', 'idSession');
    }
}
