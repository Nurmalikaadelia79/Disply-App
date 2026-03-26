@extends('layouts.frontend')
@section('content')
<style>

/* ===== GOOGLE FONTS INTER ===== */  
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

/* ===== GLOBAL FONT SETTINGS ===== */
* {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', 'Helvetica Neue', Arial, sans-serif;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    line-height: 1.4;
    overflow-x: hidden;
    font-family: 'Inter', sans-serif;
}

/* ===== TEXT EFFECT SECTION ===== */
.text-effect-container {
    margin: 30px auto 20px; /* DIKURANGI LAGI */
    max-width: 1200px;
    padding: 0 20px;
    text-align: center;
}

.text-effect-title {
    font-size: 64px; /* DIKURANGI LAGI */
    font-weight: 600;
    background: linear-gradient(135deg, #2d6cdf 0%, #0d2d8c 50%, #1669F2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    text-transform: uppercase;
    letter-spacing: -0.5px;
    margin: 0;
    line-height: 1.1;
    font-family: 'Inter', sans-serif;
}

.text-effect-subtitle {
    font-size: 18px;
    color: #666;
    margin-top: 10px; /* DIKURANGI LAGI */
    font-weight: 400;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    line-height: 1.5;
    font-family: 'Inter', sans-serif;
}

/* ===== HERO SECTION ===== */
.hero-container {
    position: relative;
    width: 100%;
    margin: 0 auto;
    overflow: hidden;
}

.hero-bg {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    padding-left: 80px;
    color: white;
}

.hero-text-box {
    max-width: 700px;
}

.hero-text-box h1 {
    font-size: 44px;
    font-weight: 600;
    line-height: 1.2;
    margin-bottom: 15px;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

.hero-text-box p {
    font-size: 20px;
    font-weight: 400;
    line-height: 1.5;
    opacity: 0.95;
    margin-bottom: 20px;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    font-family: 'Inter', sans-serif;
}

/* ===== BUTTON JADWALKAN DEMO ===== */
.hero-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(180deg, #f6f9ff 0%, #e4ecff 100%);
    color: #0d2d8c;
    padding: 16px 36px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 20px;
    text-decoration: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: 0.25s ease;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
}

.hero-button::after {
    content: "";
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left: 12px solid #0d2d8c;
    margin-left: 6px;
}

.hero-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.18);
}

/* ===== FEATURE SECTION ===== */
.feature-section {
    width: 100%;
    margin: 25px auto 15px;
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0 20px;
    flex-wrap: wrap;
}

.feature-box {
    display: flex;
    align-items: center;
    gap: 12px;
    background: #ffffff;
    border-radius: 15px;
    padding: 15px 20px;
    width: 270px;
    box-shadow: 0px 4px 18px rgba(0, 0, 0, 0.1);
}

.feature-box img {
    width: 48px;
    height: auto;
}

.feature-box h3 {
    font-size: 18px;
    font-weight: 600;
    margin: 0;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
}

.feature-box p {
    font-size: 16px;
    font-weight: 400;
    margin: 2px 0 0;
    opacity: 0.7;
    font-family: 'Inter', sans-serif;
}

/* ===== PRODUCT SECTION ===== */
.product-section {
    margin-top: 50px;
    text-align: center;
    padding: 0 20px;
}

.product-header h4 {
    color: #2448C3;
    font-weight: 600;
    font-size: 16px;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 10px;
    font-family: 'Inter', sans-serif;
}

.product-header h2 {
    font-size: 32px;
    font-weight: 700;
    margin-top: 0;
    letter-spacing: -0.5px;
    line-height: 1.3;
    margin-bottom: 15px;
    color: #000000;
    font-family: 'Inter', sans-serif;
}

.product-header p {
    max-width: 600px;
    margin: 0 auto 35px;
    opacity: 0.8;
    font-size: 18px;
    font-weight: 400;
    line-height: 1.6;
    color: #000000;
    font-family: 'Inter', sans-serif;
}

