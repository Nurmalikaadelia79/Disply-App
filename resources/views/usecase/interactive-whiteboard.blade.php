@extends('layouts.frontend')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.usecase-iwb {
    font-family: 'Inter', sans-serif;
    background: #f5f6f8;
}

/* ================= HERO ================= */
.iwb-hero {
    position: relative;
    height: 550px;
    background: url('{{ asset("images/UseCase/IWB/image1.png") }}');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 0 100px;
    color: #fff;
}

.iwb-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.3);
}

.iwb-hero-content {
    max-width: 850px;
    position: relative;
    z-index: 2;
}

.iwb-hero h1 {
    font-size: 41px;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.1;
    color: #ffffff;
}

.iwb-hero p {
    font-size: 22px;
    font-weight: 400;
    line-height: 1.6;
    color: #ffffff;
}

/* ================= SECTION 2 ================= */
.iwb-section {
    padding: 100px 20px;
    text-align: center;
    background: #f0f0f0;
}

.iwb-section h2 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #000;
}

.iwb-section h2 span {
    color: #2448C3; /* tetap biru */
}

.iwb-section h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3; /* tetap biru */
    margin-bottom: 25px;
}

.iwb-section p {
    max-width: 1000px;
    margin: 0 auto 50px;
    font-size: 20px;
    color: #000; /* tadinya abu → jadi hitam */
    line-height: 1.7;
}

/* IMAGE */
.iwb-image {
    max-width: 1200px;
    margin: 0 auto;
}

.iwb-image img {
    width: 100%;
    border-radius: 8px;
}

/* ================= SECTION 3 ================= */
.iwb-bottom {
    padding: 80px 20px 60px;
    text-align: center;
    background: #f5f6f8;
}

.iwb-bottom h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3; /* tetap biru */
    margin-bottom: 20px;
}

.iwb-bottom p {
    max-width: 900px;
    margin: auto;
    font-size: 20px;
    color: #000; /* tadinya abu → jadi hitam */
    line-height: 1.7;
}

/* ================= SHOWCASE ================= */
.iwb-showcase {
    background: #f5f6f8;
    padding: 40px 20px 120px;
}

.iwb-showcase-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.iwb-showcase-grid img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

.iwb-showcase-grid img.full-width {
    grid-column: span 3;
}

/* ================= FEATURES ================= */
.iwb-features {
    background: #eef2fb;
    padding: 100px 20px;
}

.iwb-features-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
}

.iwb-feature-card {
    display: flex;
    flex-direction: column;
}

.feature-header {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
}

.feature-header img {
    width: 56px;
    height: 56px;
    object-fit: contain;
}

.feature-header h4 {
    font-size: 24px;
    font-weight: 700;
    color: #2448C3; /* tetap biru */
    line-height: 1.3;
}

.feature-description p {
    font-size: 18px;
    color: #000; /* tadinya abu → jadi hitam */
    line-height: 1.7;
    margin: 0 0 0 76px;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1024px) {
    .iwb-hero h1 { font-size: 38px; }
    .iwb-hero p { font-size: 20px; }
    .iwb-section h2 { font-size: 36px; }
}

@media (max-width: 768px) {
    .iwb-hero {
        padding: 0 30px;
        height: 450px;
    }

    .iwb-hero h1 { font-size: 30px; }
    .iwb-hero p { font-size: 18px; }

    .iwb-section h2 { font-size: 30px; }
    .iwb-section h3,
    .iwb-bottom h3 { font-size: 22px; }

    .iwb-section p,
    .iwb-bottom p { font-size: 18px; }

    .iwb-showcase-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .iwb-showcase-grid img.full-width {
        grid-column: span 1;
    }

    .iwb-features-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .feature-description p {
        margin-left: 0;
        text-align: center;
    }

    .feature-header {
        flex-direction: column;
        text-align: center;
    }
}

@media (max-width: 480px) {
    .iwb-hero h1 { font-size: 26px; }
    .iwb-hero p { font-size: 16px; }
}
</style>

<div class="usecase-iwb">

    <!-- HERO -->
    <section class="iwb-hero">
        <div class="iwb-hero-content">
            <h1>
                Disply Interactive Whiteboard <br>
                Presentasi Kolaborasi dan Lebih Interaktif
            </h1>
            <p>
                Diskusi, pembelajaran, dan meeting jadi lebih hidup dengan Disply Interactive 
                Whiteboard yang responsif dan mudah digunakan.
            </p>
        </div>
    </section>

    <!-- SECTION 2 -->
    <section class="iwb-section">
        <h2><span>INTERACTIVE WHITEBOARD</span> SOLUTIONS</h2>
        <h3>Designed for Smarter Collaboration & Interactive Meetings</h3>
        <p>
           Interactive Whiteboard menghadirkan pengalaman meeting, presentasi, dan kolaborasi digital 
           yang lebih interaktif melalui integrasi touch display, wireless sharing, dan hybrid collaboration.
        </p>

        <div class="iwb-image">
            <img src="{{ asset('images/UseCase/IWB/image2.png') }}" alt="Interactive Whiteboard">
        </div>
    </section>

    <!-- SECTION 3 -->
    <section class="iwb-bottom">
        <h3>WHERE INTERACTIVE WHITEBOARD WORKS BEST</h3>
        <p>
          Dirancang untuk mendukung kolaborasi tim, presentasi profesional, dan 
          pembelajaran interaktif di berbagai lingkungan kerja modern.
        </p>
    </section>

    <!-- SHOWCASE -->
    <section class="iwb-showcase">
        <div class="iwb-showcase-grid">
            <img src="{{ asset('images/UseCase/IWB/image3.png') }}">
            <img src="{{ asset('images/UseCase/IWB/image4.png') }}">
            <img src="{{ asset('images/UseCase/IWB/image5.png') }}">
            <img src="{{ asset('images/UseCase/IWB/image6.png') }}" class="full-width">
        </div>
    </section>

    <!-- FEATURES -->
    <section class="iwb-features">
        <div class="iwb-features-grid">

            <div class="iwb-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/IWB/image7.png') }}">
                    <h4>Reduce Meeting Preparation Time</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mempermudah persiapan meeting tanpa perangkat tambahan yang kompleks.
                    </p>
                </div>
            </div>

            <div class="iwb-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/IWB/image8.png') }}">
                    <h4>Improve Team Collaboration</h4>
                </div>
                <div class="feature-description">
                    <p>
                       Meningkatkan interaksi dan komunikasi antar tim secara lebih efektif.
                    </p>
                </div>
            </div>

            <div class="iwb-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/IWB/image9.png') }}">
                    <h4>Seamless Digital Integration</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Terintegrasi dengan berbagai aplikasi bisnis dan sistem cloud collaboration.
                    </p>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection