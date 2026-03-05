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


@endsection