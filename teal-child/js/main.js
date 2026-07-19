document.addEventListener('DOMContentLoaded', () => {
  // Footer year (fallback, though PHP handles this, it is good to have)
  const yearEl = document.getElementById('footer-year');
  if (yearEl) {
    yearEl.textContent = new Date().getFullYear();
  }

  // Sticky header scroll behavior
  const header = document.getElementById('main-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 80) {
        header.classList.add('header--scrolled');
      } else {
        header.classList.remove('header--scrolled');
      }
    }, { passive: true });
  }

  // Hamburger mobile menu
  const hamburger = document.getElementById('hamburger-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  if (hamburger && mobileMenu) {
    hamburger.addEventListener('click', () => {
      const isOpen = !mobileMenu.hidden;
      mobileMenu.hidden = isOpen;
      hamburger.setAttribute('aria-expanded', String(!isOpen));
      hamburger.classList.toggle('hamburger--open', !isOpen);
      document.body.classList.toggle('body--menu-open', !isOpen);
    });

    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.hidden = true;
        hamburger.setAttribute('aria-expanded', 'false');
        hamburger.classList.remove('hamburger--open');
        document.body.classList.remove('body--menu-open');
      });
    });
  }

  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target && header) {
        e.preventDefault();
        const top = target.getBoundingClientRect().top + window.scrollY - header.offsetHeight - 16;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

  // Intersection Observer for scroll animations
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -60px 0px' });

  document.querySelectorAll('.cat-card, .service-card, .about__image-wrap, .about__content, .usp-bar__item, .location-card, .outlet-type-card').forEach(el => {
    el.classList.add('animate-on-scroll');
    observer.observe(el);
  });

  // Floating CTA visibility
  const floatingCta = document.getElementById('floating-cta');
  const heroSection = document.getElementById('hero');
  if (floatingCta && heroSection) {
    new IntersectionObserver((entries) => {
      floatingCta.classList.toggle('floating-cta--visible', !entries[0].isIntersecting);
    }, { threshold: 0 }).observe(heroSection);
  }
});