@extends('layouts.app')

@section('content')

<style>
/* ================= HERO ================= */
.about-hero {
    position: relative;
    width: 100%;
    height: 380px;
    background-image: url("{{ asset('images/Contac/image1.png') }}");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 60px;
    color: #fff;
    z-index: 1;
}

.about-content {
    max-width: 650px;
}

.about-content h1 {
    font-size: 36px;
    font-weight: 700;
    margin-bottom: 16px;
}

.about-content p {
    font-size: 16px;
    line-height: 1.7;
    color: #e6ecff;
}

/* ================= CARD WRAPPER ================= */
.contact-card-wrapper {
    position: relative;
    z-index: 5;
    margin-top: -160px;
    display: flex;
    justify-content: center;
    padding-bottom: 120px;
}

/* ================= CARD ================= */
.contact-card {
    width: 100%;
    max-width: 560px;
    padding: 32px 30px 36px; /* Padding seimbang */
    border-radius: 16px;

    /* BORDER GRADIENT */
    background:
        linear-gradient(#ffffff, #ffffff) padding-box,
        linear-gradient(135deg, #A2B7FF, #FFFFFF) border-box;
    border: 2px solid transparent;

    box-shadow: 0 14px 32px rgba(25,50,149,0.15);
    margin: 0 auto;
    box-sizing: border-box;
}

/* ================= TITLE ================= */
.contact-card h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 24px;
    padding: 0 10px;
}

/* ================= FORM ================= */
.contact-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
    width: 100%;
    box-sizing: border-box;
}

/* LABEL */
.contact-form label {
    font-size: 13px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 6px;
    display: block;
}

/* INPUT */
.contact-form input,
.contact-form textarea {
    width: 100%;
    padding: 10px 14px;
    font-size: 13px;
    border-radius: 8px;
    border: 1.5px solid #dbe2ff;
    outline: none;
    color: #193295;
    background: #ffffff;
    box-sizing: border-box;
}

.contact-form input::placeholder,
.contact-form textarea::placeholder {
    color: #b6c2ff;
}

/* FOCUS */
.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #A2B7FF;
}

/* ROW */
.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

/* TEXTAREA */
.contact-form textarea {
    height: 150px;
    resize: none;
}

/* BUTTON */
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
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .contact-card-wrapper {
        margin-top: -120px;
        padding: 0 20px 120px;
    }

    .form-row {
        grid-template-columns: 1fr;
    }
    
    .about-hero {
        padding: 40px 24px;
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
`Halo Disply 👋

Nama: ${name}
No HP: ${phone}
Email: ${email}

Pesan:
${message}`;

    const url = "https://wa.me/6281804113951?text=" + encodeURIComponent(text);
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

<!-- CARD -->
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

@endsection
