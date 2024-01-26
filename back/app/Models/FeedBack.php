<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeedBack extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'note',
        'writerName',
    ];

    public function writer(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}