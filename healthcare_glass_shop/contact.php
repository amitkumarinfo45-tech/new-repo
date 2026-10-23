
<?php


if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

$businessName = 'MEDGYNO Healthcare Pvt. Ltd.';
$contactName = 'Sunil Kumar Sahu';
$phone = '9718836799';
$whatsapp = '919718836799';
$address = 'H. No. C-9/78, Yamuna Vihar, Bhajan Pura, North East, Delhi - 110053';

function h($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

$success = '';
$error = '';
$name = '';
$email = '';
$phoneInput = '';
$subject = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim((string)($_POST['name'] ?? ''));
    $email = trim((string)($_POST['email'] ?? ''));
    $phoneInput = trim((string)($_POST['phone'] ?? ''));
    $subject = trim((string)($_POST['subject'] ?? ''));
    $message = trim((string)($_POST['message'] ?? ''));

    if (
        $name === '' ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        $message === ''
    ) {
        $error = 'Please enter your name, a valid email address and your enquiry.';
    } elseif (strlen($name) > 100 || strlen($email) > 150 || strlen($message) > 3000) {
        $error = 'Some details are too long. Please shorten them and try again.';
    } else {
        /*
         * Form validation is ready.
         * To deliver enquiries by email, configure the recipient and mail
         * transport below, or connect this form to your preferred backend.
         */
        $to = 'YOUR_BUSINESS_EMAIL@example.com';

        if ($to !== 'YOUR_BUSINESS_EMAIL@example.com') {
            $safeSubject = str_replace(["\r", "\n"], '', $subject);
            $mailSubject = 'Website enquiry: ' . ($safeSubject ?: 'General enquiry');

            $mailBody =
                "Name: {$name}\n" .
                "Email: {$email}\n" .
                "Phone: {$phoneInput}\n" .
                "Subject: {$safeSubject}\n\n" .
                "Message:\n{$message}\n";

            $headers = "From: website@yourdomain.com\r\n";
            $headers .= "Reply-To: {$email}\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            if (@mail($to, $mailSubject, $mailBody, $headers)) {
                $success = 'Thank you! Your enquiry has been submitted.';
                $name = $email = $phoneInput = $subject = $message = '';
            } else {
                $error = 'Email delivery is not configured on this server. Please contact us by phone or WhatsApp.';
            }
        } else {
            $error = 'The form is validated, but email delivery is not configured yet. Please use the phone or WhatsApp options below.';
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Contact MEDGYNO Healthcare Pvt. Ltd. for nutraceutical product information and business enquiries.">
<title>Contact Us | MEDGYNO Healthcare Pvt. Ltd.</title>
<link rel="stylesheet" href="assets/css/style.css">

<style>
:root {
    --contact-red: #e52b36;
    --contact-dark: #242631;
    --contact-muted: #697080;
    --contact-bg: #f7f8fc;
}
.contact-page {
    color: var(--contact-dark);
    background: var(--contact-bg);
    min-height: 100vh;
}
.contact-hero {
    position: relative;
    overflow: hidden;
    padding: 82px 7%;
    color: #fff;
    background: linear-gradient(120deg, #85151d, #e52b36 65%, #ff666b);
}
.contact-hero::after {
    content: "";
    position: absolute;
    width: 330px;
    height: 330px;
    right: -70px;
    top: -120px;
    border: 1px solid #ffffff45;
    border-radius: 50%;
    box-shadow: 0 0 0 35px #ffffff0c, 0 0 0 75px #ffffff0b;
}
.contact-hero-inner, .contact-container {
    width: min(1120px, 100%);
    margin: auto;
}
.contact-eyebrow {
    display: inline-block;
    margin-bottom: 15px;
    font-size: 12px;
    font-weight: 800;
    letter-spacing: 2px;
    color: #ffe0e2;
}
.contact-hero h1 {
    margin: 0 0 16px;
    max-width: 700px;
    font-size: clamp(36px, 5vw, 58px);
    line-height: 1.08;
    color: #fff;
}
.contact-hero p {
    max-width: 640px;
    margin: 0;
    color: #fff;
    line-height: 1.8;
    font-size: 16px;
}
.contact-container {
    padding: 55px 22px 75px;
}
.contact-cards {
    display: grid;
    grid-template-columns: repeat(3, minmax(0, 1fr));
    gap: 18px;
    margin-bottom: 35px;
}
.contact-info-card {
    background: #fff;
    border: 1px solid #ececf2;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 12px 35px #1b1e2a09;
    min-width: 0;
}
.contact-info-icon {
    width: 48px;
    height: 48px;
    display: grid;
    place-items: center;
    border-radius: 14px;
    background: #fff0f1;
    color: var(--contact-red);
    font-size: 23px;
    margin-bottom: 17px;
}
.contact-info-card h3 {
    margin: 0 0 9px;
    font-size: 18px;
}
.contact-info-card p {
    color: var(--contact-muted);
    font-size: 14px;
    line-height: 1.7;
    overflow-wrap: anywhere;
    margin: 0 0 14px;
}
.contact-info-card a {
    color: var(--contact-red);
    text-decoration: none;
    font-weight: 750;
    overflow-wrap: anywhere;
}
.contact-main-grid {
    display: grid;
    grid-template-columns: minmax(0, 1.2fr) minmax(280px, .8fr);
    gap: 25px;
    align-items: start;
}
.contact-form-card, .contact-business-card {
    background: #fff;
    border: 1px solid #ececf2;
    border-radius: 20px;
    padding: clamp(22px, 4vw, 35px);
    box-shadow: 0 12px 35px #1b1e2a09;
    min-width: 0;
}
.contact-form-card h2, .contact-business-card h2 {
    font-size: 26px;
    margin: 0 0 9px;
}
.contact-form-card > p, .contact-business-card > p {
    color: var(--contact-muted);
    font-size: 14px;
    line-height: 1.7;
    margin: 0 0 25px;
}
.contact-form {
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 17px;
}
.contact-field {
    display: flex;
    flex-direction: column;
    gap: 8px;
    min-width: 0;
}
.contact-field.full {
    grid-column: 1 / -1;
}
.contact-field label {
    font-size: 13px;
    font-weight: 750;
}
.contact-field input, .contact-field textarea, .contact-field select {
    width: 100%;
    min-width: 0;
    padding: 13px 14px;
    border: 1px solid #dfe1e8;
    border-radius: 10px;
    background: #fff;
    color: var(--contact-dark);
    font: inherit;
    font-size: 14px;
    outline: none;
    box-sizing: border-box;
}
.contact-field input:focus, .contact-field textarea:focus, .contact-field select:focus {
    border-color: var(--contact-red);
    box-shadow: 0 0 0 3px #e52b3618;
}
.contact-field textarea {
    min-height: 145px;
    resize: vertical;
}
.contact-submit, .contact-whatsapp {
    display: inline-flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    padding: 14px 20px;
    border: 0;
    border-radius: 10px;
    background: var(--contact-red);
    color: #fff;
    text-decoration: none;
    font-weight: 800;
    cursor: pointer;
    font: inherit;
    font-size: 14px;
}
.contact-submit:hover, .contact-whatsapp:hover {
    background: #bd1c27;
}
.contact-alert {
    padding: 13px 15px;
    border-radius: 10px;
    margin-bottom: 18px;
    font-size: 14px;
    line-height: 1.6;
}
.contact-alert.success {
    color: #146c43;
    background: #e8f7ef;
}
.contact-alert.error {
    color: #9c1c25;
    background: #fff0f1;
}
.contact-business-card {
    background: #252630;
    color: #fff;
}
.contact-business-card h2 {
    color: #fff;
}
.contact-business-card > p {
    color: #d5d5df;
}
.contact-business-name {
    padding: 18px 0;
    border-top: 1px solid #ffffff20;
    border-bottom: 1px solid #ffffff20;
    margin: 20px 0;
}
.contact-business-name small {
    display: block;
    color: #ffb8bd;
    font-size: 11px;
    font-weight: 800;
    letter-spacing: 1.2px;
    margin-bottom: 7px;
}
.contact-business-name strong {
    font-size: 19px;
}
.contact-business-detail {
    display: flex;
    gap: 12px;
    margin: 19px 0;
    align-items: flex-start;
}
.contact-business-detail > span {
    color: #ff7b82;
    font-size: 20px;
}
.contact-business-detail small {
    display: block;
    color: #c5c5d0;
    font-size: 11px;
    letter-spacing: .7px;
    margin-bottom: 5px;
}
.contact-business-detail a, .contact-business-detail address {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    line-height: 1.7;
    font-style: normal;
    overflow-wrap: anywhere;
}
.contact-business-card .contact-whatsapp {
    width: 100%;
    box-sizing: border-box;
    margin-top: 10px;
    background: #168b55;
    color: #fff;
}
.contact-business-card .contact-whatsapp:hover {
    background: #106d42;
}
.contact-map {
    margin-top: 25px;
    background: #fff;
    border: 1px solid #ececf2;
    border-radius: 18px;
    padding: 22px;
}
.contact-map h3 {
    margin: 0 0 8px;
}
.contact-map p {
    margin: 0 0 14px;
    color: var(--contact-muted);
    line-height: 1.7;
    font-size: 14px;
}
.contact-map a {
    color: var(--contact-red);
    font-weight: 750;
    text-decoration: none;
}
.contact-footer-note {
    padding: 22px;
    text-align: center;
    color: #777b88;
    font-size: 12px;
}
@media (max-width: 800px) {
    .contact-cards {
        grid-template-columns: 1fr;
    }
    .contact-main-grid {
        grid-template-columns: 1fr;
    }
    .contact-hero {
        padding: 60px 6%;
    }
}
@media (max-width: 520px) {
    .contact-container {
        padding: 32px 14px 45px;
    }
    .contact-form {
        grid-template-columns: 1fr;
    }
    .contact-field.full {
        grid-column: auto;
    }
    .contact-form-card, .contact-business-card {
        padding: 21px 17px;
    }
    .contact-hero h1 {
        font-size: 37px;
    }
}
</style>
</head>
<body>

<?php
$headerFile = __DIR__ . '/includes/header.php';
if (is_file($headerFile)) {
    include $headerFile;
}
?>

<main class="contact-page">
    <section class="contact-hero">
        <div class="contact-hero-inner">
            <span class="contact-eyebrow">MEDGYNO HEALTHCARE PVT. LTD.</span>
            <h1>Let's Start a<br>Conversation.</h1>
            <p>
                Have a question about our nutraceutical portfolio, product information
                or a business opportunity? Contact our team and we will help you find
                the right next step.
            </p>
        </div>
    </section>

    <div class="contact-container">
        <section class="contact-cards" aria-label="Contact options">
            <article class="contact-info-card">
                <div class="contact-info-icon">☎</div>
                <h3>Call Our Team</h3>
                <p>For direct business and product enquiries, contact our representative.</p>
                <a href="tel:+91<?= h($phone) ?>">+91 <?= h($phone) ?></a>
            </article>

            <article class="contact-info-card">
                <div class="contact-info-icon">◉</div>
                <h3>WhatsApp Enquiry</h3>
                <p>Send us your enquiry through WhatsApp for a convenient conversation.</p>
                <a href="https://wa.me/<?= h($whatsapp) ?>?text=Hello%2C%20I%20have%20a%20business%20enquiry."
                   target="_blank" rel="noopener noreferrer">Message us →</a>
            </article>

            <article class="contact-info-card">
                <div class="contact-info-icon">⌖</div>
                <h3>Our Address</h3>
                <p><?= h($address) ?></p>
                <a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($address) ?>"
                   target="_blank" rel="noopener noreferrer">Open in Google Maps →</a>
            </article>
        </section>

        <section class="contact-main-grid">
            <div class="contact-form-card">
                <h2>Send an Enquiry</h2>
                <p>Fill in the details below. Fields marked with * are required.</p>

                <?php if ($success !== ''): ?>
                    <div class="contact-alert success" role="status"><?= h($success) ?></div>
                <?php endif; ?>

                <?php if ($error !== ''): ?>
                    <div class="contact-alert error" role="alert"><?= h($error) ?></div>
                <?php endif; ?>

                <form class="contact-form" method="post" action="contact.php">
                    <div class="contact-field">
                        <label for="contactName">Your Name *</label>
                        <input id="contactName" name="name" type="text" maxlength="100"
                               autocomplete="name" required value="<?= h($name) ?>"
                               placeholder="Enter your full name">
                    </div>

                    <div class="contact-field">
                        <label for="contactEmail">Email Address *</label>
                        <input id="contactEmail" name="email" type="email" maxlength="150"
                               autocomplete="email" required value="<?= h($email) ?>"
                               placeholder="you@example.com">
                    </div>

                    <div class="contact-field">
                        <label for="contactPhone">Phone Number</label>
                        <input id="contactPhone" name="phone" type="tel" maxlength="25"
                               autocomplete="tel" value="<?= h($phoneInput) ?>"
                               placeholder="+91">
                    </div>

                    <div class="contact-field">
                        <label for="contactSubject">Enquiry Type</label>
                        <select id="contactSubject" name="subject">
                            <option value="">Select an enquiry type</option>
                            <?php foreach ([
                                'Product information',
                                'Business enquiry',
                                'Distribution enquiry',
                                'Marketing collaboration',
                                'General enquiry'
                            ] as $option): ?>
                                <option value="<?= h($option) ?>" <?= $subject === $option ? 'selected' : '' ?>>
                                    <?= h($option) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="contact-field full">
                        <label for="contactMessage">Your Message *</label>
                        <textarea id="contactMessage" name="message" maxlength="3000"
                                  required placeholder="Please tell us how we can help..."><?= h($message) ?></textarea>
                    </div>

                    <div class="contact-field full">
                        <button class="contact-submit" type="submit">
                            Submit Enquiry <span>→</span>
                        </button>
                    </div>
                </form>
            </div>

            <aside class="contact-business-card">
                <span class="contact-eyebrow">GET IN TOUCH</span>
                <h2>We'd be happy to hear from you.</h2>
                <p>Reach out for nutraceutical product information and professional business discussions.</p>

                <div class="contact-business-name">
                    <small>BUSINESS REPRESENTATIVE</small>
                    <strong><?= h($contactName) ?></strong>
                </div>

                <div class="contact-business-detail">
                    <span>☎</span>
                    <div>
                        <small>PHONE</small>
                        <a href="tel:+91<?= h($phone) ?>">+91 <?= h($phone) ?></a>
                    </div>
                </div>

                <div class="contact-business-detail">
                    <span>⌖</span>
                    <div>
                        <small>REGISTERED ADDRESS</small>
                        <address><?= h($address) ?></address>
                    </div>
                </div>

                <div class="contact-business-detail">
                    <span>✉</span>
                    <div>
                        <small>EMAIL</small>
                        <a href="mailto:YOUR_BUSINESS_EMAIL@example.com">Email details to be configured</a>
                    </div>
                </div>

                <a class="contact-whatsapp"
                   href="https://wa.me/<?= h($whatsapp) ?>?text=Hello%2C%20I%20would%20like%20to%20enquire%20about%20MEDGYNO%20Healthcare."
                   target="_blank" rel="noopener noreferrer">
                    Chat on WhatsApp ↗
                </a>
            </aside>
        </section>

        <section class="contact-map">
            <h3>Find Our Location</h3>
            <p><?= h($address) ?></p>
            <a href="https://www.google.com/maps/search/?api=1&query=<?= urlencode($address) ?>"
               target="_blank" rel="noopener noreferrer">Get Directions on Google Maps →</a>
        </section>
    </div>
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
