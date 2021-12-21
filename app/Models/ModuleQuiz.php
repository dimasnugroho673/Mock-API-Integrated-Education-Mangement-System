<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleQuiz extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "module_quizzes";
    protected $guarded = [];

    public function getDataAttribute()
    {
        $txt = $this->attributes['data'];

        return json_decode(stripslashes($txt));
    }
}
