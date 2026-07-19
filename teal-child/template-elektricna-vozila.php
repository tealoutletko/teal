<?php
/**
 * Template Name: Električna vozila (eavtomobili.si)
 * Description: Standalone, premium landing page for electric vehicle importing.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Uvoz električnih vozil po naročilu | eavtomobili.si</title>
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <?php wp_head(); ?>
  
  <style>
    /* DESIGN SYSTEM & VARIABLES */
    :root {
      --ev-primary: #0f172a;       /* Deep slate */
      --ev-primary-light: #1e293b;
      --ev-accent: #10b981;        /* Electric Green */
      --ev-accent-hover: #059669;
      --ev-blue: #0ea5e9;          /* Electric Blue */
      --ev-text: #334155;
      --ev-text-light: #64748b;
      --ev-bg-light: #f8fafc;
      --ev-border: #e2e8f0;
      --ev-radius: 8px;
      --ev-font: 'Inter', sans-serif;
    }
    
    /* RESET & BASE */
    .ev-body {
      font-family: var(--ev-font);
      color: var(--ev-text);
      background-color: #ffffff;
      line-height: 1.6;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }
    
    .ev-container {
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 1.5rem;
      box-sizing: border-box;
    }
    
    .ev-section {
      padding: 7.5rem 0;
    }
    
    @media (max-width: 768px) {
      .ev-section {
        padding: 4.5rem 0;
      }
    }
    
    /* UTILITIES */
    .ev-btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      font-weight: 600;
      padding: 0.85rem 1.8rem;
      border-radius: var(--ev-radius);
      border: 2px solid transparent;
      cursor: pointer;
      text-decoration: none;
      transition: all 0.25s ease-in-out;
      font-size: 0.95rem;
    }
    
    .ev-btn--primary {
      background-color: var(--ev-accent);
      color: #ffffff;
    }
    
    .ev-btn--primary:hover {
      background-color: var(--ev-accent-hover);
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(16, 185, 129, 0.2);
    }
    
    .ev-btn--outline {
      background-color: transparent;
      color: var(--ev-primary);
      border-color: var(--ev-primary);
    }
    
    .ev-btn--outline:hover {
      background-color: var(--ev-primary);
      color: #ffffff;
      transform: translateY(-2px);
    }
    
    /* HEADER NAVBAR */
    .ev-header {
      background-color: #ffffff;
      border-bottom: 1px solid var(--ev-border);
      position: sticky;
      top: 0;
      z-index: 100;
    }
    
    .ev-header__inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 80px;
    }
    
    .ev-logo {
      font-size: 1.35rem;
      font-weight: 800;
      color: var(--ev-primary);
      text-decoration: none;
      letter-spacing: -0.02em;
    }
    
    .ev-logo span {
      color: var(--ev-accent);
    }
    
    .ev-nav {
      display: flex;
      gap: 2rem;
      align-items: center;
    }
    
    .ev-nav a {
      text-decoration: none;
      color: var(--ev-text);
      font-weight: 500;
      font-size: 0.95rem;
      transition: color 0.2s;
    }
    
    .ev-nav a:hover {
      color: var(--ev-accent);
    }
    
    @media (max-width: 768px) {
      .ev-nav {
        display: none; /* simple static layout, hidden on mobile for simplicity */
      }
    }
    
    /* HERO SECTION */
    .ev-hero {
      background-color: var(--ev-bg-light);
      padding: 6.5rem 0;
    }
    
    .ev-hero__grid {
      display: grid;
      grid-template-columns: 1.1fr 1fr;
      gap: 4rem;
      align-items: center;
    }
    
    .ev-hero__content {
      display: flex;
      flex-direction: column;
      align-items: flex-start;
    }
    
    .ev-hero__badge {
      display: inline-block;
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: var(--ev-accent);
      background-color: rgba(16, 185, 129, 0.1);
      padding: 0.4rem 0.9rem;
      border-radius: 9999px;
      margin-bottom: 1.5rem;
    }
    
    .ev-hero__title {
      font-size: clamp(2rem, 4vw, 3.2rem);
      font-weight: 800;
      color: var(--ev-primary);
      line-height: 1.15;
      margin: 0 0 1.5rem 0;
      letter-spacing: -0.02em;
    }
    
    .ev-hero__subtitle {
      font-size: 1.125rem;
      color: var(--ev-text-light);
      margin: 0 0 2.5rem 0;
      line-height: 1.7;
    }
    
    .ev-hero__actions {
      display: flex;
      gap: 1rem;
      width: 100%;
    }
    
    .ev-hero__image-wrap {
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 20px 45px rgba(15, 23, 42, 0.08);
    }
    
    .ev-hero__image {
      width: 100%;
      height: auto;
      display: block;
    }
    
    @media (max-width: 992px) {
      .ev-hero__grid {
        grid-template-columns: 1fr;
        gap: 3rem;
      }
      .ev-hero__image-wrap {
        order: -1;
      }
    }
    
    @media (max-width: 640px) {
      .ev-hero__actions {
        flex-direction: column;
      }
      .ev-hero__actions .ev-btn {
        width: 100%;
      }
    }
    
    /* HIGHLIGHTS SECTION */
    .ev-highlights__grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 2rem;
    }
    
    .ev-highlight-card {
      background-color: #ffffff;
      border: 1px solid var(--ev-border);
      border-radius: var(--ev-radius);
      padding: 2.5rem;
      transition: all 0.3s ease;
    }
    
    .ev-highlight-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 30px rgba(15, 23, 42, 0.06);
      border-color: var(--ev-accent);
    }
    
    .ev-highlight-card__icon {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
    }
    
    .ev-highlight-card__title {
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--ev-primary);
      margin: 0 0 0.75rem 0;
    }
    
    .ev-highlight-card__desc {
      font-size: 0.95rem;
      color: var(--ev-text-light);
      margin: 0;
      line-height: 1.6;
    }
    
    @media (max-width: 900px) {
      .ev-highlights__grid {
        grid-template-columns: 1fr;
        gap: 1.5rem;
      }
    }
    
    /* BRANDS SECTION */
    .ev-brands {
      background-color: var(--ev-bg-light);
    }
    
    .ev-brands__grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
    }
    
    .ev-brands__card {
      background-color: #ffffff;
      border: 1px solid var(--ev-border);
      border-radius: var(--ev-radius);
      padding: 3rem;
    }
    
    .ev-brands__card--highlight {
      border-color: var(--ev-accent);
      background: linear-gradient(135deg, #ffffff 0%, #f0fdf4 100%);
    }
    
    .ev-brands__card-title {
      font-size: 1.5rem;
      font-weight: 800;
      color: var(--ev-primary);
      margin: 0 0 1rem 0;
      letter-spacing: -0.01em;
    }
    
    .ev-brands__card-desc {
      font-size: 1rem;
      color: var(--ev-text-light);
      margin-bottom: 2rem;
    }
    
    .ev-brand-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
    }
    
    .ev-brand-tag {
      background-color: var(--ev-bg-light);
      border: 1.5px solid var(--ev-border);
      color: var(--ev-primary);
      font-weight: 600;
      font-size: 0.9rem;
      padding: 0.6rem 1.2rem;
      border-radius: var(--ev-radius);
      transition: all 0.2s ease;
    }
    
    .ev-brand-tag:hover {
      background-color: var(--ev-accent);
      color: #ffffff;
      border-color: var(--ev-accent);
    }
    
    .ev-brand-tag--special {
      border-color: var(--ev-blue);
      color: var(--ev-blue);
      background-color: rgba(14, 165, 233, 0.05);
    }
    
    .ev-brand-tag--special:hover {
      background-color: var(--ev-blue);
      border-color: var(--ev-blue);
    }
    
    @media (max-width: 900px) {
      .ev-brands__grid {
        grid-template-columns: 1fr;
        gap: 2rem;
      }
    }
    
    /* ADDED VALUE SECTION */
    .ev-value__grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 4rem;
      align-items: center;
    }
    
    .ev-value__content {
      display: flex;
      flex-direction: column;
      gap: 3rem;
    }
    
    .ev-value-item {
      display: flex;
      gap: 1.5rem;
    }
    
    .ev-value-item__icon {
      font-size: 2.2rem;
      line-height: 1;
    }
    
    .ev-value-item__title {
      font-size: 1.25rem;
      font-weight: 700;
      color: var(--ev-primary);
      margin: 0 0 0.5rem 0;
    }
    
    .ev-value-item__desc {
      font-size: 0.98rem;
      color: var(--ev-text-light);
      margin: 0;
      line-height: 1.6;
    }
    
    @media (max-width: 900px) {
      .ev-value__grid {
        grid-template-columns: 1fr;
        gap: 3rem;
      }
    }
    
    /* CONTACT FORM SECTION */
    .ev-contact {
      background-color: var(--ev-primary);
      color: #ffffff;
    }
    
    .ev-contact .section-header__title {
      color: #ffffff;
    }
    
    .ev-contact .section-header__desc {
      color: rgba(255, 255, 255, 0.7);
    }
    
    .ev-form-wrap {
      max-width: 680px;
      margin: 0 auto;
      background-color: var(--ev-primary-light);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 3.5rem;
      border-radius: 12px;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }
    
    .ev-form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1.5rem;
      margin-bottom: 2rem;
    }
    
    .ev-form-group {
      display: flex;
      flex-direction: column;
      gap: 0.5rem;
    }
    
    .ev-form-group--full {
      grid-column: 1 / -1;
    }
    
    .ev-form-label {
      font-size: 0.85rem;
      font-weight: 600;
      color: rgba(255, 255, 255, 0.9);
      text-transform: uppercase;
      letter-spacing: 0.05em;
    }
    
    .ev-form-input {
      background-color: rgba(15, 23, 42, 0.6);
      border: 1.5px solid rgba(255, 255, 255, 0.15);
      border-radius: var(--ev-radius);
      padding: 0.9rem 1.2rem;
      color: #ffffff;
      font-family: var(--ev-font);
      font-size: 0.95rem;
      transition: all 0.2s ease;
      box-sizing: border-box;
      width: 100%;
    }
    
    .ev-form-input:focus {
      outline: none;
      border-color: var(--ev-accent);
      background-color: rgba(15, 23, 42, 0.8);
      box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.15);
    }
    
    .ev-form-input::placeholder {
      color: rgba(255, 255, 255, 0.4);
    }
    
    .ev-contact .ev-btn {
      width: 100%;
      font-size: 1.05rem;
      padding: 1rem;
    }
    
    @media (max-width: 640px) {
      .ev-form-grid {
        grid-template-columns: 1fr;
        gap: 1.25rem;
      }
      .ev-form-wrap {
        padding: 2rem;
      }
    }
    
    /* FOOTER */
    .ev-footer {
      background-color: #0b0f19;
      border-top: 1px solid rgba(255, 255, 255, 0.08);
      padding: 3rem 0;
      color: rgba(255, 255, 255, 0.5);
      font-size: 0.9rem;
    }
    
    .ev-footer__inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1.5rem;
    }
    
    .ev-footer__logo {
      color: #ffffff;
      font-weight: 800;
      text-decoration: none;
      font-size: 1.2rem;
    }
    
    .ev-footer__logo span {
      color: var(--ev-accent);
    }
    
    @media (max-width: 640px) {
      .ev-footer__inner {
        flex-direction: column;
        text-align: center;
      }
    }
  </style>
