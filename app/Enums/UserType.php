<?php

namespace App\Enums;

enum UserType: string
{
    case Developer = 'developer';
    case Admin = 'Admin';
    case Teacher = 'Teacher';
    case Student = 'Student';
    case Guest = 'Guest';
}