/* ===== CAROUSEL ===== */
.carousel-container {
    position: relative;
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    overflow: hidden;
    border-radius: 20px;
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    position: relative;
    min-width: 100%;
}

.carousel-item img {
    width: 100%;
    height: 500px;
    object-fit: cover;
    display: block;
    border-radius: 20px;
}

/* ===== CAROUSEL OVERLAY ===== */
.carousel-overlay {
    position: absolute;
    top: 40px;
    left: 50%;
    transform: translateX(-50%);
    width: 90%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: flex-start;
    text-align: center;
    color: white;
    pointer-events: none;
    padding: 0 20px;
}

.carousel-overlay h3 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
    text-shadow: 0px 4px 15px rgba(0,0,0,0.5);
    letter-spacing: -0.5px;
    line-height: 1.2;
    max-width: 800px;
    font-family: 'Inter', sans-serif;
}

.readmore-btn {
    pointer-events: auto;
    background: white;
    padding: 12px 32px;
    border-radius: 25px;
    font-size: 16px;
    font-weight: 600;
    text-decoration: none;
    color: #2d6cdf;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0px 4px 12px rgba(0,0,0,0.2);
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-family: 'Inter', sans-serif;
}

.readmore-btn::after {
    content: "";
    width: 0;
    height: 0;
    border-top: 6px solid transparent;
    border-bottom: 6px solid transparent;
    border-left: 8px solid #2d6cdf;
    transition: transform 0.3s ease;
}

.readmore-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0px 6px 16px rgba(0,0,0,0.3);
    background: #f8f9fa;
}

.readmore-btn:hover::after {
    transform: translateX(4px);
}

/* ===== CAROUSEL DOTS ===== */
.carousel-dots {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin-top: 15px;
    position: absolute;
    bottom: 20px;
    left: 0;
    right: 0;
}

.carousel-dot {
    width: 10px;
    height: 10px;
    background-color: rgba(255, 255, 255, 0.5);
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

.carousel-dot.active {
    background-color: white;
    transform: scale(1.3);
}

/* ===== CAROUSEL ARROWS ===== */
.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.25);
    border: none;
    font-size: 24px;
    width: 50px;
    height: 50px;
    padding: 0;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    transition: 0.3s ease;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    line-height: 1;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
    font-family: 'Inter', sans-serif;
}

.carousel-btn:hover {
    background: rgba(255,255,255,0.35);
    transform: translateY(-50%) scale(1.1);
}

.prev { left: 20px; }
.next { right: 20px; }

/* ===== INDUSTRY SECTION ===== */
.industry-section {
    margin: 50px auto;
    max-width: 1100px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    padding: 0 20px;
    align-items: center;
    justify-items: center;
}

.industry-section img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    display: block;
}

/* ===== NEWS SECTION ===== */
.news-section {
    margin-top: 60px;
    padding: 25px 20px 70px;
    position: relative;
    text-align: center;
}

.news-header h4 {
    color: #2d6cdf;
    font-weight: 600;
    margin-bottom: 8px;
    font-size: 18px;
    letter-spacing: 1px;
    font-family: 'Inter', sans-serif;
}

.news-header h2 {
    font-size: 32px;
    font-weight: 600;
    line-height: 1.3;
    margin-bottom: 25px;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    justify-content: center;
    max-width: 1100px;
    margin: 0 auto;
}

.news-card {
    background: #ffffff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0px 4px 16px rgba(0,0,0,0.08);
    text-align: left;
}

.news-img {
    width: 100%;
    height: 160px;
    object-fit: cover;
    display: block;
}

.news-content {
    padding: 16px 18px 20px;
}

.news-content h3 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
    line-height: 1.4;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
}

.date {
    font-size: 14px;
    font-weight: 400;
    opacity: 0.6;
    font-family: 'Inter', sans-serif;
}

.readmore {
    display: inline-block;
    margin-top: 10px;
    font-size: 16px;
    font-weight: 600;
    color: #2d6cdf;
    text-decoration: none;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
}

