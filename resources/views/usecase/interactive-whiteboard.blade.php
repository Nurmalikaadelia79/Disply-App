@extends('layouts.frontend')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.usecase-iwb {
    font-family: 'Inter', sans-serif;
    background: #f5f6f8;
}

/*HERO*/
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
    font-weight: 600;
    margin-bottom: 15px;
    line-height: 1.1;
    color: #ffffff;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
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
    color: #2448C3;
}

.iwb-section h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3;
    margin-bottom: 25px;
}

.iwb-section p {
    max-width: 1000px;
    margin: 0 auto 50px;
    font-size: 20px;
    color: #000;
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
    color: #2448C3;
    margin-bottom: 20px;
}

.iwb-bottom p {
    max-width: 900px;
    margin: auto;
    font-size: 20px;
    color: #000;
    line-height: 1.7;
}

/* ================= USE CASE CARDS ================= */
.iwb-usecase {
    background: #f5f6f8;
    padding: 40px 20px 40px;
}

.iwb-usecase-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.usecase-card {
    background: url('{{ asset('images/UseCase/IWB/card.png') }}');
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
.iwb-bottom-image {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px 20px 60px;
    background: #f5f6f8;
}

.iwb-bottom-image img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

/* FEATURES - TEKS SEJAJAR DENGAN LOGO */
.iwb-features {
    background: #eef2fb;
    padding: 80px 20px 110px;
}

.iwb-features-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    justify-content: center;
}

.iwb-feature-card {
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
    /* Tidak ada padding-left, teks sejajar dengan logo */
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

    .iwb-usecase-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .iwb-features-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .feature-header {
        gap: 15px;
    }
}

@media (max-width: 480px) {
    .iwb-hero h1 { font-size: 26px; }
    .iwb-hero p { font-size: 16px; }
    
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

    <!-- USE CASE CARDS dengan background card.png -->
    <section class="iwb-usecase">
        <div class="iwb-usecase-grid">
            
            <!-- Card 1: Meeting Collaboration -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/IWB/meeting.png') }}" alt="Meeting">
                    <h3>Meeting Collaboration</h3>
                </div>
                <div class="card-content">
                    <p>Kolaborasi tim menjadi lebih interaktif melalui anotasi langsung, screen sharing wireless, dan diskusi real-time.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/IWB/check.png') }}" alt="check">
                            Faster Decision Making
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/IWB/check.png') }}" alt="check">
                            Real-Time Annotation
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Hybrid Meeting & Presentation -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/IWB/hybird.png') }}" alt="Hybrid">
                    <h3>Hybrid Meeting & Presentation</h3>
                </div>
                <div class="card-content">
                    <p>Mendukung meeting hybrid dengan integrasi kamera, audio system, dan cloud collaboration platform.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/IWB/check.png') }}" alt="check">
                            Seamless Remote Collaboration
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/IWB/check.png') }}" alt="check">
                            Better Meeting Engagement
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Training & Education -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/IWB/training.png') }}" alt="Training">
                    <h3>Training & Education</h3>
                </div>
                <div class="card-content">
                    <p>Mempermudah sesi training dan pembelajaran melalui visualisasi materi yang interaktif dan mudah dipahami.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/IWB/check.png') }}" alt="check">
                            Interactive Learning Experience
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/IWB/check.png') }}" alt="check">
                            Better Knowledge Retention
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- BOTTOM IMAGE - image6.png -->
    <section class="iwb-bottom-image">
        <img src="{{ asset('images/UseCase/IWB/image6.png') }}" alt="Interactive Whiteboard Bottom">
    </section>

    <!-- FEATURES - TEKS SEJAJAR DENGAN LOGO -->
    <section class="iwb-features">
        <div class="iwb-features-grid">

            <div class="iwb-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/IWB/image7.png') }}">
                    <h4>Reduce Meeting<br>Preparation Time</h4>
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
                    <h4>Improve Team<br>Collaboration</h4>
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
                    <h4>Seamless Digital<br>Integration</h4>
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