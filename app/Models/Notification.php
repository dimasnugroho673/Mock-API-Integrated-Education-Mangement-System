<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'notifID';

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    
}