/* ===== RESOURCES SECTION ===== */
.resources-section {
    padding: 50px 20px;
    background: linear-gradient(to bottom, #f7f8fc, #ffffff);
    position: relative;
    margin-bottom: 50px;
}

.resources-header {
    text-align: center;
    margin-bottom: 35px;
}

.resources-title {
    font-size: 16px;
    font-weight: 600;
    color: #1669F2;
    letter-spacing: 1.5px;
    font-family: 'Inter', sans-serif;
}

.resources-heading {
    font-size: 32px;
    font-weight: 600;
    margin-top: 6px;
    color: #1e1e1e;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

.resources-subtitle {
    color: #666;
    font-size: 18px;
    font-weight: 400;
    margin-top: 6px;
    font-family: 'Inter', sans-serif;
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 20px;
    max-width: 1000px;
    margin: auto;
}

.resources-card {
    background: #ffffff;
    padding: 20px 22px;
    border-radius: 14px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.04);
    transition: 0.25s ease;
    border: 1px solid #f1f1f1;

    display: flex;
    flex-direction: column;
    height: 100%;
}


.resources-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
}

.card-title {
    font-size: 20px;
    font-weight: 600;
    color: #1e1e1e;
    line-height: 1.4;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
}

.card-desc {
    margin-top: 6px;
    font-size: 16px;
    font-weight: 400;
    color: #666;
    font-family: 'Inter', sans-serif;
}

.card-info {
    display: flex;
    gap: 10px;
    margin: 12px 0 15px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 15px;
    font-weight: 400;
    color: #444;
    font-family: 'Inter', sans-serif;
}

.info-item img {
    width: 16px;
    height: 16px;
}

.btn-download {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    background: #1669F2;
    color: white;
    padding: 12px 0;
    border-radius: 10px;
    text-decoration: none;
    font-size: 16px;
    font-weight: 600;
    transition: 0.25s;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
    margin-top: auto;
}

.btn-download img {
    width: 16px;
    height: 16px;
}

.btn-download:hover {
    background: #0f4ec2;
}

/* ===== DIGITAL COMMUNICATION SECTION ===== */
.digital-communication-section {
    background: url('/images/Home/image5.png') no-repeat center center;
    background-size: cover;
    padding: 50px 20px;
    color: white;
    margin-top: 0;
    position: relative;
}

.digital-communication-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    text-align: left;
    padding-left: 60px;
}

.digital-communication-title {
    font-size: 36px;
    font-weight: 600;
    margin-bottom: 15px;
    line-height: 1.3;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    max-width: 600px;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

.digital-communication-description {
    font-size: 20px;
    font-weight: 400;
    opacity: 0.95;
    line-height: 1.6;
    margin-bottom: 12px;
    max-width: 550px;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    font-family: 'Inter', sans-serif;
}

.digital-communication-cta {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 25px;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    max-width: 550px;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

/* ===== BUTTON CONTACT US ===== */
.digital-communication-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(180deg, #f6f9ff 0%, #e4ecff 100%);
    color: #0d2d8c;
    padding: 16px 36px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 20px;
    text-decoration: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: 0.25s ease;
    letter-spacing: -0.3px;
    font-family: 'Inter', sans-serif;
}

.digital-communication-button::after {
    content: "";
    width: 0;
    height: 0;
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-left: 12px solid #0d2d8c;
    margin-left: 6px;
}

.digital-communication-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.18);
}

/* ===== RESPONSIVE DESIGN (MEDIA QUERIES) ===== */

/* Tablet (max-width: 992px) */
@media (max-width: 992px) {
    .hero-overlay {
        padding-left: 40px;
    }
    .hero-text-box h1 {
        font-size: 32px;
    }
    .hero-text-box p {
        font-size: 18px;
    }
    .industry-section {
        grid-template-columns: repeat(3, 1fr);
    }
}

