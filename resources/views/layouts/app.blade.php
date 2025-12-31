<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Display App' }}</title>

    <style>
        /* RESET */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #eef3ff;
            overflow-x: hidden;
        }

        /* NAVBAR */
        nav {
            width: 100%;
            background: linear-gradient(to bottom, white, #eef3ff);
            padding: 16px 0;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            position: relative;
            z-index: 10;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            align-items: center;
            position: relative;
        }

        /* LOGO */
        .logo img {
            height: 52px;
            display: block;
        }

        /* MENU */
        ul.menu {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 32px;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        ul.menu li a {
            text-decoration: none;
            font-size: 16px;
            color: #1f2b3d;
            font-weight: 500;
            transition: 0.2s;
        }

        ul.menu li a:hover {
            color: #1E40AF;
        }

        /* CONTENT AREA */
        .content-area {
            margin-top: 0;
            padding: 0;
            overflow: visible;
        }

/* ===============================
   WHATSAPP FLOATING BUTTON
=============================== */
.wa-fixed {
    position: fixed;
    right: 24px;
    bottom: 24px;

    width: 64px;
    height: 64px;

    border-radius: 50%;
    overflow: hidden;          /* <<< INI KUNCINYA */
    background: transparent;

    display: flex;
    align-items: center;
    justify-content: center;

    z-index: 999999;
}

.wa-fixed img {
    width: 116px;
    height: 116px;
    object-fit: cover;         /* potong gambar */
    border-radius: 50%;
    display: block;
}

.wa-fixed:hover {
    transform: scale(1.08);
}

/* REQUEST DEMO BUTTON */
.request-demo {
    position: absolute;
    right: 24px;
    padding: 12px 22px;

    background: #193295;
    color: #fff;
    text-decoration: none;
    font-size: 15px;
    font-weight: 600;

    border-radius: 999px;
    transition: 0.25s ease;
    white-space: nowrap;
}

.request-demo:hover {
    background: #14246f;
    transform: translateY(-1px);
}

/* =========================
   DROPDOWN PRODUCT
========================= */
.dropdown {
    position: relative;
}

.dropdown-menu {
    position: absolute;
    top: 120%;
    left: 50%;
    transform: translateX(-50%);

    background: #ffffff;
    min-width: 220px;
    padding: 10px 0;

    border-radius: 12px;
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);

    list-style: none;
    opacity: 0;
    visibility: hidden;
    transition: 0.25s ease;
    z-index: 999;
}

.dropdown-menu li a {
    display: block;
    padding: 10px 20px;
    font-size: 14px;
    color: #1f2b3d;
    text-decoration: none;
}

.dropdown-menu li a:hover {
    background: #eef3ff;
    color: #193295;
}

/* SHOW DROPDOWN */
.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    top: 100%;
}


    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="nav-container">
            <a href="/" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Display Logo">
            </a>

<ul class="menu">
    <li class="dropdown">
        <a href="/product">Product</a>
        <ul class="dropdown-menu">
            <li><a href="/product/iwb">Interactive Whiteboard</a></li>
            <li><a href="/product/digital-signage">Digital Signage</a></li>
            <li><a href="/product/kiosk">Kiosk</a></li>
        </ul>
    </li>

    <li><a href="/service">Service</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/about">About Us</a></li>
    <li><a href="/partner">Become a Partner</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>


            <a href="/demo" class="request-demo">
    Request Demo
</a>

        </div>
    </nav>

    <!-- CONTENT -->
    <div class="content-area">
        @yield('content')
    </div>

    <!-- FLOATING WHATSAPP -->
    <a href="https://wa.me/6281804113951"
       class="wa-fixed"
       target="_blank"
       aria-label="Chat WhatsApp">
        <img src="{{ asset('images/wa-icon.png') }}" alt="WhatsApp">
    </a>

    <!-- FOOTER -->
    @include('partials.footer')

</body>
</html>
