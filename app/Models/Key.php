<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Key extends Model
{
    protected $fillable = ['code', 'price', 'service_id', 'game_edition_id', 'purchase_id', 'user_id'];

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function gameEdition(): BelongsTo
    {
        return $this->belongsTo(GameEdition::class);
    }

    public function purchase(): BelongsTo
    {
        return $this->belongsTo(Purchase::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function regions(): BelongsToMany
    {
        return $this->belongsToMany(Region::class);
    }
}
