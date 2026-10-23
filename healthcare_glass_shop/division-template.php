
<?php
if (!isset($division) || !is_array($division)) {
    http_response_code(404);
    exit('Division information not found.');
}

function division_h($value): string {
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

$whatsappNumber = '919718836799';
$whatsappMessage = 'Hello, I would like to enquire about the '
    . $division['title'] . ' division and its product portfolio.';

$allDivisions = [
    'nephroscience.php' => 'Nephroscience',
    'critical-care.php' => 'Critical Care',
    'cns.php' => 'CNS',
    'gastroenterology.php' => 'Gastroenterology',
    'urology.php' => 'Urology',
    'cardio-metabolic.php' => 'Cardio Metabolic',
    'respiratory.php' => 'Respiratory',
    'gynaecology.php' => 'Gynaecology'
];

$currentPage = basename($_SERVER['SCRIPT_NAME'] ?? '');
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="<?= division_h($division['meta']) ?>">
<title><?= division_h($division['title']) ?> | MEDGYNO Healthcare</title>
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/divisions.css">
</head>
<body>

<?php
$headerPath = __DIR__ . '/includes/header.php';
if (is_file($headerPath)) {
    include $headerPath;
}
?>

<main class="division-page">
    <section class="division-hero">
        <div class="division-hero-inner">
            <span class="division-eyebrow">MEDGYNO HEALTHCARE PVT. LTD. / DIVISIONS</span>
            <h1><?= division_h($division['title']) ?></h1>
            <p><?= division_h($division['hero']) ?></p>

            <div class="division-actions">
                <a class="division-btn"
                   href="https://wa.me/<?= division_h($whatsappNumber) ?>?text=<?= rawurlencode($whatsappMessage) ?>"
                   target="_blank" rel="noopener noreferrer">
                    Business Enquiry ↗
                </a>
                <a class="division-btn division-btn-outline" href="#overview">
                    Explore Division ↓
                </a>
            </div>
        </div>
    </section>

    <div class="division-container">
        <section class="division-intro" id="overview">
            <div class="division-copy">
                <div class="division-heading">
                    <small>DIVISION OVERVIEW</small>
                    <h2><?= division_h($division['heading']) ?></h2>
                </div>
                <?php foreach ($division['paragraphs'] as $paragraph): ?>
                    <p><?= division_h($paragraph) ?></p>
                <?php endforeach; ?>
            </div>

            <aside class="division-highlight">
                <h3>Division at a glance</h3>
                <ul>
                    <?php foreach ($division['highlights'] as $highlight): ?>
                        <li><?= division_h($highlight) ?></li>
                    <?php endforeach; ?>
                </ul>
                <p>
                    For product-specific details, approved indications and commercial
                    information, contact our business team.
                </p>
            </aside>
        </section>

        <section>
            <div class="division-heading">
                <small>KEY AREAS</small>
                <h2>Understanding <span><?= division_h($division['short']) ?></span></h2>
                <p><?= division_h($division['areas_intro']) ?></p>
            </div>

            <div class="division-cards">
                <?php foreach ($division['areas'] as $area): ?>
                    <article class="division-card">
                        <span class="division-card-icon"><?= division_h($area['icon']) ?></span>
                        <h3><?= division_h($area['title']) ?></h3>
                        <p><?= division_h($area['text']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>

        <section class="division-product-note" id="portfolio">
            <div class="division-heading">
                <small>PRODUCT PORTFOLIO</small>
                <h2>Explore Our <span><?= division_h($division['short']) ?> Portfolio</span></h2>
            </div>
            <p><?= division_h($division['portfolio']) ?></p>
            <a class="division-btn"
               href="https://wa.me/<?= division_h($whatsappNumber) ?>?text=<?= rawurlencode($whatsappMessage) ?>"
               target="_blank" rel="noopener noreferrer">
                Request Product Information →
            </a>
        </section>

        <section class="division-contact">
            <div>
                <h2>Connect with our team</h2>
                <p>
                    Contact MEDGYNO Healthcare for division-related product information
                    and business enquiries.
                </p>
            </div>
            <a class="division-btn"
               href="https://wa.me/<?= division_h($whatsappNumber) ?>?text=<?= rawurlencode($whatsappMessage) ?>"
               target="_blank" rel="noopener noreferrer">
                WhatsApp: +91 97188 36799 ↗
            </a>
        </section>

        <section class="division-related">
            <div class="division-heading">
                <small>EXPLORE MORE</small>
                <h2>Our Other <span>Divisions</span></h2>
            </div>

            <div class="division-related-grid">
                <?php foreach ($allDivisions as $url => $label): ?>
                    <?php if ($url !== $currentPage): ?>
                        <a href="<?= division_h($url) ?>"><?= division_h($label) ?> →</a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </section>

        <div class="division-disclaimer">
            <strong>Important information:</strong>
            This page provides general educational information about a healthcare
            specialty. It does not provide medical advice or recommend a treatment.
            Product availability, composition, approved indications and claims should
            be confirmed against the current approved product documentation.
        </div>
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
