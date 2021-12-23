<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleUserAssignmentCollection extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "module_users_assignment_collections";
    protected $guarded = [];

    
}
