<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atainment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'education_id',
    ];
}