/* Mobile (max-width: 768px) */
@media (max-width: 768px) {
    /* Hero Section */
    .hero-container {
        min-height: 400px;
        background: #0d2d8c; /* Fallback color */
    }
    .hero-bg {
        height: 450px; /* Force height agar tidak terlalu gepeng */
        object-fit: cover;
    }
    .hero-overlay {
        padding: 20px;
        justify-content: center;
        text-align: center;
    }
    .hero-text-box h1 {
        font-size: 28px;
        line-height: 1.2;
    }
    .hero-text-box p {
        font-size: 16px;
        br { display: none; } /* Hilangkan breakline agar teks flow natural */
    }
    .hero-button {
        padding: 12px 24px;
        font-size: 16px;
    }

    /* Features */
    .feature-section {
        gap: 10px;
    }
    .feature-box {
        width: calc(50% - 15px); /* 2 kolom di mobile */
        padding: 10px;
        flex-direction: column;
        text-align: center;
    }

    /* Carousel */
    .carousel-item img {
        height: 350px; /* Kurangi tinggi gambar di HP */
    }
    .carousel-overlay h3 {
        font-size: 24px;
    }
    .carousel-btn {
        width: 35px;
        height: 35px;
        font-size: 18px;
    }

    /* Industry Icons */
    .industry-section {
        grid-template-columns: repeat(2, 1fr);
        gap: 15px;
    }

    /* Digital Communication Section */
    .digital-communication-container {
        padding-left: 20px;
        padding-right: 20px;
        text-align: center;
    }
    .digital-communication-title {
        font-size: 24px;
    }
    .digital-communication-description {
        font-size: 16px;
    }
}

/* Small Mobile (max-width: 480px) */
@media (max-width: 480px) {
    .feature-box {
        width: 100%; /* 1 kolom penuh di HP kecil */
    }
    .product-header h2, .news-header h2, .resources-heading {
        font-size: 24px;
    }
}

</style>

<!-- HERO SECTION -->
<div class="hero-container">
    <img src="{{ asset('images/Home/image1.png') }}" class="hero-bg" alt="Banner">

    <div class="hero-overlay">
        <div class="hero-text-box">
            <h1>Smart Display Solutions <br> untuk Semua Industri</h1>

            <p>
                Digital Signage, Smart Kiosk, dan Interactive Whiteboards yang andal <br>
                untuk ruang publik, kantor, dan sekolah. Tingkatkan engagement <br>
                 dengan teknologi display interaktif modern.
            </p>

           <a href="/demo" class="hero-button">
    Jadwalkan Demo
    <span class="arrow"></span>
</a>

        </div>
    </div>
</div>


<!-- FEATURE BOXES -->
<div class="feature-section">
    <div class="feature-box">
        <img src="{{ asset('images/Home/icon1.png') }}" alt="">
        <div>
            <h3>24/7 Operations</h3>
            <p>Non Stop reability</p>
        </div>
    </div>

    <div class="feature-box">
        <img src="{{ asset('images/Home/icon2.png') }}" alt="">
        <div>
            <h3>Enterprise Hardware</h3>
            <p>Built for Business</p>
        </div>
    </div>

    <div class="feature-box">
        <img src="{{ asset('images/Home/icon3.png') }}" alt="">
        <div>
            <h3>Smart Touch System</h3>
            <p>Fast & Responsive</p>
        </div>
    </div> 

    <div class="feature-box">
        <img src="{{ asset('images/Home/icon4.png') }}" alt="">
        <div>
            <h3>1 Year Guarantee</h3>
            <p>Worry-Free Protection</p>
        </div>
    </div>
</div>


