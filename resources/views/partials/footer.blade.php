<style>
.footer {
    background: #DEE7FF;
    padding: 70px 60px 40px;
    font-size: 14px;
    color: #1e3a8a;
}

/* ===== TOP ===== */
.footer-top {
    max-width: 1300px;
    margin: auto;
    display: grid;
    grid-template-columns: 2fr 1fr 1fr 1fr;
    gap: 40px;
}

/* ===== BRAND SECTION - LOGO & TEKS RAPAT ===== */
.footer-brand {
    display: flex;
    flex-direction: column;
}

.footer-logo {
    margin-bottom: -15px; /* NAIKIN TEKS DENGAN NEGATIVE MARGIN */
    position: relative;
    z-index: 2;
}

.footer-logo img {
    height: 100px;
    margin-left: -25px; /* geser ke kiri */
}

.footer-desc {
    line-height: 1.6; /* sedikit dikurangin biar rapat */
    color: #1e40af;
    margin-top: 0; /* HAPUS MARGIN ATAS */
    margin-bottom: 8px; /* kecilin jarak antar paragraf */
    position: relative;
    z-index: 1;
}

/* Paragraf pertama lebih rapat ke logo */
.footer-desc.first-desc {
    margin-top: 7px; /* NAIKIN LEBIH DEKET KE LOGO */
}

.footer-title {
    font-weight: 900;
    margin-bottom: 14px;
}

.footer-links a {
    display: block;
    color: #1e3a8a;
    text-decoration: none;
    margin-bottom: 8px;
}

.footer-links a:hover {
    text-decoration: underline;
}

/* ===== DIVIDER & SOCIAL ===== */
.footer-line {
    max-width: 1300px;
    margin: 0 auto;
    border-top: 1px solid #b6c4ff;
}

.footer-social {
    max-width: 1300px;
    margin: 14px auto;
    display: flex;
    gap: 18px;
    align-items: center;
    padding-left: 0;
}

.footer-social img {
    height: 22px;
    transition: opacity 0.2s;
}

.footer-social a:hover img {
    opacity: 0.8;
}

.footer-copy {
    text-align: center;
    font-size: 13px;
    color: #1e40af;
    margin-top: 18px;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 900px) {
    .footer-top {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 600px) {
    .footer {
        padding: 50px 24px 32px;
    }

    .footer-top {
        grid-template-columns: 1fr;
    }
}
</style>

<footer class="footer">

    <!-- TOP -->
    <div class="footer-top">

        <!-- BRAND - LOGO & TEKS RAPAT -->
        <div class="footer-brand">
            <div class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Disply Logo">
            </div>

            <p class="footer-desc first-desc">
                Disply adalah brand solusi digital display & perangkat interaktif
                yang digunakan untuk kebutuhan presentasi, informasi publik,
                dan layanan digital di berbagai sektor.
            </p>

            <p class="footer-desc">
                Disply fokus menghadirkan perangkat berbasis layar pintar untuk
                mendukung komunikasi, kolaborasi, dan otomatisasi layanan.
            </p>
        </div>

        <!-- COMPANY -->
        <div>
            <div class="footer-title">Company</div>
            <div class="footer-links">
                <a href="/">Home</a>
                <a href="/about">About Us</a>
                <a href="/usecase">Use Case</a>
                <a href="/service">Service</a>
                <a href="/blog">Blog</a>
                <a href="/contact">Contact</a>
                <a href="/partner">Become a Partner</a>
            </div>
        </div>

        <!-- PRODUCTS -->
        <div>
            <div class="footer-title">Products</div>
            <div class="footer-links">
                <a href="#">Interactive Whiteboard</a>
                <a href="#">Digital Signage</a>
                <a href="#">Smart Kiosk</a>
            </div>
        </div>

        <!-- RESOURCES -->
        <div>
            <div class="footer-title">Resources</div>
            <div class="footer-links">
                <a href="/blog">Blog</a>
                <a href="#">Download Brochure Product</a>
            </div>
        </div>

    </div>

    <!-- GARIS ATAS -->
    <div class="footer-line"></div>

    <!-- ICON SOCIAL -->
    <div class="footer-social">
        <a href="https://www.linkedin.com/in/nur-malika-adelia-7b9891321/" target="_blank" rel="noopener">
            <img src="{{ asset('images/IN.png') }}" alt="LinkedIn">
        </a>
        <a href="https://www.instagram.com/mi.moyyy/" target="_blank" rel="noopener">
            <img src="{{ asset('images/IG.png') }}" alt="Instagram">
        </a>
        <a href="https://wa.me/6287865000432" target="_blank" rel="noopener">
            <img src="{{ asset('images/WA.png') }}" alt="WhatsApp">
        </a>
    </div>

    <!-- GARIS BAWAH -->
    <div class="footer-line"></div>

    <!-- COPYRIGHT -->
    <div class="footer-copy">
        © 2025 Disply. All rights reserved.
    </div>

</footer>