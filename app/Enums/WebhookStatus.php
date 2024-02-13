<?php

namespace App\Enums;

enum WebhookStatus: string
{
    case PENDING = 'pending';
    case PROCESSED = 'processed';
}
