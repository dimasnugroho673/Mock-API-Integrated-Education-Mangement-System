<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'idFaculty', 'id');
    }
}
