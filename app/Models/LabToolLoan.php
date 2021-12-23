<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabToolLoan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function tool()
    {
        return $this->hasOne(LabTool::class, 'id', 'idLabTool');
    }
}
