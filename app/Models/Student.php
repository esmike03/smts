<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nationality',
        'sex',
        'status',
        'employement_status',
        'bmonth',
        'bday',
        'byear',
        'age',
        'bcity',
        'bprovince',
        'bregion',
        'ncae',
        'where',
        'when',
        'qualification',
        'type_scholar',
        'disclaimer',
        'course_id',
        'course_status',
        'notes',
        'signature'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function certificate(): BelongsTo
    {
        return $this->belongsTo(Certificate::class, 'user_id', 'user_id');
    }
    
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Courses::class, 'course_id', 'id');
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'user_id', 'user_id');
    }
}
