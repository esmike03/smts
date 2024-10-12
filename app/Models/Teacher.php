<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Teacher extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'user_id',
        'accreditation_number',
        'date_of_birth',
        'gender',
        'date_of_accreditation',
        'subject',
        'contact',
        'address',
        'zip_code',
        'upload',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'subject'); // Adjust 'course_id' to your actual foreign key
    }

}
