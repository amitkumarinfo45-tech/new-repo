<style>

.about-hero {
  display: grid;
  grid-template-columns: 1.05fr .95fr;
  align-items: center;
  gap: 30px;
  min-height: 570px;
  overflow: hidden;
  padding: 65px clamp(22px, 7vw, 100px);
  background: linear-gradient(120deg, #fff 0%, #fff6f3 65%, #fbe9e5 100%);
}

.about-hero-content { max-width: 640px; }

.about-eyebrow {
  display: inline-block;
  padding: 9px 12px;
  border: 1px solid #f1d3cf;
  border-radius: 6px;
  color: #a91e25;
  background: #fff;
  font-size: 10px;
  font-weight: 800;
  letter-spacing: 1.5px;
}

.about-hero h1 {
  margin: 23px 0 17px;
  font: 800 clamp(36px, 4.6vw, 59px)/1.13 'Manrope', sans-serif;
  letter-spacing: -2px;
}

.about-hero h1 span,
.about-section-label h2 span,
.about-centered-heading h2 span,
.about-values-heading h2 span,
.about-contact-copy h2 span {
  color: #a91e25;
}

.about-hero-content > p,
.about-business-copy p,
.about-values-heading > p,
.about-contact-copy > p {
  color: #707780;
  font-size: 14px;
  line-height: 1.95;
}

.about-hero-actions {
  display: flex;
  flex-wrap: wrap;
  gap: 12px;
  margin-top: 26px;
}

.about-btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  min-height: 47px;
  padding: 0 19px;
  border: 1px solid transparent;
  border-radius: 10px;
  font-size: 12px;
  font-weight: 800;
  text-decoration: none;
  transition: .2s;
}

.about-btn:hover { transform: translateY(-2px); }

.about-btn-primary {
  color: white;
  background: #a91e25;
  box-shadow: 0 8px 20px #a91e2520;
}

