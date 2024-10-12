<?php

namespace App\Models;
use App\Enums\UserType;
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'type',
        'email',
        'phone',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class,'id', 'user_id'); // Adjust 'course_id' to your foreign key
    }
    
    public function studentDetails(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function teacherDetails()
    {
        return $this->hasOne(Teacher::class);
    }

    
    public function course(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'subject'); // Adjust 'course_id' to your foreign key
    }

    public function form(): BelongsTo
    {
        return $this->belongsTo(Student::class, 'id', 'user_id'); // Adjust 'course_id' to your foreign key
    }

    public function address(): MorphOne
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function isTeacher(): bool
    {
        return $this->type === UserType::Teacher;
    }

    public function isStudent(): bool
    {
        return $this->type === UserType::Student;
    }
}
