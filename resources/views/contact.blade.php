@extends('layouts.frontend')
@section('content')

<style>
/* ================= FONT INTER ================= */
@import url('https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&display=swap');

* {
    font-family: 'Inter', sans-serif;
}

/* ================= HERO ================= */
.about-hero {
    position: relative;
    width: 100%;
    height: 380px;
    background-image: url("/images/Contac/image1.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: flex-start;
    padding: 100px 60px 0;
    color: #fff;
}

.about-content {
    max-width: 650px;
    text-align: left;
}

.about-content h1 {
    font-size: 47px;
    font-weight: 700;
    margin-bottom: 24px;
    line-height: 1.2;
    font-family: 'Inter', sans-serif;
}

.about-content p {
    font-size: 23px;
    line-height: 1.7;
    color: #ffffff;
    font-family: 'Inter', sans-serif;
}

/* ================= MAIN CONTACT LAYOUT ================= */
.contact-main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px 80px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px; /* Kembali ke gap awal */
    align-items: start;
}

/* ================= CONTACT CARD (LEFT) ================= */
.contact-card-wrapper {
    width: 100%;
    display: flex;
    justify-content: flex-end; /* Dorong card ke kanan sedikit */
    padding-right: 20px; /* Beri jarak dari tepi */
}

.contact-card {
    width: 100%;
    max-width: 520px; /* Kurangi sedikit biar tidak terlalu lebar */
    padding: 32px 30px 36px;
    border-radius: 16px;
    background:
        linear-gradient(#ffffff, #ffffff) padding-box,
        linear-gradient(135deg, #A2B7FF, #FFFFFF) border-box;
    border: 2px solid transparent;
    box-shadow: 0 14px 32px rgba(25,50,149,0.15);
}

.contact-card h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 24px;
    font-family: 'Inter', sans-serif;
}

/* ================= FORM ================= */
.contact-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
}

.contact-form label {
    font-size: 13px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 6px;
    display: block;
    font-family: 'Inter', sans-serif;
}

.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px 14px;
    font-size: 13px;
    border-radius: 8px;
    border: 1.5px solid #dbe2ff;
    color: #193295;
    outline: none;
    font-family: 'Inter', sans-serif;
    box-sizing: border-box; /* Penting! */
}

.contact-form textarea {
    height: 150px;
    resize: none;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #A2B7FF;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.contact-form button {
    margin: 12px auto 0;
    padding: 7px 32px;
    border-radius: 999px;
    background: #ffffff;
    border: 1.5px solid #A2B7FF;
    color: #193295;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    font-family: 'Inter', sans-serif;
    width: fit-content; /* Button menyesuaikan konten */
}

/* ================= RIGHT SIDE (OFFICE SECTION) ================= */
.right-side {
    width: 100%;
    display: flex;
    flex-direction: column;
    gap: 30px;
    padding-left: 20px; /* Beri jarak dari tepi kiri */
}

.office-section {
    width: 100%;
    padding: 0;
    display: block;
}