</head>
<body <?php body_class( 'ev-body' ); ?>>
<!-- HEADER NAVBAR -->
<header class="ev-header">
  <div class="ev-container ev-header__inner">
    <a href="#" class="ev-logo"><span>e</span>avtomobili<span>.si</span></a>
    <nav class="ev-nav">
      <a href="#domov">Domov</a>
      <a href="#izkusnje">Izkušnje</a>
      <a href="#znamke">Znamke</a>
      <a href="#prednosti">Prednosti</a>
      <a href="#narocilo" class="ev-btn ev-btn--primary" style="padding: 0.5rem 1.2rem; font-size: 0.85rem;">Pošlji povpraševanje</a>
    </nav>
  </div>
</header>

<!-- HERO SECTION -->
<section class="ev-section ev-hero" id="domov">
  <div class="ev-container ev-hero__grid">
    <div class="ev-hero__content">
      <div class="ev-hero__badge">Uvoz po naročilu</div>
      <h1 class="ev-hero__title">E-Mobilnost: Uvoz električnih vozil po naročilu</h1>
      <p class="ev-hero__subtitle">Smo specialisti za napredno tehnologijo. Ker uvažamo izključno električna vozila, jih kot IT strokovnjaki z lastnim tehničnim servisom poznamo do zadnjega čipa. Za vas poiščemo in uvozimo optimalno e-vozilo iz celotne EU pod izjemno konkurenčnimi pogoji.</p>
      <div class="ev-hero__actions">
        <a href="#narocilo" class="ev-btn ev-btn--primary">Naročite vozilo</a>
        <a href="#izkusnje" class="ev-btn ev-btn--outline">Spoznajte več</a>
      </div>
    </div>
    <div class="ev-hero__image-wrap">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/ev-hero.jpg" alt="Električna vozila pred modernim salonom" class="ev-hero__image">
    </div>
  </div>
