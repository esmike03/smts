<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'image_path',
        'slots',
        'remaining',
        'start_date',
        'end_date',
        'batch',
        'status',
        'scholar_type'
    ];

    // If you need to define the reverse relationship
    public function teachers(): HasMany
    {
        return $this->hasMany(Teacher::class, 'subject'); // Adjust 'course_id' to your actual foreign key
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'course_id', 'id');
    }

}
