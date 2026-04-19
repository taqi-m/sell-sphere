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

    // ------------------------------------------------
    // [SCRUM-23] Pricing — Monthly / Annual billing toggle
    // ------------------------------------------------
    var billingToggle  = document.getElementById('billingToggle');
    var toggleMonthly  = document.getElementById('toggleMonthly');
    var toggleAnnual   = document.getElementById('toggleAnnual');
    var priceAmounts   = document.querySelectorAll('.price-amount[data-monthly]');

    if (billingToggle) {
        billingToggle.addEventListener('click', function () {
            var isAnnual = this.getAttribute('aria-checked') === 'true';
            var setAnnual = !isAnnual;

            this.setAttribute('aria-checked', String(setAnnual));

            toggleMonthly.classList.toggle('toggle-label--active', !setAnnual);
            toggleAnnual.classList.toggle('toggle-label--active',   setAnnual);

            priceAmounts.forEach(function (el) {
                var target = setAnnual
                    ? el.getAttribute('data-annual')
                    : el.getAttribute('data-monthly');
                if (target) {
                    el.textContent = target;
                }
            });
        });
    }

    // ------------------------------------------------
    // [SCRUM-17] Active nav link — scroll spy
    // Highlights the nav link for the section currently in viewport
    // ------------------------------------------------
    var sections = document.querySelectorAll('section[id], footer[id]');
    var navLinksList = document.querySelectorAll('.nav-link[href^="#"]');

    function updateActiveNavLink() {
        var scrollY = window.scrollY + navbar.offsetHeight + 30;

        sections.forEach(function (section) {
            var top    = section.offsetTop;
            var bottom = top + section.offsetHeight;
            var id     = section.getAttribute('id');

            if (scrollY >= top && scrollY < bottom) {
                navLinksList.forEach(function (link) {
                    link.classList.toggle(
                        'active',
                        link.getAttribute('href') === '#' + id
                    );
                });
            }
        });
    }

    window.addEventListener('scroll', updateActiveNavLink, { passive: true });
    updateActiveNavLink();

    // ------------------------------------------------
    // [SCRUM-17] Contact form — submit loading state
    // Shows spinner on button while form submits
    // ------------------------------------------------
    var contactForm = document.getElementById('contactForm');
    var submitBtn   = document.getElementById('submitBtn');

    if (contactForm && submitBtn) {
        contactForm.addEventListener('submit', function () {
            submitBtn.classList.add('btn--loading');
            submitBtn.textContent = 'Sending\u2026';
        });
    }

});
