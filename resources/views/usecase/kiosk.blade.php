@extends('layouts.frontend')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.usecase-kiosk {
    font-family: 'Inter', sans-serif;
    background: #f5f6f8;
}

/* HERO SECTION - TANPA EFEK BIRU */
.kiosk-hero {
    position: relative;
    height: 550px;
    background: url('{{ asset("images/UseCase/Kiosk/image1.png") }}');
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 0 100px;
    color: #fff;
    position: relative;
}

.kiosk-hero::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.3); /* dark overlay tipis biar teks kebaca */
    z-index: 1;
}

.kiosk-hero-content {
    max-width: 850px;
    position: relative;
    z-index: 2;
}

.kiosk-hero h1 {
    font-size: 41px;
    font-weight: 800;
    margin-bottom: 20px;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.kiosk-hero p {
    font-size: 20px;
    font-weight: 400;
    line-height: 1.6;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
}

/* SECTION 2 */
.kiosk-section {
    padding: 100px 20px;
    text-align: center;
    background: #f0f0f0;
}

.kiosk-section h2 {
    font-size: 42px;
    font-weight: 800;
    margin-bottom: 20px;
}

.kiosk-section h2 span {
    color: #2448C3;
}

.kiosk-section h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3;
    margin-bottom: 25px;
}

.kiosk-section p {
    max-width: 1000px;
    margin: 0 auto 50px;
    font-size: 20px;
    color: #444;
    line-height: 1.7;
}

/* IMAGE CONTENT */
.kiosk-image {
    max-width: 1200px;
    margin: 0 auto;
}

.kiosk-image img {
    width: 100%;
    border-radius: 8px;
}

/* SECTION 3 */
.kiosk-bottom {
    padding: 80px 20px 60px;
    text-align: center;
    background: #f5f6f8;
}

.kiosk-bottom h3 {
    font-size: 26px;
    font-weight: 800;
    color: #2448C3;
    margin-bottom: 20px;
}

.kiosk-bottom p {
    max-width: 900px;
    margin: auto;
    font-size: 20px;
    color: #444;
    line-height: 1.7;
}

/* IMAGE SHOWCASE - Tanpa efek card */
.kiosk-showcase {
    background: #f5f6f8;
    padding: 40px 20px 120px;
}

.kiosk-showcase-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.kiosk-showcase-grid img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

/* image terakhir full width */
.kiosk-showcase-grid img.full-width {
    grid-column: span 3;
}

/* FEATURE BENEFITS - Judul sejajar icon, teks di bawah */
.kiosk-features {
    background: #eef2fb;
    padding: 100px 20px;
}

.kiosk-features-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 50px;
}

.kiosk-feature-card {
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
    margin: 0 0 0 76px; /* Menyesuaikan dengan lebar icon + gap */
}

/* RESPONSIVE */
@media (max-width: 1024px) {
    .kiosk-hero h1 {
        font-size: 42px;
    }
    
    .kiosk-hero p {
        font-size: 19px;
    }
    
    .kiosk-section h2 {
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
    .kiosk-hero {
        padding: 0 30px;
        height: 450px;
    }

    .kiosk-hero h1 {
        font-size: 32px;
    }
    
    .kiosk-hero p {
        font-size: 18px;
    }

    .kiosk-section h2 {
        font-size: 32px;
    }
    
    .kiosk-section h3,
    .kiosk-bottom h3 {
        font-size: 24px;
    }
    
    .kiosk-section p,
    .kiosk-bottom p {
        font-size: 18px;
    }
    
    .kiosk-showcase-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .kiosk-showcase-grid img.full-width {
        grid-column: span 1;
    }
    
    .kiosk-features-grid {
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
    .kiosk-hero h1 {
        font-size: 28px;
    }
    
    .kiosk-hero p {
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

<div class="usecase-kiosk">

    <!-- HERO - TANPA EFEK BIRU -->
    <section class="kiosk-hero">
        <div class="kiosk-hero-content">
            <h1>
                Disply Smart Kiosk untuk<br>
                Otomatisasi Layanan Jadi Lebih Mudah
            </h1>
            <p>
                Permudah proses registrasi, check-in, dan pengelolaan pengunjung dengan <br> 
                Smart Kiosk yang cepat dan terintegrasi.
            </p>
        </div>
    </section>

    <!-- SMART KIOSK SOLUTIONS -->
    <section class="kiosk-section">
        <h2><span>SMART KIOSK</span> SOLUTIONS</h2>
        <h3>Designed for Faster Self-Service Experiences</h3>
        <p>
            Smart Kiosk membantu pengunjung menyelesaikan proses layanan secara mandiri 
            mulai dari registrasi, pembelian tiket, hingga check-in dengan lebih cepat, 
            akurat, dan tanpa antre panjang.
        </p>

        <div class="kiosk-image">
            <img src="{{ asset('images/UseCase/Kiosk/image2.png') }}" alt="Smart Kiosk">
        </div>
    </section>

    <!-- WHERE SMART KIOSK WORKS BEST -->
    <section class="kiosk-bottom">
        <h3>WHERE SMART KIOSK WORKS BEST</h3>
        <p>
            Dirancang untuk mendukung layanan mandiri yang cepat dan terstruktur 
            di area dengan volume pengunjung tinggi.
        </p>
    </section>
    
    <!-- IMAGE SHOWCASE - Tanpa efek card -->
    <section class="kiosk-showcase">
        <div class="kiosk-showcase-grid">
            <img src="{{ asset('images/UseCase/Kiosk/image3.png') }}" alt="Kiosk 3">
            <img src="{{ asset('images/UseCase/Kiosk/image4.png') }}" alt="Kiosk 4">
            <img src="{{ asset('images/UseCase/Kiosk/image5.png') }}" alt="Kiosk 5">

            <img src="{{ asset('images/UseCase/Kiosk/image6.png') }}" alt="Kiosk 6" class="full-width">
        </div>
    </section>

    <!-- FEATURE BENEFITS - Icon sejajar dengan JUDUL saja, teks di bawah -->
    <section class="kiosk-features">
        <div class="kiosk-features-grid">

            <div class="kiosk-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/Kiosk/image7.png') }}" alt="Reduce Waiting Time">
                    <h4>Reduce Waiting Time</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mempercepat proses registrasi dan transaksi sehingga antrean dapat
                        diminimalkan di area layanan.
                    </p>
                </div>
            </div>

            <div class="kiosk-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/Kiosk/image8.png') }}" alt="Improve Operational Productivity">
                    <h4>Improve Operational Productivity</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mengurangi beban layanan manual dan membantu staf fokus pada
                        interaksi yang lebih penting.
                    </p>
                </div>
            </div>

            <div class="kiosk-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/Kiosk/image9.png') }}" alt="Pengembangan materi konten">
                    <h4>Pengembangan materi konten</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mudah diintegrasikan dengan sistem existing untuk mendukung
                        transformasi layanan digital jangka panjang.
                    </p>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection