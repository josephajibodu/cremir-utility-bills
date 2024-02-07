<?php

namespace App\Models;

use App\Models\Traits\BelongsToTransaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    /* Transaction relationship  */
    use BelongsToTransaction;

    use HasFactory;
}
