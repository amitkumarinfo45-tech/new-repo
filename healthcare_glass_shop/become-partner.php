
<?php
session_start();

function h($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

$whatsappNumber = '919718836799';
$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $city = trim($_POST['city'] ?? '');
    $partnerType = trim($_POST['partner_type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $allowedTypes = [
        'Distributor',
        'Stockist',
        'Marketing Partner',
        'Healthcare Professional',
        'Business Associate',
        'Other'
    ];

    if ($name === '' || $phone === '' || $city === '' || $partnerType === '') {
        $error = 'Please fill in all required fields.';
    } elseif (!preg_match('/^[0-9+\s()-]{8,20}$/', $phone)) {
        $error = 'Please enter a valid contact number.';
    } elseif ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } elseif (!in_array($partnerType, $allowedTypes, true)) {
        $error = 'Please select a valid partnership type.';
    } else {
        $subject = 'MEDGYNO Partnership Enquiry';
        $body = "New partnership enquiry\n\n"
              . "Name: $name\n"
              . "Phone: $phone\n"
              . "Email: $email\n"
              . "City: $city\n"
              . "Partnership type: $partnerType\n"
              . "Message: $message\n";

        // This creates a WhatsApp enquiry link; it does not store the form.
        $_SESSION['partner_enquiry'] = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'city' => $city,
            'partner_type' => $partnerType,
            'message' => $message
        ];

        $whatsappText = rawurlencode($body);
        header('Location: https://wa.me/' . $whatsappNumber . '?text=' . $whatsappText);
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Explore business partnership opportunities with MEDGYNO Healthcare Pvt. Ltd.">
<title>Become a Partner | MEDGYNO Healthcare</title>
<link rel="stylesheet" href="assets/css/style.css">

<style>
.partner-page {
    background: #f7f8fc;
    color: #222635;
    min-height: 100vh;
}
.partner-hero {
    padding: 75px 6%;
    background: linear-gradient(120deg,#74121c,#df2936 68%,#ff777c);
    color: white;
    overflow: hidden;
    position: relative;
}
.partner-hero-inner {
    max-width: 1120px;
    margin: auto;
    position: relative;
    z-index: 1;
}
.partner-kicker {
    color: #ffe0e2;
    letter-spacing: 2px;
    font-size: 12px;
    font-weight: 800;
}
.partner-hero h1 {
    font-size: clamp(38px,6vw,66px);
    line-height: 1.08;
    margin: 18px 0;
    color: white;
}
.partner-hero h1 span { color: #ffe0a8; }
.partner-hero p {
    max-width: 680px;
    line-height: 1.85;
    color: white;
}
.partner-btn {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    padding: 14px 21px;
    border-radius: 9px;
    background: #fff;
    color: #bd202c;
    font-weight: 800;
    text-decoration: none;
    border: 0;
    cursor: pointer;
}
.partner-container {
    max-width: 1120px;
    margin: auto;
    padding: 55px 20px;
}
.partner-section-title small {
    color: #df2936;
    font-weight: 800;
    letter-spacing: 1.8px;
}
.partner-section-title h2 {
    font-size: clamp(27px,4vw,39px);
    margin: 10px 0;
}
.partner-section-title h2 span { color: #df2936; }
.partner-section-title p {
    color: #6c7281;
    line-height: 1.8;
}
.partner-benefits {
    display: grid;
    grid-template-columns: repeat(3,minmax(0,1fr));
    gap: 20px;
    margin-top: 28px;
}
.partner-benefit {
    background: white;
    border: 1px solid #e8e9f0;
    border-radius: 16px;
    padding: 25px;
    box-shadow: 0 12px 30px #22263508;
}
.partner-benefit:nth-child(3n+1) { border-top: 4px solid #e62936; }
.partner-benefit:nth-child(3n+2) { border-top: 4px solid #7056d8; }
.partner-benefit:nth-child(3n) { border-top: 4px solid #1c9b82; }
.partner-benefit .symbol {
    width: 48px;
    height: 48px;
    border-radius: 13px;
    background: #fff0f1;
    display: grid;
    place-items: center;
    font-size: 23px;
}
.partner-benefit h3 { margin: 17px 0 8px; }
.partner-benefit p {
    color: #6c7281;
    line-height: 1.8;
    font-size: 14px;
}
.partner-form-layout {
    display: grid;
    grid-template-columns: .85fr 1.15fr;
    gap: 28px;
    align-items: start;
}
.partner-info {
    background: #252630;
    color: white;
    padding: 30px;
    border-radius: 18px;
}
.partner-info h2 { color: white; }
.partner-info p,
.partner-info li {
    color: #e0e0e8;
    line-height: 1.8;
}
.partner-info ul { padding-left: 20px; }
.partner-form {
    background: white;
    padding: 30px;
    border: 1px solid #e8e9f0;
    border-radius: 18px;
    box-shadow: 0 12px 35px #22263508;
}
.partner-form h2 { margin-top: 0; }
.partner-form .form-grid {
    display: grid;
    grid-template-columns: repeat(2,minmax(0,1fr));
    gap: 16px;
}
.partner-form label {
    display: block;
    font-size: 13px;
    font-weight: 750;
    margin-bottom: 7px;
}
.partner-form input,
.partner-form select,
.partner-form textarea {
    box-sizing: border-box;
    width: 100%;
    padding: 13px;
    border: 1px solid #dfe1e9;
    border-radius: 8px;
    background: #fff;
    color: #222635;
    font: inherit;
    outline: none;
}
.partner-form input:focus,
.partner-form select:focus,
.partner-form textarea:focus {
    border-color: #df2936;
    box-shadow: 0 0 0 3px #df29361a;
}
.partner-form .full { grid-column: 1 / -1; }
.partner-form textarea { min-height: 115px; resize: vertical; }
.partner-form button {
    background: #df2936;
    color: white;
    width: 100%;
    margin-top: 18px;
}
.partner-form button:hover { background: #bd202c; }
.partner-alert {
    padding: 12px 14px;
    border-radius: 8px;
    margin-bottom: 18px;
    background: #fff0f1;
    color: #a31722;
}
.partner-note {
    font-size: 12px;
    color: #747989;
    line-height: 1.7;
}
.partner-cta {
    padding: 35px;
    border-radius: 18px;
    background: #fff0f1;
    border: 1px solid #f3d7da;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}
.partner-cta p { color: #6c7281; line-height: 1.7; }
.partner-cta .partner-btn { background: #df2936; color: white; }
@media(max-width:800px) {
    .partner-benefits { grid-template-columns: repeat(2,minmax(0,1fr)); }
    .partner-form-layout { grid-template-columns: 1fr; }
}
@media(max-width:540px) {
    .partner-hero { padding: 50px 20px; }
    .partner-container { padding: 38px 14px; }
    .partner-benefits { grid-template-columns: 1fr; }
    .partner-form { padding: 21px; }
    .partner-form .form-grid { grid-template-columns: 1fr; }
    .partner-form .full { grid-column: auto; }
    .partner-cta { padding: 23px; }
    .partner-cta .partner-btn { width: 100%; box-sizing: border-box; }
}
</style>
</head>
<body>

<?php
$headerPath = __DIR__ . '/includes/header.php';
if (is_file($headerPath)) {
    include $headerPath;
}
?>

<main class="partner-page">

    <section class="partner-hero">
        <div class="partner-hero-inner">
            <span class="partner-kicker">MEDGYNO HEALTHCARE PVT. LTD.</span>
            <h1>Let's Grow<br><span>Together.</span></h1>
            <p>
                Interested in nutraceuticals, healthcare product marketing or
                business collaboration? Connect with MEDGYNO Healthcare to discuss
                potential partnership opportunities.
            </p>
            <a class="partner-btn" href="#partner-enquiry">Become a Partner →</a>
        </div>
    </section>

    <section class="partner-container">
        <div class="partner-section-title">
            <small>PARTNERSHIP OPPORTUNITIES</small>
            <h2>Build a <span>Business Connection</span></h2>
            <p>
                We welcome enquiries from businesses and professionals interested
                in learning more about our nutraceutical portfolio and possible
                collaboration opportunities.
            </p>
        </div>

        <div class="partner-benefits">
            <article class="partner-benefit">
                <div class="symbol">✦</div>
                <h3>Product Portfolio</h3>
                <p>Ask our team for available product information, compositions and approved documentation.</p>
            </article>

            <article class="partner-benefit">
                <div class="symbol">↗</div>
                <h3>Business Enquiries</h3>
                <p>Discuss your business interests and the type of collaboration you are exploring.</p>
            </article>

            <article class="partner-benefit">
                <div class="symbol">♧</div>
                <h3>Professional Network</h3>
                <p>Share your location and business profile so the team can review your enquiry.</p>
            </article>
        </div>
    </section>

    <section class="partner-container" id="partner-enquiry">
        <div class="partner-form-layout">
            <aside class="partner-info">
                <span class="partner-kicker">LET'S CONNECT</span>
                <h2>Tell us about your business</h2>
                <p>
                    Send your partnership enquiry to our business contact through
                    WhatsApp. Please provide accurate contact details so the team
                    can understand your request.
                </p>
                <ul>
                    <li>Distributor or stockist enquiries</li>
                    <li>Sales and marketing collaboration</li>
                    <li>Healthcare business enquiries</li>
                    <li>Nutraceutical portfolio information</li>
                </ul>
                <p><strong>Business contact</strong><br>Sunil Kumar Sahu</p>
                <p><strong>Phone</strong><br>
                    <a href="tel:+919718836799" style="color:white">+91 97188 36799</a>
                </p>
            </aside>

            <form class="partner-form" method="post" action="become-partner.php">
                <h2>Partnership Enquiry Form</h2>
                <p class="partner-note">Fields marked * are required.</p>

                <?php if ($error !== ''): ?>
                    <div class="partner-alert"><?= h($error) ?></div>
                <?php endif; ?>

                <div class="form-grid">
                    <div>
                        <label for="name">Full Name *</label>
                        <input id="name" name="name" required maxlength="100"
                               value="<?= h($_POST['name'] ?? '') ?>"
                               autocomplete="name">
                    </div>

                    <div>
                        <label for="phone">Contact Number *</label>
                        <input id="phone" name="phone" required maxlength="20"
                               value="<?= h($_POST['phone'] ?? '') ?>"
                               autocomplete="tel" inputmode="tel">
                    </div>

                    <div>
                        <label for="email">Email Address</label>
                        <input id="email" type="email" name="email" maxlength="150"
                               value="<?= h($_POST['email'] ?? '') ?>"
                               autocomplete="email">
                    </div>

                    <div>
                        <label for="city">City / State *</label>
                        <input id="city" name="city" required maxlength="120"
                               value="<?= h($_POST['city'] ?? '') ?>"
                               autocomplete="address-level2">
                    </div>

                    <div class="full">
                        <label for="partner_type">Partnership Type *</label>
                        <select id="partner_type" name="partner_type" required>
                            <option value="">Select partnership type</option>
                            <?php foreach ([
                                'Distributor',
                                'Stockist',
                                'Marketing Partner',
                                'Healthcare Professional',
                                'Business Associate',
                                'Other'
                            ] as $type): ?>
                                <option value="<?= h($type) ?>"
                                    <?= (($_POST['partner_type'] ?? '') === $type) ? 'selected' : '' ?>>
                                    <?= h($type) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="full">
                        <label for="message">Tell us about your business</label>
                        <textarea id="message" name="message" maxlength="1500"
                                  placeholder="Your business profile, area of operation or enquiry..."><?= h($_POST['message'] ?? '') ?></textarea>
                    </div>
                </div>

                <button class="partner-btn" type="submit">
                    Submit via WhatsApp →
                </button>

                <p class="partner-note">
                    Submitting opens WhatsApp with your enquiry details for you
                    to review and send. This page does not save the enquiry in a database.
                </p>
            </form>
        </div>
    </section>

    <section class="partner-container">
        <div class="partner-cta">
            <div>
                <h2>Have a direct question?</h2>
                <p>Contact our business team for product and collaboration enquiries.</p>
            </div>
            <a class="partner-btn"
               href="https://wa.me/<?= h($whatsappNumber) ?>?text=<?= rawurlencode('Hello, I would like to discuss a business partnership with MEDGYNO Healthcare.') ?>"
               target="_blank" rel="noopener noreferrer">
                WhatsApp Us ↗
            </a>
        </div>
    </section>

</main>

<footer class="site-footer">
    <a class="brand footer-brand" href="index.php">
        <span class="brand-symbol">M</span>
        <span class="brand-copy">
            <strong>MEDGYNO</strong>
            <small>HEALTHCARE PVT. LTD.</small>
        </span>
    </a>
    <p>Product information &amp; business enquiries.</p>
    <span>© <?= date('Y') ?> MEDGYNO Healthcare Pvt. Ltd.</span>
</footer>

</body>
</html>