</section>

<!-- HIGHLIGHTS SECTION -->
<section class="ev-section" id="izkusnje">
  <div class="ev-container">
    <div class="section-header" style="max-width: 700px; margin: 0 auto 4rem auto; text-align: center;">
      <span class="section-header__tag" style="background-color: rgba(16, 185, 129, 0.1); color: var(--ev-accent);">Ključni poudarki</span>
      <h2 class="section-header__title" style="font-weight: 800;">Izkušnje, ki jim lahko zaupate</h2>
      <p class="section-header__desc">Naša strast in predanost e-mobilnosti se odražata v vsakem uspešno uvoženem vozilu.</p>
    </div>
    <div class="ev-highlights__grid">
      <div class="ev-highlight-card">
        <div class="ev-highlight-card__icon">📅</div>
        <h3 class="ev-highlight-card__title">Tradicija v e-mobilnosti</h3>
        <p class="ev-highlight-card__desc">Z uvozom izključno električnih vozil po naročilu se uspešno ukvarjamo že od leta 2023 dalje.</p>
      </div>
      <div class="ev-highlight-card">
        <div class="ev-highlight-card__icon">🤝</div>
        <h3 class="ev-highlight-card__title">Zaupanje kupcev</h3>
        <p class="ev-highlight-card__desc">Za znane kupce smo uspešno uvozili in dobavili že več kot 100+ električnih vozil.</p>
      </div>
      <div class="ev-highlight-card">
        <div class="ev-highlight-card__icon">🛡️</div>
        <h3 class="ev-highlight-card__title">Varen nakup brez tveganja</h3>
        <p class="ev-highlight-card__desc">Prodajamo izključno mlajša e-vozila pod tovarniško garancijo neposredno od preverjenih leasing hiš, e-vozila z enodnevno registracijo (0 km) ali povsem nova električna vozila.</p>
      </div>
    </div>
  </div>
