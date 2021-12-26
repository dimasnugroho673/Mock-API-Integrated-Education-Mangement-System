<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use GoldSpecDigital\LaravelEloquentUUID\Database\Eloquent\Uuid;
use Illuminate\Support\Facades\URL;

class StorageFile extends Model
{
    use Uuid;
    use HasFactory;

    protected $guarded = [];
    protected $primaryKey = 'fileID';

    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $appends = ['url'];

    protected $hidden = [
        'fileID',
        'path'
    ];

    public function getUrlAttribute()
    {
        return URL::to('file/open/' . $this->fileID . '/stream');
    }

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
}
