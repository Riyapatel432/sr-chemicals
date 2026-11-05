@props([
    'title' => '',
    'description' => '',
    'image' => '',
    'alt' => 'post image',
    'link' => '#',
    'badge' => '',
    'form' => 'Crystalline & Powder'
])

<div class="src-category-card">
    @if($badge)
        <span class="src-product-badge">{{ $badge }}</span>
    @endif
    <div class="src-cat-img-box">
        <img src="{{ asset($image) }}" alt="{{ $alt }}" loading="lazy" width="250" height="200">
    </div>
  
    <h3 class="src-cat-title">{{ $title }}</h3>
    <p class="src-cat-desc">{{ $description }}</p>
    <a href="{{ $link }}" class="src-cat-link">
        <span>Explore Series</span>
        <i class="bi bi-arrow-right"></i>
    </a>
</div>

