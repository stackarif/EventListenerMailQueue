<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class profile extends Model
{
    use HasFactory;
    protected $guarded = [];
    function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
