@extends('layouts.app')

@section('content')

<style>
/* =====================================
   HERO SECTION - JUDUL DIKIRI SAJA
===================================== */
.service-hero {
    position: relative;
    width: 100%;
    height: 470px;
    overflow: hidden;
}

.service-bg {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* JUDUL HERO DIKIRI */
.service-overlay {
    position: absolute;
    top: 50%;
    left: 10%; /* DIKIRI */
    transform: translateY(-50%);
    text-align: left;
    width: 50%;
    color: #fff;
}

.service-overlay h1 {
    font-size: 52px;
    font-weight: 700;
    line-height: 1.2;
    margin-bottom: 20px;
}

.service-overlay p {
    font-size: 20px;
    line-height: 1.7;
    margin-top: 20px;
    max-width: 550px;
}



/* =====================================
   CONTENT WRAPPER
===================================== */
.service-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 80px 30px;
}

.section-box {
    margin-bottom: 120px;
}

.section-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 60px;
}

/* TITLE & DESC */
.section-title {
    font-size: 40px;
    font-weight: 700;
    color: #1B4DFF;
    margin-bottom: 12px;
}

.section-desc {
    font-size: 22px;
    line-height: 1.8;
    margin-bottom: 32px;
    max-width: 550px;
}


/* =====================================
   IMAGE
===================================== */
.section-image img {
    width: 580px;
    max-width: 100%;
    border-radius: 8px;
}

/* =====================================
   SECTION 1 ICON GROUP - ICON BESAR BANGET!
===================================== */
.icon-group {
    width: 320px; /* DARI 280px */
    display: flex;
    flex-direction: column;
    align-items: center;
}

.icon-row-top {
    display: flex;
    justify-content: center;
    gap: 35px; /* DARI 30px */
    margin-bottom: 65px; /* DARI 60px */
}

/* ICON DIBESARIN BANGET! */
.icon-row-top img,
.icon-bottom img {
    width: 170px !important; /* DARI 105px - BESAR BANGET! */
    height: 170px !important;
    object-fit: contain;
}



/* =====================================
   SECTION 3 CUSTOM LAYOUT
===================================== */
.section-3 .small-image img {
    width: 580px;
    max-width: 100%;
}

.image-right img {
    width: 580px;
    max-width: 100%;
    border-radius: 8px;
}

/* ICON SECTION 3 BESAR BANGET! */
.icon-grid-section3 {
    display: flex;
    align-items: center;
    gap: 50px; /* DARI 45px */
    margin-top: 40px;
}

.icon-item {
    text-align: center;
}

.icon-item img {
    width: 130px !important;   /* DIBESARIN */
    height: 130px !important;
    object-fit: contain;
    margin-bottom: 12px;
}


.icon-item p {
    font-size: 17px;
    color: #1A1A1A;
    font-weight: 600;
    margin-top: 5px;
}



/* =====================================
   WHY DISPLY SECTION - JUDUL DI ATAS!
===================================== */
.why-disply-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px 20px 120px 20px;
}

/* JUDUL DI TENGAH ATAS */
.why-disply-title {
    font-size: 42px;
    font-weight: 700;
    color: #000; /* HITAM */
    text-align: center;
    margin-bottom: 60px !important;
}

.why-disply-title span {
    color: #1B4DFF; /* BIRU DISPLY */
}


/* CONTENT TANPA JUDUL LAGI */
.why-disply-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 80px;
}

/* GAMBAR BESAR DI KIRI - 55% */
.why-disply-image {
    flex: 0 0 55%;
}

.why-disply-image img {
    width: 100%;
    max-width: 620px;
    border-radius: 10px;
}

/* TEKS DI KANAN - 40% */
.why-disply-list-container {
    flex: 0 0 40%;
}

.why-disply-item {
    display: flex;
    align-items: flex-start;
    gap: 15px;
    margin-bottom: 18px;
}

.why-disply-icon {
    width: 36px !important; /* dari 32px */
    height: 36px !important;
    flex-shrink: 0;
    margin-top: 5px;
}


