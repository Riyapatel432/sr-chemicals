<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category',
        'is_category',
        'chemical_name',
        'chemical_formula',
        'cas_number',
        'grade',
        'hero_tag',
        'excerpt',
        'description',
        'specifications',
        'applications',
        'packaging',
        'featured_image',
        'image_alt',
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
        'is_category' => 'boolean',
    ];

    /**
     * Scope for published products.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope for draft products.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Scope for subproducts (not category hubs).
     */
    public function scopeSubproducts($query)
    {
        return $query->where('is_category', false);
    }

    /**
     * Scope for category hubs.
     */
    public function scopeCategories($query)
    {
        return $query->where('is_category', true);
    }

    /**
     * Get clean URL for featured image.
     */
    public function getFeaturedImageUrlAttribute(): string
    {
        if (empty($this->featured_image)) {
            return asset('assets/images/logo/logo.1.jpg');
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

        return asset('uploads/products/' . ltrim($this->featured_image, '/'));
    }

    /**
     * Public URL of the product.
     */
    public function getUrlAttribute(): string
    {
        return url('/' . $this->slug);
    }
}
