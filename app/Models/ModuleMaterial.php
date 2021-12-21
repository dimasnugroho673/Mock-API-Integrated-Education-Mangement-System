<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleMaterial extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "module_materials";
    protected $guarded = [];
}
