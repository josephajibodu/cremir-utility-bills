<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    use HasFactory;

    /*
     * RELATIONSHIPS
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function airtime(): HasMany
    {
        return $this->hasMany(Airtime::class);
    }

    public function dataTopup(): HasMany
    {
        return $this->hasMany(Airtime::class);
    }

    public function deposits(): HasMany
    {
        return $this->hasMany(Airtime::class);
    }
}
