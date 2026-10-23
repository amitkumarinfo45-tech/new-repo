
<?php
$products = [
    [
        'slug' => 'hepcidown',
        'name' => 'HEPCIDOWN',
        'subtitle' => 'Iron + Lactoferrin Formula',
        'image' => 'assets/images/hepcidown.png',
        'category' => 'Iron & Nutritional Support',
        'description' => 'Iron, Vitamin C, Lactoferrin, Folic Acid and Vitamin B12 formulation.',
        'featured' => true
    ],
    [
        'slug' => 'z-calrow-d3',
        'name' => 'Z-Calrow-D3',
        'subtitle' => 'Calcium & Nutrient Formula',
        'image' => 'assets/images/z-calrow-d3.png',
        'category' => 'Nutritional Supplement',
        'description' => 'Calcium, Vitamin D3, Magnesium and other nutrients as shown on the product reference.',
        'featured' => false
    ],
    [
        'slug' => 'fovinac-lf-n',
        'name' => 'FOVINAC-LF N',
        'subtitle' => 'NAC + Lactoferrin',
        'image' => 'assets/images/fovinac-lf-n.png',
        'category' => 'Nutraceutical',
        'description' => 'The supplied reference lists N-Acetylcysteine (NAC) 600 mg and Lactoferrin 50 mg.',
        'featured' => false
    ],
    [
        'slug' => 'largimag-lc',
        'name' => 'LARGIMAG LC',
        'subtitle' => 'Magnesium & Nutrient Formula',
        'image' => 'assets/images/largimag-lc.png',
        'category' => 'Nutritional Supplement',
        'description' => 'The supplied reference lists Magnesium Glycinate, L-Arginine, L-Carnitine and Vitamin D3.',
        'featured' => false
    ]
];

$whatsappNumber = '919718836799';
$businessName = 'MEDGYNO Healthcare Pvt. Ltd.';
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Explore MEDGYNO Healthcare nutraceutical product information and business enquiries.">
<title>MEDGYNO Healthcare | Nutraceutical Product Portfolio</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/includes/header.php'; ?>

<main>
  <section class="hero" id="home">
    <div class="hero-content">
      <span class="eyebrow"><span></span> NUTRACEUTICAL PRODUCT PORTFOLIO</span>
      <h1>Better Product<br>Presentation.<br><span>Stronger Connections.</span></h1>
      <p>
        Explore our featured nutraceutical formulations, product compositions
        and business enquiry options — all in one place.
      </p>
      <div class="hero-buttons">
        <a class="btn btn-red" href="#products">Explore Products <span>→</span></a>
        <a class="btn btn-outline" href="#about">About Our Business</a>
      </div>
      <div class="hero-trust">
        <div><strong>04</strong><span>Featured Products</span></div>
        <i></i>
        <div><strong>Direct</strong><span>Business Enquiries</span></div>
      </div>
    </div>

    <div class="hero-visual">
      <div class="hero-orbit orbit-one"></div>
      <div class="hero-orbit orbit-two"></div>
      <div class="hero-label label-top">Nutraceuticals <span>✦</span></div>
      <div class="hero-product-stack">
        <div class="hero-product hero-product-back">
          <span class="pack-brand">MEDGYNO</span>
          <strong>HEALTH<br>IN FOCUS</strong>
          <span class="pack-line"></span>
          <small>QUALITY • CARE • WELLNESS</small>
        </div>
        <div class="hero-product hero-product-front">
          <span class="pack-brand">MEDGYNO</span>
          <strong>PRODUCT<br>PORTFOLIO</strong>
          <div class="pack-cross">✚</div>
          <small>NUTRACEUTICAL RANGE</small>
        </div>
      </div>
      <div class="hero-label label-bottom"><span>✚</span> Product Information</div>
    </div>
  </section>

  <section class="intro-strip">
    <div><span class="intro-icon">✦</span><span><strong>Product Portfolio</strong><small>Explore our featured range</small></span></div>
    <div><span class="intro-icon">▤</span><span><strong>Composition Details</strong><small>Information for each product</small></span></div>
    <div><span class="intro-icon">↗</span><span><strong>Business Enquiries</strong><small>Connect with our team</small></span></div>
  </section>

  <section class="section products-section" id="products">
    <div class="section-heading">
      <div>
        <span class="section-kicker">OUR PORTFOLIO</span>
        <h2>Featured <span>Products</span></h2>
        <p>Discover our featured nutraceutical products and explore their listed compositions.</p>
      </div>
      <span class="product-count">PRODUCT RANGE <strong>04</strong></span>
    </div>

    <div class="product-grid">
      <?php foreach ($products as $product): ?>
        <article class="product-card">
          <a class="product-image" href="product.php?slug=<?= urlencode($product['slug']) ?>"
             aria-label="View <?= htmlspecialchars($product['name']) ?> details">
            <?php if ($product['featured']): ?>
              <span class="featured-badge">FEATURED</span>
            <?php endif; ?>
            <img src="<?= htmlspecialchars($product['image']) ?>"
                 alt="<?= htmlspecialchars($product['name']) ?> product packaging"
                 loading="lazy">
            <span class="image-arrow">↗</span>
          </a>
          <div class="product-card-body">
            <span class="product-category"><?= htmlspecialchars($product['category']) ?></span>
            <h3><?= htmlspecialchars($product['name']) ?></h3>
            <p class="product-subtitle"><?= htmlspecialchars($product['subtitle']) ?></p>
            <p class="product-description"><?= htmlspecialchars($product['description']) ?></p>
            <a class="product-link" href="product.php?slug=<?= urlencode($product['slug']) ?>">
              View Details <span>→</span>
            </a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  

  <section class="about-section" id="about">
    <div class="about-logo">
      <div class="about-logo-inner">
        <span class="about-plus">✚</span>
        <strong>MEDGYNO</strong>
        <small>HEALTHCARE PVT. LTD.</small>
      </div>
      <span class="logo-caption">NUTRACEUTICALS • PRODUCT INFORMATION</span>
    </div>
    <div class="about-copy">
      <span class="section-kicker">ABOUT OUR BUSINESS</span>
      <h2>Focused on Nutraceuticals.<br><span>Built on Connections.</span></h2>
      <p>
        MEDGYNO Healthcare Pvt. Ltd. presents a focused portfolio of
        nutraceutical products for product awareness and business enquiries.
        Explore the available product references and contact us to discuss
        business opportunities.
      </p>
      <p>
        For accurate product composition, approved claims, availability,
        regulatory information and commercial terms, please contact our team.
      </p>
      <a class="btn btn-red"
         href="https://wa.me/<?= htmlspecialchars($whatsappNumber) ?>?text=Hello%2C%20I%20would%20like%20to%20know%20more%20about%20MEDGYNO%20Healthcare."
         target="_blank" rel="noopener noreferrer">Connect With Us →</a>
    </div>
  </section>



