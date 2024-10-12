<?php

namespace App\Policies;

use App\Policies\Concerns\TeacherPolicy;
use App\Policies\Concerns\StudentPolicy;

class UserPolicy
{
    use TeacherPolicy;
    use StudentPolicy;
}
