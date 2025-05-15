<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Region extends Model
{
    public function keys(): BelongsToMany
    {
        return $this->belongsToMany(Key::class);
    }

    public function games()
    {
        return $this->keys->gameEdition->game;
    }
}