.about-btn-primary:hover { background: #7f1119; }

.about-btn-light {
  color: #35343a;
  border-color: #eadbd6;
  background: white;
}

.about-hero-note {
  display: flex;
  align-items: center;
  gap: 12px;
  margin-top: 32px;
}

.about-note-icon {
  display: grid;
  place-items: center;
  width: 43px;
  height: 43px;
  border-radius: 12px;
  color: #a91e25;
  background: #ffebe7;
  font-size: 21px;
}

.about-hero-note strong,
.about-hero-note small {
  display: block;
}

.about-hero-note strong { font-size: 12px; }
.about-hero-note small { margin-top: 5px; color: #7b8088; font-size: 11px; }

.about-hero-art {
  min-height: 405px;
  position: relative;
  display: grid;
  place-items: center;
}

.about-art-ring {
  position: absolute;
  border: 1px solid #b82b3220;
  border-radius: 50%;
}

.ring-one { width: 300px; height: 300px; }
.ring-two { width: 390px; height: 390px; border-style: dashed; }

.about-brand-card {
  position: relative;
  z-index: 1;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  width: 255px;
  min-height: 300px;
  padding: 27px;
  border: 1px solid #ffffff50;
  border-radius: 18px;
  color: white;
  background: linear-gradient(145deg, #a92129, #75121a);
  box-shadow: 0 24px 60px #7f111932;
  text-align: center;
  transform: rotate(-3deg);
}

.about-brand-mark {
  display: grid;
  place-items: center;
  width: 65px;
  height: 65px;
  margin-bottom: 17px;
  border: 1px solid #ffffff75;
  border-radius: 50%;
  font: 800 37px 'Manrope', sans-serif;
}

.about-brand-small { font-size: 9px; letter-spacing: 3px; }
.about-brand-card > strong { margin-top: 7px; font: 800 26px 'Manrope', sans-serif; letter-spacing: 1px; }
.about-brand-line { width: 55px; height: 2px; margin: 13px 0; background: #ffffff8c; }
.about-brand-card > small { font-size: 9px; letter-spacing: 1.5px; }
.about-brand-cross { margin-top: 15px; font-size: 29px; opacity: .85; }
.about-brand-card > p { font-size: 9px; letter-spacing: 2px; }

.about-float-card {
  position: absolute;
  z-index: 2;
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 13px 15px;
  border: 1px solid #f1e4df;
  border-radius: 12px;
  background: white;
  box-shadow: 0 10px 30px #3c202012;
}

.about-float-card > span { color: #a91e25; font-size: 22px; }
.about-float-card strong, .about-float-card small { display: block; }
.about-float-card strong { font-size: 11px; }
.about-float-card small { margin-top: 4px; color: #7a7d85; font-size: 9px; }
.float-card-top { top: 30px; right: -3px; }
.float-card-bottom { bottom: 25px; left: -7px; }

.about-business { background: white; }

.about-section-label { max-width: 800px; margin: 0 auto 35px; text-align: center; }

.about-section-label h2,
.about-centered-heading h2,
.about-values-heading h2,
.about-contact-copy h2 {
  margin: 13px 0;
  font: 800 clamp(29px, 3.6vw, 43px)/1.2 'Manrope', sans-serif;
  letter-spacing: -1.4px;
}

.about-business-grid {
  display: grid;
  grid-template-columns: 1.1fr .9fr;
  align-items: start;
  gap: 45px;
  max-width: 1120px;
  margin: 0 auto;
}

.about-business-copy p { margin-top: 0; margin-bottom: 19px; }

.about-inline-link {
  display: inline-flex;
  gap: 10px;
  margin-top: 5px;
  color: #a91e25;
  font-size: 12px;
  font-weight: 800;
  text-decoration: none;
}

.about-business-panel {
  padding: 28px;
  border: 1px solid #f1e3de;
  border-radius: 18px;
  background: linear-gradient(145deg, #fff8f5, #fff);
}

.about-panel-top { display: flex; align-items: center; gap: 12px; }

.about-panel-icon {
  display: grid;
  place-items: center;
  width: 43px;
  height: 43px;
  border-radius: 12px;
  color: white;
  background: #a91e25;
  font-size: 23px;
}

.about-panel-label { color: #a91e25; font-size: 10px; font-weight: 800; letter-spacing: 1.4px; }
.about-business-panel h3 { margin: 21px 0 9px; font: 800 23px 'Manrope', sans-serif; }
.about-business-panel > p { color: #727780; font-size: 12px; line-height: 1.9; }

.about-panel-feature {
  display: flex;
  align-items: center;
  gap: 13px;
  padding: 14px 0;
  border-top: 1px solid #eee2dd;
}

.about-panel-feature > span {
  display: grid;
  place-items: center;
  width: 34px;
  height: 34px;
  flex-shrink: 0;
  border-radius: 10px;
  color: #a91e25;
  background: #ffebe7;
  font-size: 10px;
  font-weight: 800;
}

.about-panel-feature strong,
.about-panel-feature small { display: block; }
.about-panel-feature strong { font-size: 12px; }
.about-panel-feature small { margin-top: 5px; color: #777d84; font-size: 10px; }

.about-activities { padding: 80px 24px; background: #fbf8f6; }
.about-activities-inner { max-width: 1180px; margin: 0 auto; }

.about-centered-heading { margin-bottom: 35px; text-align: center; }
.about-centered-heading > p { color: #777d84; font-size: 13px; }

.about-activity-grid {
  display: grid;
  grid-template-columns: repeat(3, minmax(0, 1fr));
  gap: 20px;
}

.about-activity-card {
  position: relative;
  overflow: hidden;
  padding: 26px;
  border: 1px solid transparent;
  border-radius: 17px;
  background: white;
  transition: transform .2s, box-shadow .2s;
}

.about-activity-card:hover { transform: translateY(-5px); box-shadow: 0 15px 35px #32201810; }

.activity-red { border-color: #f2d9d7; }
.activity-purple { border-color: #e5d9f5; }
.activity-green { border-color: #d7eadd; }

.about-activity-icon {
  display: grid;
  place-items: center;
  width: 48px;
  height: 48px;
  border-radius: 13px;
  font-size: 23px;
}

.activity-red .about-activity-icon { color: #a91e25; background: #ffeded; }
.activity-purple .about-activity-icon { color: #7551a5; background: #f1eafd; }
.activity-green .about-activity-icon { color: #32805c; background: #e7f6eb; }

.about-activity-number {
  position: absolute;
  top: 25px;
  right: 25px;
  color: #e8e3e1;
  font: 800 28px 'Manrope', sans-serif;
}

.about-activity-card h3 { margin: 23px 0 10px; font: 800 19px 'Manrope', sans-serif; }
.about-activity-card p { min-height: 83px; color: #727780; font-size: 12px; line-height: 1.9; }
.about-activity-card > a { color: #a91e25; font-size: 11px; font-weight: 800; text-decoration: none; }

.about-portfolio { background: white; }
.about-products-grid { display: grid; grid-template-columns: repeat(4, minmax(0, 1fr)); gap: 18px; }

.about-product-card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-height: 300px;
  overflow: hidden;
  padding: 20px;
  border: 1px solid transparent;
  border-radius: 17px;
  transition: transform .2s, box-shadow .2s;
}

.about-product-card:hover { transform: translateY(-5px); box-shadow: 0 15px 35px #32201810; }

.about-red { color: #8e2026; border-color: #f1d4d2; background: linear-gradient(145deg, #fff1ef, #fffafa); }
.about-purple { color: #62418e; border-color: #e3d7f3; background: linear-gradient(145deg, #f4edff, #fffaff); }
.about-green { color: #276b4a; border-color: #d2e9d8; background: linear-gradient(145deg, #eaf8ee, #fbfffc); }
.about-orange { color: #96541c; border-color: #f0ddc9; background: linear-gradient(145deg, #fff1df, #fffaf3); }

.about-product-top { display: flex; align-items: start; justify-content: space-between; gap: 8px; }
.about-product-category { max-width: 145px; font-size: 9px; font-weight: 800; letter-spacing: .7px; text-transform: uppercase; }

.about-product-symbol {
  display: grid;
  place-items: center;
  width: 35px;
  height: 35px;
  flex-shrink: 0;
  border-radius: 10px;
  background: #ffffffb8;
  font: 800 15px 'Manrope', sans-serif;
}

.about-product-emblem { margin-top: 20px; font-size: 35px; opacity: .8; }
.about-product-card h3 { margin: 9px 0; font: 800 21px 'Manrope', sans-serif; }
.about-product-card p { flex: 1; font-size: 11px; line-height: 1.8; opacity: .85; }

.about-product-link {
  display: flex;
  justify-content: space-between;
  gap: 10px;
  margin-top: 13px;
  padding-top: 14px;
  border-top: 1px solid #00000012;
  color: inherit;
  font-size: 11px;
  font-weight: 800;
  text-decoration: none;
}

.about-product-disclaimer { margin-top: 22px; color: #85858b; font-size: 10px; line-height: 1.8; }

.about-values { padding: 80px 24px; color: white; background: #282127; }
.about-values-inner { display: grid; grid-template-columns: .8fr 1.2fr; gap: 60px; max-width: 1120px; margin: 0 auto; }
.about-values-heading h2 { color: white; }
.about-values-heading h2 span { color: #ff9a9d; }
.about-values-heading > p { color: #c6bdc4; }

.about-value-item { display: flex; gap: 17px; padding: 18px 0; border-bottom: 1px solid #ffffff20; }
.about-value-item:first-child { padding-top: 0; }
.about-value-item > span { color: #ff9a9d; font: 800 13px 'Manrope', sans-serif; }
.about-value-item h3 { margin: 0 0 6px; font-size: 14px; }
.about-value-item p { margin: 0; color: #c6bdc4; font-size: 11px; line-height: 1.8; }

.about-contact-section {
  display: grid;
  grid-template-columns: 1.1fr .9fr;
  align-items: center;
  gap: 45px;
  padding: 80px clamp(24px, 8vw, 110px);
  background: linear-gradient(125deg, #fff5f2, #fff);
}

.about-contact-details { display: grid; gap: 19px; margin-top: 28px; }
.about-contact-detail { display: flex; align-items: flex-start; gap: 13px; }
.about-contact-detail > span { color: #a91e25; font-size: 20px; }
.about-contact-detail small, .about-contact-detail strong, .about-contact-detail a { display: block; }
.about-contact-detail small { margin-bottom: 6px; color: #9b3339; font-size: 9px; font-weight: 800; letter-spacing: 1px; }
.about-contact-detail strong, .about-contact-detail a { color: #35343a; font-size: 12px; line-height: 1.7; text-decoration: none; }

.about-contact-card {
  padding: 32px;
  border: 1px solid #f0dcd6;
  border-radius: 19px;
  background: white;
  box-shadow: 0 18px 50px #4b1d1510;
}

.about-contact-card-symbol { margin-bottom: 17px; color: #a91e25; font-size: 35px; }
.about-contact-card h3 { margin: 13px 0; font: 800 24px 'Manrope', sans-serif; }
.about-contact-card > p { color: #727780; font-size: 12px; line-height: 1.9; }
.about-contact-button { margin: 13px 0; }
.about-contact-card > small { display: block; color: #85858b; font-size: 10px; }

.about-footer {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 20px;
  flex-wrap: wrap;
  padding: 28px clamp(20px, 6vw, 85px);
  color: #d9d9df;
  background: #241f23;
}

.about-footer .brand-copy strong { color: white; }
.about-footer .brand-copy small { color: #f4a1a3; }
.about-footer-links { display: flex; flex-wrap: wrap; gap: 18px; }
.about-footer-links a { color: #e1d9df; font-size: 11px; text-decoration: none; }
.about-footer-links a:hover { color: #ff9a9d; }
.about-footer > p { color: #aaa5ad; font-size: 10px; line-height: 1.8; }

@media (max-width: 1000px) {
  .about-products-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
  .about-hero { padding-inline: 30px; }
  .about-hero-art { transform: scale(.92); }
}

@media (max-width: 820px) {
  .about-hero { grid-template-columns: 1fr; padding: 48px 24px; }
  .about-hero-art { min-height: 380px; }
  .about-business-grid,
  .about-values-inner,
  .about-contact-section { grid-template-columns: 1fr; }
  .about-activity-grid { grid-template-columns: 1fr; }
  .about-activity-card p { min-height: 0; }
  .about-values-inner { gap: 28px; }
}

@media (max-width: 480px) {
  .about-products-grid { grid-template-columns: 1fr; }
  .about-hero h1 { letter-spacing: -1px; }
  .about-hero-art { transform: scale(.82); margin: -20px -20px; }
  .about-business-panel, .about-contact-card { padding: 22px; }
  .about-footer { align-items: flex-start; flex-direction: column; }
  .about-footer-links { gap: 13px; }
}

</style>
<?php
$businessName = 'MEDGYNO Healthcare Pvt. Ltd.';
$contactPerson = 'Sunil Kumar Sahu';
$phone = '9718836799';
$whatsapp = '919718836799';

$products = [
    [
        'slug' => 'hepcidown',
        'name' => 'HEPCIDOWN',
        'category' => 'Iron & Nutritional Support',
        'description' => 'Iron, Lactoferrin, Vitamin C, Folic Acid and Vitamin B12 formulation.',
        'color' => 'about-red',
        'symbol' => 'H'
    ],
    [
        'slug' => 'z-calrow-d3',
        'name' => 'Z-Calrow-D3',
        'category' => 'Nutritional Supplement',
        'description' => 'Calcium, Vitamin D3, Magnesium and additional listed nutrients.',
        'color' => 'about-purple',
        'symbol' => 'Z'
    ],
    [
        'slug' => 'fovinac-lf-n',
        'name' => 'FOVINAC-LF N',
        'category' => 'Nutraceutical',
        'description' => 'Product reference lists N-Acetylcysteine (NAC) and Lactoferrin.',
        'color' => 'about-green',
        'symbol' => 'F'
    ],
    [
        'slug' => 'largimag-lc',
        'name' => 'LARGIMAG LC',
        'category' => 'Nutritional Supplement',
        'description' => 'Product reference lists Magnesium Glycinate, L-Arginine, L-Carnitine and Vitamin D3.',
        'color' => 'about-orange',
        'symbol' => 'L'
    ]
];

function about_h($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>About Us | MEDGYNO Healthcare Pvt. Ltd.</title>

    <meta name="description"
          content="Learn about MEDGYNO Healthcare Pvt. Ltd., our nutraceutical product portfolio, business activities and business enquiry contact details.">

    <link rel="stylesheet" href="assets/css/style.css">
   
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>

    <!-- HERO -->
    <section class="about-hero">
        <div class="about-hero-content">
            <span class="about-eyebrow">
                ABOUT OUR BUSINESS
            </span>

            <h1>
                MEDGYNO Healthcare.
                <span>Our Business, Our Focus.</span>
            </h1>

            <p>
                We focus on nutraceutical product presentation,
                product information and business connections.
                Explore our portfolio and connect with us to discuss
                product-related and commercial enquiries.
            </p>

            <div class="about-hero-actions">
                <a href="#our-business" class="about-btn about-btn-primary">
                    Discover Our Business <span>→</span>
                </a>

                <a href="#portfolio" class="about-btn about-btn-light">
                    Explore Products
                </a>
            </div>

            <div class="about-hero-note">
                <span class="about-note-icon">✚</span>
                <span>
                    <strong>Nutraceutical Product Portfolio</strong>
                    <small>Product awareness & business enquiries</small>
                </span>
            </div>
        </div>

        <div class="about-hero-art">
            <div class="about-art-ring ring-one"></div>
            <div class="about-art-ring ring-two"></div>

            <div class="about-brand-card">
                <div class="about-brand-mark">M</div>
                <span class="about-brand-small">WELCOME TO</span>
                <strong>MEDGYNO</strong>
                <span class="about-brand-line"></span>
                <small>HEALTHCARE PVT. LTD.</small>
                <div class="about-brand-cross">✚</div>
                <p>NUTRACEUTICALS</p>
            </div>

            <div class="about-float-card float-card-top">
                <span>✦</span>
                <div>
                    <strong>Our Portfolio</strong>
                    <small>Explore product information</small>
                </div>
            </div>

            <div class="about-float-card float-card-bottom">
                <span>↗</span>
                <div>
                    <strong>Business Enquiries</strong>
                    <small>Let's connect</small>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS INTRODUCTION -->
    <section class="about-business section" id="our-business">
        <div class="about-section-label">
            <span class="section-kicker">WHO WE ARE</span>
            <h2>About <span>MEDGYNO Healthcare</span></h2>
        </div>

        <div class="about-business-grid">
            <div class="about-business-copy">
                <p>
                    <strong><?= about_h($businessName) ?></strong>
                    presents a nutraceutical product portfolio for
                    product awareness and business enquiries.
                    Our website is designed to help visitors explore
                    the products we highlight and access their
                    available product information.
                </p>

                <p>
                    Our business activities include the presentation
                    and promotion of nutraceutical products and
                    communication with interested business contacts.
                    We welcome enquiries about our product portfolio,
                    relevant product documentation and potential
                    business opportunities.
                </p>

                <p>
                    For product composition, approved indications,
                    regulatory details, commercial terms and
                    availability, please contact us directly so the
                    information can be checked before any business
                    decision is made.
                </p>

                <a class="about-inline-link" href="#contact">
                    Get in touch with our team <span>→</span>
                </a>
            </div>

            <div class="about-business-panel">
                <div class="about-panel-top">
                    <span class="about-panel-icon">✚</span>
                    <span class="about-panel-label">OUR BUSINESS</span>
                </div>

                <h3>Nutraceuticals &amp; Product Marketing</h3>

                <p>
                    A focused presentation of our featured product
                    range, supported by product information and
                    direct business communication.
                </p>

                <div class="about-panel-feature">
                    <span>01</span>
                    <div>
                        <strong>Product Portfolio</strong>
                        <small>Highlighted nutraceutical products</small>
                    </div>
                </div>

                <div class="about-panel-feature">
                    <span>02</span>
                    <div>
                        <strong>Product Information</strong>
                        <small>Available composition references</small>
                    </div>
                </div>

                <div class="about-panel-feature">
                    <span>03</span>
                    <div>
                        <strong>Business Communication</strong>
                        <small>Direct enquiry options</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- BUSINESS ACTIVITIES -->
    <section class="about-activities">
        <div class="about-activities-inner">
            <div class="about-centered-heading">
                <span class="section-kicker">WHAT WE DO</span>
                <h2>Our Business <span>Activities</span></h2>
                <p>
                    Three key areas of our website and business
                    communication.
                </p>
            </div>

            <div class="about-activity-grid">
                <article class="about-activity-card activity-red">
                    <span class="about-activity-icon">▤</span>
                    <span class="about-activity-number">01</span>
                    <h3>Product Portfolio</h3>
                    <p>
                        Presenting featured nutraceutical products
                        with product names, categories and available
                        reference information.
                    </p>
                    <a href="#portfolio">Explore portfolio →</a>
                </article>

                <article class="about-activity-card activity-purple">
                    <span class="about-activity-icon">⌕</span>
                    <span class="about-activity-number">02</span>
                    <h3>Product Information</h3>
                    <p>
                        Helping visitors find available product
                        composition information and identify
                        details that may need verification.
                    </p>
                    <a href="#portfolio">View product details →</a>
                </article>

                <article class="about-activity-card activity-green">
                    <span class="about-activity-icon">↗</span>
                    <span class="about-activity-number">03</span>
                    <h3>Business Enquiries</h3>
                    <p>
                        Providing a direct way to contact us about
                        our portfolio, documentation and potential
                        commercial opportunities.
                    </p>
                    <a href="#contact">Contact our team →</a>
                </article>
            </div>
        </div>
    </section>

    <!-- PRODUCT PORTFOLIO -->
    <section class="about-portfolio section" id="portfolio">
        <div class="section-heading">
            <div>
                <span class="section-kicker">OUR PRODUCT RANGE</span>
                <h2>Products in <span>Focus</span></h2>
                <p>
                    Explore the four featured products in our
                    current website portfolio.
                </p>
            </div>

            <span class="product-count">
                FEATURED RANGE <strong>04</strong>
            </span>
        </div>

        <div class="about-products-grid">
            <?php foreach ($products as $product): ?>
                <article class="about-product-card <?= about_h($product['color']) ?>">
                    <div class="about-product-top">
                        <span class="about-product-category">
                            <?= about_h($product['category']) ?>
                        </span>
                        <span class="about-product-symbol">
                            <?= about_h($product['symbol']) ?>
                        </span>
                    </div>

                    <div class="about-product-emblem">✚</div>

                    <h3><?= about_h($product['name']) ?></h3>

                    <p><?= about_h($product['description']) ?></p>

                    <a href="product.php?slug=<?= urlencode($product['slug']) ?>"
                       class="about-product-link">
                        Explore Product <span>↗</span>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>

        <p class="about-product-disclaimer">
            Product information is provided for general awareness.
            Confirm the current approved product label and official
            documentation for complete and accurate details.
        </p>
    </section>

    <!-- VALUES -->
    <section class="about-values">
        <div class="about-values-inner">
            <div class="about-values-heading">
                <span class="section-kicker">OUR APPROACH</span>
                <h2>What We Aim to <span>Deliver</span></h2>
                <p>
                    The principles guiding how we present our
                    portfolio and communicate with business contacts.
                </p>
            </div>

            <div class="about-value-list">
                <article class="about-value-item">
                    <span>01</span>
                    <div>
                        <h3>Clear Product Information</h3>
                        <p>
                            Making available product information
                            easier to explore and understand.
                        </p>
                    </div>
                </article>

                <article class="about-value-item">
                    <span>02</span>
                    <div>
                        <h3>Responsible Communication</h3>
                        <p>
                            Encouraging verification of composition,
                            approved claims and relevant documentation.
                        </p>
                    </div>
                </article>

                <article class="about-value-item">
                    <span>03</span>
                    <div>
                        <h3>Business Relationships</h3>
                        <p>
                            Creating a straightforward channel for
                            product-related and business enquiries.
                        </p>
                    </div>
                </article>

                <article class="about-value-item">
                    <span>04</span>
                    <div>
                        <h3>Product Awareness</h3>
                        <p>
                            Helping visitors discover the products
                            featured in our portfolio.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- CONTACT -->
    <section class="about-contact-section" id="contact">
        <div class="about-contact-copy">
            <span class="section-kicker">LET'S CONNECT</span>
            <h2>Let's Discuss <span>Business.</span></h2>
            <p>
                Interested in our nutraceutical portfolio or
                looking for more product information? Contact
                our business representative for an enquiry.
            </p>

            <div class="about-contact-details">
                <div class="about-contact-detail">
                    <span>◉</span>
                    <div>
                        <small>CONTACT PERSON</small>
                        <strong><?= about_h($contactPerson) ?></strong>
                    </div>
                </div>

                <div class="about-contact-detail">
                    <span>☎</span>
                    <div>
                        <small>PHONE NUMBER</small>
                        <a href="tel:+91<?= about_h($phone) ?>">
                            +91 <?= about_h($phone) ?>
                        </a>
                    </div>
                </div>

                <div class="about-contact-detail">
                    <span>⌖</span>
                    <div>
                        <small>REGISTERED ADDRESS PROVIDED</small>
                        <strong>
                            H. No. C-9/78, Yamuna Vihar,
                            Bhajan Pura, North East, Delhi - 110053
                        </strong>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-contact-card">
            <div class="about-contact-card-symbol">✚</div>
            <span class="section-kicker">MEDGYNO HEALTHCARE</span>
            <h3>Have a business enquiry?</h3>
            <p>
                Start a conversation with us about our
                nutraceutical product portfolio.
            </p>

            <a class="about-btn about-btn-primary about-contact-button"
               href="https://wa.me/<?= about_h($whatsapp) ?>?text=<?= rawurlencode('Hello, I would like to enquire about the MEDGYNO Healthcare nutraceutical product portfolio.') ?>"
               target="_blank" rel="noopener noreferrer">
                WhatsApp Us <span>↗</span>
            </a>

            <small>
                For business enquiries and product information.
            </small>
        </div>
    </section>

</main>

<footer class="about-footer">
    <a class="brand" href="index.php">
        <span class="brand-symbol">M</span>
        <span class="brand-copy">
            <strong>MEDGYNO</strong>
            <small>HEALTHCARE PVT. LTD.</small>
        </span>
    </a>

    <div class="about-footer-links">
        <a href="index.php">Home</a>
        <a href="index.php#products">Products</a>
        <a href="about-us.php">About Us</a>
        <a href="#contact">Contact</a>
    </div>

    <p>
        © <?= date('Y') ?> MEDGYNO Healthcare Pvt. Ltd.
        <br>Product information &amp; business enquiries.
    </p>
</footer>

<script src="assets/js/header.js"></script>
</body>
</html>
