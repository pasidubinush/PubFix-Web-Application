<?php

namespace App\Enums;

enum UserRole: string
{
    case Customer = 'customer';
    case Handyman = 'handyman';
    case Admin = 'admin';
}
