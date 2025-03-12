<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'user_id'
    ];

    // Add the missing author relationship
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Optional: Add a slug generation method if needed
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = $news->slug ?? ($news->title);
        });

        static::updating(function ($news) {
            $news->slug = $news->slug ?? ($news->title);
        });
    }
}
