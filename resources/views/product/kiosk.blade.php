@extends('layouts.frontend')

@section('content')
<style>
    /* IMPOR FONT INTER */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
    
    /* APLIKASI FONT INTER KE SEMUA ELEMEN */
    body, .about-content h1, .about-content p, .btn-demo,
    .kiosk-text h2, .kiosk-text p, .kiosk-feature-container .sub-title,
    .kiosk-feature-container .main-title, .kiosk-usage-title,
    .product-spec-container h4, .product-spec-container h2,
    .product-switch button {
        font-family: 'Inter', sans-serif !important;
    }

    .about-hero {
        position: relative;
        width: 100%;
        height: 380px;
        background-image: url("{{ asset('images/Product/Kiosk/image1.png') }}");
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
        font-size: 44px; /* DARI 36px KE 40px */
        line-height: 1.3;
        margin-bottom: 16px;
        font-weight: 700;
        letter-spacing: -0.5px;
    }

    .about-content p {
        font-size: 22px; /* DARI 16px KE 18px */
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

    font-weight: 600; /* DARI 700 KE 600 (LEBIH LEMBUT) */
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
    /* =========================
   SMART KIOSK SECTION
========================= */
.kiosk-section {
    padding: 90px 24px 120px;
    background: linear-gradient(180deg, #ffffff 0%, #eef3ff 100%);
}

.kiosk-container {
    max-width: 1200px;
    margin: auto;
}

/* GRID */
.kiosk-content {
    display: grid;
    grid-template-columns: 1fr 1.3fr;
    gap: 70px;
    align-items: center;
}

/* IMAGE */
.kiosk-image img {
    width: 100%;
    max-width: 420px;
    display: block;
}

/* TEXT */
.kiosk-text h2 {
    font-size: 38px; /* DARI 36px KE 38px */
    font-weight: 700; /* DARI 800 KE 700 */
    color: #193295;
    margin-bottom: 20px;
    letter-spacing: -0.5px;
    line-height: 1.2;
}

.kiosk-text p {
    font-size: 18px; /* DARI 16px KE 18px */
    line-height: 1.8;
    color: #1f2b3d;
    margin-bottom: 16px;
    max-width: 520px;
}

/* ICON LIST */
.kiosk-features {
    margin-top: 30px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 26px;
}

.kiosk-features img {
    width: 100%;
    max-width: 150px;
    display: block;
}


/* =========================
   KIOSK FEATURE IMAGE ONLY
========================= */
.kiosk-feature-section {
    padding: 90px 24px 120px;
    background: linear-gradient(180deg, #f7f9ff 0%, #eef3ff 100%);
}

.kiosk-feature-container {
    max-width: 1100px; /* DARI 520px KE 1100px (LEBIH LEBAR) */
    margin: auto;
    text-align: center;
}

.kiosk-feature-container .sub-title {
    font-size: 16px; /* DARI 14px KE 16px */
    font-weight: 600; /* DARI 700 KE 600 */
    letter-spacing: 1px;
    color: #1e40af; /* DARI #6b7cff KE #1e40af */
    margin-bottom: 10px; /* DARI 6px KE 10px */
}

.kiosk-feature-container .main-title {
    font-size: 32px; /* DARI 28px KE 32px */
    font-weight: 700; /* DARI 800 KE 700 */
    color: #193295;
    margin-bottom: 50px;
    letter-spacing: -0.5px;
    line-height: 1.3;
}

/* =========== LAYOUT 2 KOLOM SEPERTI IWB =========== */
.kiosk-feature-images {
    display: grid;
    grid-template-columns: repeat(2, 1fr); /* 2 KOLOM */
    gap: 30px;
    align-items: start;
}

.kiosk-feature-images img {
    width: 100%;
    max-width: 500px; /* DARI 420px KE 500px */
    margin: auto;
    display: block;
}



/* =========================
   KIOSK USAGE IMAGE ONLY
========================= */
.kiosk-usage-section {
    padding: 90px 24px 120px;
    background: linear-gradient(180deg, #f7f9ff 0%, #eef3ff 100%);
}

.kiosk-usage-container {
    max-width: 1200px;
    margin: auto;
}

.kiosk-usage-title {
    text-align: center;
    font-size: 36px; /* DARI 34px KE 36px */
    font-weight: 700; /* DARI 800 KE 700 */
    color: #000;
    margin-bottom: 60px;
    letter-spacing: -0.5px;
    line-height: 1.3;
}

.kiosk-usage-title span {
    color: #2b50ff;
}

/* LAYOUT */
.kiosk-usage-content {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 60px;
    align-items: center;
}

/* LEFT ICON GRID */
.kiosk-usage-icons {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px; /* ← DIPERKECIL DARI 26px */
}

.kiosk-usage-icons img {
    width: 100%;
    max-width: 260px;
    display: block;
}

/* RIGHT IMAGE */
.kiosk-usage-display img {
    width: 100%;
    max-width: 360px;
    display: block;
    margin-left: auto;
}



/* =========================
   PRODUCT SPEC SECTION
========================= */
.product-spec-section {
    padding: 60px 20px 80px;
    background: linear-gradient(180deg, #f4f7ff 0%, #ffffff 100%);
}

.product-spec-container {
    max-width: 1080px;
    margin: auto;
    text-align: center;
}

/* HEADER */
.product-spec-container h4 {
    font-size: 15px; /* DARI 13px KE 15px */
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 6px; /* DARI 4px KE 6px */
    text-transform: uppercase;
    letter-spacing: 1px;
}

.product-spec-container h2 {
    font-size: 32px; /* DARI 26px KE 32px */
    font-weight: 700; /* DARI 800 KE 700 */
    color: #000;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
    line-height: 1.3;
}

/* SWITCH BUTTON */
.product-switch {
    display: flex;
    justify-content: center;
    gap: 10px;
    margin-bottom: 26px;
}

.product-switch button {
    padding: 10px 22px; /* DARI 8px 18px KE 10px 22px */
    border-radius: 999px;
    border: 1.5px solid #1e40af;
    background: #fff;
    color: #1e40af;
    font-size: 14px; /* DARI 13px KE 14px */
    font-weight: 600;
    cursor: pointer;
    transition: 0.2s;
    font-family: 'Inter', sans-serif;
}

.product-switch button.active {
    background: #1e40af;
    color: #fff;
}

.product-switch button:hover {
    background: #1e40af;
    color: #fff;
}

/* IMAGE WRAPPER */
.product-spec-image-wrapper {
    position: relative;
    max-width: 860px;
    margin: auto;
}

.product-spec-image-wrapper img {
    width: 100%;
    display: block;
    border-radius: 14px;
}

/* DOWNLOAD PDF CLICK AREA */
.download-pdf-area {
    position: absolute;
    bottom: 22px;
    left: 22px;
    width: 170px;
    height: 42px;
    cursor: pointer;
}

/* ================= FIX NAVBAR & LAYOUT ================= */

/* HILANGIN SPACE KANAN */
html, body {
    margin: 0;
    padding: 0;
    overflow-x: hidden;
}

/* NAVBAR IKUT SCROLL (TARGET YANG BENAR) */
nav {
    position: fixed !important;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 99999;
    background: linear-gradient(to bottom, white, #eef3ff);
}

/* KONTEN TURUN BIAR GA KETUTUP NAVBAR */
.content-area {
    margin-top: 90px;
}

/* SEMUA SECTION FULL WIDTH & AMAN */
section,
.about-hero,
.kiosk-section,
.kiosk-feature-section,
.kiosk-usage-section,
.product-spec-section {
    width: 100%;
}

/* IMAGE AMAN */
img {
    max-width: 100%;
    height: auto;
}


/* ===============================
   RESPONSIVE FIX (TAMBAHAN SAJA)
================================ */

/* TABLET */
@media (max-width:1024px){

.kiosk-content{
    grid-template-columns:1fr;
    gap:40px;
    text-align:center;
}

.kiosk-image img{
    margin:auto;
    max-width:340px;
}

.kiosk-text p{
    margin:auto;
}

.kiosk-features{
    grid-template-columns:repeat(2,1fr);
    justify-items:center;
}

.kiosk-feature-images{
    grid-template-columns:1fr;
}

.kiosk-usage-content{
    grid-template-columns:1fr;
    gap:40px;
    text-align:center;
}

.kiosk-usage-display img{
    margin:auto;
}

}

/* MOBILE */
@media (max-width:768px){

.about-hero{
    height:auto;
    padding:120px 24px 60px;
}

.about-content h1{
    font-size:32px;
}

.about-content p{
    font-size:18px;
}

.kiosk-text h2{
    font-size:28px;
}

.kiosk-usage-title{
    font-size:28px;
}

.product-spec-container h2{
    font-size:26px;
}

.product-switch{
    flex-direction:column;
    align-items:center;
}

.product-switch button{
    width:100%;
    max-width:320px;
}

.kiosk-features{
    grid-template-columns:1fr 1fr;
    gap:16px;
}

.kiosk-usage-icons{
    grid-template-columns:1fr;
    justify-items:center;
}

.kiosk-usage-icons img{
    max-width:220px;
}

}

/* SMALL MOBILE */
@media (max-width:480px){

.about-content h1{
    font-size:26px;
}

.about-content p{
    font-size:16px;
}

.btn-demo{
    padding:12px 26px;
    font-size:14px;
}

.kiosk-text h2{
    font-size:24px;
}

.kiosk-feature-container .main-title{
    font-size:24px;
}

.kiosk-usage-title{
    font-size:24px;
}

.product-spec-image-wrapper{
    padding:0 10px;
}

.download-pdf-area{
    width:140px;
    height:36px;
}

}
</style>

<section class="about-hero">
    <div class="about-content">
        <h1>
            DISPLY Smart Kiosk
        </h1>

        <p>
            Solusi Layanan Mandiri Modern <br/>  
            untuk Bisnis dan Institusi
        </p>

        <a href="/demo" class="btn-demo">Jadwalkan Demo</a>
    </div>
</section>

<section class="kiosk-section">
    <div class="kiosk-container">

        <div class="kiosk-content">

            <!-- IMAGE -->
            <div class="kiosk-image">
                <img src="{{ asset('images/Product/Kiosk/image2.png') }}" alt="Disply Smart Kiosk">
            </div>

            <!-- TEXT -->
            <div class="kiosk-text">
                <h2>DISPLY SMART KIOSK</h2>

                <p>
                    Sampaikan informasi, promosi, dan pesan bisnis secara
                    dinamis melalui layar digital yang terintegrasi.
                </p>

                <p>
                    DISPLY Digital Signage membantu bisnis Anda tampil
                    lebih profesional, informatif, dan responsif
                    dalam satu sistem terpusat.
                </p>

                <!-- ICONS -->
                <div class="kiosk-features">
                    <img src="{{ asset('images/Product/Kiosk/image3.png') }}" alt="Self Check In">
                    <img src="{{ asset('images/Product/Kiosk/image4.png') }}" alt="Registrasi & Verifikasi">
                    <img src="{{ asset('images/Product/Kiosk/image5.png') }}" alt="Pembayaran & Cetak Tiket">
                    <img src="{{ asset('images/Product/Kiosk/image6.png') }}" alt="Integrasi Sistem">
                </div>
            </div>

        </div>

    </div>
</section>

<section class="kiosk-feature-section">
    <div class="kiosk-feature-container">

        <div class="sub-title">FITUR UNGGULAN</div>
        <div class="main-title">DISPLY SMART KIOSK</div>

        <!-- =========== LAYOUT 2 KOLOM SEPERTI IWB =========== -->
        <div class="kiosk-feature-images">
            <!-- KOLOM KIRI -->
            <div>
                <img src="{{ asset('images/Product/Kiosk/image7.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image8.png') }}" alt="">
            </div>
            
            <!-- KOLOM KANAN -->
            <div>
                <img src="{{ asset('images/Product/Kiosk/image9.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image10.png') }}" alt="">
            </div>
        </div>

    </div>
</section>

<section class="kiosk-usage-section">
    <div class="kiosk-usage-container">

        <h2 class="kiosk-usage-title">
            Penggunaan <span>DISPLY</span>
        </h2>

        <div class="kiosk-usage-content">

            <!-- LEFT ICONS -->
            <div class="kiosk-usage-icons">
                <img src="{{ asset('images/Product/Kiosk/image11.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image12.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image13.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image14.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image15.png') }}" alt="">
                <img src="{{ asset('images/Product/Kiosk/image16.png') }}" alt="">
            </div>

            <!-- RIGHT DISPLAY -->
            <div class="kiosk-usage-display">
                <img src="{{ asset('images/Product/Kiosk/image17.png') }}" alt="">
            </div>

        </div>

    </div>
</section>

<section class="product-spec-section">
    <div class="product-spec-container">

        <h4>JELAJAHI PRODUCT</h4>
        <h2>Spesifikasi Lengkap</h2>

        <!-- SWITCH BUTTON -->
        <div class="product-switch">
            <button class="active" onclick="showSpec('floor')">
                DISPLY Smart Kiosk - Floor Stand
            </button>
            <button onclick="showSpec('wall')">
                DISPLY Smart Kiosk - Wall Mount
            </button>
        </div>

        <!-- IMAGE -->
        <div class="product-spec-image-wrapper">
            <img
                id="productSpecImage"
                src="{{ asset('images/Product/Kiosk/image18.png') }}"
                alt="Disply Smart Kiosk"
            >

            <!-- DOWNLOAD PDF -->
            <a
                id="downloadPdf"
                href="{{ asset('pdf/BrosurKiosk.pdf') }}"
                class="download-pdf-area"
                download="kiosk-floor-stand.pdf"
            ></a>

        </div>

    </div>
</section>


<script>
function showSpec(type) {
    const image = document.getElementById('productSpecImage');
    const pdf = document.getElementById('downloadPdf');
    const buttons = document.querySelectorAll('.product-switch button');

    buttons.forEach(btn => btn.classList.remove('active'));

    if (type === 'floor') {
        image.src = "{{ asset('images/Product/Kiosk/image18.png') }}";
        pdf.href  = "{{ asset('pdf/Malika, Restu, Tiara.pdf') }}";
        pdf.setAttribute('download', 'kiosk-floor-stand.pdf');
        buttons[0].classList.add('active');
    } else {
        image.src = "{{ asset('images/Product/Kiosk/image19.png') }}";
        pdf.href  = "{{ asset('pdf/Kafiya, Restu, Yuni.pdf') }}";
        pdf.setAttribute('download', 'kiosk-wall-mount.pdf');
        buttons[1].classList.add('active');
    }
}
</script>



@endsection