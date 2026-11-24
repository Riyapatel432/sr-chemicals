<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'category',
        'author',
        'read_time',
        'published_date',
        'featured_image',
        'image_alt',
        'excerpt',
        'content',
        'blade_view',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'canonical_url',
        'og_title',
        'og_description',
        'og_image',
        'schema_markup',
    ];

    protected $casts = [
        'published_date' => 'date',
    ];

    /**
     * Scope for published posts.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope for draft posts.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Get clean URL for featured image.
     */
    public function getFeaturedImageUrlAttribute(): string
    {
        if (empty($this->featured_image)) {
            return asset('assets/images/blog/inorganic-chemicals-manufacturer.png');
        }

        if (Str::startsWith($this->featured_image, ['http://', 'https://'])) {
            return $this->featured_image;
        }

        if (Str::startsWith($this->featured_image, 'assets/')) {
            return asset($this->featured_image);
        }

        if (Str::startsWith($this->featured_image, 'uploads/')) {
            return asset($this->featured_image);
        }

        return asset('uploads/blog/' . ltrim($this->featured_image, '/'));
    }

    /**
     * Public URL of the post.
     */
    public function getUrlAttribute(): string
    {
        return url('/blog/' . $this->slug);
    }
}
