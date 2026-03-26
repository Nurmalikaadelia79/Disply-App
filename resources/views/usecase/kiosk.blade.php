@extends('layouts.frontend')

@section('content')

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

.usecase-kiosk {
    font-family: 'Inter', sans-serif;
    background: #f5f6f8;
}

/* ================= HERO ================= */
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
}

.kiosk-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.3);
}

.kiosk-hero-content {
    max-width: 850px;
    position: relative;
    z-index: 2;
}

.kiosk-hero h1 {
    font-size: 41px;
    font-weight: 600;
    margin-bottom: 15px;
    line-height: 1.1;
    color: #ffffff;
    letter-spacing: -0.5px;
    font-family: 'Inter', sans-serif;
}

.kiosk-hero p {
    font-size: 22px;
    font-weight: 400;
    line-height: 1.6;
    color: #ffffff;
}

/* ================= SECTION 2 ================= */
.kiosk-section {
    padding: 100px 20px;
    text-align: center;
    background: #f0f0f0;
}

.kiosk-section h2 {
    font-size: 42px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #000;
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
    color: #000;
    line-height: 1.7;
}

/* IMAGE */
.kiosk-image {
    max-width: 1200px;
    margin: 0 auto;
}

.kiosk-image img {
    width: 100%;
    border-radius: 8px;
}

/* ================= SECTION 3 ================= */
.kiosk-bottom {
    padding: 80px 20px 60px;
    text-align: center;
    background: #f5f6f8;
}

.kiosk-bottom h3 {
    font-size: 26px;
    font-weight: 700;
    color: #2448C3;
    margin-bottom: 20px;
}

.kiosk-bottom p {
    max-width: 900px;
    margin: auto;
    font-size: 20px;
    color: #000;
    line-height: 1.7;
}

/* ================= USE CASE CARDS ================= */
.kiosk-usecase {
    background: #f5f6f8;
    padding: 40px 20px 40px;
}

.kiosk-usecase-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.usecase-card {
    background: url('{{ asset('images/UseCase/Kiosk/card.png') }}');
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
.kiosk-bottom-image {
    max-width: 1400px;
    margin: 0 auto;
    padding: 20px 20px 60px;
    background: #f5f6f8;
}

.kiosk-bottom-image img {
    width: 100%;
    border-radius: 8px;
    object-fit: cover;
}

/* ================= FEATURES ================= */
.kiosk-features {
    background: #eef2fb;
    padding: 80px 20px 110px;
}

.kiosk-features-grid {
    max-width: 1400px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    justify-content: center;
}

.kiosk-feature-card {
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
    .kiosk-hero h1 { font-size: 38px; }
    .kiosk-hero p { font-size: 20px; }
    .kiosk-section h2 { font-size: 36px; }
}

@media (max-width: 768px) {
    .kiosk-hero {
        padding: 0 30px;
        height: 450px;
    }

    .kiosk-hero h1 { font-size: 30px; }
    .kiosk-hero p { font-size: 18px; }

    .kiosk-section h2 { font-size: 30px; }
    .kiosk-section h3,
    .kiosk-bottom h3 { font-size: 22px; }

    .kiosk-section p,
    .kiosk-bottom p { font-size: 18px; }

    .kiosk-usecase-grid {
        grid-template-columns: 1fr;
        gap: 25px;
    }

    .kiosk-features-grid {
        grid-template-columns: 1fr;
        gap: 40px;
    }
    
    .feature-header {
        gap: 15px;
    }
}

@media (max-width: 480px) {
    .kiosk-hero h1 { font-size: 26px; }
    .kiosk-hero p { font-size: 16px; }
    
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

<div class="usecase-kiosk">

    <!-- HERO -->
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

    <!-- SECTION 2 -->
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

    <!-- SECTION 3 -->
    <section class="kiosk-bottom">
        <h3>WHERE SMART KIOSK WORKS BEST</h3>
        <p>
            Dirancang untuk mendukung layanan mandiri yang cepat dan terstruktur 
            di area dengan volume pengunjung tinggi.
        </p>
    </section>

    <!-- USE CASE CARDS dengan background card.png -->
    <section class="kiosk-usecase">
        <div class="kiosk-usecase-grid">
            
            <!-- Card 1: Self + Registration -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/Kiosk/registration.png') }}" alt="Registration">
                    <h3>Self + Registration</h3>
                </div>
                <div class="card-content">
                    <p>Pendekatan end-to-end mulai dari perencanaan, perangkat, hingga implementasi dan dukungan teknis.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/Kiosk/check.png') }}" alt="check">
                            Faster Check-In
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/Kiosk/check.png') }}" alt="check">
                            Reduced Waiting Time
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 2: Ticketing & Check-In -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/Kiosk/ticketing.png') }}" alt="Ticketing">
                    <h3>Ticketing & Check-In</h3>
                </div>
                <div class="card-content">
                    <p>Pembelian tiket dan proses check-in dilakukan langsung melalui layar interaktif di bandara maupun terminal transportasi.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/Kiosk/check.png') }}" alt="check">
                            Faster Passenger Flow
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/Kiosk/check.png') }}" alt="check">
                            Accurate Transactions
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Card 3: Visitor Management -->
            <div class="usecase-card">
                <div class="card-header">
                    <img src="{{ asset('images/UseCase/Kiosk/visitor.png') }}" alt="Visitor">
                    <h3>Visitor Management</h3>
                </div>
                <div class="card-content">
                    <p>Pengunjung melakukan registrasi otomatis sebelum memasuki area layanan atau gedung perusahaan.</p>
                    <ul class="feature-list">
                        <li>
                            <img src="{{ asset('images/UseCase/Kiosk/check.png') }}" alt="check">
                            Better Security Control
                        </li>
                        <li>
                            <img src="{{ asset('images/UseCase/Kiosk/check.png') }}" alt="check">
                            Efficient Reception Process
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- BOTTOM IMAGE - image6.png -->
    <section class="kiosk-bottom-image">
        <img src="{{ asset('images/UseCase/Kiosk/image6.png') }}" alt="Smart Kiosk Bottom">
    </section>

    <!-- FEATURES -->
    <section class="kiosk-features">
        <div class="kiosk-features-grid">

            <div class="kiosk-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/Kiosk/image7.png') }}">
                    <h4>Reduce Waiting Time</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mempercepat proses registrasi dan transaksi sehingga antrean dapat diminimalkan di area layanan.
                    </p>
                </div>
            </div>

            <div class="kiosk-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/Kiosk/image8.png') }}">
                    <h4>Improve Operational Productivity</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mengurangi beban layanan manual dan membantu staf fokus pada interaksi yang lebih penting.
                    </p>
                </div>
            </div>

            <div class="kiosk-feature-card">
                <div class="feature-header">
                    <img src="{{ asset('images/UseCase/Kiosk/image9.png') }}">
                    <h4>Pengembangan materi konten</h4>
                </div>
                <div class="feature-description">
                    <p>
                        Mudah diintegrasikan dengan sistem existing untuk mendukung transformasi layanan digital jangka panjang.
                    </p>
                </div>
            </div>

        </div>
    </section>
</div>

@endsection