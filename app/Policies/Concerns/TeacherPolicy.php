<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Teacher;
use App\Models\User;

class TeacherPolicy
{
    public function createTeacher(User $user): bool
    {
        return auth()->check() && $user->is(auth()->user());
    }

    public function updateTeacher(User $user, User $teacher): bool
    {
        return auth()->check() && $user->is(auth()->user()) && $teacher->isTeacher();
    }

    public function deleteTeacher(User $user, User $teacher): bool
    {
        return auth()->check() && $user->is(auth()->user()) && $teacher->isTeacher();
    }
}
