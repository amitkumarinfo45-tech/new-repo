
<?php
$products = [
    'hepcidown' => [
        'name' => 'HEPCIDOWN',
        'image' => 'assets/images/hepcidown.png',
        'subtitle' => 'Iron + Lactoferrin Formula',
        'description' => 'The supplied product reference lists elemental iron, Vitamin C, Lactoferrin, Folic Acid and Vitamin B12.',
        'ingredients' => [
            'Elemental Iron — 15 mg',
            'Vitamin C — 35 mg',
            'Lactoferrin — 50 mg',
            'Folic Acid — 570 mcg',
            'Vitamin B12 — 2.2 mcg'
        ]
    ],
    'z-calrow-d3' => [
        'name' => 'Z-Calrow-D3',
        'image' => 'assets/images/z-calrow-d3.png',
        'subtitle' => 'Calcium & Nutrient Formula',
        'description' => 'The supplied reference lists calcium, Vitamin D3, magnesium and additional nutrients.',
        'ingredients' => [
            'Calcium Carbonate — 550 mg',
            'Vitamin D3 — 600 IU',
            'Magnesium — 50 mg',
            'Vitamin K2 — 50 mcg',
            'Zinc — 7.5 mg',
            'Other ingredients as shown in the supplied reference'
        ]
    ],
    'fovinac-lf-n' => [
        'name' => 'FOVINAC-LF N',
        'image' => 'assets/images/fovinac-lf-n.png',
        'subtitle' => 'NAC + Lactoferrin',
        'description' => 'The supplied reference lists N-Acetylcysteine (NAC) and Lactoferrin.',
        'ingredients' => [
            'N-Acetylcysteine (NAC) — 600 mg',
            'Lactoferrin — 50 mg'
        ]
    ],
    'largimag-lc' => [
        'name' => 'LARGIMAG LC',
        'image' => 'assets/images/largimag-lc.png',
        'subtitle' => 'Magnesium & Nutrient Formula',
        'description' => 'The supplied reference lists Magnesium Glycinate, L-Arginine, L-Carnitine and Vitamin D3.',
        'ingredients' => [
            'Magnesium Glycinate — 400 mg',
            'L-Arginine — 500 mg',
            'L-Carnitine — 500 mg',
            'Vitamin D3 — 1000 IU'
        ]
    ]
];

$slug = $_GET['slug'] ?? '';
$product = is_string($slug) ? ($products[$slug] ?? null) : null;
$phone = '919718836799';

if (!$product) {
    http_response_code(404);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $product ? htmlspecialchars($product['name']) : 'Product Not Found' ?> | MEDGYNO Healthcare</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
  <a class="brand" href="index.php">
    <span class="brand-symbol">M</span>
    <span class="brand-copy">
      <strong>MEDGYNO</strong>
      <small>HEALTHCARE PVT. LTD.</small>
    </span>
  </a>
  <a class="header-cta" href="index.php#products">← All Products</a>
</header>

<?php if ($product): ?>
<main class="detail-page">
  <p><a href="index.php#products" style="color:#a91e25;text-decoration:none">Home / Products</a></p>

  <div class="detail-layout">
    <div class="detail-photo">
      <img src="<?= htmlspecialchars($product['image']) ?>"
           alt="<?= htmlspecialchars($product['name']) ?> packaging">
    </div>

    <article class="detail-info">
      <span class="section-kicker">PRODUCT INFORMATION</span>
      <h1><?= htmlspecialchars($product['name']) ?></h1>
      <p><strong><?= htmlspecialchars($product['subtitle']) ?></strong></p>
      <p><?= htmlspecialchars($product['description']) ?></p>

      <h2>Listed Composition</h2>
      <ul>
        <?php foreach ($product['ingredients'] as $ingredient): ?>
          <li><?= htmlspecialchars($ingredient) ?></li>
        <?php endforeach; ?>
      </ul>

      <div class="detail-notice">
        Composition information is transcribed from the supplied product
        references and should be verified against the current approved pack
        artwork and official product documentation before publication.
        This page does not provide medical advice or dosage instructions.
      </div>

      <p>
        Contact our team for verified product details and business enquiries.
      </p>

      <a class="btn btn-red"
         href="https://wa.me/<?= $phone ?>?text=<?= rawurlencode('Hello, I would like to enquire about ' . $product['name'] . '.') ?>"
         target="_blank" rel="noopener noreferrer">
        Enquire About This Product ↗
      </a>
    </article>
  </div>
</main>
<?php else: ?>
<main class="detail-page">
  <h1>Product not found</h1>
  <p>Please return to the product portfolio and select a listed product.</p>
  <a class="btn btn-red" href="index.php#products">Browse Products</a>
</main>
<?php endif; ?>

<footer class="site-footer">
  <a class="brand footer-brand" href="index.php">
    <span class="brand-symbol">M</span>
    <span class="brand-copy">
      <strong>MEDGYNO</strong>
      <small>HEALTHCARE PVT. LTD.</small>
    </span>
  </a>
  <span>© <?= date('Y') ?> MEDGYNO Healthcare Pvt. Ltd.</span>
</footer>
</body>
</html>
