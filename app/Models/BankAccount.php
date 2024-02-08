<?php

namespace App\Models;

use App\Enums\BankAccountType;
use App\Models\Traits\BelongsToUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    /* User relationship  */
    use BelongsToUser;
    use HasFactory;

    protected $casts = [
        'type' => BankAccountType::class
    ];

    protected $fillable = [
        'user_id',
        'name',
        'holder',
        'number',
        'type'
    ];
}
