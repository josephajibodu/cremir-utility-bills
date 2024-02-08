<?php

namespace App\Enums;

enum BankAccountType: string
{
    case DEPOSIT = 'deposit';
    case WITHDRAWAL = 'withdrawal';
}
