@extends('layouts.frontend')
@section('content')

<style>
    /* IMPOR FONT INTER */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    /* APLIKASI FONT INTER KE SEMUA ELEMEN */
    body, .about-content h1, .about-content p, .btn-demo,
    .signage-content h2, .signage-content p, .signage-feature-only h2,
    .signage-usage h2, .product-spec-container h4, .product-spec-container h2 {
        font-family: 'Inter', sans-serif !important;
    }

.about-hero {
    position: relative;
    width: 100%;
    height: 380px;
    background-image: url("{{ asset('images/Product/Signage/image1.png') }}");
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
    font-size: 40px; /* DARI 36px KE 40px */
    line-height: 1.3;
    margin-bottom: 16px;
    font-weight: 700;
    letter-spacing: -0.5px;
}

.about-content p {
    font-size: 20px; /* DARI 16px KE 18px */
    line-height: 1.7;
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
        font-size: 32px;
    }
}

/* ========================= SIGNAGE INFO ========================= */
.signage-info {
    background: #f4f7ff;
    padding: 90px 20px;
}

.signage-wrapper {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    align-items: center;
    gap: 60px;
}

.signage-image {
    display: flex;
    justify-content: center;
}

.signage-image img {
    width: 100%;
    max-width: 320px; /* DARI 280px KE 320px */
}

.signage-content {
    max-width: 600px;
}

.signage-content h2 {
    font-size: 36px; /* DARI 32px KE 36px */
    font-weight: 700;
    color: #0d2d8c;
    margin-bottom: 22px;
    line-height: 1.3;
    letter-spacing: -0.5px;
}

.signage-content p {
    font-size: 18px; /* DARI 16px KE 18px */
    line-height: 1.7;
    color: #444;
    margin-bottom: 18px;
    font-weight: 400;
}

/* 4 ICON */
.signage-icons {
    display: flex;
    gap: 24px;
    margin-top: 32px;
    flex-wrap: wrap;
}

.signage-icons img {
    width: 120px;
    height: auto;
}

