@extends('layouts.frontend')

@section('content')

<style>
    /* IMPOR FONT INTER */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    /* APLIKASI FONT INTER KE SEMUA ELEMEN */
    body, .about-content h1, .about-content p, .iwb-text h1, .iwb-text p,
    .iwb-feature-icons h2, .iwb-feature-icons h4, .iwb-usage-title h2,
    .product-spec-container h2, .product-spec-container h4, .product-spec-right h3,
    .product-spec-right p, .product-spec-item, .btn-demo {
        font-family: 'Inter', sans-serif !important;
    }

.about-hero {
    position: relative;
    width: 100%;
    height: 380px;
    background-image: url("{{ asset('images/Product/IWB/image1.png') }}"); /* PASTIKAN GAMBAR BENAR */
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 60px;
    color: #fff;
}

.about-content {
    position: relative;
    max-width: 650px;
}

.about-content h1 {
    font-size: 44px;
    line-height: 1.3;
    margin-bottom: 16px;
    font-weight: 700;
}

.about-content p {
    font-size: 22px;
    line-height: 1.6;
    margin-bottom: 24px;
    color: #e6ecff;
}

.btn-demo {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(180deg, #f6f9ff 0%, #e4ecff 100%);
    color: #0d2d8c;
    padding: 14px 34px;
    border-radius: 50px;
    font-weight: 600;
    font-size: 16px;
    text-decoration: none;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: 0.25s ease;
    font-family: 'Inter', sans-serif;
}

.btn-demo::after {
    content: "";
    width: 0;
    height: 0;
    border-top: 7px solid transparent;
    border-bottom: 7px solid transparent;
    border-left: 10px solid #0d2d8c;
    margin-left: 6px;
}

.btn-demo:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 14px rgba(0,0,0,0.18);
}

@media (max-width: 768px) {
    .about-hero {
        height: auto;
        padding: 40px 24px;
    }
    .about-content h1 {
        font-size: 36px;
    }
    .about-content p {
        font-size: 18px;
    }
}

