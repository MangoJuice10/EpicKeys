<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    protected $casts = [
        'name' => 'json',
        'description' => 'json'
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

    public function description(): Attribute
    {
        return Attribute::make(
            get: function (string $value) {
                $value = json_decode($value, true);
                return $value[strtolower(app()->getLocale() ?? config('app.locale'))];
            }
        );
    }

    public function games(): BelongsToMany
    {
        return $this->belongsToMany(Game::class);
    }
}
