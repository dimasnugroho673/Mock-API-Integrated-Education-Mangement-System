<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleExam extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "module_exams";
    protected $guarded = [];

    public function getDataAttribute()
    {
        $txt = $this->attributes['data'];

        return json_decode(stripslashes($txt));
    }
}
