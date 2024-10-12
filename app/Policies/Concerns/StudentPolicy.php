<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Student;
use App\Models\User;

class StudentPolicy
{
    public function createAgency(User $user): bool
    {
        return auth()->check() && $user->is(auth()->user());
    }

    public function updateAgency(User $user, User $agency): bool
    {
        return auth()->check() && $user->is(auth()->user()) && $agency->isAgency();
    }

    public function deleteAgency(User $user, User $agency): bool
    {
        return auth()->check() && $user->is(auth()->user()) && $agency->isAgency();
    }
}
