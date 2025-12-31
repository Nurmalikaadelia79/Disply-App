@extends('layouts.app')

@section('content')
<style>
    .hero-container {
    position: relative;
    width: 100vw;       /* full layar */
    left: 50%;
    right: 50%;
    margin-left: -50vw; /* hapus padding container */
    margin-right: -50vw;
}

.hero-bg {
    width: 100%;
    height: auto;
    object-fit: cover;
}


.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    padding-left: 80px; /* posisi teks dari kiri */
    color: white;
}

.hero-text-box {
    max-width: 550px;
}

.hero-text-box h1 {
    font-size: 42px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
}

.hero-text-box p {
    font-size: 18px;
    line-height: 1.5;
    opacity: 0.95;
    margin-bottom: 25px;
}



/* ===== FEATURE SECTION ===== */
.feature-section {
    width: 100%;
    margin: 40px auto;
    display: flex;
    justify-content: center;
    gap: 25px;
    padding: 0 20px;
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
}

.feature-box h3 {
    font-size: 16px;
    font-weight: 700;
    margin: 0;
}

.feature-box p {
    font-size: 14px;
    margin: 2px 0 0;
    opacity: 0.7;
}

/* PRODUCT SECTION */
.product-section {
    margin-top: 60px;
    text-align: center;
}

.product-header h4 {
    color: #2d6cdf;
    font-weight: 700;
}

.product-header h2 {
    font-size: 26px;
    font-weight: 800;
    margin-top: 8px;
}

.product-header p {
    max-width: 600px;
    margin: 10px auto 35px;
    opacity: 0.8;
}

/* ===== CAROUSEL ===== */
.carousel-container {
    position: relative;
    width: 80%;
    margin: 0 auto;
    overflow: hidden;   /* tetap diperlukan biar item tidak keluar */
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    position: relative;
    min-width: 100%;
}

/* === FIX UTAMA: gambar pakai height auto (rasio asli) === */
.carousel-item img {
    width: 100%;
    height: auto;      /* <— tidak akan pernah jadi oval lagi */
    display: block;    /* hilangkan space tambahan */
    object-fit: contain; /* boleh diganti cover kalau mau cropping */
}

/* ===== TEKS DI ATAS TENGAH ===== */
.carousel-overlay {
    position: absolute;
    top: 25px;
    left: 50%;
    transform: translateX(-50%);

    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;  
    justify-content: flex-start;

    text-align: center;
    color: white;
    pointer-events: none; /* biar tidak ganggu tombol panah */
}

.carousel-overlay h3 {
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 10px;
    text-shadow: 0px 2px 10px rgba(0,0,0,0.7); /* biar jelas */
}

.readmore-btn {
    pointer-events: auto; /* aktifkan tombol */
    background: white;
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
    text-decoration: none;
    color: #2d6cdf;
}

/* ===== CAROUSEL DOTS (TITIK-TITIK) ===== */
.carousel-dots {
    display: flex;
    justify-content: center;
    gap: 8px; /* Perkecil jarak antar titik */
    margin-top: 20px;
}

.carousel-dot {
    width: 6px; /* Perkecil ukuran titik */
    height: 6px; /* Perkecil ukuran titik */
    background-color: white; /* Warna lebih transparan */
    border-radius: 50%; /* Pastikan bulat sempurna */
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
}

.carousel-dot.active {
    background-color: #2d6cdf; /* Warna aktif lebih solid */
    transform: scale(1.2); /* Sedikit lebih besar saat aktif */
}

/* ===== TRANSPARENT ARROWS (BULAT SEMPURNA) ===== */
.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.20); 
    border: none;
    font-size: 20px; /* Sedikit perkecil font */
    width: 40px; /* Lebar tetap untuk bulat sempurna */
    height: 40px; /* Tinggi tetap untuk bulat sempurna */
    padding: 0; /* Hapus padding, ganti dengan flex */
    border-radius: 50%; /* 50% untuk bulat sempurna */
    color: white;
    cursor: pointer;
    transition: 0.2s ease;
    z-index: 10;
    display: flex; /* Untuk alignment panah */
    align-items: center; /* Vertikal center */
    justify-content: center; /* Horizontal center */
    line-height: 1; /* Untuk alignment teks */
}

