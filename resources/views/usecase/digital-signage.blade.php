@extends('layouts.frontend')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.usecase-signage {
    font-family: 'Inter', sans-serif;
    background: #f5f6f8;
}

/* ================= HERO ================= */
.signage-hero {
    position: relative;
    height: 550px;
    background: url('{{ asset("images/UseCase/DigitalSignage/image1.png") }}');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 0 100px;
    color: #fff;
}
 
.signage-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.3);
}

.signage-hero-content {
    max-width: 850px;
    position: relative;
    z-index: 2;
}

.signage-hero h1 {
    font-size: 41px;
    font-weight: 600;
    margin-bottom: 15px;
    line-height: 1.1;
    color: #ffffff;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

.signage-hero p {
    font-size: 20px;
    font-weight: 400;
    line-height: 1.6;
    color: #ffffff;
}

/* ================= SECTION 2 ================= */
.signage-section {
    padding: 100px 20px;
    text-align: center;
    background: #f0f0f0;
}

.signage-section h2 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #000;
}

.signage-section h2 span {
    color: #2448C3;
}

.signage-section h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3;
    margin-bottom: 25px;
}

.signage-section p {
    max-width: 1000px;
    margin: 0 auto 50px;
    font-size: 20px;
    color: #000;
    line-height: 1.7;
}

/* IMAGE */
.signage-image {
    max-width: 1200px;
    margin: 0 auto;
}

.signage-image img {
    width: 100%;
    border-radius: 8px;
}

/* ================= SECTION 3 ================= */
.signage-bottom {
    padding: 80px 20px 60px;
    text-align: center;
    background: #f5f6f8;
}

.signage-bottom h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3;
    margin-bottom: 20px;
}

.signage-bottom p {
    max-width: 900px;
    margin: auto;
    font-size: 20px;
    color: #000;
    line-height: 1.7;
}

/* ================= USE CASE CARDS ================= */
.signage-usecase {
    background: #f5f6f8;
    padding: 40px 20px 40px;
}

.signage-usecase-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.usecase-card {
    background: url('{{ asset('images/UseCase/DigitalSignage/card.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 16px;
    padding: 40px 30px;
    transition: transform 0.3s ease;
    position: relative;
}

.usecase-card:hover {
    transform: translateY(-5px);
}

.card-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 25px;
}

.card-header img {
    width: 60px;
    height: 60px;
    object-fit: contain;
}

.card-header h3 {
    font-size: 24px;
    font-weight: 700;
    color: #2448C3;
    margin: 0;
    line-height: 1.3;
}

.card-content p {
    font-size: 18px;
    color: #333;
    line-height: 1.6;
    margin-bottom: 25px;
    font-weight: 400;
    max-width: 100%;
}

.feature-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.feature-list li {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 15px;
    font-size: 17px;
    color: #000;
    font-weight: 500;
}

.feature-list li img {
    width: 24px;
    height: 24px;
    object-fit: contain;
}

/* ================= BOTTOM IMAGE ================= */
.signage-bottom-image {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px 20px 60px;
    background: #f5f6f8;
}

.signage-bottom-image img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

/* ================= FEATURES ================= */
.signage-features {
    background: #eef2fb;
    padding: 80px 20px 110px;
}

.signage-features-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    justify-content: center;
}

.signage-feature-card {
    background: transparent;
    border-radius: 16px;
    padding: 0;
    display: flex;
    flex-direction: column;
    width: 100%;
}

.feature-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 15px;
    width: 100%;
}

.feature-header img {
    width: 60px;
    height: 60px;
    object-fit: contain;
    flex-shrink: 0;
}

.feature-header h4 {
    font-size: 24px;
    font-weight: 700;
    color: #2448C3;
    line-height: 1.3;
    margin: 0;
    text-align: left;
}

.feature-description {
    width: 100%;
}

.feature-description p {
    font-size: 18px;
    font-weight: 400;
    color: #333;
    line-height: 1.6;
    margin: 0;
    text-align: left;
    max-width: 100%;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1024px) {
    .signage-hero h1 { font-size: 38px; }
    .signage-hero p { font-size: 20px; }
    .signage-section h2 { font-size: 36px; }
}

@media (max-width: 768px) {
    .signage-hero {
        padding: 0 30px;
        height: 450px;
    }

    .signage-hero h1 { font-size: 30px; }
    .signage-hero p { font-size: 18px; }

    .signage-section h2 { font-size: 30px; }
    .signage-section h3,
    .signage-bottom h3 { font-size: 22px; }

    .signage-section p,
    .signage-bottom p { font-size: 18px; }

    .signage-usecase-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .signage-features-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .feature-header {
        gap: 15px;
    }
}

