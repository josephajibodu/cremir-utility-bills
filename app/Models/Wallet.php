<?php

namespace App\Models;

use App\Models\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    /* Transaction relationship  */
    use BelongsToUser;

    use HasFactory;

    protected $fillable = [
        'user_id'
    ];
}