.carousel-btn:hover {
    background: rgba(255,255,255,0.35);
}

.prev { left: 15px; }
.next { right: 15px; }

/* RESPONSIVE */
@media (max-width: 768px) {
    .carousel-container {
        width: 95%; /* Lebih lebar di mobile */
    }
    
    .carousel-btn {
        width: 36px; /* Sedikit lebih kecil di mobile */
        height: 36px;
        font-size: 18px;
    }
    
    .carousel-overlay h3 {
        font-size: 22px; /* Perkecil teks di mobile */
    }
    
    .readmore-btn {
        padding: 6px 14px;
        font-size: 12px;
    }
    
    .carousel-dot {
        width: 5px;
        height: 5px;
    }
}

/* ===== INDUSTRY SECTION (NO CARD) ===== */
.industry-section {
    margin: 60px auto;
    max-width: 1100px;
    display: grid;
    grid-template-columns: repeat(4, 1fr); /* 1 baris 4 */
    gap: 40px;
    padding: 0 20px;
    align-items: center;
    justify-items: center;
}

/* IMAGE ONLY */
.industry-section img {
    max-width: 100%;
    height: auto;
    object-fit: contain;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .industry-section {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .industry-section {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 480px) {
    .industry-section {
        grid-template-columns: 1fr;
    }
}


/* ===== NEWS SECTION ===== */
.news-section {
    margin-top: 90px;
    padding: 40px 20px 100px;
    position: relative;
    text-align: center;
}

/* Header Text */
.news-header h4 {
    color: #2d6cdf;
    font-weight: 700;
    margin-bottom: 8px;
}

.news-header h2 {
    font-size: 26px;
    font-weight: 800;
    line-height: 1.3;
    margin-bottom: 40px;
}

/* Grid */
.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    justify-content: center;
    max-width: 1100px;
    margin: 0 auto;
}

/* Card */
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
}

.news-content {
    padding: 16px 18px 22px;
}

.news-content h3 {
    font-size: 15px;
    font-weight: 700;
    margin-bottom: 8px;
}

.date {
    font-size: 12px;
    opacity: 0.6;
}

.readmore {
    display: inline-block;
    margin-top: 12px;
    font-size: 14px;
    font-weight: 700;
    color: #2d6cdf;
    text-decoration: none;
}

/* RESOURCES SECTION */
.resources-section {
    padding: 80px 0;
    background: linear-gradient(to bottom, #f7f8fc, #ffffff);
    position: relative;
}

/* Header */
.resources-header {
    text-align: center;
    margin-bottom: 50px;
}

.resources-title {
    font-size: 12px;
    font-weight: 700;
    color: #1669F2;
    letter-spacing: 1.5px;
}

.resources-heading {
    font-size: 28px;
    font-weight: 700;
    margin-top: 6px;
    color: #1e1e1e;
}

.resources-subtitle {
    color: #666;
    font-size: 14px;
    margin-top: 6px;
}

/* GRID */
.resources-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 22px;
    max-width: 1000px;
    margin: auto;
}

/* CARD */
.resources-card {
    background: #ffffff;
    padding: 20px 22px;
    border-radius: 14px;
    box-shadow: 0 4px 18px rgba(0,0,0,0.04);
    transition: 0.25s ease;
    border: 1px solid #f1f1f1;
}

.resources-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.08);
}

/* TEXT */
.card-title {
    font-size: 16px;
    font-weight: 700;
    color: #1e1e1e;
    line-height: 1.4;
}

.card-desc {
    margin-top: 6px;
    font-size: 13px;
    color: #666;
}

/* CARD INFO */
.card-info {
    display: flex;
    gap: 10px;
    margin: 15px 0 18px;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 13px;
    color: #444;
}

.info-item img {
    width: 16px;
    height: 16px;
}