@media (max-width: 768px) {
    .signage-wrapper {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .signage-icons {
        justify-content: center;
    }
}

/* ========================= SIGNAGE FEATURE ONLY ========================= */
.signage-feature-only {
    background: #ffffff;
    padding: 90px 20px;
    text-align: center;
}

.signage-feature-only h2 {
    font-size: 32px; /* DARI 28px KE 32px */
    font-weight: 700;
    color: #111;
    margin-bottom: 50px;
    line-height: 1.4;
    letter-spacing: -0.5px;
}

.signage-feature-only h2 span {
    color: #0d2d8c;
}

/* =========== LAYOUT 2 KOLOM SEPERTI DI HALAMAN SEBELUMNYA =========== */
.feature-image-list {
    max-width: 1100px; /* DARI 900px KE 1100px */
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 KOLOM */
    gap: 30px;
    align-items: start;
}

/* GAMBAR 7-10 */
.feature-image-list img {
    width: 100%;
    max-width: 500px; /* TETAP 500px */
    height: auto;
    margin: 0 auto;
    display: block;
}

/* Responsive untuk layout 2 kolom */
@media (max-width: 768px) {
    .signage-feature-only h2 {
        font-size: 28px; /* DARI 24px KE 28px */
    }
    
    .feature-image-list {
        grid-template-columns: 1fr; /* DI MOBILE JADI 1 KOLOM */
        gap: 30px;
    }
}

/* ========================= SIGNAGE USAGE ========================= */
.signage-usage {
    background: #f4f7ff;
    padding: 90px 20px;
}

.signage-usage h2 {
    text-align: center;
    font-size: 36px; /* DARI 28px KE 36px */
    font-weight: 700;
    margin-bottom: 60px;
    line-height: 1.3;
    letter-spacing: -0.5px;
}

.signage-usage h2 span {
    color: #1f4ed8;
    font-weight: 700;
}

.usage-wrapper {
    max-width: 1200px;
    margin: auto;
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 60px;
    align-items: center;
}

.usage-images {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

/* GAMBAR 11-16 */
.usage-images img {
    width: 100%;
    max-width: 260px; /* DARI 240px KE 260px */
    height: auto;
    display: block;
    margin: 0 auto;
}

.usage-tv {
    display: flex;
    justify-content: center;
}

.usage-tv img {
    width: 100%;
    max-width: 380px; /* DARI 340px KE 380px */
}

@media (max-width: 768px) {
    .usage-wrapper {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .usage-images {
        justify-items: center;
    }
    
    .signage-usage h2 {
        font-size: 32px;
    }
}

.signage-extra-full {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.signage-extra-full img {
    width: 100%;
    height: auto; /* ini penting biar proporsi aman */
    display: block;
}

/* TEXT DI ATAS GAMBAR */
.signage-extra-overlay {
    position: absolute;
    top: 50%;
    left: 8%;
    transform: translateY(-50%);
    max-width: 600px;
    color: #ffffff;
}

.signage-extra-overlay h2 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 20px;
}

.signage-extra-overlay p {
    font-size: 18px;
    margin-bottom: 18px;
    line-height: 1.6;
}

.signage-extra-overlay li {
    font-size: 16px;
    margin-bottom: 6px;
}

/* Mobile */
@media (max-width: 768px) {
    .signage-extra-overlay {
        position: static;
        transform: none;
        padding: 40px 24px;
        color: #111;
        background: #fff;
    }
}

/* ========================= PRODUCT SPEC SECTION ========================= */
.product-spec-section {
    padding: 100px 24px 120px;
    background: linear-gradient(180deg, #f4f7ff 0%, #ffffff 100%);
}

.product-spec-container {
    max-width: 1200px;
    margin: auto;
    text-align: center;
}

.product-spec-container h4 {
    font-size: 16px; /* DARI 14px KE 16px */
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 10px; /* DARI 6px KE 10px */
    text-transform: uppercase;
    letter-spacing: 1px;
}

.product-spec-container h2 {
    font-size: 32px; /* DARI 28px KE 32px */
    font-weight: 700;
    color: #000;
    margin-bottom: 26px;
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
    font-size: 15px; /* DARI 14px KE 15px */
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
    font-size: 22px; /* DARI 20px KE 22px */
    font-weight: 700;
    color: #000;
    margin-bottom: 14px;
    line-height: 1.3;
}

.product-spec-right p {
    font-size: 16px; /* DARI 15px KE 16px */
    line-height: 1.6;
    margin-bottom: 24px;
    color: #1f2b3d;
    font-weight: 400;
}

.product-spec-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 18px 40px;
}

.product-spec-item {
    font-size: 15px; /* DARI 14px KE 15px */
    font-weight: 400;
}

.product-spec-item span {
    display: block;
    color: #64748b;
    font-size: 14px; /* DARI 13px KE 14px */
    font-weight: 400;
}

@media (max-width: 992px) {
    .product-spec-card {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .product-spec-grid {
        grid-template-columns: 1fr;
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
</style>

<section class="about-hero">
    <div class="about-content">
        <h1>
            DISPLY Interactive Signage
        </h1>

        <p>
            Solusi Media Komunikasi Visual <br/>  
            untuk Bisnis Modern
        </p>

        <a href="/demo" class="btn-demo">Jadwalkan Demo</a>
    </div>
</section>

<section class="signage-info">
    <div class="signage-wrapper">

        <!-- GAMBAR TV -->
        <div class="signage-image">
            <img src="{{ asset('images/Product/Signage/image2.png') }}" alt="Digital Signage">
        </div>

        <!-- KONTEN -->
        <div class="signage-content">
            <h2>DISPLY DIGITAL SIGNAGE</h2>

            <p>
                Tingkatkan cara bisnis Anda menyampaikan informasi, promosi,
                dan komunikasi visual dengan solusi Digital Signage dari DISPLY.
            </p>

            <p>
                Kelola seluruh konten layar secara terpusat, real-time,
                dan profesional untuk seluruh cabang bisnis Anda.
            </p>

            <!-- 4 IMAGE (TANPA TEKS) -->
            <div class="signage-icons">
                <img src="{{ asset('images/Product/Signage/image3.png') }}" alt=""> 
                <img src="{{ asset('images/Product/Signage/image4.png') }}" alt="">
                <img src="{{ asset('images/Product/Signage/image5.png') }}" alt="">
                <img src="{{ asset('images/Product/Signage/image6.png') }}" alt="">
            </div>
        </div>

    </div>
</section>

<section class="signage-feature-only">
    <h2>Fitur Unggulan<br>
        <span>DISPLY DIGITAL SIGNAGE</span>
    </h2>

    <!-- =========== LAYOUT 2 KOLOM SEPERTI HALAMAN SEBELUMNYA =========== -->
    <div class="feature-image-list">
        <!-- KOLOM KIRI -->
        <div>
            <img src="{{ asset('images/Product/Signage/image7.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image8.png') }}" alt="">
        </div>
        
        <!-- KOLOM KANAN -->
        <div>
            <img src="{{ asset('images/Product/Signage/image9.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image10.png') }}" alt="">
        </div>
    </div>
</section>

<section class="signage-usage">
    <h2>Penggunaan <span>DISPLY</span></h2>

    <div class="usage-wrapper">
        <!-- LIST IMAGE -->
        <div class="usage-images">
            <img src="{{ asset('images/Product/Signage/image11.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image12.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image13.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image14.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image15.png') }}" alt="">
            <img src="{{ asset('images/Product/Signage/image16.png') }}" alt="">
        </div>

        <!-- TV -->
        <div class="usage-tv">
            <img src="{{ asset('images/Product/Signage/image22.png') }}" alt="DISPLY Signage">
        </div>
    </div>
</section>

<section class="signage-extra-full">
    <img src="{{ asset('images/Product/Signage/image18.png') }}" 
         alt="Digital Human DISPLY">

    <div class="signage-extra-overlay">
        <h2>
            Hadirkan Digital Human Interaktif di Setiap<br>
            Layar <span>DISPLY</span>
        </h2>

        <p>
            Tambahkan fitur Digital Human untuk menghadirkan komunikasi
            yang lebih interaktif dan responsif langsung dari layar signage Anda.
        </p>

        <ul>
            <li>Real-time Interaction</li>
            <li>Natural Voice & Expression</li>
            <li>Customizable sesuai identitas brand</li>
            <li>AI Powered Smart Response</li>
        </ul>
    </div>
</section>

<section class="product-spec-section">
    <div class="product-spec-container">
        <h4>JELAJAHI PRODUCT</h4>
        <h2>Spesifikasi Lengkap</h2>

        <!-- CARD IMAGE -->
        <div class="product-spec-image-wrapper">
            <img 
                src="{{ asset('images/Product/Signage/image17.png') }}" 
                alt="Disply Digital Signage"
            >

            <!-- AREA KLIK DOWNLOAD PDF -->
            <a 
                href="{{ asset('pdf/BrosurDigitalSignage.pdf') }}" 
                class="download-pdf-area"
                download
            ></a>
        </div>
    </div>
</section>
@endsection