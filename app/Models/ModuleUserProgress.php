<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleUserProgress extends Model
{
    use HasFactory;

    protected $table = "module_users_progresses";
    protected $guarded = [];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = null;
}
