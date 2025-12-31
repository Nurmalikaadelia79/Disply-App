@extends('layouts.app')

@section('content')

<style>
    .about-hero {
        position: relative;
        width: 100%;
        height: 380px;
        background-image: url("{{ asset('images/ABOUT/image1.png') }}");
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
        font-size: 36px;
        line-height: 1.3;
        margin-bottom: 16px;
        font-weight: bold;
    }

    .about-content p {
        font-size: 16px;
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

    font-weight: 700;
    font-size: 16px;
    text-decoration: none;

    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    transition: 0.25s ease;
}

/* PANAH SEGITIGA */
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
            font-size: 28px;
        }
    }

    .about-section {
    padding: 80px 20px;
    background: #ffffff;
    display: flex;
    justify-content: center;
}

.about-box {
    max-width: 900px;
    text-align: center;
}

.about-box h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 16px;
    color: #000;
}

.about-logo {
    margin-bottom: 28px;
}

.about-logo img {
    height: 60px;
}

.about-text {
    font-size: 16px;
    line-height: 1.9;
    color: #111827;
    margin-bottom: 28px;
}

.about-text .highlight {
    color: #1e40af; /* biru seperti gambar */
    font-weight: 600;
}

.vm-image-section {
    padding: 70px 20px; /* 🔧 sedikit dikurang biar section ga terlalu tinggi */
    background: linear-gradient(180deg, #ffffff 0%, #f3f6ff 100%);
}

.vm-image-wrapper {
    max-width: 980px; /* 🔧 DARI 1100px → 980px (INI YANG BIKIN KERASA LEBIH KECIL) */
    margin: auto;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 26px; /* 🔧 DARI 32px → 26px */
    align-items: center;
}

.vm-image-wrapper img {
    width: 100%;
    max-width: 360px; /* 🔧 DARI 420px → 360px (INI PENGARUH PALING KELIATAN) */
    margin: auto;
    display: block;
}

@media (max-width: 768px) {
    .vm-image-wrapper {
        grid-template-columns: 1fr;
        gap: 40px; /* 🔧 dari 48px → 40px */
    }
}


.why-section {
    padding: 80px 20px;
    background: #f3f6ff;
}

.why-title {
    text-align: center;
    margin-bottom: 60px;
}

.why-title h2 {
    font-size: 26px;
    font-weight: 700;
    letter-spacing: 1px;
}

.why-title span {
    color: #1e40af; /* biru DISPLY */
}

.why-images {
    max-width: 1100px;
    margin: auto;
    display: flex;
    flex-direction: column;
    gap: 40px;
}

.why-images img {
    width: 100%;
    max-width: 720px;
    border-radius: 16px;
}

/* posisi zig-zag */
.why-images img:nth-child(1) {
    align-self: flex-start;
}

.why-images img:nth-child(2) {
    align-self: flex-end;
}

.why-images img:nth-child(3) {
    align-self: flex-start;
}

@media (max-width: 768px) {
    .why-images img {
        align-self: center !important;
        max-width: 100%;
    }
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


</style>

<section class="about-hero">
    <div class="about-content">
        <h1>
            DISPLY Solusi Digital Display <br>
            & Teknologi Interaktif
        </h1>

        <p>
            Menghadirkan komunikasi visual yang modern,  
            efektif, dan terintegrasi.
        </p>

        <a href="/demo" class="btn-demo">Jadwalkan Demo</a>
    </div>
</section>

<section class="about-section">
    <div class="about-box">

        <h2>About Us</h2>

        <div class="about-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Disply Logo">
        </div>

        <p class="about-text">
            <span class="highlight">Disply</span> adalah
            <span class="highlight">penyedia solusi digital display dan perangkat interaktif</span>
            yang membantu bisnis, institusi pendidikan, dan layanan publik memperkuat komunikasi visual
            melalui teknologi layar modern. Kami menghadirkan sistem penyampaian informasi yang lebih
            efektif, dinamis, dan mudah diintegrasikan.
        </p>

        <p class="about-text">
            Selain perangkat, Disply menyediakan solusi end-to-end mulai dari analisis kebutuhan,
            pemilihan perangkat, hingga implementasi penuh. Dengan pendekatan ini, setiap solusi
            tidak hanya tampil modern, tetapi juga memberikan
            <span class="highlight">dampak nyata pada efisiensi operasional dan pengalaman pengguna.</span>
        </p>

    </div>
</section>

<section class="vm-image-section">
    <div class="vm-image-wrapper">

        <img src="{{ asset('images/ABOUT/image2.png') }}" alt="Visi Disply">

        <img src="{{ asset('images/ABOUT/image3.png') }}" alt="Misi Disply">

    </div>
</section>

<section class="why-section">

    <div class="why-title">
        <h2>
            MENGAPA MEMILIH<br/>  <span>DISPLY</span>
        </h2>
    </div>

    <div class="why-images">
        <img src="{{ asset('images/ABOUT/image4.png') }}" alt="Solusi Menyeluruh">
        <img src="{{ asset('images/ABOUT/image5.png') }}" alt="Produk Berkualitas">
        <img src="{{ asset('images/ABOUT/image6.png') }}" alt="Fokus Nilai Bisnis">
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


@endsection
