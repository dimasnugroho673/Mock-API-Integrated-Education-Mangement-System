<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibBookLoan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $guarded = [];

    public function book()
    {
        return $this->hasOne(LibBook::class, 'id', 'idLibBook');
    }
}