/* BUTTON */
.btn-download {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    background: #1669F2;
    color: white;
    padding: 10px 0;
    border-radius: 10px;
    text-decoration: none;
    font-size: 14px;
    font-weight: 600;
    transition: 0.25s;
}

.btn-download img {
    width: 16px;
    height: 16px;
}

.btn-download:hover {
    background: #0f4ec2;
}

/* HERO SECTION */
.hero-section {
    width: 100%;
    height: 530px;
    background: url('/images/Home/image5.png') no-repeat center center/cover;
    position: relative;
    display: flex;
    align-items: center;
    padding-left: 80px;
    padding-right: 80px;
}

/* ===== DIGITAL COMMUNICATION SECTION ===== */
.digital-communication-section {
    background: url('/images/Home/image5.png') no-repeat center center;
    background-size: cover;
    padding: 80px 20px;
    color: white;
    margin-top: 0;
    position: relative;
}

.digital-communication-container {
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    text-align: left; /* Ubah ke kiri */
    padding-left: 60px; /* Tambahkan padding kiri */
}

.digital-communication-title {
    font-size: 36px;
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.3;
    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
    max-width: 600px; /* Batasi lebar agar tidak terlalu panjang */
}

.digital-communication-description {
    font-size: 18px;
    opacity: 0.95;
    line-height: 1.6;
    margin-bottom: 15px;
    max-width: 550px; /* Batasi lebar */
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
}

.digital-communication-cta {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 30px;
    text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    max-width: 550px;
}

/* ===================================== */
/* === BUTTON CONTACT US (SAMA DENGAN JADWALKAN DEMO) ==== */
/* ===================================== */

.digital-communication-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    background: linear-gradient(180deg, #f6f9ff 0%, #e4ecff 100%);
    color: #0d2d8c;

    padding: 14px 34px;
    border-radius: 50px;

    font-weight: 700;
    font-size: 18px;
    text-decoration: none;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: 0.25s ease;
}

/* buttonn contac us */
.digital-communication-button::after {
    content: "";
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 10px solid #0d2d8c;
    margin-left: 6px;
}

.digital-communication-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.18);
}


/* Responsive adjustments */
@media (max-width: 768px) {
    .digital-communication-section {
        padding: 60px 20px;
    }
    
    .digital-communication-container {
        padding-left: 30px;
        padding-right: 30px;
    }
    
    .digital-communication-title {
        font-size: 28px;
        max-width: 100%;
    }
    
    .digital-communication-description {
        font-size: 16px;
        max-width: 100%;
    }
    
    .digital-communication-cta {
        font-size: 18px;
        max-width: 100%;
    }
    
    .digital-communication-button {
        padding: 12px 28px;
        font-size: 15px;
    }
}

@media (max-width: 480px) {
    .digital-communication-section {
        padding: 50px 15px;
    }
    
    .digital-communication-container {
        padding-left: 20px;
        padding-right: 20px;
    }
    
    .digital-communication-title {
        font-size: 24px;
    }
    
    .digital-communication-description {
        font-size: 15px;
    }
    
    .digital-communication-cta {
        font-size: 16px;
    }
}

.resources-section {
    margin-bottom: 80px; /* Memberi jarak sebelum footer */
}

/* === BUTTON JADWALKAN DEMO BARU ==== */
.hero-button {
    display: inline-flex;
    align-items: center;
    gap: 8px;

    background: linear-gradient(180deg, #f6f9ff 0%, #e4ecff 100%);
    color: #0d2d8c;
    
    padding: 14px 34px;
    border-radius: 50px;
    
    font-weight: 700;
    font-size: 18px;
    text-decoration: none;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: 0.25s ease;
}

.hero-button .arrow {
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 10px solid #0d2d8c;
    margin-left: 4px;
}

.hero-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.18);
}

/* ===== CAROUSEL ===== */
.carousel-container {
    position: relative;
    width: 80%;
    margin: 0 auto;
    overflow: hidden;
}

