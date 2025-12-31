@extends('layouts.app')

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

/* =========================
   CARD WRAPPER
========================= */
.partner-card-wrapper {
    position: relative;
    z-index: 10;
    margin-top: -160px;
    display: flex;
    justify-content: center;
    padding-bottom: 120px;
    padding: 0 20px 120px; /* TAMBAH INI */
    box-sizing: border-box;
}

/* =========================
   CARD
========================= */
.partner-card {
    width: 100%;
    max-width: 560px;
    padding: 32px 35px 36px; /* UBAH: dari 34px jadi 35px */
    border-radius: 16px;
    background:
        linear-gradient(#ffffff, #ffffff) padding-box,
        linear-gradient(135deg, #A2B7FF, #FFFFFF) border-box;
    border: 2px solid transparent;
    box-shadow: 0 14px 32px rgba(25,50,149,0.15);
    margin: 0 auto; /* TAMBAH INI */
    box-sizing: border-box; /* TAMBAH INI */
}

/* TITLE */
.partner-card h2 {
    text-align: center;
    font-size: 16px;
    font-weight: 600;
    color: #193295;
    margin-bottom: 24px;
    padding: 0 15px; /* TAMBAH INI */
}

/* =========================
   FORM
========================= */
.partner-form {
    display: flex;
    flex-direction: column;
    gap: 16px;
    padding: 0 10px; /* TAMBAH INI */
    box-sizing: border-box; /* TAMBAH INI */
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
    box-sizing: border-box; /* TAMBAH INI */
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
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .partner-card-wrapper {
        margin-top: -120px;
        padding: 0 15px 100px; /* UBAH: dari 20px jadi 15px */
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .about-hero {
        padding: 40px 24px;
        height: 360px;
    }

    .about-content h1 {
        font-size: 30px;
    }  
    
    .partner-card {
        padding: 28px 25px 32px; /* TAMBAH INI untuk mobile */
    }
    
    .partner-form {
        padding: 0 5px; /* TAMBAH INI untuk mobile */
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
`Halo Disply 👋
Saya ingin request demo Disply.

Nama: ${document.getElementById('name').value}
Company: ${document.getElementById('company').value}
Company Email: ${companyEmail}
No HP: ${phoneInput.value}
LinkedIn: ${document.getElementById('linkedin').value || '-'}

Pesan:
${document.getElementById('message').value || '-'}`;

    window.open(
        "https://wa.me/6281804113951?text=" + encodeURIComponent(text),
        "_blank"
    );
}
</script>

@endsection
