@extends('layouts.frontend')

@section('content')

<style>
/* =========================
   HERO SECTION
========================= */
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
    max-width: 650px;
    text-align: left;
    width: 100%;
}

.about-content h1 {
    font-size: 50px;
    font-weight: 700;
    margin-bottom: 16px;
    text-align: left;
}

.about-content p {
    font-size: 18px;
    line-height: 1.7;
    color: #e6ecff;
    text-align: left;
}

/* =========================
   CARD WRAPPER
========================= */
.partner-card-wrapper {
    position: relative;
    z-index: 10;
    margin-top: -120px;
    display: flex;
    justify-content: center;
    padding-bottom: 120px;
    padding: 0 20px 120px;
    box-sizing: border-box;
}

/* =========================
   CARD
========================= */
.partner-card {
    width: 100%;
    max-width: 560px;
    padding: 32px 35px 36px;
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
}

/* =========================
   FORM
========================= */
.partner-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
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
    padding: 12px 14px; /* TAMBAH PADDING VERTICAL */
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
    padding: 10px 32px; /* TAMBAH PADDING VERTICAL */
    border-radius: 999px;
    background: #ffffff;
    border: 1.5px solid #A2B7FF;
    color: #193295;
    font-size: 13px;
    font-weight: 600;
    cursor: pointer;
    min-height: 36px; /* TAMBAH MIN HEIGHT */
}

/* =========================
   RESPONSIVE
========================= */
@media (max-width: 768px) {
    /* HERO - TETAP DI PINGGIR KIRI UNTUK MOBILE */
    .about-hero {
        padding: 40px 20px;
        height: 300px; /* KURANGI TINGGI */
        text-align: left;
        justify-content: flex-start;
        display: flex;
        align-items: flex-start; /* UBAH KE FLEX-START */
        padding-top: 60px; /* TAMBAH PADDING ATAS */
    }
    
    .about-content {
        text-align: left;
        display: block;
        width: 100%;
    }
    
    .about-content h1 {
        font-size: 28px; /* KURANGI SEDIKIT */
        width: 100%;
        text-align: left;
        margin-bottom: 12px; /* KURANGI MARGIN */
        line-height: 1.3;
    }
    
    .about-content p {
        font-size: 16px;
        text-align: left;
        width: 100%;
        max-width: 100%;
        line-height: 1.5;
        margin: 0;
    }
    
    .about-content br {
        display: none; /* HILANGKAN LINE BREAK DI MOBILE */
    }
    
    /* CARD WRAPPER */
    .partner-card-wrapper {
        margin-top: -100px; /* KURANGI MARGIN TOP */
        padding: 0 15px 80px; /* KURANGI PADDING BOTTOM */
    }
    
    /* CARD */
    .partner-card {
        padding: 24px 20px 28px; /* SESUAIKAN PADDING */
        border-radius: 12px; /* KECILKAN BORDER RADIUS */
    }
    
    .partner-card h2 {
        font-size: 15px;
        margin-bottom: 20px;
    }
    
    /* FORM */
    .form-row {
        grid-template-columns: 1fr;
        gap: 12px; /* KURANGI GAP */
    }
    
    .partner-form {
        gap: 12px; /* KURANGI GAP */
    }
    
    .partner-form label {
        font-size: 12px;
        margin-bottom: 4px;
    }
    
    .partner-form input,
    .partner-form textarea {
        padding: 10px 12px; /* SESUAIKAN PADDING */
        font-size: 12px;
        border-radius: 6px;
    }
    
    .partner-form textarea {
        height: 120px; /* KURANGI TINGGI */
    }
    
    .partner-form button {
        padding: 10px 28px;
        font-size: 12px;
        margin-top: 8px;
        min-height: 38px;
    }
}

/* Untuk layar sangat kecil */
@media (max-width: 480px) {
    .about-hero {
        height: 280px;
        padding: 40px 16px 20px;
    }
    
    .about-content h1 {
        font-size: 24px;
    }
    
    .about-content p {
        font-size: 14px;
        line-height: 1.4;
    }
    
    .partner-card-wrapper {
        margin-top: -80px;
        padding: 0 12px 60px;
    }
    
    .partner-card {
        padding: 20px 16px 24px;
    }
    
    .partner-form input,
    .partner-form textarea {
        padding: 9px 10px;
    }
    
    .partner-form button {
        padding: 9px 24px;
        min-height: 36px;
    }
}

/* Untuk layar super kecil */
@media (max-width: 360px) {
    .about-hero {
        height: 260px;
        padding: 35px 12px 15px;
    }
    
    .about-content h1 {
        font-size: 22px;
    }
    
    .about-content p {
        font-size: 13px;
    }
    
    .partner-card {
        padding: 18px 14px 22px;
    }
}
</style>

<!-- HERO -->
<section class="about-hero">
    <div class="about-content">
        <h1>Request Demo Disply</h1>
        <p>
            Rasakan langsung bagaimana solusi modern Disply membantu<br>
            meningkatkan komunikasi dan pengalaman pelanggan di bisnis Anda.
        </p>
    </div>
</section>

<!-- CARD -->
<div class="partner-card-wrapper">
    <div class="partner-card">
        <h2>Request Demo</h2>

        <form class="partner-form" onsubmit="sendDemoToWhatsApp(event)">
            <div class="form-row">
                <div>
                    <label>Name *</label>
                    <input id="name" type="text" placeholder="Name" required>
                </div>
                <div>
                    <label>Company Email *</label>
                    <input id="company_email" type="email" placeholder="Company Email" required>
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label>Company Name *</label>
                    <input id="company" type="text" placeholder="Company Name" required>
                </div>
                <div>
                    <label>Phone Number *</label>
                    <input
                        id="phone"
                        type="tel"
                        inputmode="numeric"
                        pattern="[0-9]+"
                        placeholder="Phone Number"
                        required
                    >
                </div>
            </div>

            <div>
                <label>LinkedIn URL (Optional)</label>
                <input id="linkedin" type="text" placeholder="LinkedIn URL">
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
function sendDemoToWhatsApp(e) {
    e.preventDefault();

    const phoneInput = document.getElementById('phone');
    phoneInput.value = phoneInput.value.replace(/[^0-9]/g, '');

    const companyEmail = document.getElementById('company_email').value.toLowerCase();
    const forbiddenDomains = ['gmail.com','yahoo.com','outlook.com','hotmail.com','icloud.com'];
    const domain = companyEmail.split('@')[1];

    if (forbiddenDomains.includes(domain)) {
        alert('Company email harus menggunakan domain perusahaan.');
        return;
    }

    const text =
`Halo Disply 
Saya ingin request demo Disply.

Nama: ${document.getElementById('name').value}
Company: ${document.getElementById('company').value}
Company Email: ${companyEmail}
No HP: ${phoneInput.value}
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