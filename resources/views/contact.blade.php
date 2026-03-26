@extends('layouts.frontend')
@section('content')

<style>
/* ================= FONT ================= */
@import url('https://fonts.googleapis.com/css2?family=Inter:opsz@14..32&display=swap');

* {
    font-family: 'Inter', sans-serif;
    box-sizing: border-box;
}

body {
    overflow-x: hidden;
}

/* ================= HERO ================= */
.about-hero {
    position: relative;
    width: 100%;
    min-height: 380px; /* FIX biar gak kepotong */
    background-image: url("/images/Contac/image1.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: flex-start;
    padding: 100px 60px 40px;
    color: #fff;
}

.about-content {
    max-width: 650px;
}

.about-content h1 {
    font-size: 47px;
    font-weight: 700;
    margin-bottom: 24px;
    line-height: 1.2;
}

.about-content p {
    font-size: 23px;
    line-height: 1.7;
}

/* ================= MAIN ================= */
.contact-main {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px 20px 80px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

/* ================= CARD ================= */
.contact-card-wrapper {
    display: flex;
    justify-content: flex-end;
    padding-right: 20px;
}

.contact-card {
    width: 100%;
    max-width: 520px;
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
}

.contact-form textarea {
    height: 150px;
    resize: none;
}

.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.contact-form button {
    margin: 12px auto 0;
    padding: 8px 32px;
    border-radius: 999px;
    background: #ffffff;
    border: 1.5px solid #A2B7FF;
    color: #193295;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    width: fit-content;
}

/* ================= RIGHT SIDE ================= */
.right-side {
    display: flex;
    flex-direction: column;
    gap: 30px;
    padding-left: 20px;
}

.office-text h2 {
    font-size: 38px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #193295;
}

.office-desc {
    font-size: 18px;
    margin-bottom: 30px;
    color: #4a4a4a;
}

.office-text h3 {
    font-size: 20px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 15px;
}

.office-address {
    display: flex;
    gap: 10px;
    font-size: 16px;
    margin-bottom: 25px;
    color: #4a4a4a;
}

.office-map iframe {
    width: 100%;
    max-width: 100%;
    height: 300px;
    border-radius: 16px;
    border: none;
    display: block;
}

/* ================= RESPONSIVE ================= */

/* Tablet */
@media (max-width: 1024px) {
    .contact-main {
        grid-template-columns: 1fr;
    }

    .contact-card-wrapper {
        justify-content: center;
        padding-right: 0;
    }

    .right-side {
        padding-left: 0;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .about-hero {
        padding: 60px 20px;
        min-height: 300px;
        align-items: center;
    }

    .about-content {
        text-align: center;
    }

    .about-content h1 {
        font-size: 28px;
    }

    .about-content p {
        font-size: 16px;
    }

    .contact-main {
        grid-template-columns: 1fr;
        padding: 30px 16px;
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .contact-form button {
        width: 100%;
    }

    .office-text h2 {
        font-size: 26px;
        text-align: center;
    }

    .office-desc {
        font-size: 15px;
        text-align: center;
    }

    .office-text h3 {
        text-align: center;
    }

    .office-map iframe {
        height: 220px;
    }
}

/* HP kecil */
@media (max-width: 480px) {
    .about-content h1 {
        font-size: 24px;
    }

    .about-content p {
        font-size: 14px;
    }

    .office-map iframe {
        height: 200px;
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

<!-- MAIN -->
<div class="contact-main">

    <!-- FORM -->
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

    <!-- RIGHT -->
    <div class="right-side">
        <div class="office-text">
            <h2>Smarter Displays.<br> Stronger Impact.</h2>
            <p class="office-desc">
                Enhance the way you communicate, engage, and collaborate
                with modern and powerful digital display solutions.
            </p>

            <h3>Our Office</h3>

            <div class="office-address">
                <span>📍</span>
                <p>
                    Jl. Siantar No.18, RT.1/RW.2, Cideng,<br>
                    Kecamatan Gambir, Kota Jakarta Pusat,<br>
                    DKI Jakarta 10150
                </p>
            </div>
        </div>

        <div class="office-map">
            <iframe
                src="https://www.google.com/maps?q=Jl.%20Siantar%20No.18a%20Jakarta&output=embed"
                loading="lazy">
            </iframe>
        </div>
    </div>

</div>

@endsection