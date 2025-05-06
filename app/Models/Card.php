<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = [
        'call_id',
        'sip',
        'card_type',
        'language',
        'call_at',
        'content',
        'editor_id',
    ];
    protected $casts = [
        'call_at' => 'datetime',
        'content' => 'array',
        'sip' => 'integer',
        'editor_id' => 'integer',
        'total_score' => 'integer',
    ];
}
