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

    public function courseSessions()
    {
        return $this->HasMany(CourseSession::class);
    }
}
