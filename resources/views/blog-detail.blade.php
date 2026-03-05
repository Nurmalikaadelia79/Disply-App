@extends('layouts.frontend')

@section('content')
<div class="blog-detail-container">

    <!-- Blog Content -->
    <article class="blog-article">
        @if($blog->image)
            <div class="blog-detail-image">
                <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
            </div>
        @endif

        <div class="blog-detail-header">
            <h1>{{ $blog->title }}</h1>
            @if($blog->subtitle)
                <h2>{{ $blog->subtitle }}</h2>
            @endif
            
            <div class="blog-detail-meta">
                <span><i class="far fa-calendar"></i> {{ $blog->created_at->format('d F Y') }}</span>
                <span><i class="far fa-eye"></i> {{ $blog->views }} views</span>
            </div>
        </div>

        <div class="blog-detail-content">
            {!! $blog->content !!}
        </div>

        <div class="back-button">
    <a href="{{ route('blog.index') }}">
        <i class="fas fa-arrow-left"></i> Kembali ke Daftrar
    </a>
</div>
    </article>
</div>

<style>
/* CONTAINER LEBAR FULL */
.blog-detail-container {
    max-width: 1200px;
    margin: 120px auto 80px; /* tambah jarak atas */
    padding: 0 40px;
}

/* ARTICLE TANPA CARD */
.blog-article {
    position: relative;
}


.back-button {
    margin-top: 60px;
    display: flex;
    justify-content: center;
}

.back-button a {
    background: white; /* abu soft */
    color: #2563eb; /* biru */
    text-decoration: none;
    padding: 14px 32px;
    border-radius: 14px;
    font-size: 16px;
    font-weight: 500;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    border: 1px solid #e5e7eb; /* border tipis */
    transition: all 0.2s ease;
}

.back-button a i {
    font-size: 18px;
}

.back-button a:hover {
    background: #e5e7eb;
}
/* IMAGE FULL WIDTH */
.blog-detail-image {
    width: 100%;
    margin-bottom: 50px;
    text-align: center;
}

.blog-detail-image img {
    width: 100%;
    height: auto; /* ini penting */
    max-height: 700px; /* biar nggak kepanjangan banget */
    object-fit: contain; /* biar nggak kepotong */
    border-radius: 20px;
}

/* HEADER */
.blog-detail-header {
    max-width: 900px;
    margin-bottom: 30px;
}

.blog-detail-header h1 {
    font-size: 32px;
    font-weight: 800;
    line-height: 1.15;
    margin-bottom: 15px;
    color: var(--gray-800);
}

.blog-detail-header h2 {
    font-size: 22px;
    font-weight: 500;
    color: var(--gray-600);
    margin-bottom: 25px;
}

.blog-detail-meta {
    display: flex;
    gap: 30px;
    font-size: 15px;
    color: var(--gray-500);
}

/* CONTENT */
.blog-detail-content {
    max-width: 900px;
    font-size: 18px;
    line-height: 1.9;
    color: var(--gray-700);
    margin-top: 40px;
}

.blog-detail-content p {
    margin-bottom: 25px;
}

/* RESPONSIVE */
@media (max-width: 768px) {

    .blog-detail-container {
        padding: 0 20px;
    }

    .blog-detail-header h1 {
        font-size: 34px;
    }

    .blog-detail-image {
        height: 320px;
        margin-bottom: 30px;
    }

    .blog-detail-content {
        font-size: 16px;
    }

    .back-button {
        position: static;
        margin-bottom: 25px;
        text-align: right; 
    }
}
</style>
@endsection