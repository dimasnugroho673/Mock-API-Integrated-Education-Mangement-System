<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'courseID';

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $incrementing = false;
    protected $keyType = 'string';

    public function session()
    {
        return $this->hasOne(CourseSession::class, 'idCourse', 'courseID');
    }

    public function sessions()
    {
        return $this->HasMany(CourseSession::class, 'idCourse', 'courseID');
    }

    public function department()
    {
        return $this->belongsTo(Department::class, 'idDepartment', 'id');
    }

    public function academicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'idAcademicYear', 'academicYearID');
    }

    public function courseGradeComponents()
    {
        // return $this->hasMany();
    }
}