.why-disply-text {
    font-size: 22px; /* dari 20px */
    font-weight: 500;
    line-height: 1.7;
    max-width: 420px;
}




/* =====================================
   RESPONSIVE
===================================== */
@media(max-width: 1100px) {
    .section-image img,
    .image-right img {
        width: 520px;
    }
    
    .why-disply-image img {
        max-width: 550px;
    }
}

@media(max-width: 992px) {
    .service-overlay {
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 80%;
    }
    
    .service-overlay p {
        margin-left: auto;
        margin-right: auto;
    }

    .section-row {
        flex-direction: column;
        text-align: center;
        gap: 50px;
    }

    .section-desc {
        max-width: 100%;
        margin-left: auto;
        margin-right: auto;
    }

    .icon-group {
        margin-top: 40px;
        width: 280px;
    }
    
    .icon-row-top img,
    .icon-bottom img {
        width: 110px !important;
        height: 110px !important;
    }

    /* WHY DISPLY RESPONSIVE */
    .why-disply-content {
        flex-direction: column;
        text-align: center;
        gap: 60px;
    }
    
    .why-disply-image,
    .why-disply-list-container {
        flex: 0 0 100%;
        width: 100%;
    }
    
    .why-disply-image img {
        max-width: 100%;
    }
    
    .why-disply-item {
        justify-content: center;
        max-width: 500px;
        margin: 0 auto 18px auto;
    }
    
    .why-disply-text {
        max-width: 100%;
    }
    
    .section-image img,
    .image-right img {
        width: 100%;
        max-width: 600px;
        margin: 0 auto;
        display: block;
    }
    
    .icon-item img {
        width: 95px !important;
        height: 95px !important;
    }
}

@media(max-width: 768px) {
    .service-section,
    .why-disply-section {
        padding: 40px 20px;
    }
    
    .service-overlay h1 {
        font-size: 42px;
    }
    
    .service-overlay p {
        font-size: 18px;
    }
    
    .why-disply-title {
        font-size: 36px;
        margin-bottom: 50px !important;
    }

    .why-disply-image img {
        width: 100%;
    }
}

