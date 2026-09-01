<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'category',
        'description',
        'overview',
        'problem',
        'solution',
        'role',
        'status',
        'year',
        'tech_stack',
        'features',
        'screenshots',
        'challenges',
        'live_url',
        'github_url',
        'image',
        'likes',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'features' => 'array',
        'screenshots' => 'array',
        'challenges' => 'array',
    ];
}