<!-- PRODUCT CAROUSEL SECTION -->
<div class="product-section">

    <div class="product-header">
        <h4>PRODUK KAMI</h4>
        <h2>Solusi Display Terlengkap untuk Setiap Kebutuhan</h2>
        <p>
            Pilih dari rangkaian produk premium kami yang dirancang untuk meningkatkan
            komunikasi visual dan interaksi di bisnis Anda.
        </p>
    </div>

    <div class="carousel-container">
        <div class="carousel-slide">

            <!-- Item 1: Interactive Whiteboard -->
            <div class="carousel-item">
                <img src="{{ asset('images/Home/image2.png') }}" alt="Interactive Whiteboard">
                <div class="carousel-overlay">  
                    <h3>Disply Interactive Whiteboard</h3>
                    <a href="/product/iwb" class="readmore-btn">Read More</a>
                </div>
            </div>

                <!-- Item 3: Digital Signage -->
            <div class="carousel-item">
                <img src="{{ asset('images/Home/image4.png') }}" alt="Digital Signage">
                <div class="carousel-overlay">
                    <h3>Disply Digital Signage</h3>
                    <a href="/product/digital-signage" class="readmore-btn">Read More</a>
                </div>
            </div>

            <!-- Item 2: Smart Kiosk -->
            <div class="carousel-item">
                <img src="{{ asset('images/Home/image3.png') }}" alt="Smart Kiosk">
                <div class="carousel-overlay">
                    <h3>Disply Smart Kiosk</h3>
                    <a href="/product/kiosk" class="readmore-btn">Read More</a>
                </div>
            </div>

        </div>

        <!-- ARROWS -->
        <button class="carousel-btn prev">❮</button>
        <button class="carousel-btn next">❯</button>

        <!-- DOTS -->
        <div class="carousel-dots">
            <span class="carousel-dot active" data-index="0"></span>
            <span class="carousel-dot" data-index="1"></span>
            <span class="carousel-dot" data-index="2"></span>
        </div>
    </div>
</div>

<!-- INDUSTRY SECTION (IMAGE ONLY - NO CARD) -->
<div class="industry-section">

    <img src="{{ asset('images/Home/icon8.png') }}" alt="Industry 1">
    <img src="{{ asset('images/Home/icon9.png') }}" alt="Industry 2">
    <img src="{{ asset('images/Home/icon10.png') }}" alt="Industry 3">
    <img src="{{ asset('images/Home/icon11.png') }}" alt="Industry 4">
    <img src="{{ asset('images/Home/icon12.png') }}" alt="Industry 5">
    <img src="{{ asset('images/Home/icon13.png') }}" alt="Industry 6">
    <img src="{{ asset('images/Home/icon14.png') }}" alt="Industry 7">
    <img src="{{ asset('images/Home/icon15.png') }}" alt="Industry 8">

</div>

<!-- NEWS & EVENT SECTION -->
<div class="news-section">

    <div class="news-header">
        <h4>NEWS AND EVENT</h4>
        <h2>OUR LATEST UPDATE <br> AND INFORMATION</h2>
    </div>

    <div class="news-grid">
        @forelse($blogs as $blog)
        <!-- CARD BLOG DARI DATABASE -->
        <div class="news-card">
            @if($blog->image)
                <img src="{{ asset('storage/'.$blog->image) }}" class="news-img" alt="{{ $blog->title }}">
            @else
                <img src="{{ asset('images/Home/image2.png') }}" class="news-img" alt="">
            @endif
            <div class="news-content">
                <h3>{{ Str::limit($blog->title, 50) }}</h3>
                <span class="date">{{ $blog->created_at->format('d F Y') }}</span>
                <a href="{{ route('blog.show', $blog->slug) }}" class="readmore">Read More →</a>
            </div>
        </div>
        @empty
        <!-- KALO GA ADA BLOG, TAMPILKAN DUMMY 4 CARD -->
        <div class="news-card">
            <img src="{{ asset('images/Home/image2.png') }}" class="news-img" alt="">
            <div class="news-content">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <span class="date">02 DECEMBER 2023</span>
                <a href="#" class="readmore">Read More →</a>
            </div>
        </div>
        <!-- ... tambah 3 card dummy lagi ... -->
        @endforelse
    </div>
</div>

