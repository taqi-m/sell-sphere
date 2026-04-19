// ============================================
// QuickPOS Landing Page — Main JavaScript
// ============================================
// Responsibilities:
//  [SCRUM-20] Sticky navbar on scroll (glassmorphism effect)
//  [SCRUM-20] Mobile hamburger menu toggle
//  [SCRUM-20] Smooth scroll for all anchor links
//  [SCRUM-22] Scroll-triggered card animations via IntersectionObserver
// ============================================

document.addEventListener('DOMContentLoaded', function () {

    // ------------------------------------------------
    // [SCRUM-20] Sticky Navbar — glassmorphism on scroll
    // ------------------------------------------------
    const navbar = document.getElementById('navbar');

    function handleNavbarScroll() {
        if (window.scrollY > 20) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    }

    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    handleNavbarScroll(); // run once on load in case page is already scrolled

    // ------------------------------------------------
    // [SCRUM-20] Mobile Hamburger Menu Toggle
    // ------------------------------------------------
    const hamburger = document.getElementById('hamburger');
    const navLinks  = document.getElementById('navLinks');

    hamburger.addEventListener('click', function () {
        const isOpen = navLinks.classList.toggle('open');
        hamburger.classList.toggle('active', isOpen);
        hamburger.setAttribute('aria-expanded', String(isOpen));

        // Prevent body scroll when menu is open
        document.body.style.overflow = isOpen ? 'hidden' : '';
    });

    // Close mobile nav when a link is clicked
    navLinks.querySelectorAll('.nav-link').forEach(function (link) {
        link.addEventListener('click', function () {
            navLinks.classList.remove('open');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        });
    });

    // Close mobile nav on outside click
    document.addEventListener('click', function (e) {
        if (
            navLinks.classList.contains('open') &&
            !navbar.contains(e.target)
        ) {
            navLinks.classList.remove('open');
            hamburger.classList.remove('active');
            hamburger.setAttribute('aria-expanded', 'false');
            document.body.style.overflow = '';
        }
    });

    // ------------------------------------------------
    // [SCRUM-20] Smooth Scroll for Anchor Links
    // ------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href === '#') return;

            const target = document.querySelector(href);
            if (!target) return;

            e.preventDefault();

            const navHeight    = navbar.offsetHeight;
            const targetTop    = target.getBoundingClientRect().top + window.scrollY;
            const scrollTarget = targetTop - navHeight - 16;

            window.scrollTo({ top: scrollTarget, behavior: 'smooth' });
        });
    });

    // ------------------------------------------------
    // [SCRUM-22] Scroll-triggered entrance animations
    // Uses IntersectionObserver for performance
    // ------------------------------------------------
    const animElements = document.querySelectorAll('[data-animate]');

    if ('IntersectionObserver' in window && animElements.length > 0) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        const delay = parseInt(entry.target.dataset.delay || '0', 10);
                        setTimeout(function () {
                            entry.target.classList.add('animated');
                        }, delay);
                        observer.unobserve(entry.target);
                    }
                });
            },
            {
                threshold:  0.12,
                rootMargin: '0px 0px -48px 0px'
            }
        );

        animElements.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback: show all elements immediately if IO not supported
        animElements.forEach(function (el) {
            el.classList.add('animated');
        });
    }

});
