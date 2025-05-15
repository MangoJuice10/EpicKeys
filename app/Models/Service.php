<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    public function keys(): HasMany
    {
        return $this->hasMany(Key::class);
    }

    public function games()
    {
        return $this->keys->gameEdition->game;
    }
}