.office-container {
    max-width: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.office-text {
    width: 100%;
}

.office-text h2 {
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 20px;
    line-height: 1.2;
    color: #193295;
    font-family: 'Inter', sans-serif;
}

.office-desc {
    font-size: 18px;
    margin-bottom: 30px;
    color: #4a4a4a;
    font-family: 'Inter', sans-serif;
}

.office-text h3 {
    font-size: 20px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 15px;
    font-family: 'Inter', sans-serif;
}

.office-address {
    display: flex;
    gap: 10px;
    font-size: 16px;
    align-items: flex-start;
    margin-bottom: 25px;
    color: #4a4a4a;
    font-family: 'Inter', sans-serif;
}

.office-icon {
    font-size: 20px;
    color: #193295;
    flex-shrink: 0;
}

.office-map iframe {
    width: 100%;
    height: 300px;
    border-radius: 16px;
    border: none;
}

/* ================= RESPONSIVE ================= */
@media (max-width: 1024px) {
    .about-hero {
        padding: 80px 40px 0;
    }
    
    .about-content h1 { 
        font-size: 42px; 
    }
    
    .about-content p { 
        font-size: 21px; 
    }
    
    .office-text h2 { 
        font-size: 32px; 
    }
    
    .contact-main {
        gap: 30px;
    }
    
    .contact-card-wrapper {
        padding-right: 10px;
    }
    
    .right-side {
        padding-left: 10px;
    }
}

@media (max-width: 900px) {
    .contact-main {
        grid-template-columns: 1fr;
        gap: 50px;
        max-width: 650px; /* Batasi lebar di tablet */
    }
    
    .contact-card-wrapper {
        justify-content: center;
        padding-right: 0; /* Hapus padding kanan */
    }
    
    .contact-card {
        max-width: 100%;
    }
    
    .right-side {
        padding-left: 0; /* Hapus padding kiri */
    }
    
    .office-text h2 {
        text-align: left;
    }
    
    .office-address {
        justify-content: flex-start;
    }
}

@media (max-width: 768px) {
    .about-hero {
        height: 320px;
        padding: 60px 30px 0;
        justify-content: center;
        text-align: center;
    }

    .about-content {
        text-align: center;
    }

    .about-content h1 { 
        font-size: 36px; 
    }
    
    .about-content p { 
        font-size: 18px; 
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 16px;
    }
    
    .office-text h2 {
        font-size: 28px;
        text-align: center;
    }
    
    .office-desc {
        font-size: 16px;
        text-align: center;
    }
    
    .office-address {
        justify-content: center;
    }
    
    .contact-card {
        padding: 32px 30px 36px;
    }
}

@media (max-width: 480px) {
    .about-hero {
        height: 260px;
        padding: 40px 20px 0;
    }

    .about-content h1 { 
        font-size: 28px; 
        margin-bottom: 15px;
    }
    
    .about-content p { 
        font-size: 16px; 
    }

    .contact-card {
        padding: 24px 20px;
    }

    .contact-form input,
    .contact-form textarea {
        padding: 10px 14px;
    }

    .contact-form button {
        width: 100%;
        max-width: 220px;
        padding: 7px 32px;
    }
    
    .office-text h2 {
        font-size: 28px;
    }
    
    .office-map iframe {
        height: 250px;
    }
    
    .office-address {
        font-size: 14px;
    }
}

</style>

<script>
function sendToWhatsApp(e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    const text =
`Halo Disply 

Nama: ${name}
No HP: ${phone}
Email: ${email}

Pesan:
${message}`;

    const url = "https://wa.me/6287865000432?text=" + encodeURIComponent(text);
    window.open(url, '_blank');
}
</script>

<!-- HERO -->
<section class="about-hero">
    <div class="about-content">
        <h1>Hubungi Tim Disply</h1>
        <p>
            Kami siap membantu Anda menemukan solusi <br>
            display yang tepat untuk kebutuhan bisnis Anda.
        </p>
    </div>
</section>

<!-- MAIN CONTACT SECTION: FORM KIRI, TEKS + MAPS KANAN -->
<div class="contact-main">
    <!-- LEFT: CONTACT FORM -->
    <div class="contact-card-wrapper">
        <div class="contact-card">
            <h2>Contact</h2>

            <form class="contact-form" onsubmit="sendToWhatsApp(event)">
                <div>
                    <label>Name</label>
                    <input type="text" id="name" placeholder="Name" required>
                </div>

                <div class="form-row">
                    <div>
                        <label>Phone number</label>
                        <input type="text" id="phone" placeholder="Phone number" required>
                    </div>

                    <div>
                        <label>Email</label>
                        <input type="email" id="email" placeholder="Email" required>
                    </div>
                </div>

                <div>
                    <label>Message</label>
                    <textarea id="message" placeholder="Type your message..." required></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- RIGHT: OFFICE TEXT AND MAPS -->
    <div class="right-side">
        <section class="office-section">
            <div class="office-container">
                <div class="office-text">
                    <h2>Smarter Displays.<br> Stronger Impact.</h2>
                    <p class="office-desc">
                       Enhance the way you communicate, engage, and collaborate<br> with modern and powerful digital display solutions.
                    </p>

                    <h3>Our Office</h3>

                    <div class="office-address">
                        <span class="office-icon">📍</span>
                        <p>
                            Jl. Siantar No.18, RT.1/RW.2, Cideng,<br>
                            Kecamatan Gambir, Kota Jakarta Pusat,<br>
                            Daerah Khusus Ibukota Jakarta 10150
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="office-map">
            <iframe
                src="https://www.google.com/maps?q=Jl.%20Siantar%20No.18a%20Jakarta&output=embed"
                allowfullscreen=""
                loading="lazy"
            ></iframe>
        </div>
    </div>
</div>

@endsection 