<!-- ===== MEDGYNO Medical Experts / Key Management ===== -->
<section class="experts-section" id="our-experts">
  <div class="experts-container">

    <div class="experts-heading">
      <span class="experts-eyebrow">OUR PEOPLE, OUR STRENGTH</span>
      <h2>Meet Our <strong>Experts</strong></h2>
      <p>
        Meet the professionals working together to support healthcare,
        quality and trusted partnerships.
      </p>
    </div>

    <div class="experts-toolbar">
      <div>
        <span class="experts-label">MEDGYNO TEAM</span>
        <h3>Key Management &amp; Medical Experts</h3>
      </div>

      <div class="experts-controls">
        <button class="experts-arrow" id="expertsPrev"
          type="button" aria-label="Previous profiles">←</button>
        <button class="experts-arrow" id="expertsNext"
          type="button" aria-label="Next profiles">→</button>
      </div>
    </div>

    <div class="experts-track" id="expertsTrack">

      <!-- Profile 1 -->
      <article class="expert-card">
        <div class="expert-photo">
          <img src="assets/images/team/doctor-1.jpg"
               alt="Medical expert profile"
               loading="lazy">
          <span class="expert-number">01</span>
        </div>
        <div class="expert-info">
          <span class="expert-role">KEY MANAGEMENT</span>
          <h3>Management Member</h3>
          <p class="expert-designation">Leadership &amp; Operations</p>
          <p class="expert-description">
            Supporting business operations, coordination and professional
            healthcare partnerships.
          </p>
        </div>
      </article>

      <!-- Profile 2 -->
      <article class="expert-card">
        <div class="expert-photo">
          <img src="assets/images/team/doctor-2.jpg"
               alt="Medical expert profile"
               loading="lazy">
          <span class="expert-number">02</span>
        </div>
        <div class="expert-info">
          <span class="expert-role">MEDICAL EXPERT</span>
          <h3>Medical Advisor</h3>
          <p class="expert-designation">Medical Affairs</p>
          <p class="expert-description">
            Supporting medical information, scientific communication and
            responsible healthcare practices.
          </p>
        </div>
      </article>

      <!-- Profile 3 -->
      <article class="expert-card">
        <div class="expert-photo">
          <img src="assets/images/team/doctor-3.jpg"
               alt="Medical expert profile"
               loading="lazy">
          <span class="expert-number">03</span>
        </div>
        <div class="expert-info">
          <span class="expert-role">QUALITY &amp; COMPLIANCE</span>
          <h3>Quality Professional</h3>
          <p class="expert-designation">Quality Assurance</p>
          <p class="expert-description">
            Helping maintain quality processes and compliance across
            healthcare product operations.
          </p>
        </div>
      </article>

      <!-- Profile 4 -->
      <article class="expert-card">
        <div class="expert-photo">
          <img src="assets/images/team/doctor-4.jpg"
               alt="Medical expert profile"
               loading="lazy">
          <span class="expert-number">04</span>
        </div>
        <div class="expert-info">
          <span class="expert-role">BUSINESS DEVELOPMENT</span>
          <h3>Partnership Manager</h3>
          <p class="expert-designation">Business Development</p>
          <p class="expert-description">
            Building professional relationships with business partners
            and healthcare stakeholders.
          </p>
        </div>
      </article>

      <!-- Profile 5 -->
      <article class="expert-card">
        <div class="expert-photo">
          <img src="assets/images/team/doctor-5.jpg"
               alt="Medical expert profile"
               loading="lazy">
          <span class="expert-number">05</span>
        </div>
        <div class="expert-info">
          <span class="expert-role">SALES &amp; MARKETING</span>
          <h3>Marketing Professional</h3>
          <p class="expert-designation">Sales &amp; Marketing</p>
          <p class="expert-description">
            Coordinating product communication and supporting business
            growth across target markets.
          </p>
        </div>
      </article>

    </div>

    <div class="experts-bottom">
      <div class="experts-progress">
        <span id="expertsProgress"></span>
      </div>
      <p>Explore our team <span>—</span> Scroll to discover more</p>
    </div>

    <div class="experts-cta">
      <div>
        <h3>Interested in working with us?</h3>
        <p>Connect with MEDGYNO for business and partnership enquiries.</p>
      </div>
      <a href="become-partner.php">Become a Partner ↗</a>
    </div>

  </div>
