<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{
    use HasFactory;

    protected $table = "course_modules";
    protected $guarded = [];
    protected $primaryKey = 'moduleID';

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public $incrementing = false;
    protected $keyType = 'string';

    protected $casts = [
        'isActive' => 'boolean'
    ];

    public function moduleMaterial()
    {
        return $this->hasOne(ModuleMaterial::class, 'idModule', 'moduleID');
    }

    public function moduleAssignment()
    {
        return $this->hasOne(ModuleAssignment::class, 'idModule', 'moduleID');
    }

    public function moduleQuiz()
    {
        return $this->hasOne(ModuleQuiz::class, 'idModule', 'moduleID');
    }

    public function moduleExam()
    {
        return $this->hasOne(ModuleExam::class, 'idModule', 'moduleID');
    }

    public function score()
    {
        return $this->hasOne(ModuleUserScore::class, 'idModule', 'moduleID');
    }
}
