@extends('layouts.frontend')

@section('content')
<!-- Hero Section with Background Image -->
<div class="blog-hero" style="background-image: url('{{ asset('images/Blog/Image1.jpeg') }}');">
    <div class="hero-content">
        <h1>Display Insights & Updates</h1>
        <p>Informasi terbaru seputar teknologi display, inovasi produk <br> 
        dan tren transformasi digital.</p>
    </div>
</div>

<!-- Blog Posts Grid -->
<div class="blog-container">
    <div class="blog-grid">
        @forelse($blogs as $blog)
        <a href="{{ route('blog.show', $blog->slug) }}" class="blog-card">
            <div class="blog-image">
                @if($blog->image)
                    <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
                @else
                    <div class="blog-image-placeholder"></div>
                @endif
            </div>
            <div class="blog-content">
                <div class="blog-meta">
                    <span class="blog-date">
                        <i class="far fa-calendar"></i> {{ $blog->created_at->format('d M Y') }}
                    </span>
                </div>
                <h2>{{ $blog->title }}</h2>
                
                <!-- Image panah.webp di pojok kanan bawah -->
                <img src="{{ asset('images/panah.webp') }}" alt="panah" class="read-more-arrow">
            </div>
        </a>
        @empty
        <div class="no-posts">
            <p>Belum ada blog post.</p>
        </div>
        @endforelse
    </div>

    <!-- Pagination SEDERHANA -->
    @if($blogs->hasPages())
    <div class="pagination-wrap">
        {{ $blogs->links('pagination::bootstrap-5') }}
    </div>
    @endif
</div>

<style>
/* Root Variables */
:root {
    --primary: #2563eb;
    --primary-dark: #1d4ed8;
    --gray-50: #f9fafb;
    --gray-100: #f3f4f6;
    --gray-200: #e5e7eb;
    --gray-300: #d1d5db;
    --gray-400: #9ca3af;
    --gray-500: #6b7280;
    --gray-600: #4b5563;
    --gray-700: #374151;
    --gray-800: #1f2937;
    --gray-900: #111827;
}

/* Hero Section */
.blog-hero {
    position: relative;
    min-height: 400px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    color: white;
}

.hero-content {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    width: 100%;
    position: relative;
    z-index: 1;
}

.blog-hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
    line-height: 1.2;
    font-weight: 800;
    max-width: 800px;
}

.blog-hero p {
    font-size: 20px;
    max-width: 700px;
    line-height: 1.6;
    opacity: 0.95;
}

/* Blog Container */
.blog-container {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
}

/* Blog Grid */
.blog-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

/* Blog Card */
.blog-card {
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-decoration: none;
    color: inherit;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.blog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

/* Blog Image */
.blog-image {
    width: 100%;
    height: 220px;
    overflow: hidden;
    flex-shrink: 0;
}

.blog-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.blog-image-placeholder {
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.blog-card:hover .blog-image img {
    transform: scale(1.05);
}

/* Blog Content */
.blog-content {
    padding: 24px;
    flex: 1;
    display: flex;
    flex-direction: column;
    position: relative;
}

.blog-meta {
    margin-bottom: 12px;
}

.blog-date {
    font-size: 14px;
    color: var(--gray-500);
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.blog-date i {
    font-size: 14px;
}

.blog-content h2 {
    font-size: 20px;
    font-weight: 700;
    color: var(--gray-800);
    line-height: 1.4;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    padding-right: 40px;
    margin: 0 0 40px 0;
}

/* Image panah.webp */
.read-more-arrow {
    position: absolute;
    bottom: 24px;
    right: 24px;
    width: 32px;
    height: 32px;
    object-fit: contain;
    transition: transform 0.3s ease;
}

.blog-card:hover .read-more-arrow {
    transform: translateX(5px);
}

/* No Posts */
.no-posts {
    grid-column: 1 / -1;
    text-align: center;
    padding: 60px;
    background: var(--gray-100);
    border-radius: 16px;
    color: var(--gray-500);
    font-size: 16px;
}

/* PAGINATION SUPER SEDERHANA */
.pagination-wrap {
    text-align: center;
    margin-top: 40px;
}

.pagination-wrap nav {
    background: transparent !important;
    box-shadow: none !important;
}

.pagination {
    display: inline-flex;
    gap: 5px;
    list-style: none;
    padding: 0;
    margin: 0;
}

.page-item {
    margin: 0;
}

.page-link {
    display: block;
    padding: 8px 12px;
    background: white;
    border: 1px solid #dee2e6;
    color: var(--primary);
    text-decoration: none;
    border-radius: 4px;
    font-size: 14px;
}

.page-link:hover {
    background: #e9ecef;
    border-color: #dee2e6;
    color: var(--primary-dark);
}

.page-item.active .page-link {
    background: var(--primary);
    border-color: var(--primary);
    color: white;
}

.page-item.disabled .page-link {
    color: #6c757d;
    pointer-events: none;
    background: #f8f9fa;
    border-color: #dee2e6;
}

/* Responsive */
@media (max-width: 768px) {
    .blog-grid {
        grid-template-columns: 1fr;
    }
    
    .blog-hero h1 {
        font-size: 32px;
    }
    
    .blog-hero p {
        font-size: 16px;
    }
    
    .page-link {
        padding: 6px 10px;
        font-size: 13px;
    }
}
</style>
@endsection