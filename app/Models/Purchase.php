<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Purchase extends Model
{
    public function keys(): HasMany
    {
        return $this->hasMany(Key::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