</section>

<!-- BRANDS SECTION -->
<section class="ev-section ev-brands" id="znamke">
  <div class="ev-container">
    <div class="section-header" style="max-width: 700px; margin: 0 auto 4rem auto; text-align: center;">
      <span class="section-header__tag" style="background-color: rgba(16, 185, 129, 0.1); color: var(--ev-accent);">Znamke vozil</span>
      <h2 class="section-header__title" style="font-weight: 800;">Električna vozila, ki jih najpogosteje uvažamo</h2>
      <p class="section-header__desc">Sodelujemo s preverjenimi dobavitelji in uvažamo tehnološko najbolj napredna vozila na trgu.</p>
    </div>
    <div class="ev-brands__grid">
      <div class="ev-brands__card">
        <h3 class="ev-brands__card-title">Osebna e-vozila</h3>
        <p class="ev-brands__card-desc">Sodobni osebni avtomobili, ki ponujajo vrhunsko tehnologijo, zanesljiv doseg in udobje za vsakdanjo rabo.</p>
        <div class="ev-brand-list">
          <span class="ev-brand-tag">Tesla</span>
          <span class="ev-brand-tag">Hyundai</span>
          <span class="ev-brand-tag">Peugeot</span>
          <span class="ev-brand-tag">MG</span>
          <span class="ev-brand-tag ev-brand-tag--special">VinFast</span>
        </div>
      </div>
      <div class="ev-brands__card ev-brands__card--highlight">
        <h3 class="ev-brands__card-title">Gospodarska e-vozila</h3>
        <p class="ev-brands__card-desc">Za podjetja uspešno uvažamo električne dostavnike in kombije, ki drastično znižujejo operativne stroške logistike.</p>
        <div class="ev-brand-list">
          <span class="ev-brand-tag" style="border-color: var(--ev-accent); background-color: rgba(16, 185, 129, 0.05);">Maxus dostavniki</span>
          <span class="ev-brand-tag" style="border-color: var(--ev-accent); background-color: rgba(16, 185, 129, 0.05);">Maxus kombiji</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ADDED VALUE SECTION -->