<!-- RESOURCES SECTION -->
<section class="resources-section">
    <div class="resources-header">
        <h3 class="resources-title">RESOURCES</h3>
        <h2 class="resources-heading">Download Informasi Produk</h2>
        <p class="resources-subtitle">Dapatkan spesifikasi terperinci, dan dokumentasi teknis.</p>
    </div>

    <div class="resources-grid">

<!-- CARD 1 -->
<div class="resources-card">
    <h3 class="card-title">Display Smart Kiosk Brosur</h3>
    <p class="card-desc">Download semua informasi produk dalam satu file</p>

    <div class="card-info">
        <span class="info-item">
            <img src="/images/Home/icon5.png" alt="page"> 12 Pages
        </span>
        <span class="info-item">
            <img src="/images/Home/icon6.png" alt="size"> 24 MB
        </span>
    </div>

    <a href="/pdf/BrosurKiosk.pdf" class="btn-download" download>
        <img src="/images/Home/icon7.png" alt="download">
        Download PDF
    </a>
</div>

        <!-- CARD 2 -->
        <div class="resources-card">
            <h3 class="card-title">Disply Digital Signage Brosur</h3>
            <p class="card-desc">Download semua informasi produk dalam satu file</p>

            <div class="card-info">
                <span class="info-item">
                    <img src="/images/Home/icon5.png" alt="page"> 12 Pages
                </span>
                <span class="info-item">
                    <img src="/images/Home/icon6.png" alt="size"> 24 MB
                </span>
            </div>

             <a href="/pdf/BrosurDigitalSignage.pdf" class="btn-download" download>
                <img src="/images/Home/icon7.png" alt="download">
                Download PDF
            </a>
        </div>

        <!-- CARD 3 -->
        <div class="resources-card">
            <h3 class="card-title">Disply Interactive Whiteboard Brosur</h3>
            <p class="card-desc">Download semua informasi produk dalam satu file</p>

            <div class="card-info">
                <span class="info-item">
                    <img src="/images/Home/icon5.png" alt="page"> 12 Pages
                </span>
                <span class="info-item">
                    <img src="/images/Home/icon6.png" alt="size"> 24 MB
                </span>
            </div>

           <a href="/pdf/BrosurInteractiveWhiteboard.pdf" class="btn-download" download>
                <img src="/images/Home/icon7.png" alt="download">
                Download PDF
            </a>
        </div>

    </div>
</section>

<!-- DIGITAL COMMUNICATION SECTION -->
<section class="digital-communication-section">
    <div class="digital-communication-container">
        <h2 class="digital-communication-title">Siap Meningkatkan Komunikasi Digital Bisnis Anda?</h2>
        <p class="digital-communication-description">
            Disply siap menjadi partner teknologi untuk menghadirkan komunikasi visual yang lebih cerdas, efektif, dan modern.
        </p>
        <p class="digital-communication-cta">Let's build your digital display solution today.</p>
        <a href="/contact" class="digital-communication-button">Contact Us</a>

    </div>
</section>


<script>
document.addEventListener("DOMContentLoaded", function () {
    let index = 0;

    const slide = document.querySelector(".carousel-slide");
    const items = document.querySelectorAll(".carousel-item");
    const dots = document.querySelectorAll(".carousel-dot"); // PASTIKAN CLASS INI
    const nextBtn = document.querySelector(".carousel-btn.next");
    const prevBtn = document.querySelector(".carousel-btn.prev");

    function updateCarousel() {
        slide.style.transform = `translateX(-${index * 100}%)`;

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });
    }

    nextBtn.addEventListener("click", () => {
        index = (index + 1) % items.length;
        updateCarousel();
    });

    prevBtn.addEventListener("click", () => {
        index = (index - 1 + items.length) % items.length;
        updateCarousel();
    });

    dots.forEach((dot, i) => {
        dot.addEventListener("click", () => {
            index = i;
            updateCarousel();
        });
    });

    updateCarousel(); // INIT
});
</script>

@endsection
