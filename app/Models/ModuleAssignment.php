<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleAssignment extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "module_assignments";
    protected $guarded = [];
    
    public function getExtensionsAttribute()
    {
        $txt = $this->attributes['extensions'];

        return json_decode(stripslashes($txt));
    }

    public function submittedAssignment()
    {
        return $this->hasOne(ModuleUserAssignmentCollection::class, 'idModule', 'idModule');
    }
}
