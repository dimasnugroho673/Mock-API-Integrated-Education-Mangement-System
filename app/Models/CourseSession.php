<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseSession extends Model
{
    use HasFactory;

    protected $table = "course_sessions";
    protected $guarded = [];
    protected $primaryKey = 'courseSessionID';

    public $incrementing = false;
    protected $keyType = 'string';

    public function lectures()
    {
        return $this->hasMany(CourseLectureEnroll::class, 'idSession', 'courseSessionID');
    }

    public function users()
    {
        return $this->hasMany(CourseUserEnroll::class, 'idSession', 'courseSessionID');
    }

    public function room()
    {
        return $this->belongsTo(Room::class, 'idRoom', 'roomID');
    }
}
