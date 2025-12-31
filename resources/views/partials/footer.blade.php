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

.footer-logo img {
    height: 80px;
    margin-bottom: 20px;
}

.footer-desc {
    line-height: 1.7;
    color: #1e40af;
    margin-bottom: 14px;
}

.footer-title {
    font-weight: 700;
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

/* ===== DIVIDER WRAP ===== */
.footer-divider-wrap {
    max-width: 1300px;
    margin: 50px auto 20px;
    position: relative;
}

/* garis */
.footer-line {
    max-width: 1300px;
    margin: 0 auto;
    border-top: 1px solid #b6c4ff;
}

/* icon di tengah antara 2 garis */
.footer-social {
    max-width: 1300px;
    margin: 14px auto;
    display: flex;
    gap: 18px;
    align-items: center;
    padding-left: 0; /* sejajar konten kiri */
}

.footer-social img {
    height: 22px;
}

/* copyright tengah bawah */
.footer-copy {
    text-align: center;
    font-size: 13px;
    color: #1e40af;
    margin-top: 18px;
}


/* ===== BOTTOM ===== */
.footer-bottom {
    max-width: 1300px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.footer-social {
    display: flex;
    gap: 16px;
}

.footer-social img {
    height: 22px;
}

.footer-copy {
    font-size: 13px;
    color: #1e40af;
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

    .footer-bottom {
        flex-direction: column;
        align-items: flex-start;
    }
}
</style>

<footer class="footer">

    <!-- TOP -->
    <div class="footer-top">

        <!-- BRAND -->
        <div>
            <div class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Disply Logo">
            </div>

            <p class="footer-desc">
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
                <a href="#">Smart Kiosk</a>
                <a href="#">IR Whiteboard</a>
                <a href="#">Digital Signage</a>
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

<!-- ICON (DI TENGAH ANTARA 2 GARIS, POSISI KIRI) -->
<div class="footer-social">
    <a href="https://www.linkedin.com/in/nur-malika-adelia-7b9891321/" target="_blank" rel="noopener">
        <img src="{{ asset('images/IN.png') }}" alt="LinkedIn">
    </a>

    <a href="https://www.instagram.com/mi.moyyy/" target="_blank" rel="noopener">
        <img src="{{ asset('images/IG.png') }}" alt="Instagram">
    </a>

    <a href="https://wa.me/6281804113951" target="_blank" rel="noopener">
        <img src="{{ asset('images/WA.png') }}" alt="WhatsApp">
    </a>
</div>


<!-- GARIS BAWAH -->
<div class="footer-line"></div>

<!-- COPYRIGHT TENGAH -->
<div class="footer-copy">
    © 2025 Disply. All rights reserved.
</div>


</footer>
