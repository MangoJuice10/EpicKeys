<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Region extends Model
{

    protected $casts = [
        'name' => 'json'
    ];

    public function name(): Attribute
    {
        return Attribute::make(
            get: function (string $value) {
                $value = json_decode($value, true);
                return $value[strtolower(app()->getLocale() ?? config('app.locale'))];
            }
        );
    }

    public function keys(): BelongsToMany
    {
        return $this->belongsToMany(Key::class);
    }

    public function games()
    {
        return $this->keys->gameEdition->game;
    }
}
