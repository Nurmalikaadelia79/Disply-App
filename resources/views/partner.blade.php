@extends('layouts.frontend')

@section('content')

<style>
.about-hero {
    position: relative;
    z-index: 1;
    width: 100%;
    height: 380px;
    background-image: url("/images/Contac/image1.png");
    background-size: cover;
    background-position: center;
    display: flex;
    align-items: center;
    padding: 60px;
    color: #fff;
}

.about-content {
    max-width: 100%;
}

.about-content h1 {
    font-size: 50px;
    font-weight: 700;
    margin-bottom: 16px;
    line-height: 1.1;
}

.about-content p {
    font-size: 24px;
    line-height: 1.7;
    color: #e6ecff;
}

.partner-card-wrapper {
    position: relative;
    z-index: 10;
    margin-top: -90px;
    display: flex;
    justify-content: center;
    padding: 0 20px 120px;
}

/* =========================
   CARD
========================= */
.partner-card {
    width: 100%;
    max-width: 560px;
    padding: 32px 30px 36px;
    border-radius: 16px;
    background:
        linear-gradient(#ffffff, #ffffff) padding-box,
        linear-gradient(135deg, #A2B7FF, #FFFFFF) border-box;
    border: 2px solid transparent;
    box-shadow: 0 14px 32px rgba(25,50,149,0.15);
    margin: 0 auto;
    box-sizing: border-box;
}

/* TITLE */
.partner-card h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 24px;
    padding: 0 10px;
}

.partner-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
    width: 100%;
    box-sizing: border-box;
}

.partner-form label {
    font-size: 13px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 6px;
    display: block;
}

.partner-form input,
.partner-form textarea {
    width: 100%;
    padding: 10px 14px;
    font-size: 13px;
    border-radius: 8px;
    border: 1.5px solid #dbe2ff;
    outline: none;
    background: #ffffff;
    color: #193295;
    box-sizing: border-box;
}

.partner-form input:focus,
.partner-form textarea:focus {
    border-color: #A2B7FF;
}

.partner-form textarea {
    height: 150px;
    resize: none;
}

/* GRID */
.form-row {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

/* BUTTON */
.partner-form button {
    margin: 12px auto 0;
    padding: 7px 32px;
    border-radius: 999px;
    background: #ffffff;
    border: 1.5px solid #A2B7FF;
    color: #193295;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
}

.partner-form button:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(162, 183, 255, 0.2);
}


/* ================= TAMBAHAN FIX (TIDAK MENGHAPUS) ================= */

/* Anti overflow */
* {
    box-sizing: border-box;
}

body {
    overflow-x: hidden;
}

/* Hero biar gak kepotong */
.about-hero {
    height: auto !important;
    min-height: 380px;
}

/* ================= RESPONSIVE ================= */

/* Tablet */
@media (max-width: 1024px) {
    .about-hero {
        padding: 50px 30px;
    }

    .about-content h1 {
        font-size: 38px;
    }

    .about-content p {
        font-size: 18px;
    }

    .partner-card-wrapper {
        margin-top: -80px;
    }
}

/* Mobile */
@media (max-width: 768px) {
    .about-hero {
        padding: 40px 20px;
        min-height: 300px;
        text-align: center;
    }

    .about-content h1 {
        font-size: 28px;
    }

    .about-content p {
        font-size: 16px;
    }

    /* ini fix utama biar gak kepotong */
    .partner-card-wrapper {
        margin-top: -40px !important;
        padding-bottom: 60px;
    }

    .form-row {
        grid-template-columns: 1fr !important;
    }

    .partner-form button {
        width: 100%;
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

    .partner-card {
        padding: 24px 20px;
    }
}

</style>
 
<!-- HERO -->
<section class="about-hero">
    <div class="about-content">
        <h1>Bergabung sebagai Partner Disply</h1>
        <p>
            Kolaborasi untuk menghadirkan solusi display <br>
            modern ke lebih banyak bisnis di Indonesia.
        </p>
    </div>
</section>

<!-- CARD -->
<div class="partner-card-wrapper">
    <div class="partner-card">
        <h2>Become a Partner</h2>

        <form class="partner-form" onsubmit="sendPartnerToWhatsApp(event)">
            <div class="form-row">
                <div>
                    <label>Name *</label>
                    <input id="name" type="text" placeholder="Name" required>
                </div>
                <div>
                    <label>Email *</label>
                    <input id="email" type="email" placeholder="Email" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label>Phone number *</label>
                    <input
                        id="phone"
                        type="tel"
                        placeholder="Phone number"
                        inputmode="numeric"
                        pattern="[0-9]+"
                        required
                    >
                </div>
                <div>
                    <label>Company name *</label>
                    <input id="company" type="text" placeholder="Company name" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label>Company email *</label>
                    <input id="company_email" type="email" placeholder="Company email" required>
                </div>
                <div>
                    <label>LinkedIn URL (Optional)</label>
                    <input id="linkedin" type="text" placeholder="LinkedIn URL">
                </div>
            </div>

            <div>
                <label>Message (Optional)</label>
                <textarea id="message" placeholder="Type your message..." required></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
function sendPartnerToWhatsApp(e) {
    e.preventDefault();

    const phoneInput = document.getElementById('phone');
    phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');

    const companyEmail = document.getElementById('company_email').value.toLowerCase();

    const forbiddenDomains = [
        'gmail.com',
        'yahoo.com',
        'outlook.com',
        'hotmail.com',
        'icloud.com'
    ];

    const emailDomain = companyEmail.split('@')[1];

    if (forbiddenDomains.includes(emailDomain)) {
        alert('Company email harus menggunakan domain perusahaan, bukan email pribadi.');
        return;
    }

    const text =
`Halo Disply 
Saya ingin bergabung sebagai Partner.

Nama: ${document.getElementById('name').value}
Email: ${document.getElementById('email').value}
No HP: ${phoneInput.value}

Company: ${document.getElementById('company').value}
Company Email: ${companyEmail}
LinkedIn: ${document.getElementById('linkedin').value || '-'}

Pesan:
${document.getElementById('message').value || '-'}`;

    window.open(
        "https://wa.me/6287865000432?text=" + encodeURIComponent(text),
        "_blank"
    );
}
</script>

@endsection