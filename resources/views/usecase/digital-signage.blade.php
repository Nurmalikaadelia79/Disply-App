@extends('layouts.frontend')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.usecase-signage {
    font-family: 'Inter', sans-serif;
    background: #f5f6f8;
}

/* HERO SECTION */
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
    position: relative;
}

.signage-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3);
    z-index: 1;
}

.signage-hero-content {
    max-width: 850px;
    position: relative;
    z-index: 2;
}

.signage-hero h1 {
    font-size: 41px;
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.signage-hero p {
    font-size: 20px;
    font-weight: 400;
    line-height: 1.6;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

/* SECTION 2 */
.signage-section {
    padding: 100px 20px;
    text-align: center;
    background: #f0f0f0;
}

.signage-section h2 {
    font-size: 42px;
    font-weight: 800;
    margin-bottom: 20px;
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
    color: #444;
    line-height: 1.7;
}

/* IMAGE CONTENT */
.signage-image {
    max-width: 1200px;
    margin: 0 auto;
}

.signage-image img {
    width: 100%;
    border-radius: 8px;
}

/* SECTION 3 */
.signage-bottom {
    padding: 80px 20px 60px;
    text-align: center;
    background: #f5f6f8;
}

.signage-bottom h3 {
    font-size: 26px;
    font-weight: 800;
    color: #2448C3;
    margin-bottom: 20px;
}

.signage-bottom p {
    max-width: 900px;
    margin: auto;
    font-size: 20px;
    color: #444;
    line-height: 1.7;
}

/* IMAGE SHOWCASE */
.signage-showcase {
    background: #f5f6f8;
    padding: 40px 20px 120px;
}

.signage-showcase-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.signage-showcase-grid img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

.signage-showcase-grid img.full-width {
    grid-column: span 3;
}

/* FEATURE BENEFITS */
.signage-features {
    background: #eef2fb;
    padding: 100px 20px;
}

.signage-features-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
}

.signage-feature-card {
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
    flex-shrink: 0;
    object-fit: contain;
}

.feature-header h4 {
    font-size: 24px;
    font-weight: 700;
    color: #2448C3;
    margin: 0;
    line-height: 1.3;
}

.feature-description p {
    font-size: 18px;
    color: #555;
    line-height: 1.7;
    margin: 0 0 0 76px;
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .signage-hero h1 {
        font-size: 42px;
    }
    
    .signage-hero p {
        font-size: 19px;
    }
    
    .signage-section h2 {
        font-size: 38px;
    }
    
    .feature-header h4 {
        font-size: 22px;
    }
    
    .feature-description p {
        font-size: 17px;
    }
}

@media (max-width: 768px) {
    .signage-hero {
        padding: 0 30px;
        height: 450px;
    }

    .signage-hero h1 {
        font-size: 32px;
    }
    
    .signage-hero p {
        font-size: 18px;
    }

    .signage-section h2 {
        font-size: 32px;
    }
    
    .signage-section h3,
    .signage-bottom h3 {
        font-size: 24px;
    }
    
    .signage-section p,
    .signage-bottom p {
        font-size: 18px;
    }
    
    .signage-showcase-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .signage-showcase-grid img.full-width {
        grid-column: span 1;
    }
    
    .signage-features-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .feature-header h4 {
        font-size: 22px;
    }
    
    .feature-description p {
        font-size: 17px;
        margin-left: 0;
    }
}

@media (max-width: 480px) {
    .signage-hero h1 {
        font-size: 28px;
    }
    
    .signage-hero p {
        font-size: 16px;
    }
    
    .feature-header {
        flex-direction: column;
        text-align: center;
        gap: 12px;
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

    <!-- DIGITAL SIGNAGE SOLUTIONS -->
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

    <!-- WHERE DIGITAL SIGNAGE WORKS BEST -->
    <section class="signage-bottom">
        <h3>WHERE DIGITAL SIGNAGE WORKS BEST</h3>
        <p>
            Dirancang untuk menghadirkan komunikasi visual yang efektif dalam <br> 
            menyampaikan informasi, promosi, dan pengalaman pengunjung.
        </p>
    </section>
    
    <!-- IMAGE SHOWCASE -->
    <section class="signage-showcase">
        <div class="signage-showcase-grid">
            <img src="{{ asset('images/UseCase/DigitalSignage/image3.png') }}" alt="Signage 3">
            <img src="{{ asset('images/UseCase/DigitalSignage/image4.png') }}" alt="Signage 4">
            <img src="{{ asset('images/UseCase/DigitalSignage/image5.png') }}" alt="Signage 5">

            <img src="{{ asset('images/UseCase/DigitalSignage/image6.png') }}" alt="Signage 6" class="full-width">
        </div>
    </section>

    <!-- FEATURE BENEFITS -->
    <section class="signage-features">
        <div class="signage-features-grid">

            <div class="signage-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/image7.png') }}" alt="Real-time Updates">
                    <h4>Centralized Content Management</h4>
                </div>
                <div class="feature-description">
                    <p>
                       Kelola seluruh konten display dari <br>
                       satu dashboard terpusat.
                    </p>
                </div>
            </div>

            <div class="signage-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/image8.png') }}" alt="Eye-catching Visuals">
                    <h4>Increase Audience Engagement</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Visual dinamis meningkatkan<br>
                         perhatian dan interaksi audiens.
                    </p>
                </div>
            </div>

            <div class="signage-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/DigitalSignage/image9.png') }}" alt="Centralized Management">
                    <h4>Flexible Content Scheduling</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Atur jadwal konten sesuai kebutuhan <br>
                        operasional dan promosi.
                    </p>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection