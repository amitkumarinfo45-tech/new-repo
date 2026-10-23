<style>

/* ===== MEDGYNO Responsive Header ===== */
.site-header {
  position: sticky;
  top: 0;
  z-index: 1000;
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 16px;
  padding: 12px clamp(14px, 4vw, 55px);
  background: rgba(255, 255, 255, 0.98);
  box-shadow: 0 5px 24px rgba(0, 0, 0, 0.08);
}

.brand {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  flex-shrink: 0;
  color: #a91e25;
  text-decoration: none;
}

.brand-symbol {
  display: grid;
  place-items: center;
  width: 44px;
  height: 44px;
  border-radius: 12px;
  background: #b51f2a;
  color: #fff;
  font-size: 25px;
  font-weight: 800;
}

.brand-copy {
  display: flex;
  flex-direction: column;
  gap: 3px;
}

.brand-copy strong {
  font-size: 18px;
  line-height: 1.1;
}

.brand-copy small {
  color: #62626a;
  font-size: 9px;
  letter-spacing: 1px;
}

.main-nav {
  display: flex;
  align-items: center;
  gap: 4px;
}

.main-nav > a,
.divisions-toggle {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  min-height: 44px;
  padding: 11px 12px;
  border: 0;
  border-radius: 7px;
  background: transparent;
  color: #34343a;
  font: 700 13px "DM Sans", Arial, sans-serif;
  text-decoration: none;
  cursor: pointer;
  transition: background 0.2s ease, color 0.2s ease;
}

.main-nav > a:hover,
.divisions-toggle:hover,
.divisions-menu:focus-within > .divisions-toggle {
  color: #a91e25;
  background: #fff0ef;
}

.nav-item.divisions-menu {
  position: relative;
}

.divisions-dropdown {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 2000;
  display: none;
  width: 230px;
  max-height: 70vh;
  overflow-y: auto;
  padding: 5px 0;
  border-radius: 0 0 9px 9px;
  background: #fff;
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.17);
}

.divisions-dropdown a {
  display: block;
  padding: 13px 18px;
  border-bottom: 1px solid #f1e5e5;
  color: #c51f2b;
  font: 500 14px Arial, sans-serif;
  line-height: 1.4;
  text-decoration: none;
  overflow-wrap: anywhere;
  transition: background 0.2s ease, color 0.2s ease;
}

.divisions-dropdown a:last-child {
  border-bottom: 0;
}

.divisions-dropdown a:hover,
.divisions-dropdown a:focus-visible {
  color: #fff;
  background: #b90012;
}

/* Hamburger is hidden on desktop */
.menu-toggle {
  display: none;
}

/* Desktop dropdown: hover, keyboard focus or click */
@media (min-width: 821px) {
  .divisions-menu:hover > .divisions-dropdown,
  .divisions-menu:focus-within > .divisions-dropdown,
  .divisions-menu.dropdown-open > .divisions-dropdown {
    display: block;
  }
}

/* Tablet and mobile */
@media (max-width: 820px) {
  .site-header {
    flex-wrap: wrap;
    gap: 10px;
    padding: 11px 14px;
  }

  .menu-toggle {
    display: block;
    order: 2;
    margin-left: auto;
    min-width: 44px;
    min-height: 42px;
    border: 1px solid #eee0dc;
    border-radius: 9px;
    padding: 7px 11px;
    background: #fff;
    color: #a91e25;
    font-size: 23px;
    cursor: pointer;
  }

  .header-cta {
    order: 3;
    padding: 10px 12px;
    font-size: 11px;
  }

  .main-nav {
    display: none;
    order: 4;
    flex: 0 0 100%;
    width: 100%;
    align-items: stretch;
    flex-direction: column;
    gap: 3px;
  }

  .main-nav.is-open {
    display: flex;
  }

  .main-nav > a,
  .divisions-toggle {
    display: flex;
    justify-content: space-between;
    width: 100%;
    min-height: 44px;
    padding: 12px 14px;
    text-align: left;
  }

  .nav-item.divisions-menu {
    width: 100%;
  }

  /* Mobile dropdown opens on button click */
  .divisions-dropdown {
    position: static;
    display: none;
    width: 100%;
    max-height: 50vh;
    overflow-y: auto;
    border-radius: 7px;
    box-shadow: none;
    background: #fff7f7;
  }

  .divisions-menu.dropdown-open > .divisions-dropdown {
    display: block;
  }

  .divisions-dropdown a {
    padding: 12px 18px;
  }
}

@media (max-width: 420px) {
  .brand-symbol {
    width: 38px;
    height: 38px;
    font-size: 22px;
  }

  .brand-copy strong {
    font-size: 15px;
  }

  .brand-copy small {
    font-size: 8px;
  }

  .header-cta {
    font-size: 10px;
    padding: 10px;
  }
}

/* ===== Emergency responsive menu fix ===== */
@media (max-width: 820px) {
  .site-header .menu-toggle {
    display: block !important;
    visibility: visible !important;
    opacity: 1 !important;
    position: relative;
    z-index: 3000;
    cursor: pointer;
  }

  .site-header .main-nav {
    display: none !important;
    flex: 0 0 100%;
    width: 100%;
    flex-direction: column;
    align-items: stretch;
  }

  .site-header .main-nav.is-open {
    display: flex !important;
    visibility: visible !important;
    opacity: 1 !important;
    height: auto !important;
    overflow: visible !important;
  }

  .site-header .main-nav .divisions-dropdown {
    display: none !important;
    position: static;
    width: 100%;
  }

  .site-header .main-nav .divisions-menu.dropdown-open .divisions-dropdown {
    display: block !important;
  }
}

/* Fix: Divisions dropdown on mobile */
@media (max-width: 820px) {
  #mainNav .divisions-menu {
    display: block;
    width: 100%;
    position: relative;
  }

  #mainNav .divisions-toggle {
    display: flex;
    width: 100%;
    justify-content: space-between;
    cursor: pointer;
  }

  #mainNav .divisions-dropdown {
    display: none !important;
    position: static !important;
    width: 100% !important;
    max-height: 300px;
    overflow-y: auto;
    background: #fff7f7;
    z-index: 2000;
  }

  #mainNav .divisions-menu.dropdown-open > .divisions-dropdown {
    display: block !important;
  }

  #mainNav .divisions-dropdown a {
    display: block;
    padding: 14px 20px;
    color: #c51f2b;
    text-decoration: none;
    cursor: pointer;
  }
}

</style>
<header class="site-header">
  <a class="brand" href="index.php" aria-label="MEDGYNO Home">
    <span class="brand-symbol">M</span>
    <span class="brand-copy">
      <strong>MEDGYNO</strong>
      <small>HEALTHCARE PVT. LTD.</small>
    </span>
  </a>

  <button
    class="menu-toggle"
    id="menuToggle"
    type="button"
    aria-label="Open menu"
    aria-expanded="false"
    aria-controls="mainNav"
  >☰</button>

  <nav class="main-nav" id="mainNav" aria-label="Main navigation">
    <a href="index.php#home">Home</a>
    <a href="index.php#products">Products</a>
    <a href="about-us.php">About Us</a>

    <div class="nav-item divisions-menu" id="divisionsMenu">
      <button
        class="divisions-toggle"
        id="divisionsToggle"
        type="button"
        aria-expanded="false"
        aria-controls="divisionsDropdown"
      >
        Divisions <span class="dropdown-arrow">▾</span>
      </button>

      <div class="divisions-dropdown" id="divisionsDropdown">
        <a href="nephroscience.php">Nephroscience</a>
        <a href="critical-care.php">Critical Care</a>
        <a href="cns.php">CNS</a>
        <a href="gastroenterology.php">Gastroenterology</a>
        <a href="urology.php">Urology</a>
        <a href="cardio-metabolic.php">Cardio Metabolic</a>
        <a href="respiratory.php">Respiratory</a>
        <a href="gynaecology.php">Gynaecology</a>
      </div>
    </div>

    <a href="become-partner.php">Become Partner</a>
    <a href="contact.php">Contact</a>
  </nav>

  <a
    class="header-cta"
    href="https://wa.me/919718836799"
    target="_blank"
    rel="noopener noreferrer"
  >Business Enquiry ↗</a>
</header>
<script>

(() => {
  function initializeHeader() {
    const menuToggle = document.getElementById("menuToggle");
    const mainNav = document.getElementById("mainNav");
    const divisionsMenu = document.getElementById("divisionsMenu");
    const divisionsToggle = document.getElementById("divisionsToggle");

    if (!menuToggle || !mainNav) return;

    // Prevent duplicate event handlers if initialized more than once.
    if (menuToggle.dataset.menuInitialized === "true") return;
    menuToggle.dataset.menuInitialized = "true";

    function closeDivisions() {
      if (!divisionsMenu || !divisionsToggle) return;

      divisionsMenu.classList.remove("dropdown-open");
      divisionsToggle.setAttribute("aria-expanded", "false");
    }

    function closeMobileMenu() {
      mainNav.classList.remove("is-open");
      menuToggle.setAttribute("aria-expanded", "false");
      menuToggle.setAttribute("aria-label", "Open menu");
      menuToggle.textContent = "☰";
      closeDivisions();
    }

    menuToggle.addEventListener("click", function (event) {
      event.stopPropagation();

      const isOpen = mainNav.classList.toggle("is-open");

      menuToggle.setAttribute("aria-expanded", String(isOpen));
      menuToggle.setAttribute(
        "aria-label",
        isOpen ? "Close menu" : "Open menu"
      );
      menuToggle.textContent = isOpen ? "✕" : "☰";

      if (!isOpen) closeDivisions();
    });

    if (divisionsMenu && divisionsToggle) {
      divisionsToggle.addEventListener("click", function (event) {
        event.preventDefault();
        event.stopPropagation();

        const isOpen =
          divisionsMenu.classList.toggle("dropdown-open");

        divisionsToggle.setAttribute("aria-expanded", String(isOpen));
      });

      // Clicking outside closes the dropdown.
      document.addEventListener("click", function (event) {
        if (!divisionsMenu.contains(event.target)) {
          closeDivisions();
        }
      });

      // Escape closes the dropdown.
      document.addEventListener("keydown", function (event) {
        if (event.key === "Escape") {
          closeDivisions();
        }
      });
    }

    // Close mobile menu after selecting a navigation link.
    mainNav.querySelectorAll("a").forEach(function (link) {
      link.addEventListener("click", function () {
        if (window.innerWidth <= 820) {
          closeMobileMenu();
        }
      });
    });

    // Reset mobile state when switching to desktop.
    window.addEventListener("resize", function () {
      if (window.innerWidth > 820) {
        mainNav.classList.remove("is-open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open menu");
        menuToggle.textContent = "☰";
        closeDivisions();
      }
    });
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initializeHeader);
  } else {
    initializeHeader();
  }
})();


(function () {
  function setupMenu() {
    const button = document.getElementById("menuToggle");
    const nav = document.getElementById("mainNav");
    const divisionButton = document.getElementById("divisionsToggle");
    const divisionMenu = document.getElementById("divisionsMenu");

    if (!button || !nav) {
      console.error("Header menu elements missing: check menuToggle and mainNav IDs.");
      return;
    }

    // Avoid registering handlers twice.
    if (button.dataset.ready === "yes") return;
    button.dataset.ready = "yes";

    button.addEventListener("click", function () {
      const open = nav.classList.toggle("is-open");
      button.textContent = open ? "✕" : "☰";
      button.setAttribute("aria-expanded", String(open));
      button.setAttribute("aria-label", open ? "Close menu" : "Open menu");
    });

    if (divisionButton && divisionMenu) {
      divisionButton.addEventListener("click", function (event) {
        event.preventDefault();
        event.stopPropagation();

        const open = divisionMenu.classList.toggle("dropdown-open");
        divisionButton.setAttribute("aria-expanded", String(open));
      });
    }
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", setupMenu);
  } else {
    setupMenu();
  }
})();


const divisionsButton = document.getElementById("divisionsToggle");
const divisionsMenu = document.getElementById("divisionsMenu");

if (divisionsButton && divisionsMenu) {
  divisionsButton.addEventListener("click", function (event) {
    event.preventDefault();
    event.stopPropagation();

    const isOpen = divisionsMenu.classList.toggle("dropdown-open");
    divisionsButton.setAttribute("aria-expanded", String(isOpen));
  });
}

</script>