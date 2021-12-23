<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseLectureEnroll extends Model
{
    use HasFactory;

    protected $table = "course_lectures_enroll";
    protected $guarded = [];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function session()
    {
        return $this->belongsTo(CourseSession::class, 'idSession', 'courseSessionID');
    }

    public function lecture()
    {
        return $this->belongsTo(Lecture::class, 'idLecture', 'lectureID');
    }
}
