<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Display App' }}</title>

<style>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

body {
    margin: 0; 
    font-family: 'Inter', sans-serif;
    background: #eef3ff;
    overflow-x: hidden;
    width: 100%;
}

nav {
    width: 100%;
    background: linear-gradient(to bottom, white, #eef3ff);
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    position: sticky;
    top: 0;
    z-index: 1000;
}

.nav-container {
    padding: 0 60px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 90px;
}

.logo img {
    height: 90px;
}

.hamburger {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.hamburger span {
    height: 3px;
    width: 25px;
    background: #1f2b3d;
    margin: 4px 0;
    transition: 0.3s;
}

ul.menu {
    display: flex;
    gap: 40px;
    list-style: none;
    margin: 0 auto;
    padding: 0;
}

ul.menu li a {
    text-decoration: none;
    font-size: 17px;
    color: #1f2b3d;
    font-weight: 500;
}

ul.menu li a:hover {
    color: #1E40AF;
}

/* DROPDOWN */
.dropdown {
    position: relative;
}

.dropdown > a::after {
    content: "▾";
    margin-left: 6px;
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: #fff;
    min-width: 220px;
    padding: 8px 0;
    border-radius: 12px;
    box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    list-style: none;
    opacity: 0;
    visibility: hidden;
    transition: 0.25s;
}

.dropdown-menu li a {
    display: block;
    padding: 12px 20px;
    font-size: 15px;
}

/* PRODUCT DROPDOWN WITH IMAGE */
.product-dropdown li a {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 14px 20px;
}

.product-dropdown li a img {
    width: 36px;
    height: 36px;
    object-fit: contain;
}

.product-dropdown li a span {
    font-size: 15px;
    font-weight: 500;
}
.dropdown-menu li a:hover {
    background: #eef3ff;
    color: #193295;
}
.kiosk-icon {
    transform: scale(1.2);
}

.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
}

/* REQUEST DEMO */
.request-demo {
    padding: 14px 28px;
    background: #193295;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    border-radius: 999px;
}

.request-demo:hover {
    background: #14246f;
}

/* CONTENT - TIDAK PERLU MARGIN TOP LAGI KARENA NAVBAR SUDAH STICKY */
.content-area {
    width: 100%;
}

/* MOBILE */
@media (max-width: 820px) {

    .hamburger {
        display: flex;
    }

    ul.menu {
        display: none;
        position: fixed;
        top: 90px;
        left: 0;
        width: 100%;
        height: calc(100vh - 90px);
        background: white;
        flex-direction: column;
        padding: 20px 0;
        overflow-y: auto;
    }

    ul.menu.active {
        display: flex;
    }

    ul.menu li {
        border-bottom: 1px solid #eee;
    }

    ul.menu li a {
        padding: 18px 30px;
        display: block;
    }

    .dropdown {
        position: static;
    }

    .dropdown-menu {
        position: static;
        transform: none;
        box-shadow: none;
        background: #f7f9ff;
        opacity: 1;
        visibility: visible;
        display: none;
    }

    .dropdown.active .dropdown-menu {
        display: block;
    }

    .request-demo {
        display: none;
    }
}

/* HAMBURGER ANIMATION */
.hamburger.active span:nth-child(1) {
    transform: rotate(45deg) translate(6px, 6px);
}

.hamburger.active span:nth-child(2) {
    opacity: 0;
}

.hamburger.active span:nth-child(3) {
    transform: rotate(-45deg) translate(6px, -6px);
}
</style>
</head>
<body>

<nav>
<div class="nav-container">

<a href="/" class="logo">
    <img src="{{ asset('images/logo.png') }}" alt="Display Logo">
</a>

<div class="hamburger" id="hamburgerBtn">
    <span></span>
    <span></span>
    <span></span>
</div>

<ul class="menu" id="mainMenu">
    <li><a href="/about">About Us</a></li>

    <!-- PRODUCT DROPDOWN -->
<li class="dropdown" id="productDropdown">
    <a href="#">Product</a>
    <ul class="dropdown-menu product-dropdown">
        <li>
            <a href="/product/iwb">
                <img src="{{ asset('images/Product/IWB.PNG') }}" alt="IWB">
                <span>Interactive Whiteboard</span>
            </a>
        </li>
        <li>
            <a href="/product/digital-signage">
                <img src="{{ asset('images/Product/Signage.PNG') }}" alt="Signage">
                <span>Digital Signage</span>
            </a>
        </li>
        <li>
            <a href="/product/kiosk">
               <img src="{{ asset('images/Product/Kiosk.PNG') }}" alt="Kiosk" class="kiosk-icon">
                <span>Smart Kiosk</span>
            </a>
        </li>
    </ul>
</li>

    <!-- USECASE DROPDOWN -->
    <li class="dropdown" id="usecaseDropdown">
        <a href="#">Use Case</a>
        <ul class="dropdown-menu">
            <li><a href="/usecase/interactive-whiteboard">Interactive Whiteboard</a></li>
            <li><a href="/usecase/digital-signage">Digital Signage</a></li>
            <li><a href="/usecase/kiosk">Smart Kiosk</a></li>
        </ul>
    </li>

    <li><a href="/service">Service</a></li>
    <li><a href="/blog">Blog</a></li>
    <li><a href="/partner">Become a Partner</a></li>
    <li><a href="/contact">Contact</a></li>
</ul>

<a href="/demo" class="request-demo">
    Request Demo
</a>

</div>
</nav>

<div class="content-area">
    @yield('content')
</div>

@include('partials.footer')

<script>
document.addEventListener('DOMContentLoaded', function() {

const hamburgerBtn = document.getElementById('hamburgerBtn');
const mainMenu = document.getElementById('mainMenu');
const productDropdown = document.getElementById('productDropdown');
const usecaseDropdown = document.getElementById('usecaseDropdown');

function isMobile() {
    return window.innerWidth <= 820;
}

hamburgerBtn.addEventListener('click', function() {
    hamburgerBtn.classList.toggle('active');
    mainMenu.classList.toggle('active');
});

function setupDropdown(dropdown) {
    const link = dropdown.querySelector('a');
    link.addEventListener('click', function(e) {
        if (isMobile()) {
            e.preventDefault();
            dropdown.classList.toggle('active');
        }
    });
}

setupDropdown(productDropdown);
setupDropdown(usecaseDropdown);

});
</script>

</body>
</html>