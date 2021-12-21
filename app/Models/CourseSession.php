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
}
