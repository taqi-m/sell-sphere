// ============================================
// QuickPOS v2.0 — Main JavaScript
// ============================================
// Responsibilities (SCRUM-39 — JS Restoration):
//   [SCRUM-33] Sticky navbar glassmorphism on scroll
//   [SCRUM-33] Mobile hamburger menu toggle
//   [SCRUM-33] Smooth scroll for all anchor links
//   [SCRUM-33] Scroll spy — nav link active state
//   [SCRUM-36] Pricing monthly/annual toggle
//   [SCRUM-34] Scroll-triggered card animations (IntersectionObserver)
//   [SCRUM-37] Form submit button loading state
// ============================================

document.addEventListener('DOMContentLoaded', function () {

    // ------------------------------------------------
    // [SCRUM-33] Sticky Navbar — glassmorphism on scroll
    // ------------------------------------------------
    const navbar = document.getElementById('navbar');

    function handleNavbarScroll() {
        if (navbar) {
            navbar.classList.toggle('scrolled', window.scrollY > 20);
        }
    }

    window.addEventListener('scroll', handleNavbarScroll, { passive: true });
    handleNavbarScroll();

    // ------------------------------------------------
    // [SCRUM-33] Mobile Hamburger Menu Toggle
    // ------------------------------------------------
    const hamburger  = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon   = document.getElementById('menuIcon');

    if (hamburger && mobileMenu) {
        hamburger.addEventListener('click', function () {
            const isOpen = mobileMenu.classList.toggle('open');
            hamburger.setAttribute('aria-expanded', String(isOpen));
            if (menuIcon) menuIcon.textContent = isOpen ? 'close' : 'menu';
            document.body.style.overflow = isOpen ? 'hidden' : '';
        });

        // Close mobile menu when a link is clicked
        mobileMenu.querySelectorAll('.mobile-nav-link').forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.remove('open');
                hamburger.setAttribute('aria-expanded', 'false');
                if (menuIcon) menuIcon.textContent = 'menu';
                document.body.style.overflow = '';
            });
        });

        // Close on outside click
        document.addEventListener('click', function (e) {
            if (
                mobileMenu.classList.contains('open') &&
                navbar && !navbar.contains(e.target)
            ) {
                mobileMenu.classList.remove('open');
                hamburger.setAttribute('aria-expanded', 'false');
                if (menuIcon) menuIcon.textContent = 'menu';
                document.body.style.overflow = '';
            }
        });
    }

    // ------------------------------------------------
    // [SCRUM-33] Smooth Scroll for Anchor Links
    // ------------------------------------------------
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (!href || href === '#') return;
            const target = document.querySelector(href);
            if (!target) return;
            e.preventDefault();
            const navHeight    = navbar ? navbar.offsetHeight : 0;
            const targetTop    = target.getBoundingClientRect().top + window.scrollY;
            const scrollTarget = targetTop - navHeight - 16;
            window.scrollTo({ top: scrollTarget, behavior: 'smooth' });
        });
    });

    // ------------------------------------------------
    // [SCRUM-33] Scroll Spy — Active Nav Link
    // ------------------------------------------------
    const spyLinks   = document.querySelectorAll('.nav-link-spy');
    const spySections = ['features', 'pricing', 'contact'].map(function (id) {
        return document.getElementById(id);
    }).filter(Boolean);

    function updateScrollSpy() {
        const scrollMid = window.scrollY + (window.innerHeight / 3);
        let currentId = '';
        spySections.forEach(function (section) {
            if (section.offsetTop <= scrollMid) {
                currentId = section.id;
            }
        });
        spyLinks.forEach(function (link) {
            const active = link.dataset.section === currentId;
            link.classList.toggle('active', active);
            if (active) {
                link.style.color = '#1A56DB';
                link.style.fontWeight = '600';
            } else {
                link.style.color = '';
                link.style.fontWeight = '';
            }
        });
    }

    window.addEventListener('scroll', updateScrollSpy, { passive: true });
    updateScrollSpy();

    // ------------------------------------------------
    // [SCRUM-36] Pricing Toggle — Monthly / Annual
    // ------------------------------------------------
    const toggleMonthly = document.getElementById('toggleMonthly');
    const toggleAnnual  = document.getElementById('toggleAnnual');
    const pricesMonthly = document.querySelectorAll('.price-monthly');
    const pricesAnnual  = document.querySelectorAll('.price-annual');

    function setMonthly() {
        pricesMonthly.forEach(function (el) { el.style.display = 'inline'; });
        pricesAnnual.forEach(function (el)  { el.style.display = 'none'; });
        if (toggleMonthly) {
            toggleMonthly.classList.add('bg-surface-container-lowest', 'shadow-sm', 'text-on-surface');
            toggleMonthly.classList.remove('text-outline');
            toggleMonthly.setAttribute('aria-pressed', 'true');
        }
        if (toggleAnnual) {
            toggleAnnual.classList.remove('bg-surface-container-lowest', 'shadow-sm', 'text-on-surface');
            toggleAnnual.classList.add('text-outline');
            toggleAnnual.setAttribute('aria-pressed', 'false');
        }
    }

    function setAnnual() {
        pricesMonthly.forEach(function (el) { el.style.display = 'none'; });
        pricesAnnual.forEach(function (el)  { el.style.display = 'inline'; });
        if (toggleAnnual) {
            toggleAnnual.classList.add('bg-surface-container-lowest', 'shadow-sm', 'text-on-surface');
            toggleAnnual.classList.remove('text-outline');
            toggleAnnual.setAttribute('aria-pressed', 'true');
        }
        if (toggleMonthly) {
            toggleMonthly.classList.remove('bg-surface-container-lowest', 'shadow-sm', 'text-on-surface');
            toggleMonthly.classList.add('text-outline');
            toggleMonthly.setAttribute('aria-pressed', 'false');
        }
    }

    if (toggleMonthly) toggleMonthly.addEventListener('click', setMonthly);
    if (toggleAnnual)  toggleAnnual.addEventListener('click', setAnnual);

    // ------------------------------------------------
    // [SCRUM-34] Scroll-Triggered Animations (IntersectionObserver)
    // ------------------------------------------------
    const animElements = document.querySelectorAll('[data-animate]');

    if ('IntersectionObserver' in window && animElements.length > 0) {
        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        const delay = parseInt(entry.target.dataset.delay || '0', 10);
                        setTimeout(function () {
                            entry.target.style.opacity    = '1';
                            entry.target.style.transform  = 'translateY(0)';
                        }, delay);
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.10, rootMargin: '0px 0px -48px 0px' }
        );

        animElements.forEach(function (el) {
            el.style.opacity   = '0';
            el.style.transform = 'translateY(24px)';
            el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(el);
        });
    } else {
        animElements.forEach(function (el) {
            el.style.opacity  = '1';
            el.style.transform = 'translateY(0)';
        });
    }

    // ------------------------------------------------
    // [SCRUM-37] Form Submit — Loading State
    // ------------------------------------------------
    const contactForm = document.getElementById('contactForm');
    const submitBtn   = document.getElementById('submitBtn');

    if (contactForm && submitBtn) {
        contactForm.addEventListener('submit', function () {
            submitBtn.disabled     = true;
            submitBtn.textContent  = 'Sending...';
            submitBtn.style.opacity = '0.7';
        });
    }

});