<section class="ev-section" id="prednosti">
  <div class="ev-container">
    <div class="ev-value__grid">
      <div style="display: flex; flex-direction: column; gap: 1.5rem;">
        <span class="section-header__tag" style="align-self: flex-start; background-color: rgba(16, 185, 129, 0.1); color: var(--ev-accent);">Dodana vrednost</span>
        <h2 style="font-size: 2.2rem; font-weight: 800; color: var(--ev-primary); margin: 0; line-height: 1.25;">Zakaj izbrati uvoz preko eavtomobili.si?</h2>
        <p style="color: var(--ev-text-light); font-size: 1.05rem; line-height: 1.7; margin: 0;">Ker nismo le uvozniki, temveč IT strokovnjaki s poglobljenim znanjem o sodobnih tehnologijah in strojno-programski opremi vozil.</p>
      </div>
      <div class="ev-value__content">
        <div class="ev-value-item">
          <div class="ev-value-item__icon">📊</div>
          <div>
            <h3 class="ev-value-item__title">Baterijska diagnostika</h3>
            <p class="ev-value-item__desc">Pred nakupom vsako električno vozilo skrbno preverimo z naprednimi diagnostičnimi orodji in natančno analiziramo dejansko stanje baterije (State of Health).</p>
          </div>
        </div>
        <div class="ev-value-item">
          <div class="ev-value-item__icon">🔑</div>
          <div>
            <h3 class="ev-value-item__title">Vse na enem mestu</h3>
            <p class="ev-value-item__desc">Uredimo celoten postopek – od iskanja, preverjanja zgodovine, varnega transporta do končne predaje vozila pripravljenega za registracijo.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT FORM SECTION -->
<section class="ev-section ev-contact" id="narocilo">
  <div class="ev-container">
    <div class="section-header" style="max-width: 700px; margin: 0 auto 3.5rem auto; text-align: center;">
      <span class="section-header__tag" style="background-color: rgba(255, 255, 255, 0.1); color: #ffffff;">Pošljite povpraševanje</span>
      <h2 class="section-header__title" style="font-weight: 800; color: #ffffff;">Naročite svoje električno vozilo</h2>
      <p class="section-header__desc">Izpolnite obrazec spodaj in pripravili vam bomo optimalno ponudbo za uvoz e-vozila po vaših željah.</p>
    </div>
    
    <div class="ev-form-wrap">
      <form action="#" method="post" id="ev-order-form" onsubmit="event.preventDefault(); alert('Hvala! Vaše povpraševanje je bilo uspešno poslano. Kontaktirali vas bomo v najkrajšem možnem času.'); this.reset();">
        <div class="ev-form-grid">
          <div class="ev-form-group">
            <label for="ev-name" class="ev-form-label">Ime in priimek</label>
            <input type="text" id="ev-name" name="ev-name" class="ev-form-input" placeholder="npr. Janez Novak" required>
          </div>
          <div class="ev-form-group">
            <label for="ev-phone" class="ev-form-label">Telefon</label>
            <input type="tel" id="ev-phone" name="ev-phone" class="ev-form-input" placeholder="npr. 041 123 456" required>
          </div>
          <div class="ev-form-group ev-form-group--full">
            <label for="ev-email" class="ev-form-label">E-pošta</label>
            <input type="email" id="ev-email" name="ev-email" class="ev-form-input" placeholder="npr. janez.novak@email.si" required>
          </div>
          <div class="ev-form-group">
            <label for="ev-model" class="ev-form-label">Želena znamka / model e-vozila</label>
            <input type="text" id="ev-model" name="ev-model" class="ev-form-input" placeholder="npr. Tesla Model Y, Maxus e-Deliver 3" required>
          </div>
          <div class="ev-form-group">
            <label for="ev-budget" class="ev-form-label">Okviren proračun (€)</label>
            <input type="text" id="ev-budget" name="ev-budget" class="ev-form-input" placeholder="npr. 30.000 €" required>
          </div>
        </div>
        <button type="submit" class="ev-btn ev-btn--primary">Pošlji povpraševanje</button>
      </form>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="ev-footer">
  <div class="ev-container ev-footer__inner">
    <a href="#" class="ev-footer__logo"><span>e</span>avtomobili<span>.si</span></a>
    <div>&copy; <?php echo date('Y'); ?> eavtomobili.si. Uvoz električnih vozil po naročilu.</div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>