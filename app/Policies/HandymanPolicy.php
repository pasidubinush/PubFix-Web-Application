<?php

namespace App\Policies;

use App\Models\Handyman;
use App\Models\User;

class HandymanPolicy
{
    public function view(User $user, Handyman $handyman): bool
    {
        return $user->isHandyman() && $user->id === $handyman->user_id;
    }

    public function update(User $user, Handyman $handyman): bool
    {
        return $this->view($user, $handyman);
    }
}