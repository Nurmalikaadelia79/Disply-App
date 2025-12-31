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
    font-weight: 700;
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
        font-size: 28px;
    }
}

/* ========================= IWB SECTION ========================= */
.iwb-section {
    padding: 80px 24px 100px;
    background: linear-gradient(180deg, #ffffff 0%, #eef3ff 100%);
}

.iwb-container {
    max-width: 1200px;
    margin: auto;
}

.iwb-top {
    display: grid;
    grid-template-columns: 1.1fr 1fr;
    gap: 60px;
    align-items: center;
}

.iwb-text h1 {
    font-size: 32px;
    font-weight: 700;
    color: #193295;
    margin-bottom: 18px;
    line-height: 1.2;
}

.iwb-text p {
    font-size: 16px;
    line-height: 1.7;
    color: #1f2b3d;
    margin-bottom: 18px;
    max-width: 520px;
    font-weight: 400;
}

.iwb-features {
    margin-top: 40px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
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

@media (max-width: 992px) {
    .iwb-top {
        grid-template-columns: 1fr;
        text-align: center;
    }
    .iwb-display img {
        margin: 40px auto 0;
    }
    .iwb-features {
        grid-template-columns: repeat(2, 1fr);
        margin-left: auto;
        margin-right: auto;
    }
}

@media (max-width: 480px) {
    .iwb-features {
        grid-template-columns: 1fr;
    }
}

/* ========================= IWB FEATURES ICON SECTION ========================= */
.iwb-feature-icons {
    padding: 90px 24px 110px;
    background: radial-gradient(circle at top, #f3f6ff 0%, #ffffff 70%);
}

.iwb-feature-icons-container {
    max-width: 900px;
    margin: auto;
    text-align: center;
}

.iwb-feature-icons h4 {
    font-size: 14px;
    font-weight: 600;
    color: black;
    margin-bottom: 6px;
    text-transform: uppercase;
}

.iwb-feature-icons h2 {
    font-size: 26px;
    font-weight: 700;
    color: #193295;
    margin-bottom: 50px;
    line-height: 1.3;
}

.iwb-feature-list {
    display: flex;
    flex-direction: column;
    gap: 30px;
    align-items: center;
}

.iwb-feature-list img {
    width: 100%;
    max-width: 500px;
    display: block;
    height: auto;
    margin: 0 auto;
}

/* ========================= PENGGUNAAN DISPLY SECTION ========================= */
.iwb-usage-section {
    padding: 90px 24px 120px;
    background: linear-gradient(180deg, #f3f6ff 0%, #ffffff 100%);
}

.iwb-usage-container {
    max-width: 1200px;
    margin: auto;
}

.iwb-usage-title {
    text-align: center;
    margin-bottom: 60px;
}

.iwb-usage-title h2 {
    font-size: 28px;
    font-weight: 700;
    color: #000;
    line-height: 1.3;
}

.iwb-usage-title span {
    color: #1e40af;
    font-weight: 700;
}

.iwb-usage-content {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 60px;
    align-items: center;
}

.iwb-usage-tv img {
    width: 100%;
    max-width: 460px;
    display: block;
    margin: auto;
}

.iwb-usage-list {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.iwb-usage-list img {
    width: 100%;
    max-width: 260px;
    height: auto;
    display: block;
    margin: 0 auto;
}

@media (max-width: 992px) {
    .iwb-usage-content {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 40px;
    }
    .iwb-usage-list {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .iwb-usage-list {
        grid-template-columns: 1fr;
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
    font-size: 14px;
    font-weight: 600;
    color: #1e40af;
    margin-bottom: 6px;
    text-transform: uppercase;
}

.product-spec-container h2 {
    font-size: 28px;
    font-weight: 700;
    color: #000;
    margin-bottom: 26px;
    line-height: 1.3;
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
    font-size: 14px;
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
    font-size: 20px;
    font-weight: 700;
    color: #000;
    margin-bottom: 14px;
    line-height: 1.3;
}

.product-spec-right p {
    font-size: 15px;
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
    font-size: 14px;
    font-weight: 400;
}

.product-spec-item span {
    display: block;
    color: #64748b;
    font-size: 13px;
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
            DISPLY Interactive<br>
            Whiteboard
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

        <div class="iwb-feature-list">
            <img src="{{ asset('images/Product/IWB/image7.png') }}" alt="Digital Whiteboard Interaktif">
            <img src="{{ asset('images/Product/IWB/image8.png') }}" alt="Multi-Touch & Multi-User">
            <img src="{{ asset('images/Product/IWB/image9.png') }}" alt="Dual OS Android Windows">
            <img src="{{ asset('images/Product/IWB/image10.png') }}" alt="Resolusi 4K Ultra HD">
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
                href="{{ asset('pdf/nurmalika.pdf') }}" 
                class="download-pdf-area"
                download
            ></a>
        </div>
    </div>
</section>


@endsection