.carousel-slide {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-item {
    min-width: 100%;
    position: relative;
}

.carousel-item img {
    width: 100%;
    height: auto;
    display: block;
}

/* ===== OVERLAY TEXT ===== */
.carousel-overlay {
    position: absolute;
    top: 25px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    color: white;
}

.carousel-overlay h3 {
    font-size: 26px;
    font-weight: 800;
    margin-bottom: 10px;
    text-shadow: 0 2px 10px rgba(0,0,0,0.7);
}

.readmore-btn {
    background: white;
    padding: 8px 18px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 700;
    color: #2d6cdf;
    text-decoration: none;
}

/* ===== ARROWS ===== */
.carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.25);
    border: none;
    font-size: 24px;
    padding: 8px 14px;
    border-radius: 50%;
    color: white;
    cursor: pointer;
    z-index: 10;
}

.prev { left: 15px; }
.next { right: 15px; }

/* ===== DOTS ===== */
.carousel-dots {
    position: absolute;
    bottom: 15px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
}

.dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    border: 2px solid white;
    background: transparent; /* bening */
    cursor: pointer;
}

.dot.active {
    background: white; /* PUTIH */
}

</style>

<!-- HERO SECTION -->
<div class="hero-container">
    <img src="{{ asset('images/Home/image1.png') }}" class="hero-bg" alt="Banner">

    <div class="hero-overlay">
        <div class="hero-text-box">
            <h1>Smart Display Solutions <br> untuk Semua Industri</h1>

            <p>
                Digital Signage, Smart Kiosk, dan Interactive Whiteboards yang andal
                untuk ruang publik, kantor, dan sekolah. Tingkatkan engagement dengan
                teknologi display interaktif modern.
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

            <div class="carousel-item">
                <img src="{{ asset('images/Home/image2.png') }}" alt="">
                <div class="carousel-overlay">
                    <h3>Disply Interactive Whiteboard</h3>
                    <a class="readmore-btn">Read More</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/Home/image3.png') }}" alt="">
                <div class="carousel-overlay">
                    <h3>Disply Smart Kiosk</h3>
                    <a class="readmore-btn">Read More</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('images/Home/image4.png') }}" alt="">
                <div class="carousel-overlay">
                    <h3>Disply Digital Signage</h3>
                    <a class="readmore-btn">Read More</a>
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

        <!-- CARD 1 -->
        <div class="news-card">
            <img src="{{ asset('images/Home/image2.png') }}" class="news-img" alt="">
            <div class="news-content">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <span class="date">02 DECEMBER 2023</span>
                <a href="#" class="readmore">Read More →</a>
            </div>
        </div>

        <!-- CARD 2 -->
        <div class="news-card">
            <img src="{{ asset('images/Home/image2.png') }}" class="news-img" alt="">
            <div class="news-content">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <span class="date">02 DECEMBER 2023</span>
                <a href="#" class="readmore">Read More →</a>
            </div>
        </div>

        <!-- CARD 3 -->
        <div class="news-card">
            <img src="{{ asset('images/Home/image2.png') }}" class="news-img" alt="">
            <div class="news-content">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <span class="date">02 DECEMBER 2023</span>
                <a href="#" class="readmore">Read More →</a>
            </div>
        </div>

        <!-- CARD 4 -->
        <div class="news-card">
            <img src="{{ asset('images/Home/image2.png') }}" class="news-img" alt="">
            <div class="news-content">
                <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                <span class="date">02 DECEMBER 2023</span>
                <a href="#" class="readmore">Read More →</a>
            </div>
        </div>

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
            <h3 class="card-title">Disply Smart Kiosk Brosur</h3>
            <p class="card-desc">Download semua informasi produk dalam satu file</p>

            <div class="card-info">
                <span class="info-item">
                    <img src="/images/Home/icon5.png" alt="page"> 12 Pages
                </span>
                <span class="info-item">
                    <img src="/images/Home/icon6.png" alt="size"> 24 MB
                </span>
            </div>

            <a href="#" class="btn-download">
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

            <a href="#" class="btn-download">
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

            <a href="#" class="btn-download">
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
