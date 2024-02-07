<?php

namespace App\Models\Traits;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToTransaction
{
    /*
     * RELATIONSHIPS
     */
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }
}
