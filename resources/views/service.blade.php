@extends('layouts.frontend')

@section('content')

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
    .service-hero {
        position: relative;
        width: 100%;
        height: 450px; /* DIKURANGI dari 470px */
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
        font-size: 40px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 15px; /* DIKURANGI dari 20px */
    }

    .service-overlay p {
        font-size: 20px;
        line-height: 1.6; /* DIKURANGI dari 1.7 */
        margin-top: 15px; /* DIKURANGI dari 20px */
        max-width: 850px;
    }

    /* SERVICE SECTION - JARAK DIPERKECIL LAGI */
    .service-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 30px 20px; /* ATAS: 40px (dari 60px), BAWAH: 20px (dari 30px) */
    }

    /* SECTION BOX - JARAK ANTAR SECTION DIPERKECIL LAGI */
    .section-box {
        margin-bottom: 60px; /* DIKURANGI dari 80px */
    }

    /* SECTION YANG TERAKHIR TIDAK PERLU MARGIN BAWAH */
    .section-box:last-child {
        margin-bottom: 0;
    }

    .section-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 40px; /* DIKURANGI dari 60px */
    }

    /* TITLE & DESC */
    .section-title {
        font-size: 40px;
        font-weight: 700;
        color: #1B4DFF;
        margin-bottom: 10px; /* DIKURANGI dari 12px */
    }

    .section-desc {
        font-size: 22px;
        line-height: 1.6; /* DIKURANGI dari 1.8 */
        margin-bottom: 25px; /* DIKURANGI dari 32px */
        max-width: 550px;
    }

    /* IMAGE SECTION */
    .section-image img {
        width: 580px;
        max-width: 100%;
        border-radius: 8px;
    }

    .icon-group {
        width: 320px; /* DARI 280px */
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .icon-row-top {
        display: flex;
        justify-content: center;
        gap: 30px; /* DIKURANGI dari 35px */
        margin-bottom: 50px; /* DIKURANGI dari 65px */
    }

    /* ICON DIBESARIN BANGET! */
    .icon-row-top img,
    .icon-bottom img {
        width: 170px !important; /* DARI 105px - BESAR BANGET! */
        height: 170px !important;
        object-fit: contain;
    }

    /*SECTION 3 CUSTOM LAYOUT*/
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
        gap: 40px; /* DIKURANGI dari 50px */
        margin-top: 30px; /* DIKURANGI dari 40px */
    }

    .icon-item {
        text-align: center;
    }

    .icon-item img {
        width: 130px !important;   /* DIBESARIN */
        height: 130px !important;
        object-fit: contain;
        margin-bottom: 10px; /* DIKURANGI dari 12px */
    }

    .icon-item p {
        font-size: 17px;
        color: #1A1A1A;
        font-weight: 600;
        margin-top: 5px;
    }

    /* WHY DISPLY SECTION - JUDUL DI ATAS! */
/* =====================================
   WHY DISPLY SECTION - JUDUL DI ATAS
===================================== */

.why-disply-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px 60px 20px;
}

/* JUDUL */
.why-disply-title {
    font-size: 42px;
    font-weight: 700;
    color: #000;
    text-align: center;
    margin-bottom: 45px;
}

.why-disply-title span {
    color: #1B4DFF;
}

/* WRAPPER */
.why-disply-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 70px;
}

/* GAMBAR */
.why-disply-image {
    flex: 0 0 55%;
}

.why-disply-image img {
    width: 100%;
    max-width: 680px;
    border-radius: 10px;
}

/* CONTAINER TEKS */
.why-disply-list-container {
    flex: 0 0 45%;
}

/* ITEM (ICON + TEKS) */
.why-disply-item {
    display: flex;
    align-items: center; /* icon dan teks center */
    gap: 48px; /* jarak icon dan teks */
    margin-bottom: 24px;
}

/* ICON */
.why-disply-icon {
    width: 46px;
    height: 46px;
    flex-shrink: 0;
}

