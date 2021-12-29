<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleUserScore extends Model
{
    use HasFactory;

    protected $table = "module_users_scores";
    protected $guarded = [];

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    public function getAdditionalInfoAttribute()
    {
        $info = $this->attributes['additionalInfo'];

        return json_decode(stripslashes($info));
    }
}
