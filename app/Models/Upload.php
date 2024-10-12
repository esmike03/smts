<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use League\CommonMark\Node\Block\Document;

class Upload extends Model
{
    use HasFactory;
    protected $fillable = [
        'document_id',
        'user_id',
        'document_name',
        'document_path',
        'document_size',
        'document_extension',
        'status',
        'description',
    ];

    
    public function document(): BelongsTo
    {
        return $this->belongsTo(Requirements::class, 'document_id');
    }
}