/* TEKS */
.why-disply-text {
    font-size: 22px;
    font-weight: 400;
    line-height: 1.7;
    max-width: 520px;
    color: #1A1A1A;
}

    /* RESPONSIVE BREAKPOINTS */
    @media(max-width: 1100px) {
        .section-image img,
        .image-right img {
            width: 520px;
        }
        
        .why-disply-image img {
            max-width: 550px;
        }
        
        .why-disply-content {
            gap: 40px; /* DIKURANGI dari 50px */
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
            gap: 30px; /* DIKURANGI dari 40px */
        }

        .section-desc {
            max-width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .icon-group {
            margin-top: 20px; /* DIKURANGI dari 30px */
            width: 280px;
        }
        
        .icon-row-top img,
        .icon-bottom img {
            width: 110px !important;
            height: 110px !important;
        }
        
        .icon-grid-section3 {
            margin-top: 20px; /* DIKURANGI dari 30px */
        }

        /* WHY DISPLY RESPONSIVE */
        .why-disply-content {
            flex-direction: column;
            text-align: center;
            gap: 30px; /* DIKURANGI dari 40px */
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
            margin: 0 auto 15px auto; /* DIKURANGI dari 18px */
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
        
        /* SECTION BOX JARAK LEBIH KECIL DI TABLET */
        .section-box {
            margin-bottom: 50px; /* DIKURANGI dari 70px */
        }
    }

    @media(max-width: 768px) {
        .service-section,
        .why-disply-section {
            padding: 30px 20px; /* DIKURANGI dari 40px */
        }
        
        .service-overlay h1 {
            font-size: 42px;
        }
        
        .service-overlay p {
            font-size: 18px;
        }
        
        .why-disply-title {
            font-size: 36px;
            margin-bottom: 30px !important; /* DIKURANGI dari 40px */
        }

        .why-disply-image img {
            width: 100%;
        }
        
        /* SECTION BOX JARAK LEBIH KECIL DI MOBILE */
        .section-box {
            margin-bottom: 40px; /* DIKURANGI dari 60px */
        }
        
        .section-row {
            gap: 25px; /* DIKURANGI dari 30px */
        }
        
        .service-hero {
            height: 400px; /* DIKURANGI dari 420px */
        }
        
        .icon-grid-section3 {
            gap: 20px; /* DIKURANGI dari 25px */
        }
    }

    @media(max-width: 576px) {
        .service-hero {
            height: 350px; /* DIKURANGI dari 380px */
        }
        
        .service-overlay h1 {
            font-size: 32px; /* DARI 36px JADI 32px */
            margin-bottom: 10px; /* TAMBAHAN */
        }
        
        .service-overlay p {
            font-size: 16px;
            max-width: 100%;
            line-height: 1.5; /* DIKURANGI dari 1.6 */
            margin-top: 10px; /* DIKURANGI dari default */
        }
        
        .section-title, .why-disply-title {
            font-size: 28px; /* DARI 32px JADI 28px */
        }
        
        .section-desc {
            font-size: 18px; /* DARI 22px JADI 18px */
            line-height: 1.5; /* DIKURANGI dari 1.6 */
            margin-bottom: 20px; /* TAMBAHAN */
        }
        
        .why-disply-text {
            font-size: 18px;
            line-height: 1.4; /* TAMBAHAN */
        }
        
        .icon-grid-section3 {
            gap: 15px; /* DIKURANGI dari 20px */
            flex-wrap: wrap;
            justify-content: center;
        }
        
        .why-disply-icon {
            width: 28px !important;
            height: 28px !important;
        }
        
        .icon-row-top {
            gap: 20px; /* DIKURANGI dari 25px */
            margin-bottom: 30px; /* DIKURANGI dari 40px */
        }
        
        .icon-row-top img,
        .icon-bottom img {
            width: 90px !important;
            height: 90px !important;
        }
        
        .icon-item img {
            width: 80px !important;
            height: 80px !important;
        }
        
        /* SECTION BOX JARAK LEBIH KECIL DI SMALL MOBILE */
        .section-box {
            margin-bottom: 35px; /* DIKURANGI dari 50px */
        }
        
        .service-section {
            padding: 25px 15px; /* DIKURANGI dari 30px */
        }
        
        .why-disply-item {
            margin-bottom: 15px; /* TAMBAHAN */
            gap: 12px; /* TAMBAHAN */
        }
        
        /* JARAK PARAGRAF DI MOBILE */
        p {
            margin-bottom: 1em;
        }
    }

    /* TAMBAHAN: Memastikan tidak ada jarak kosong yang berlebihan */
    body {
        line-height: 1.4;
    }

    /* Mengurangi jarak default pada elemen */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>
<!-- =====================================
     HERO SECTION - JUDUL DIKIRI
===================================== -->
<div class="service-hero">
    <img src="{{ asset('images/Service/image1.png') }}" class="service-bg">
    <div class="service-overlay">
        <h1>Smart Display Services for <br> Smarter Business Operations</h1>
        <p>DISPLY menyediakan layanan end-to-end untuk memastikan solusi smart <br> 
            display berjalan optimal, stabil, dan sesuai kebutuhan operasional bisnis Anda <br> 
             dari implementasi hingga dukungan jangka panjang.</p>
        
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