@media (max-width: 480px) {
    .signage-hero h1 { font-size: 26px; }
    .signage-hero p { font-size: 16px; }
    
    .usecase-card {
        padding: 30px 20px;
    }
    
    .card-header {
        flex-direction: column;
        text-align: center;
    }
    
    .feature-header {
        flex-direction: column;
        text-align: center;
        gap: 10px;
    }
    
    .feature-header h4 {
        text-align: center;
    }
    
    .feature-description p {
        text-align: center;
    }
}
</style>

<div class="usecase-signage">

    <!-- HERO -->
    <section class="signage-hero">
        <div class="signage-hero-content">
            <h1>
                Disply Digital Signage untuk<br>
                Komunikasi Visual yang Lebih Menarik
            </h1>
            <p>
               Tampilkan konten promosi dan informasi secara real-time melalui Disply Digital Signage <br>
                yang fleksibel dan mudah dikontrol.
            </p>
        </div>
    </section>

    <!-- SECTION 2 -->
    <section class="signage-section">
        <h2><span>DIGITAL SIGNAGE</span> SOLUTIONS</h2>
        <h3>Designed for Dynamic Information & Visual Communication</h3>
        <p>
           Digital Signage membantu menyampaikan informasi, promosi, dan komunikasi visual secara real-<br> 
           time melalui tampilan digital yang menarik dan mudah dikelola dari satu sistem terpusat.
        </p>

        <div class="signage-image">
            <img src="{{ asset('images/UseCase/DigitalSignage/image2.png') }}" alt="Digital Signage">
        </div>
    </section>

    <!-- SECTION 3 -->
    <section class="signage-bottom">
        <h3>WHERE DIGITAL SIGNAGE WORKS BEST</h3>
        <p>
            Dirancang untuk menghadirkan komunikasi visual yang efektif dalam <br> 
            menyampaikan informasi, promosi, dan pengalaman pengunjung.
        </p>
    </section>

    <!-- USE CASE CARDS dengan background card.png -->
    <section class="signage-usecase">
        <div class="signage-usecase-grid">
            
            <!-- Card 1: Information Display -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/information.png') }}" alt="Information">
                    <h3>Information Display</h3>
                </div>
                <div class="card-content">
                    <p>Menyampaikan informasi operasional, jadwal layanan, atau pengumuman secara real-time.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/DigitalSignage/check.png') }}" alt="check">
                            Real-Time Updates
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/DigitalSignage/check.png') }}" alt="check">
                            Clear Communication
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Promotion & Advertising -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/promotion.png') }}" alt="Promotion">
                    <h3>Promotion & Advertising</h3>
                </div>
                <div class="card-content">
                    <p>Menampilkan promosi produk atau layanan dengan visual yang lebih menarik dan dinamis.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/DigitalSignage/check.png') }}" alt="check">
                            Increased Engagement
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/DigitalSignage/check.png') }}" alt="check">
                            Better Brand Exposure
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Queue & Wayfinding Support -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/queue.png') }}" alt="Queue">
                    <h3>Queue & Wayfinding Support</h3>
                </div>
                <div class="card-content">
                    <p>Membantu pengunjung memahami alur layanan dan navigasi area dengan lebih jelas.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/DigitalSignage/check.png') }}" alt="check">
                            Better Security Control
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/DigitalSignage/check.png') }}" alt="check">
                            Efficient Reception Process
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- BOTTOM IMAGE - image6.png -->
    <section class="signage-bottom-image">
        <img src="{{ asset('images/UseCase/DigitalSignage/image6.png') }}" alt="Digital Signage Bottom">
    </section>

    <!-- FEATURES -->
    <section class="signage-features">
        <div class="signage-features-grid">

            <div class="signage-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/image7.png') }}">
                    <h4>Centralized Content Management</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Kelola seluruh konten display dari satu dashboard terpusat.
                    </p>
                </div>
            </div>

            <div class="signage-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/image8.png') }}">
                    <h4>Increase Audience Engagement</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Visual dinamis meningkatkan perhatian dan interaksi audiens.
                    </p>
                </div>
            </div>

            <div class="signage-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/image9.png') }}">
                    <h4>Flexible Content Scheduling</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Atur jadwal konten sesuai kebutuhan operasional dan promosi.
                    </p>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection