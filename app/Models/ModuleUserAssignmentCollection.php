<?php

namespace App\Models;

use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ModuleUserAssignmentCollection extends Model
{
    use HasFactory;

    protected $table = "module_users_assignment_collections";
    protected $guarded = [];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function file()
    {
       return $this->belongsTo(StorageFile::class, 'idFile', 'fileID');
    }

    // public function getPathAttribute()
    // {
    //     $path = $this->attributes['path'];

    //     return URL::to('storage/' . $path);
    // }
}
