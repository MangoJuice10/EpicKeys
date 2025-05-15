<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Game extends Model
{
    protected $fillable = ['name', 'description', 'path_to_icon', 'system_requirements'];

    public function editions(): HasMany
    {
        return $this->hasMany(GameEdition::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(Media::class);
    }

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class);
    }

    public function publishers(): BelongsToMany
    {
        return $this->belongsToMany(Publisher::class);
    }

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