</section>

  <section class="contact-section" id="contact">
    <div>
      <span class="section-kicker">LET'S CONNECT</span>
      <h2>Interested in our<br><span>product portfolio?</span></h2>
      <p>Contact us for product information and business enquiries.</p>
    </div>
    <div class="contact-card">
      <span class="contact-icon">☎</span>
      <small>BUSINESS CONTACT</small>
      <strong>Sunil Kumar Sahu</strong>
      <a href="tel:+919718836799">+91 97188 36799</a>
      <a class="btn btn-red contact-button"
         href="https://wa.me/<?= htmlspecialchars($whatsappNumber) ?>?text=Hello%2C%20I%20am%20interested%20in%20your%20nutraceutical%20product%20portfolio."
         target="_blank" rel="noopener noreferrer">WhatsApp Enquiry ↗</a>
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

<script>
const menuToggle = document.getElementById('menuToggle');
const mainNav = document.getElementById('mainNav');

menuToggle.addEventListener('click', () => {
  const open = mainNav.classList.toggle('is-open');
  menuToggle.setAttribute('aria-expanded', String(open));
  menuToggle.setAttribute('aria-label', open ? 'Close navigation' : 'Open navigation');
});

mainNav.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', () => {
    mainNav.classList.remove('is-open');
    menuToggle.setAttribute('aria-expanded', 'false');
  });
});



(() => {
  function initExpertsSlider() {
    const track = document.getElementById("expertsTrack");
    const prev = document.getElementById("expertsPrev");
    const next = document.getElementById("expertsNext");
    const progress = document.getElementById("expertsProgress");

    if (!track || !prev || !next || track.dataset.sliderReady) return;
    track.dataset.sliderReady = "true";

    function getScrollAmount() {
      const card = track.querySelector(".expert-card");
      if (!card) return track.clientWidth;

      const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
      return card.getBoundingClientRect().width + gap;
    }

    function updateProgress() {
      const maxScroll = track.scrollWidth - track.clientWidth;
      const ratio = maxScroll > 0 ? track.scrollLeft / maxScroll : 0;

      if (progress) {
        const visibleRatio = track.scrollWidth > 0
          ? track.clientWidth / track.scrollWidth
          : 1;

        const width = Math.max(20, visibleRatio * 100);
        const left = ratio * (100 - width);

        progress.style.width = width + "%";
        progress.style.marginLeft = left + "%";
      }

      prev.disabled = track.scrollLeft <= 2;
      next.disabled =
        track.scrollLeft >= track.scrollWidth - track.clientWidth - 2;

      prev.style.opacity = prev.disabled ? ".45" : "1";
      next.style.opacity = next.disabled ? ".45" : "1";
    }

    prev.addEventListener("click", () => {
      track.scrollBy({
        left: -getScrollAmount(),
        behavior: "smooth"
      });
    });

    next.addEventListener("click", () => {
      track.scrollBy({
        left: getScrollAmount(),
        behavior: "smooth"
      });
    });

    track.addEventListener("scroll", updateProgress, { passive: true });
    window.addEventListener("resize", updateProgress);

    updateProgress();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initExpertsSlider);
  } else {
    initExpertsSlider();
  }
})();

</script>
</body>
</html>
