<?php

namespace App\Models;

use App\Models\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    /* User relationship  */
    use BelongsToUser;
    use HasFactory;

    /*
     * RELATIONSHIPS
     */

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