/* ========================= IWB SECTION ========================= */
.iwb-section {
    padding: 60px 24px 80px;
    background: linear-gradient(180deg, #ffffff 0%, #eef3ff 100%);
}

.iwb-container {
    max-width: 1200px;
    margin: auto;
}

.iwb-top {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 50px;
    align-items: center;
}

.iwb-text h1 {
    font-size: 36px;
    font-weight: 700;
    color: #193295;
    margin-bottom: 15px;
    line-height: 1.2;
    letter-spacing: -0.5px;
}

.iwb-text p {
    font-size: 20px;
    line-height: 1.6;
    color: #1f2b3d;
    margin-bottom: 15px;
    max-width: 520px;
    font-weight: 400;
}

/* =========== 4 ICON RESPONSIVE =========== */
.iwb-features {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    max-width: 600px;
}

.iwb-features img {
    width: 100%;
    max-width: 150px;
    display: block;
    margin: 0 auto;
}

.iwb-display img {
    width: 100%;
    max-width: 420px;
    display: block;
    margin-left: auto;
}

/* Responsive untuk 4 icon: Desktop 4, Tablet 2-2, Mobile 1 */
@media (max-width: 992px) {
    .iwb-top {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 30px;
    }
    .iwb-display img {
        margin: 30px auto 0;
    }
    .iwb-features {
        grid-template-columns: repeat(2, 1fr);
        margin-left: auto;
        margin-right: auto;
        gap: 15px;
        max-width: 400px; /* Batasi lebar maksimum */
    }
}

@media (max-width: 480px) {
    .iwb-features {
        grid-template-columns: 1fr;
        gap: 12px;
        max-width: 300px;
    }
}

/* ========================= IWB FEATURES ICON SECTION ========================= */
.iwb-feature-icons {
    padding: 70px 24px 90px;
    background: radial-gradient(circle at top, #f3f6ff 0%, #ffffff 70%);
}

.iwb-feature-icons-container {
    max-width: 1100px;
    margin: auto;
    text-align: center;
}

.iwb-feature-icons h4 {
    font-size: 18px;
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.iwb-feature-icons h2 {
    font-size: 34px;
    font-weight: 700;
    color: #193295;
    margin-bottom: 40px;
    line-height: 1.3;
    letter-spacing: -0.5px;
}

/* =========== LAYOUT 2 KOLOM UNTUK FITUR =========== */
.iwb-feature-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 25px;
    align-items: start;
    max-width: 1000px;
    margin: 0 auto;
}

.iwb-feature-list img {
    width: 100%;
    max-width: 500px;
    display: block;
    height: auto;
    margin: 0 auto;
}

/* Responsive untuk layout 2 kolom - DIUBAH: mobile jadi 1 kolom */
@media (max-width: 768px) {
    .iwb-feature-list {
        grid-template-columns: 1fr;
        gap: 20px;
        max-width: 500px;
    }
}

/* ========================= PENGGUNAAN DISPLY SECTION ========================= */
.iwb-usage-section {
    padding: 70px 24px 100px;
    background: linear-gradient(180deg, #f3f6ff 0%, #ffffff 100%);
}

.iwb-usage-container {
    max-width: 1200px;
    margin: auto;
}

.iwb-usage-title {
    text-align: center;
    margin-bottom: 50px;
}

.iwb-usage-title h2 {
    font-size: 36px;
    font-weight: 700;
    color: #000;
    line-height: 1.3;
    letter-spacing: -0.5px;
}

.iwb-usage-title span {
    color: #1e40af;
    font-weight: 700;
}

.iwb-usage-content {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 50px;
    align-items: center;
}

.iwb-usage-tv img {
    width: 100%;
    max-width: 460px;
    display: block;
    margin: auto;
}

/* =========== USAGE LIST 2-2-2 =========== */
.iwb-usage-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.iwb-usage-list img {
    width: 100%;
    max-width: 260px;
    height: auto;
    display: block;
    margin: 0 auto;
}

/* Responsive untuk usage list: Tablet 2-2, Mobile 1 kolom */
@media (max-width: 992px) {
    .iwb-usage-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 30px;
    }
    .iwb-usage-list {
        justify-content: center;
        gap: 15px;
    }
}

@media (max-width: 480px) {
    .iwb-usage-list {
        grid-template-columns: 1fr;
        max-width: 300px;
        margin: 0 auto;
    }
}

/* ========================= PRODUCT SPEC SECTION ========================= */
.product-spec-section {
    padding: 80px 24px 100px;
    background: linear-gradient(180deg, #f4f7ff 0%, #ffffff 100%);
}

.product-spec-container {
    max-width: 1200px;
    margin: auto;
    text-align: center;
}

.product-spec-container h4 {
    font-size: 18px;
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 8px;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.product-spec-container h2 {
    font-size: 36px;
    font-weight: 700;
    color: #000;
    margin-bottom: 20px;
    line-height: 1.3;
    letter-spacing: -0.5px;
}

.product-spec-badge {
    display: inline-block;
    background: #1e40af;
    color: #fff;
    padding: 10px 22px;
    border-radius: 999px;
    font-size: 14px;
    font-weight: 600;
    margin-bottom: 40px;
}

.product-spec-card {
    background: #fff;
    border-radius: 20px;
    padding: 36px;
    box-shadow: 0 20px 40px rgba(30, 64, 175, 0.12);
    display: grid;
    grid-template-columns: 1fr 1.4fr;
    gap: 40px;
    align-items: center;
    text-align: left;
}

.product-spec-left img {
    width: 100%;
    max-width: 320px;
    display: block;
    margin: auto;
}

.product-brochure {
    margin-top: 18px;
    text-align: center;
}

.product-brochure p {
    font-size: 16px;
    margin-bottom: 8px;
    font-weight: 400;
}

.product-brochure a {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #1e40af;
    color: #fff;
    padding: 10px 18px;
    border-radius: 999px;
    font-size: 14px;
    text-decoration: none;
    font-weight: 600;
}

.product-spec-right h3 {
    font-size: 24px;
    font-weight: 700;
    color: #000;
    margin-bottom: 12px;
    line-height: 1.3;
}

.product-spec-right p {
    font-size: 18px;
    line-height: 1.5;
    margin-bottom: 20px;
    color: #1f2b3d;
    font-weight: 400;
}

.product-spec-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px 30px;
}

.product-spec-item {
    font-size: 16px;
    font-weight: 400;
}

.product-spec-item span {
    display: block;
    color: #64748b;
    font-size: 15px;
    font-weight: 400;
}

@media (max-width: 992px) {
    .product-spec-card {
        grid-template-columns: 1fr;
        text-align: center;
        padding: 30px;
    }
    .product-spec-grid {
        grid-template-columns: 1fr;
        gap: 12px;
    }
}

.product-spec-image-wrapper {
    position: relative;
    max-width: 900px;
    margin: auto;
}

.product-spec-image-wrapper img {
    width: 100%;
    display: block;
    border-radius: 18px;
}

.download-pdf-area {
    position: absolute;
    bottom: 28px;
    left: 28px;
    width: 200px;
    height: 48px;
    cursor: pointer;
}

/* ==================== RESPONSIVE UNTUK SEMUA SECTION ==================== */
@media (max-width: 768px) {
    /* HERO */
    .about-hero {
        height: 300px;
        padding: 40px 20px;
    }
    
    .about-content h1 {
        font-size: 32px;
    }
    
    .about-content p {
        font-size: 18px;
    }
    
    /* IWB SECTION */
    .iwb-section {
        padding: 50px 20px 60px;
    }
    
    .iwb-text h1 {
        font-size: 28px;
        margin-bottom: 12px;
    }
    
    .iwb-text p {
        font-size: 18px;
        margin-bottom: 12px;
    }
    
    /* FEATURE ICONS */
    .iwb-feature-icons {
        padding: 50px 20px 70px;
    }
    
    .iwb-feature-icons h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }
    
    .iwb-feature-icons h4 {
        font-size: 16px;
    }
    
    /* USAGE SECTION */
    .iwb-usage-section {
        padding: 50px 20px 70px;
    }
    
    .iwb-usage-title h2 {
        font-size: 28px;
    }
    
    .iwb-usage-title {
        margin-bottom: 40px;
    }
    
    /* PRODUCT SPEC */
    .product-spec-section {
        padding: 60px 20px 80px;
    }
    
    .product-spec-container h2 {
        font-size: 28px;
        margin-bottom: 15px;
    }
    
    .product-spec-container h4 {
        font-size: 16px;
    }
    
    /* BUTTON */
    .btn-demo {
        padding: 12px 28px;
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    /* HERO */
    .about-hero {
        height: 280px;
        padding: 30px 15px;
    }
    
    .about-content h1 {
        font-size: 26px;
    }
    
    .about-content p {
        font-size: 16px;
        line-height: 1.5;
    }
    
    /* IWB SECTION */
    .iwb-section {
        padding: 40px 15px 50px;
    }
    
    .iwb-text h1 {
        font-size: 24px;
    }
    
    .iwb-text p {
        font-size: 16px;
    }
    
    /* FEATURE ICONS */
    .iwb-feature-icons {
        padding: 40px 15px 50px;
    }
    
    .iwb-feature-icons h2 {
        font-size: 24px;
        margin-bottom: 25px;
    }
    
    /* USAGE SECTION */
    .iwb-usage-section {
        padding: 40px 15px 50px;
    }
    
    .iwb-usage-title h2 {
        font-size: 24px;
    }
    
    /* PRODUCT SPEC */
    .product-spec-section {
        padding: 40px 15px 50px;
    }
    
    .product-spec-container h2 {
        font-size: 24px;
    }
    
    /* 4 ICON SECTION - Pastikan responsif */
    .iwb-features {
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
        max-width: 280px;
    }
    
    .iwb-features img {
        max-width: 130px;
    }
}

/* Untuk layar sangat kecil */
@media (max-width: 360px) {
    .iwb-features {
        grid-template-columns: 1fr;
        max-width: 200px;
    }
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    line-height: 1.4;
}

/* Mengurangi jarak antar section lebih lanjut */
section {
    margin: 0;
    padding: 0;
}
</style>

<section class="about-hero">
    <div class="about-content">
        <h1>
            DISPLY Interactive Whiteboard
        </h1>

        <p>
            Whiteboard Digital Interaktif untuk <br/>  
            Kolaborasi Modern
        </p>

        <a href="/demo" class="btn-demo">Jadwalkan Demo</a>
    </div>
</section>

<section class="iwb-section">
    <div class="iwb-container">

        <div class="iwb-top">
            <!-- KIRI -->
            <div class="iwb-text">
                <h1>DISPLY IR WHITEBOARD</h1>

                <p>
                    Tingkatkan cara tim Anda berkolaborasi, berdiskusi, dan
                    mempresentasikan ide dengan DISPLY Interactive Smart Whiteboard.
                </p>

                <p>
                    Satu perangkat untuk menulis, presentasi, screen sharing,
                    dan video conference semua dalam satu layar pintar.
                </p>
                 
                <div class="iwb-features">
                    <img src="{{ asset('images/Product/IWB/image3.png') }}" alt="">
                    <img src="{{ asset('images/Product/IWB/image4.png') }}" alt="">
                    <img src="{{ asset('images/Product/IWB/image5.png') }}" alt="">
                    <img src="{{ asset('images/Product/IWB/image6.png') }}" alt="">
                </div>
            </div>

            <!-- KANAN -->
            <div class="iwb-display">
                <img src="{{ asset('images/Product/IWB/image2.png') }}" alt="Disply IR Whiteboard">
            </div>
        </div>

    </div>
</section>

<section class="iwb-feature-icons">
    <div class="iwb-feature-icons-container">

        <h4>Fitur Unggulan</h4>
        <h2>DISPLY INTERACTIVE<br>WHITEBOARD</h2>

        <!-- LAYOUT 2 KOLOM SEPERTI DI GAMBAR -->
        <div class="iwb-feature-list">
            <!-- KOLOM KIRI -->
            <div>
                <img src="{{ asset('images/Product/IWB/image7.png') }}" alt="Digital Whiteboard Interaktif">
                <img src="{{ asset('images/Product/IWB/image8.png') }}" alt="Multi-Touch & Multi-User">
            </div>
            
            <!-- KOLOM KANAN -->
            <div>
                <img src="{{ asset('images/Product/IWB/image9.png') }}" alt="Dual OS Android Windows">
                <img src="{{ asset('images/Product/IWB/image10.png') }}" alt="Resolusi 4K Ultra HD">
            </div>
        </div>

    </div>
</section>

<section class="iwb-usage-section">
    <div class="iwb-usage-container">

        <!-- TITLE -->
        <div class="iwb-usage-title">
            <h2>Penggunaan <span>DISPLY</span></h2>
        </div>

        <!-- CONTENT -->
        <div class="iwb-usage-content">

            <!-- TV -->
            <div class="iwb-usage-tv">
                <img src="{{ asset('images/Product/IWB/image2.png') }}" alt="Disply Whiteboard">
            </div>

            <!-- USAGE IMAGES -->
            <div class="iwb-usage-list">
                <img src="{{ asset('images/Product/IWB/image11.png') }}" alt="Usage 1">
                <img src="{{ asset('images/Product/IWB/image12.png') }}" alt="Usage 2">
                <img src="{{ asset('images/Product/IWB/image13.png') }}" alt="Usage 3">
                <img src="{{ asset('images/Product/IWB/image14.png') }}" alt="Usage 4">
                <img src="{{ asset('images/Product/IWB/image15.png') }}" alt="Usage 5">
                <img src="{{ asset('images/Product/IWB/image16.png') }}" alt="Usage 6">
            </div>

        </div>

    </div>
</section>

<section class="product-spec-section">
    <div class="product-spec-container">
        <h4>JELAJAHI PRODUCT</h4>
        <h2>Spesifikasi Lengkap</h2>

        <!-- CARD IMAGE -->
        <div class="product-spec-image-wrapper">
            <img 
                src="{{ asset('images/Product/IWB/image18.png') }}" 
                alt="Disply Digital Signage"
            >

            <!-- AREA KLIK DOWNLOAD PDF -->
            <a 
                href="{{ asset('/pdf/BrosurKiosk.pdf') }}" 
                class="download-pdf-area"
                download
            ></a>
        </div>
    </div>
</section>

@endsection