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
    margin-top: -120px;
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

/* =========================
   RESPONSIVE
========================= */

/* Untuk layar kecil (tablet) */
@media (max-width: 1024px) {
    .about-hero {
        height: 320px;
        padding: 40px;
    }
    
    .about-content h1 {
        font-size: 40px;
    }
    
    .about-content p {
        font-size: 17px;
    }
}

/* Untuk tablet kecil dan mobile landscape */
@media (max-width: 900px) {
    .about-hero {
        height: 300px;
        padding: 30px;
    }
    
    .about-content h1 {
        font-size: 35px;
    }
}

/* Untuk mobile */
@media (max-width: 768px) {
    .partner-card-wrapper {
        margin-top: -120px;
        padding: 0 15px 80px;
    }
    
    .partner-card {
        padding: 24px 20px 28px;
        max-width: 100%;
    }
    
    .form-row {
        grid-template-columns: 1fr;
        gap: 14px;
    }
    
    .about-hero {
        padding: 30px 20px;
        height: 280px;
    }
    
    .about-content h1 {
        font-size: 32px;
        line-height: 1.2;
        margin-bottom: 12px;
    }
    
    .about-content p {
        font-size: 16px;
        line-height: 1.6;
    }
    
    .partner-form button {
        padding: 10px 36px;
        font-size: 14px;
    }
}

/* Untuk mobile kecil */
@media (max-width: 640px) {
    .about-hero {
        height: 260px;
        padding: 25px 15px;
    }
    
    .about-content h1 {
        font-size: 28px;
    }
    
    .about-content p {
        font-size: 15px;
    }
    
    .partner-card-wrapper {
        padding: 0 12px 60px;
    }
}

/* Untuk mobile sangat kecil */
@media (max-width: 480px) {
    .about-hero {
        height: 240px;
    }
    
    .about-content h1 {
        font-size: 26px;
    }
    
    .about-content p {
        font-size: 14px;
    }
    
    .partner-card {
        padding: 20px 16px 24px;
        border-radius: 12px;
    }
    
    .partner-card h2 {
        font-size: 15px;
        margin-bottom: 20px;
    }
    
    .partner-form {
        gap: 12px;
    }
    
    .partner-form input,
    .partner-form textarea {
        padding: 11px 12px;
        font-size: 14px;
    }
}

/* Untuk iPhone SE / layar sangat kecil */
@media (max-width: 375px) {
    .about-hero {
        height: 220px;
    }
    
    .about-content h1 {
        font-size: 24px;
    }
    
    .about-content p {
        font-size: 13px;
    }
    
    .partner-card {
        padding: 18px 14px 22px;
    }
}

/* TAMBAHAN: Hanya jika benar-benar perlu wrap di layar sangat sempit */
@media (max-width: 320px) {
    .about-content h1 {
        font-size: 22px;
        word-break: keep-all;
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
                <textarea id="message" placeholder="Type your message..."></textarea>
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