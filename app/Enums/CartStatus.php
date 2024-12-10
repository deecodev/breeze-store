<?php

namespace App\Enums;

enum CartStatus: string
{
    case ACTIVE = 'active';
    case CHECKOUT = 'checkout';
    case COMPLETED = 'completed';
}