@media(max-width: 576px) {
    .service-hero {
        height: 400px;
    }
    
    .service-overlay h1 {
        font-size: 36px;
    }
    
    .service-overlay p {
        font-size: 16px;
        max-width: 100%;
    }
    
    .section-title, .why-disply-title {
        font-size: 32px;
    }
    
    .section-desc {
        font-size: 22px;
    }
    
    .why-disply-text {
        font-size: 18px;
    }
    
    .icon-grid-section3 {
        gap: 30px;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .why-disply-icon {
        width: 28px !important;
        height: 28px !important;
    }
}

</style>


<!-- =====================================
     HERO SECTION - JUDUL DIKIRI
===================================== -->
<div class="service-hero">
    <img src="{{ asset('images/Service/image1.png') }}" class="service-bg">
    <div class="service-overlay">
        <h1>Smart Display Services for <br> Smarter Business Operations</h1>
        <p>DISPLY menyediakan layanan end-to-end untuk memastikan solusi smart display berjalan optimal dan stabil.</p>
    </div>
</div>


<!-- =====================================
     CONTENT SECTION
===================================== -->
<div class="service-section">

    <!-- ============================ SECTION 1 ============================ -->
    <div class="section-box">
        <div class="section-row">

            <div class="left-content">
                <h2 class="section-title">1. Consultation & Needs <br/> Assessment</h2>
                <p class="section-desc">
                    Kami membantu Anda memetakan kebutuhan bisnis sebelum implementasi. Tim DISPLY melakukan
                    analisis lokasi, alur operasional, serta kebutuhan interaksi pengguna untuk memastikan solusi
                    yang diterapkan benar-benar relevan dan berdampak.
                </p>

             
            </div>

            <div class="icon-group">
                <div class="icon-row-top">
                    <img src="{{ asset('images/Service/icon1.png') }}" alt="">
                    <img src="{{ asset('images/Service/icon2.png') }}" alt="">
                </div>
                <div class="icon-bottom">
                    <img src="{{ asset('images/Service/icon3.png') }}" alt="">
                </div>
            </div>

        </div>
    </div>


    <!-- ============================ SECTION 2 ============================ -->
    <div class="section-box">
        <div class="section-row">

            <div class="section-image">
                <img src="{{ asset('images/Service/image2.png') }}" alt="">
            </div>

            <div class="text-content">
                <h2 class="section-title">2. System Design <br/>  & Custom Integration</h2>
                <p class="section-desc">
                    Setiap bisnis memiliki sistem yang berbeda. DISPLY menyediakan layanan desain sistem dan integrasi
                    ke sistem internal Anda. Mulai dari HIS, ERP, database internal, hingga platform digital lainnya
                    yang dirancang agar berjalan mulus dalam satu ekosistem.
                </p>
            </div>

        </div>
    </div>


<!-- ============================ SECTION 3 ============================ -->
<div class="section-box section-3">
    <div class="section-row">

        <div class="left-content">
            <h2 class="section-title">3. Installation & Deployment</h2>
            <p class="section-desc">
                Kami memastikan instalasi berjalan rapi, aman, dan siap digunakan.
                Tim teknis DISPLY melakukan pemasangan perangkat, konfigurasi sistem,
                hingga uji fungsi sebelum solusi digunakan secara penuh.
            </p>

            <!-- ICON GRID SIMPLE -->
            <div class="icon-grid-section3">
                <div class="icon-item">
                    <img src="{{ asset('images/Service/icon4.png') }}" alt="">
                </div>

                <div class="icon-item">
                    <img src="{{ asset('images/Service/icon5.png') }}" alt="">
                </div>

                <div class="icon-item">
                    <img src="{{ asset('images/Service/icon6.png') }}" alt="">
                </div>
            </div>

        </div>

        <div class="image-right">
            <img src="{{ asset('images/Service/image3.png') }}" alt="">
        </div>

    </div>
</div>



    <!-- ============================ SECTION 4 ============================ -->
    <div class="section-box">
        <div class="section-row">

            <div class="section-image">
                <img src="{{ asset('images/Service/image4.png') }}" alt="">
            </div>

            <div class="text-content">
                <h2 class="section-title">4. Maintenance & After <br/> Sales Support</h2>
                <p class="section-desc">
                    DISPLY menyediakan layanan pemeliharaan berkelanjutan untuk memastikan semua perangkat dan sistem
                    tetap berjalan optimal dalam jangka panjang.
                </p>
            </div>

        </div>
    </div>

</div>



<!-- =====================================
     WHY DISPLY SECTION - JUDUL DI ATAS!
===================================== -->
<div class="why-disply-section">
    <!-- JUDUL DI TENGAH ATAS -->
   <h2 class="why-disply-title">
    Why <span>Disply</span> Services?
</h2>

    
    <!-- CONTENT TANPA JUDUL LAGI -->
    <div class="why-disply-content">

        <!-- GAMBAR BESAR DI KIRI (55%) -->
        <div class="why-disply-image">
            <img src="{{ asset('images/Service/image5.png') }}" alt="Why Disply Services">
        </div>

        <!-- TEKS SINGKAT DI KANAN (40%) -->
        <div class="why-disply-list-container">
            <div class="why-disply-item">
                <img src="{{ asset('images/Service/icon7.png') }}" class="why-disply-icon" alt="Check">
                <div class="why-disply-text">Berpengalaman di lingkungan enterprise & fasilitas publik</div>
            </div>

            <div class="why-disply-item">
                <img src="{{ asset('images/Service/icon7.png') }}" class="why-disply-icon" alt="Check">
                <div class="why-disply-text">Tim teknis & integrasi profesional</div>
            </div>

            <div class="why-disply-item">
                <img src="{{ asset('images/Service/icon7.png') }}" class="why-disply-icon" alt="Check">
                <div class="why-disply-text">Didukung penuh oleh PT United Teknologi Integrasi</div>
            </div>

        </div>
    </div>
</div>

@endsection