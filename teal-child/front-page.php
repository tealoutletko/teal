<?php
/**
 * front-page.php – WordPress naloži to datoteko za naslovno stran.
 * Vsebuje celotno TEAL d.o.o. landing-page strukturo.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="TEAL d.o.o. - 35 let tradicije na področju prodaje računalniške opreme. Nova, outlet in obnovljena računalniška oprema: prenosniki, računalniki, zasloni, tiskalniki in strežniki. Sedež v Laškem.">
  <meta name="keywords" content="računalniška oprema, outlet računalniki, refurbished prenosniki, TEAL, Outletko, Laško, Celje">
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
  <link rel="canonical" href="<?php echo esc_url( home_url( '/' ) ); ?>">
  <meta property="og:locale" content="sl_SI">
  <meta property="og:type" content="website">
  <meta property="og:title" content="TEAL d.o.o. - Računalniška oprema | Laško in Celje">
  <meta property="og:description" content="35 let tradicije. Nova, outlet in obnovljena računalniška oprema.">
  <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
  <meta property="og:site_name" content="TEAL d.o.o.">
  <meta property="og:image" content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/hero.jpg">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="TEAL d.o.o. - Računalniška oprema Laško">
  <meta name="twitter:description" content="35 let tradicije. Prodaja nove, outlet in obnovljene računalniške opreme.">
  <meta name="twitter:image" content="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/hero.jpg">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "TEAL d.o.o.",
    "url": "<?php echo esc_url( home_url() ); ?>",
    "email": "info@teal.si",
    "telephone": "+38637340070",
    "foundingDate": "1991",
    "address": {"@type":"PostalAddress","streetAddress":"Kidriceva ulica 5","addressLocality":"Lasko","postalCode":"3270","addressCountry":"SI"},
    "sameAs": ["https://outletko.si"]
  }
  </script>
  <?php wp_head(); ?>
</head>
<body <?php body_class( 'teal-landing' ); ?>>
<?php wp_body_open(); ?><!-- TOP BAR -->
<div class="top-bar" id="top-bar">
  <div class="container top-bar__inner">
    <div class="top-bar__left">
      <a href="tel:+38637340070" class="top-bar__link" id="topbar-phone">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14z"/></svg>
        +386 3 734 00 70
      </a>
      <a href="mailto:info@teal.si" class="top-bar__link" id="topbar-email">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
        info@teal.si
      </a>
    </div>
    <div class="top-bar__right">
      <span class="top-bar__hours">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
        Pon-Pet: 8:00-16:00
      </span>
      <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="top-bar__outletko" id="topbar-outletko">
        Spletna trgovina Outletko.si
      </a>
    </div>
  </div>
</div>

<!-- HEADER -->
<header class="header" id="main-header" role="banner">
  <div class="container header__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo" id="logo-link" aria-label="TEAL d.o.o. - domača stran">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.jpg" alt="TEAL d.o.o." class="logo-image" style="height: 44px !important; width: auto !important; max-height: 44px !important; display: block;">
    </a>
    <nav class="nav" id="main-nav" role="navigation" aria-label="Glavna navigacija">
      <ul class="nav__list" role="list">
        <li class="nav__item"><a href="#ponudba" class="nav__link" id="nav-ponudba">Ponudba</a></li>
        <li class="nav__item"><a href="#o-nas" class="nav__link" id="nav-o-nas">O nas</a></li>
        <li class="nav__item"><a href="#outlet" class="nav__link" id="nav-outlet">Outlet</a></li>
        <li class="nav__item"><a href="#storitve" class="nav__link" id="nav-storitve">Storitve</a></li>
        <li class="nav__item"><a href="<?php echo esc_url( home_url( '/elektricna-vozila' ) ); ?>" class="nav__link" id="nav-ev">Električni avtomobili</a></li>
        <li class="nav__item"><a href="#kontakt" class="nav__link" id="nav-kontakt">Kontakt</a></li>
      </ul>
    </nav>
    <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--sm header__cta" id="header-cta">
      Obiscite Outletko.si
    </a>
    <button class="hamburger" id="hamburger-btn" aria-label="Odpri meni" aria-expanded="false" aria-controls="mobile-menu">
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
      <span class="hamburger__line"></span>
    </button>
  </div>
  <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobilni meni" aria-modal="true" hidden>
    <nav aria-label="Mobilna navigacija">
      <ul class="mobile-menu__list" role="list">
        <li><a href="#ponudba" class="mobile-menu__link">Ponudba</a></li>
        <li><a href="#o-nas" class="mobile-menu__link">O nas</a></li>
        <li><a href="#outlet" class="mobile-menu__link">Outlet</a></li>
        <li><a href="#storitve" class="mobile-menu__link">Storitve</a></li>
        <li><a href="<?php echo esc_url( home_url( '/elektricna-vozila' ) ); ?>" class="mobile-menu__link" id="mob-nav-ev">Električni avtomobili</a></li>
        <li><a href="#kontakt" class="mobile-menu__link">Kontakt</a></li>
      </ul>
      <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="btn btn--accent mobile-menu__cta" id="mob-outletko-cta">
        Pojdi na Outletko.si
      </a>
    </nav>
  </div>
</header>

<main id="main-content">

<!-- HERO -->
<section class="hero" id="hero" aria-label="Uvodni banner">
  <div class="hero__bg" aria-hidden="true">
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/hero.png" alt="" loading="eager" width="1920" height="1080">
    <div class="hero__overlay"></div>
  </div>
  <div class="container">
    <div class="hero__content">
      <div class="hero__badge">Od leta 1991</div>
      <h1 class="hero__title">
        Računalniška oprema<br>
        <span class="hero__title--accent">z 35-letno tradicijo</span>
      </h1>
      <p class="hero__subtitle">Nova, outlet in obnovljena (refurbished) računalniška oprema. Kakovost, ki ji zaupate – po cenah, ki vas prijetno presenetijo.</p>
      <div class="hero__actions">
        <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="btn btn--primary btn--lg" id="hero-cta-main">Razišči spletno trgovino</a>
        <a href="#ponudba" class="btn btn--outline btn--lg" id="hero-cta-secondary">Naša ponudba</a>
      </div>
      <div class="hero__stats">
        <div class="hero__stat"><span class="hero__stat-number">35+</span><span class="hero__stat-label">Let tradicije</span></div>
        <div class="hero__stat-divider"></div>
        <div class="hero__stat"><span class="hero__stat-number">2</span><span class="hero__stat-label">Poslovalnici</span></div>
        <div class="hero__stat-divider"></div>
        <div class="hero__stat"><span class="hero__stat-number">1000+</span><span class="hero__stat-label">Zadovoljnih strank</span></div>
      </div>
    </div>
  </div>
  <a href="#ponudba" class="hero__scroll-cue" aria-label="Pomakni se navzdol" id="scroll-cue">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
  </a>
</section>

<!-- USP BAR -->
<section class="usp-bar" aria-label="Prednosti podjetja">
  <div class="container usp-bar__inner">
    <div class="usp-bar__item">
      <div class="usp-bar__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg></div>
      <div class="usp-bar__text"><strong>Certificirana oprema</strong><span>Vsak artikel preverjen in zagotovljen</span></div>
    </div>
    <div class="usp-bar__item">
      <div class="usp-bar__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
      <div class="usp-bar__text"><strong>Garancija</strong><span>Na vso obnovljeno opremo</span></div>
    </div>
    <div class="usp-bar__item">
      <div class="usp-bar__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
      <div class="usp-bar__text"><strong>Hitra dostava</strong><span>Posiljamo po vsej Sloveniji</span></div>
    </div>
    <div class="usp-bar__item">
      <div class="usp-bar__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87"/><path d="M16 3.13a4 4 0 010 7.75"/></svg></div>
      <div class="usp-bar__text"><strong>Strokovni nasvet</strong><span>Ekipa z 35-letnimi izkusnjami</span></div>
    </div>
  </div>
</section><!-- CATEGORIES -->
<section class="section categories" id="ponudba" aria-labelledby="categories-title">
  <div class="container">
    <div class="section-header">
      <span class="section-header__tag">Prodajni program</span>
      <h2 class="section-header__title" id="categories-title">Nasa ponudba</h2>
      <p class="section-header__desc">Od prenosnikov do streznikov - vse za vase digitalno okolje</p>
    </div>
    <div class="categories__grid">
      <article class="cat-card" id="cat-prenosniki">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="2" y1="20" x2="22" y2="20"/></svg></div>
        <h3 class="cat-card__title">Prenosniki</h3>
        <p class="cat-card__desc">Poslovni in domaci prenosniki - novi, outlet in obnovljeni. HP, Dell, Lenovo in drugi.</p>
        <div class="cat-card__tags"><span class="tag">Novi</span><span class="tag tag--outlet">Outlet</span><span class="tag tag--refurbished">Obnovljeni</span></div>
        <a href="https://outletko.si/prenosniki/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card" id="cat-racunalniki">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><polyline points="8 21 12 17 16 21"/></svg></div>
        <h3 class="cat-card__title">Racunalniki</h3>
        <p class="cat-card__desc">Namizni racunalniki, All-in-One sistemi in graficne postaje za domaco ali pisarnisko rabo.</p>
        <div class="cat-card__tags"><span class="tag">Novi</span><span class="tag tag--outlet">Outlet</span><span class="tag tag--refurbished">Obnovljeni</span></div>
        <a href="https://outletko.si/racunalniki/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card" id="cat-strezniki">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="2" width="20" height="8" rx="2"/><rect x="2" y="14" width="20" height="8" rx="2"/><line x1="6" y1="6" x2="6.01" y2="6"/><line x1="6" y1="18" x2="6.01" y2="18"/></svg></div>
        <h3 class="cat-card__title">Strezniki</h3>
        <p class="cat-card__desc">Strezniki in graficne postaje za zahtevna delovna okolja. Preverjena poslovna kakovost.</p>
        <div class="cat-card__tags"><span class="tag tag--refurbished">Obnovljeni</span><span class="tag tag--outlet">Outlet</span></div>
        <a href="https://outletko.si/strezniki/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card" id="cat-zasloni">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg></div>
        <h3 class="cat-card__title">Zasloni</h3>
        <p class="cat-card__desc">Monitorji in zasloni za domaco in profesionalno rabo v razlicnih dimenzijah in resolucijah.</p>
        <div class="cat-card__tags"><span class="tag">Novi</span><span class="tag tag--outlet">Outlet</span></div>
        <a href="https://outletko.si/zasloni/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card" id="cat-tablice">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="5" y="2" width="14" height="20" rx="2"/><line x1="12" y1="18" x2="12.01" y2="18"/></svg></div>
        <h3 class="cat-card__title">Tablice &amp; Telefoni</h3>
        <p class="cat-card__desc">Pametni telefoni in tablice za produktivnost in zabavo. Iz zanesljivih poslovnih linij.</p>
        <div class="cat-card__tags"><span class="tag">Novi</span><span class="tag tag--refurbished">Obnovljeni</span></div>
        <a href="https://outletko.si/tablice-in-telefoni/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card" id="cat-tiskalniki">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="6 9 6 2 18 2 18 9"/><path d="M6 18H4a2 2 0 01-2-2v-5a2 2 0 012-2h16a2 2 0 012 2v5a2 2 0 01-2 2h-2"/><rect x="6" y="14" width="12" height="8"/></svg></div>
        <h3 class="cat-card__title">Tiskalniki</h3>
        <p class="cat-card__desc">Laserski in brizgalni tiskalniki ter multifunkcijske naprave za pisarnisko in domaco rabo.</p>
        <div class="cat-card__tags"><span class="tag">Novi</span><span class="tag tag--outlet">Outlet</span></div>
        <a href="https://outletko.si/tiskalniki/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card" id="cat-programska-oprema">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></div>
        <h3 class="cat-card__title">Programska oprema</h3>
        <p class="cat-card__desc">Licencna programska oprema, operacijski sistemi in pisarniški paketi.</p>
        <div class="cat-card__tags"><span class="tag">Licencno</span><span class="tag tag--outlet">Outlet</span></div>
        <a href="https://outletko.si/programska-oprema/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>

      <article class="cat-card cat-card--highlight" id="cat-outlet-vse">
        <div class="cat-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/><line x1="7" y1="7" x2="7.01" y2="7"/></svg></div>
        <h3 class="cat-card__title">Vse Outlet akcije</h3>
        <p class="cat-card__desc">Neprodane zaloge, odprta embalaza in posebne outlet ponudbe - vrhunska kakovost po nizjih cenah.</p>
        <div class="cat-card__tags"><span class="tag tag--hot">Akcija</span></div>
        <a href="https://outletko.si/outlet/" target="_blank" rel="noopener noreferrer" class="cat-card__link">Oglej si outlet ponudbo <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg></a>
      </article>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="section about" id="o-nas" aria-labelledby="about-title">
  <div class="container about__inner">
    <div class="about__image-wrap">
      <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/about.jpg" alt="Notranjost poslovne enote TEAL d.o.o." loading="lazy" width="600" height="600" class="about__image">
      <div class="about__image-badge">
        <span class="about__image-badge-number">35</span>
        <span class="about__image-badge-text">let tradicije</span>
      </div>
    </div>
    <div class="about__content">
      <span class="section-header__tag">O podjetju</span>
      <h2 class="section-header__title" id="about-title">TEAL d.o.o. - Zanesljiv partner od leta 1991</h2>
      <p class="about__lead">Podjetje TEAL d.o.o. je bilo ustanovljeno <strong>13. decembra 1991</strong> in od takrat neprekinjeno deluje na področju prodaje in servisa računalniške opreme v Sloveniji.</p>
      <p class="about__body">Z več kot 35-letno tradicijo smo postali zaupanja vreden partner za podjetja in posameznike. Naša spletna platforma <strong>Outletko.si</strong> ponuja novo, outlet in obnovljeno (refurbished) računalniško opremo.</p>
      <ul class="about__features">
        <li class="about__feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Obnovljena oprema s preverjeno kakovostjo in garancijo</li>
        <li class="about__feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Strokovni servis: antivirusna zaščita, optimizacija</li>
        <li class="about__feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Prilagojene rešitve za podjetja in posameznike</li>
        <li class="about__feature"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg> Dostava po vsej Sloveniji - hitro in varno</li>
      </ul>
      <div class="about__cta-group">
        <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="btn btn--primary">Odkrijte Outletko.si</a>
        <a href="#kontakt" class="btn btn--outline">Kontaktirajte nas</a>
      </div>
    </div>
  </div>
</section><!-- OUTLET HIGHLIGHT -->
<section class="section outlet-highlight" id="outlet" aria-labelledby="outlet-title">
  <div class="outlet-highlight__bg">
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/refurbished.jpg" alt="" loading="lazy" width="1920" height="1080">
    <div class="outlet-highlight__overlay"></div>
  </div>
  <div class="container outlet-highlight__content">
    <div class="outlet-highlight__text">
      <span class="section-header__tag section-header__tag--light">Posebna ponudba</span>
      <h2 class="outlet-highlight__title" id="outlet-title">Obnovljena oprema –<br>Vrhunska kakovost,<br>Ugodna cena</h2>
      <p class="outlet-highlight__desc">Vsak kos obnovljene opreme je pregledan, očiščen in testiran. Pogosto gre za kakovostno poslovno opremo iz leasinga – robustnejšo in zanesljivejšo od povprečne domače opreme.</p>
      <div class="outlet-highlight__badges">
        <div class="outlet-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg><span>Garancija zagotovljena</span></div>
        <div class="outlet-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg><span>Vsak kos preverjen</span></div>
        <div class="outlet-badge"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg><span>Do 70% prihrankov</span></div>
      </div>
      <a href="https://outletko.si/obnovljeni/" target="_blank" rel="noopener noreferrer" class="btn btn--accent btn--lg">Oglej si obnovljene artikle</a>
    </div>
    <div class="outlet-highlight__types">
      <div class="outlet-type-card" id="outlet-type-business"><div class="outlet-type-card__icon">🏢</div><h3>Poslovna oprema</h3><p>Prenosniki in računalniki iz poslovnih okolij – robustni in zanesljivi</p></div>
      <div class="outlet-type-card" id="outlet-type-factory"><div class="outlet-type-card__icon">🏭</div><h3>Tovarniško obnovljeno</h3><p>Naprave, obnovljene s strani proizvajalca ali certificiranega servisa</p></div>
      <div class="outlet-type-card" id="outlet-type-open-box"><div class="outlet-type-card__icon">📦</div><h3>Odprta embalaža</h3><p>Novi artikli z odprto embalažo po znižani ceni</p></div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="section services" id="storitve" aria-labelledby="services-title">
  <div class="container">
    <div class="section-header">
      <span class="section-header__tag">Naše storitve</span>
      <h2 class="section-header__title" id="services-title">Servis &amp; Podpora</h2>
      <p class="section-header__desc">Poleg prodaje nudimo strokovni servis vaše računalniške opreme</p>
    </div>
    <div class="services__grid">
      <div class="service-card" id="service-antivirus">
        <div class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
        <h3 class="service-card__title">Antivirusna zaščita</h3>
        <p class="service-card__desc">Odstranjevanje virusov, malware in nepotrebnih programov. Zaščita vaših podatkov.</p>
      </div>
      <div class="service-card" id="service-optimization">
        <div class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><polyline points="23 6 13.5 15.5 8.5 10.5 1 18"/><polyline points="17 6 23 6 23 12"/></svg></div>
        <h3 class="service-card__title">Optimizacija delovanja</h3>
        <p class="service-card__desc">Vaš računalnik bo spet hiter in odziven. Temeljito čiščenje in nastavitev sistema.</p>
      </div>
      <div class="service-card" id="service-hardware">
        <div class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></div>
        <h3 class="service-card__title">Vgradnja strojne opreme</h3>
        <p class="service-card__desc">Nadgradnja RAM, SSD, grafičnih kartic in ostalih komponent. Profesionalna vgradnja.</p>
      </div>
      <div class="service-card" id="service-data">
        <div class="service-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></div>
        <h3 class="service-card__title">Reševanje podatkov</h3>
        <p class="service-card__desc">Obnova izgubljenih ali poškodovanih podatkov. Zaupajte nam vaše dragocene datoteke.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner" id="cta-banner" aria-labelledby="cta-banner-title">
  <div class="container cta-banner__inner">
    <div class="cta-banner__text">
      <h2 class="cta-banner__title" id="cta-banner-title">Iščete pravo računalniško opremo?</h2>
      <p class="cta-banner__desc">Obiščite našo spletno trgovino Outletko.si z najširšo ponudbo nove, outlet in obnovljene računalniške opreme v Sloveniji.</p>
    </div>
    <div class="cta-banner__actions">
      <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="btn btn--white btn--lg">Pojdi na Outletko.si</a>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="section contact" id="kontakt" aria-labelledby="contact-title">
  <div class="container">
    <div class="section-header">
      <span class="section-header__tag">Kontakt</span>
      <h2 class="section-header__title" id="contact-title">Stopite v stik z nami</h2>
      <p class="section-header__desc">Veseli bomo vašega klica, e-pošte ali obiska v eni od naših poslovnih enot</p>
    </div>
    <div class="contact__grid">
      <div class="contact__info">
        <h3 class="contact__info-title">Kontaktni podatki</h3>
        <div class="contact__info-item">
          <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14z"/></svg></div>
          <div><strong>Telefon (Laško)</strong><a href="tel:+38637340070" class="contact__link">+386 3 734 00 70</a></div>
        </div>
        <div class="contact__info-item">
          <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8a19.79 19.79 0 01-3.07-8.68A2 2 0 012 0h3a2 2 0 012 1.72c.127.96.361 1.903.7 2.81a2 2 0 01-.45 2.11L6.09 7.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0122 14z"/></svg></div>
          <div><strong>Telefon (Celje)</strong><a href="tel:+38634284343" class="contact__link">(03) 428 43 43</a></div>
        </div>
        <div class="contact__info-item">
          <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg></div>
          <div><strong>E-pošta</strong><a href="mailto:info@teal.si" class="contact__link">info@teal.si</a></div>
        </div>
        <div class="contact__info-item">
          <div class="contact__info-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg></div>
          <div><strong>Delovni čas</strong><span>Ponedeljek – Petek: 8:00–16:00</span></div>
        </div>
      </div>
      <div class="contact__locations">
        <div class="location-card" id="location-lasko">
          <div class="location-card__header">
            <div class="location-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            <h3>Laško – Sedež</h3>
          </div>
          <address class="location-card__address">Kidričeva ulica 5<br>3270 Laško<br><a href="tel:+38637340070" class="contact__link">+386 3 734 00 70</a></address>
          <a href="https://maps.google.com/?q=Kidri%C4%8Deva+ulica+5,+3270+La%C5%A1ko" target="_blank" rel="noopener noreferrer" class="location-card__map-link">Odpri v Google Maps</a>
        </div>
        <div class="location-card" id="location-celje">
          <div class="location-card__header">
            <div class="location-card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg></div>
            <h3>Celje – Poslovna enota</h3>
          </div>
          <address class="location-card__address">Smrekarjeva ulica 1<br>3000 Celje<br><a href="tel:+38634284343" class="contact__link">(03) 428 43 43</a></address>
          <a href="https://maps.google.com/?q=Smrekarjeva+ulica+1,+3000+Celje" target="_blank" rel="noopener noreferrer" class="location-card__map-link">Odpri v Google Maps</a>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<footer class="footer" id="main-footer" role="contentinfo">
  <div class="footer__top">
    <div class="container footer__top-inner">
      <div class="footer__brand">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer__logo" aria-label="TEAL d.o.o. - domača stran">
          <img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/images/logo.jpg" alt="TEAL d.o.o." class="logo-image" style="height: 44px !important; width: auto !important; max-height: 44px !important; display: block;">
        </a>
        <p class="footer__tagline">35 let zaupanja vredne prodaje računalniške opreme v Sloveniji.</p>
        <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="btn btn--accent btn--sm footer__outletko-btn">Spletna trgovina Outletko.si</a>
      </div>
      <div class="footer__links-group">
        <h4 class="footer__group-title">Ponudba</h4>
        <ul class="footer__links">
          <li><a href="https://outletko.si/prenosniki/" target="_blank" rel="noopener noreferrer">Prenosniki</a></li>
          <li><a href="https://outletko.si/racunalniki/" target="_blank" rel="noopener noreferrer">Računalniki</a></li>
          <li><a href="https://outletko.si/strezniki/" target="_blank" rel="noopener noreferrer">Strežniki</a></li>
          <li><a href="https://outletko.si/zasloni/" target="_blank" rel="noopener noreferrer">Zasloni</a></li>
          <li><a href="https://outletko.si/tiskalniki/" target="_blank" rel="noopener noreferrer">Tiskalniki</a></li>
          <li><a href="https://outletko.si/tablice-in-telefoni/" target="_blank" rel="noopener noreferrer">Tablice &amp; Telefoni</a></li>
        </ul>
      </div>
      <div class="footer__links-group">
        <h4 class="footer__group-title">TEAL d.o.o.</h4>
        <ul class="footer__links">
          <li><a href="#o-nas">O podjetju</a></li>
          <li><a href="#storitve">Storitve</a></li>
          <li><a href="#kontakt">Kontakt</a></li>
          <li><a href="https://outletko.si/obnovljeni/" target="_blank" rel="noopener noreferrer">Obnovljeni artikli</a></li>
        </ul>
      </div>
      <div class="footer__contact">
        <h4 class="footer__group-title">Kontakt</h4>
        <address class="footer__address">
          <p><strong>Laško (sedež):</strong><br>Kidričeva ulica 5, 3270 Laško</p>
          <p><strong>Celje:</strong><br>Smrekarjeva ulica 1, 3000 Celje</p>
        </address>
        <p class="footer__contact-item"><a href="tel:+38637340070" class="footer__contact-link">+386 3 734 00 70</a></p>
        <p class="footer__contact-item"><a href="mailto:info@teal.si" class="footer__contact-link">info@teal.si</a></p>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container footer__bottom-inner">
      <p class="footer__copyright">&copy; <?php echo esc_html( date('Y') ); ?> TEAL d.o.o. · Kidričeva ulica 5, 3270 Laško</p>
      <p class="footer__powered">Spletna trgovina: <a href="https://outletko.si/" target="_blank" rel="noopener noreferrer">Outletko.si</a></p>
    </div>
  </div>
</footer>

<a href="https://outletko.si/" target="_blank" rel="noopener noreferrer" class="floating-cta" id="floating-cta" aria-label="Obiščite spletno trgovino Outletko.si">
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>
  <span>Outletko.si</span>
</a>

<?php wp_footer(); ?>
</body>
</html>