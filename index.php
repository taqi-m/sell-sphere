<?php
/**
 * QuickPOS Landing Page — v2.0 Redesign
 * index.php — Main entry point
 *
 * Redesign Sprint 1 (SCRUM-33, SCRUM-34, SCRUM-35):
 *   [x] Navigation Variant 2  — Glassmorphism sticky nav
 *   [x] Hero Section Concept 2 — Asymmetric dashboard mockup
 *   [x] Features Section Concept 1 — Bento grid
 *
 * Redesign Sprint 2 (SCRUM-36, SCRUM-37, SCRUM-38):
 *   [x] Pricing Section Concept 2 — Pro-highlighted 3-tier
 *   [x] Contact Section Concept 2 — Two-column with PHP form
 *   [x] Footer Concept 2 — Dark 4-column grid
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QuickPOS — The modern Point of Sale system for growing businesses. Manage inventory, track sales, and scale your retail operations effortlessly.">
    <meta name="keywords" content="POS system, point of sale, inventory management, sales analytics, retail software">
    <meta name="author" content="QuickPOS">
    <title>QuickPOS — The Last POS System You'll Ever Need</title>

    <!-- Google Fonts: Kinetic Curator Design System -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Syne:wght@400;600;700;800&family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=JetBrains+Mono:wght@100..800&family=Epilogue:wght@400;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">

    <!-- TailwindCSS CDN with plugins (SCRUM-32) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary":                  "#003fb1",
                        "on-primary":               "#ffffff",
                        "primary-container":        "#1a56db",
                        "on-primary-container":     "#d4dcff",
                        "primary-fixed":            "#dbe1ff",
                        "primary-fixed-dim":        "#b5c4ff",
                        "on-primary-fixed":         "#00174d",
                        "on-primary-fixed-variant": "#003dab",
                        "secondary":                "#835500",
                        "on-secondary":             "#ffffff",
                        "secondary-container":      "#feae2c",
                        "on-secondary-container":   "#6b4500",
                        "secondary-fixed":          "#ffddb4",
                        "secondary-fixed-dim":      "#ffb955",
                        "on-secondary-fixed":       "#291800",
                        "on-secondary-fixed-variant": "#633f00",
                        "tertiary":                 "#852b00",
                        "on-tertiary":              "#ffffff",
                        "tertiary-container":       "#ad3b00",
                        "on-tertiary-container":    "#ffd4c5",
                        "tertiary-fixed":           "#ffdbcf",
                        "tertiary-fixed-dim":       "#ffb59a",
                        "on-tertiary-fixed":        "#380d00",
                        "on-tertiary-fixed-variant": "#802a00",
                        "error":                    "#ba1a1a",
                        "on-error":                 "#ffffff",
                        "error-container":          "#ffdad6",
                        "on-error-container":       "#93000a",
                        "background":               "#f9f9f7",
                        "on-background":            "#1a1c1b",
                        "surface":                  "#f9f9f7",
                        "on-surface":               "#1a1c1b",
                        "surface-variant":          "#e2e3e1",
                        "on-surface-variant":       "#434654",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-low":    "#f4f4f2",
                        "surface-container":        "#eeeeec",
                        "surface-container-high":   "#e8e8e6",
                        "surface-container-highest": "#e2e3e1",
                        "surface-bright":           "#f9f9f7",
                        "surface-dim":              "#dadad8",
                        "surface-tint":             "#1353d8",
                        "outline":                  "#737686",
                        "outline-variant":          "#c3c5d7",
                        "inverse-surface":          "#2f3130",
                        "inverse-on-surface":       "#f1f1ef",
                        "inverse-primary":          "#b5c4ff"
                    },
                    fontFamily: {
                        "headline":  ["Syne", "sans-serif"],
                        "display":   ["DM Serif Display", "serif"],
                        "body":      ["DM Sans", "sans-serif"],
                        "label":     ["Plus Jakarta Sans", "sans-serif"],
                        "mono":      ["JetBrains Mono", "monospace"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg":      "0.5rem",
                        "xl":      "0.75rem",
                        "full":    "9999px"
                    }
                }
            }
        }
    </script>

    <!-- Supplemental CSS (animations, custom utilities) -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-background text-on-background font-body antialiased overflow-x-hidden">

<!-- ============================================
     NAVIGATION — SCRUM-33 (Nav Variant 2)
     ============================================ -->
<header id="navbar" class="glass-nav fixed top-0 w-full z-50">
    <div class="flex justify-between items-center max-w-7xl mx-auto px-6 md:px-8 h-[68px]">

        <!-- Brand Logo -->
        <a href="#" class="flex items-center gap-2 no-underline" aria-label="QuickPOS Home">
            <span class="material-symbols-outlined text-primary-container" style="font-variation-settings:'FILL' 1">bolt</span>
            <span class="font-headline font-bold text-xl text-[#0F1117] tracking-tight">QuickPOS</span>
        </a>

        <!-- Desktop Nav Links -->
        <ul id="navLinks" class="hidden md:flex gap-8 list-none m-0 p-0" role="list">
            <li><a href="#features" class="nav-link-spy font-body font-medium text-[#5A5F72] hover:text-primary-container transition-colors pb-1" data-section="features">Features</a></li>
            <li><a href="#pricing"  class="nav-link-spy font-body font-medium text-[#5A5F72] hover:text-primary-container transition-colors pb-1" data-section="pricing">Pricing</a></li>
            <li><a href="#contact"  class="nav-link-spy font-body font-medium text-[#5A5F72] hover:text-primary-container transition-colors pb-1" data-section="contact">Contact</a></li>
        </ul>

        <!-- Desktop Actions -->
        <div class="hidden md:flex items-center gap-4">
            <a href="#contact" class="font-body font-medium text-[#0F1117] hover:text-primary-container transition-colors flex items-center gap-1 group" id="loginBtn">
                Log In
                <span class="material-symbols-outlined text-sm group-hover:translate-x-1 transition-transform">arrow_forward</span>
            </a>
            <a href="#contact" id="signUpBtn" class="font-body font-medium text-white px-6 py-2 rounded-lg shadow-[0_2px_8px_rgba(26,86,219,0.28)] hover:shadow-[0_4px_16px_rgba(26,86,219,0.4)] transition-shadow" style="background:linear-gradient(135deg,#1A56DB 0%,#1341B0 100%)">
                Sign Up Free
            </a>
        </div>

        <!-- Mobile Hamburger -->
        <button id="hamburger" class="md:hidden text-[#0F1117] p-2" aria-label="Toggle navigation" aria-expanded="false" aria-controls="mobileMenu">
            <span class="material-symbols-outlined" id="menuIcon">menu</span>
        </button>
    </div>

    <!-- Mobile Drawer -->
    <div id="mobileMenu" class="md:hidden bg-surface-container-lowest border-t border-[#EDECE8]/40">
        <div class="p-6 flex flex-col gap-6">
            <ul class="flex flex-col gap-2 list-none m-0 p-0">
                <li><a href="#features" class="mobile-nav-link text-[#5A5F72] hover:text-primary-container block px-4 py-3 rounded-lg transition-colors font-body font-medium">Features</a></li>
                <li><a href="#pricing"  class="mobile-nav-link text-[#5A5F72] hover:text-primary-container block px-4 py-3 rounded-lg transition-colors font-body font-medium">Pricing</a></li>
                <li><a href="#contact"  class="mobile-nav-link text-[#5A5F72] hover:text-primary-container block px-4 py-3 rounded-lg transition-colors font-body font-medium">Contact</a></li>
            </ul>
            <div class="flex flex-col gap-3 pt-4 border-t border-[#EDECE8]/40">
                <a href="#contact" class="font-body font-medium text-[#0F1117] py-3 text-center w-full block">Log In</a>
                <a href="#contact" class="font-body font-medium text-white py-3 rounded-lg text-center w-full block shadow-[0_2px_8px_rgba(26,86,219,0.28)]" style="background:linear-gradient(135deg,#1A56DB 0%,#1341B0 100%)">Sign Up Free</a>
            </div>
        </div>
    </div>
</header>

<!-- ============================================
     HERO SECTION — SCRUM-34 (Hero Concept 2)
     ============================================ -->
<main id="hero" class="pt-32 pb-24 px-4 md:px-8 max-w-[1440px] mx-auto w-full" aria-label="Hero section">

    <!-- Desktop Hero (lg+) -->
    <div class="hidden lg:grid grid-cols-12 gap-12 items-center mb-32">

        <!-- Left Column -->
        <div class="col-span-5 flex flex-col items-start z-10 pr-8">
            <div class="bg-secondary-container/10 border border-secondary-container/20 rounded-full px-4 py-1.5 flex items-center gap-2 mb-8" data-animate="fade-up">
                <span class="text-secondary-container text-sm">✦</span>
                <span class="font-mono text-[13px] font-medium text-on-surface">Trusted by 12,000+ merchants</span>
            </div>
            <h1 class="font-headline font-bold text-[56px] leading-[1.15] text-[#0F1117] tracking-tight mb-6" data-animate="fade-up" data-delay="100">
                The Last POS System You'll <span class="font-display italic text-primary-container font-normal">Ever</span> Need.
            </h1>
            <p class="font-body text-[#5A5F72] text-xl leading-[1.6] mb-10 max-w-[480px]" data-animate="fade-up" data-delay="200">
                Manage sales, inventory, and analytics from one beautifully simple dashboard. Built for speed, designed for scale.
            </p>
            <div class="flex items-center gap-4 mb-12 w-full" data-animate="fade-up" data-delay="300">
                <a href="#contact" id="heroCta" class="text-white font-body font-medium px-8 py-4 rounded-[8px] shadow-[0_2px_8px_rgba(26,86,219,0.28)] hover:shadow-[0_4px_24px_rgba(26,86,219,0.4)] transition-all duration-300 flex items-center gap-2" style="background:linear-gradient(135deg,#1A56DB 0%,#1341B0 100%)">
                    Start Free Trial
                    <span class="material-symbols-outlined text-[20px]">arrow_forward</span>
                </a>
                <a href="#features" class="bg-[#FFFFFF] border border-[#EDECE8] text-[#0F1117] font-body font-medium px-8 py-4 rounded-[8px] shadow-sm hover:shadow-md hover:border-outline-variant transition-all duration-300">
                    Book a Demo
                </a>
            </div>
            <!-- Social Proof -->
            <div class="flex items-center gap-6 border-t border-[#EDECE8]/40 pt-6 w-full" data-animate="fade-up" data-delay="400">
                <div class="flex -space-x-3">
                    <div class="w-10 h-10 rounded-full border-2 border-surface-container-lowest bg-surface-container flex items-center justify-center text-xs font-bold text-on-surface-variant">MK</div>
                    <div class="w-10 h-10 rounded-full border-2 border-surface-container-lowest bg-primary-fixed flex items-center justify-center text-xs font-bold text-primary">SA</div>
                    <div class="w-10 h-10 rounded-full border-2 border-surface-container-lowest bg-secondary-fixed flex items-center justify-center text-xs font-bold text-secondary">JL</div>
                </div>
                <div>
                    <div class="flex text-secondary-container text-sm mb-1">
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings:'FILL' 1">star</span>
                        <span class="material-symbols-outlined text-[16px]" style="font-variation-settings:'FILL' 1">star</span>
                    </div>
                    <p class="font-body text-sm text-[#5A5F72]"><strong>4.9/5</strong> from 2,000+ reviews</p>
                </div>
            </div>
        </div>

        <!-- Right Column: Asymmetric Dashboard Mockup -->
        <div class="col-span-7 relative h-[600px] w-full flex items-center justify-center" data-animate="fade-left">
            <div class="absolute inset-0 bg-dot-pattern opacity-40 z-0"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-primary-container rounded-full blur-[100px] opacity-10 z-0"></div>

            <!-- Main Dashboard Card -->
            <div class="absolute right-[10%] top-[10%] w-[480px] bg-[#FFFFFF] rounded-[16px] shadow-[0_24px_48px_rgba(26,86,219,0.08)] border border-[#EDECE8]/40 overflow-hidden z-10 animate-float">
                <div class="bg-surface-bright px-6 py-4 border-b border-[#EDECE8]/40 flex justify-between items-center">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary-container text-[20px]">storefront</span>
                        <span class="font-headline font-bold text-[#0F1117] text-sm">Main Store</span>
                    </div>
                    <span class="font-mono text-[11px] text-[#5A5F72] bg-[#E6F4EA] text-[#12A150] px-2 py-0.5 rounded-full">Live</span>
                </div>
                <div class="p-6">
                    <p class="font-body text-sm text-[#5A5F72] mb-1">Today's Revenue</p>
                    <h3 class="font-mono text-[32px] font-medium text-[#0F1117] mb-6">$12,450.80</h3>
                    <div class="h-[120px] w-full flex items-end gap-2 mb-4">
                        <div class="w-full bg-surface-container-high rounded-t-sm h-[40%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-sm h-[60%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-sm h-[30%]"></div>
                        <div class="w-full bg-surface-container-high rounded-t-sm h-[80%]"></div>
                        <div class="w-full bg-primary-container rounded-t-sm h-[100%]"></div>
                    </div>
                    <div class="flex gap-2">
                        <span class="bg-surface-container-high px-3 py-1 rounded-full text-[13px] text-[#5A5F72] font-medium">142 orders</span>
                        <span class="bg-[#E6F4EA] text-[#12A150] px-3 py-1 rounded-full text-[13px] font-medium flex items-center gap-1">
                            <span class="material-symbols-outlined text-[14px]">arrow_upward</span> 18%
                        </span>
                    </div>
                </div>
            </div>

            <!-- Floating Transaction Card -->
            <div class="absolute -right-[2%] top-[52%] w-[260px] bg-[#FFFFFF]/90 backdrop-blur-md rounded-[16px] shadow-[0_12px_32px_rgba(26,86,219,0.12)] border border-[#EDECE8]/40 p-4 z-20 animate-float-sub">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-tertiary-fixed flex items-center justify-center text-tertiary">
                        <span class="material-symbols-outlined text-[20px]">shopping_bag</span>
                    </div>
                    <div class="flex-grow">
                        <p class="font-headline font-bold text-sm text-[#0F1117]">New Order</p>
                        <p class="font-mono text-[11px] text-[#5A5F72]">ID: #Q-8821</p>
                    </div>
                    <p class="font-mono font-medium text-[#0F1117] text-sm">+$142.00</p>
                </div>
            </div>

            <!-- Floating Inventory Alert Card -->
            <div class="absolute left-[5%] bottom-[12%] w-[300px] bg-[#FFFFFF] rounded-[16px] shadow-[0_16px_40px_rgba(245,166,35,0.12)] border border-[#EDECE8]/40 p-5 z-30">
                <div class="flex items-start gap-3">
                    <div class="mt-1 w-8 h-8 rounded-full bg-secondary-container/20 flex items-center justify-center text-secondary-container">
                        <span class="material-symbols-outlined text-[18px]">warning</span>
                    </div>
                    <div>
                        <p class="font-headline font-bold text-sm text-[#0F1117] mb-1">Low Inventory Alert</p>
                        <p class="font-body text-sm text-[#5A5F72]">Artisan Sourdough (3 remaining).</p>
                        <button class="font-body text-[13px] font-medium text-primary-container flex items-center gap-1 mt-2 hover:underline">
                            Reorder Now <span class="material-symbols-outlined text-[14px]">arrow_right_alt</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Hero Stack -->
    <div class="lg:hidden flex flex-col items-center text-center max-w-[390px] mx-auto mt-8 mb-24">
        <div class="bg-secondary-container/10 border border-secondary-container/20 rounded-full px-3 py-1 flex items-center gap-2 mb-6">
            <span class="text-secondary-container text-xs">✦</span>
            <span class="font-mono text-[11px] font-medium text-on-surface">Trusted by 12,000+ merchants</span>
        </div>
        <h1 class="font-headline font-bold text-[40px] leading-[1.1] text-[#0F1117] tracking-tight mb-4">
            The Last POS System You'll <span class="font-display italic text-primary-container font-normal">Ever</span> Need.
        </h1>
        <p class="font-body text-[#5A5F72] text-[16px] leading-[1.5] mb-8 px-2">
            Manage sales, inventory, and analytics from one beautifully simple dashboard.
        </p>
        <div class="flex flex-col gap-3 w-full mb-10 px-4">
            <a href="#contact" class="w-full text-white font-body font-medium py-3.5 rounded-[8px] shadow-[0_2px_8px_rgba(26,86,219,0.28)] flex items-center justify-center gap-2" style="background:linear-gradient(135deg,#1A56DB 0%,#1341B0 100%)">
                Start Free Trial
            </a>
            <a href="#features" class="w-full bg-[#FFFFFF] border border-[#EDECE8] text-[#0F1117] font-body font-medium py-3.5 rounded-[8px] shadow-sm text-center block">
                Book a Demo
            </a>
        </div>
        <!-- Mobile Stats -->
        <div class="flex items-center gap-4 justify-center">
            <div class="text-center">
                <div class="font-headline font-bold text-2xl text-[#0F1117]">12K+</div>
                <div class="font-body text-sm text-[#5A5F72]">Merchants</div>
            </div>
            <div class="w-px h-8 bg-[#EDECE8]"></div>
            <div class="text-center">
                <div class="font-headline font-bold text-2xl text-[#0F1117]">99.9%</div>
                <div class="font-body text-sm text-[#5A5F72]">Uptime</div>
            </div>
            <div class="w-px h-8 bg-[#EDECE8]"></div>
            <div class="text-center">
                <div class="font-headline font-bold text-2xl text-[#0F1117]">4.9★</div>
                <div class="font-body text-sm text-[#5A5F72]">Rating</div>
            </div>
        </div>
    </div>
</main>

<!-- ============================================
     FEATURES SECTION — SCRUM-35 (Features Concept 1: Bento Grid)
     ============================================ -->
<section id="features" class="py-24 px-6 md:px-12 max-w-7xl mx-auto" aria-label="Features section">

    <!-- Section Header -->
    <div class="text-center max-w-3xl mx-auto mb-16 md:mb-24" data-animate="fade-up">
        <span class="inline-block px-4 py-1.5 rounded-full bg-[#EFF4FF] text-primary-container text-sm font-bold tracking-wider mb-6 font-headline uppercase">BUILT FOR SPEED</span>
        <h2 class="text-4xl md:text-[40px] font-bold font-headline text-[#0F1117] leading-[1.25] mb-6">Everything You Need, Nothing You Don't</h2>
        <p class="text-[17px] text-[#5A5F72] font-body leading-relaxed max-w-2xl mx-auto">We stripped away the clutter to give you a point of sale system that moves as fast as your business.</p>
    </div>

    <!-- Bento Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">

        <!-- Card 1: Smart Inventory -->
        <article class="bg-surface-container-low rounded-[16px] p-6 md:p-8 hover:shadow-[0_8px_32px_rgba(26,86,219,0.12)] transition-shadow duration-300 group flex flex-col justify-between min-h-[320px] relative overflow-hidden border border-[#EDECE8]/40" data-animate="fade-up" data-delay="0">
            <div class="relative z-10">
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-primary-container mb-6 shadow-[0_2px_8px_rgba(26,86,219,0.08)]">
                    <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">inventory_2</span>
                </div>
                <h3 class="text-2xl font-bold font-headline text-[#0F1117] mb-3">Smart Inventory</h3>
                <p class="text-[#5A5F72] font-body text-base leading-relaxed mb-6">Real-time stock tracking with predictive ordering. Never run out of your best sellers again.</p>
            </div>
            <div class="mt-auto bg-white rounded-xl p-4 shadow-sm border border-[#EDECE8]/40 relative z-10">
                <div class="flex justify-between items-center mb-2">
                    <span class="text-sm font-medium text-[#0F1117]">Overall Health</span>
                    <span class="font-mono text-sm text-primary-container font-bold">94%</span>
                </div>
                <div class="w-full bg-surface-container-low rounded-full h-2">
                    <div class="bg-primary-container h-2 rounded-full" style="width:94%"></div>
                </div>
            </div>
            <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-[#EFF4FF] rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
        </article>

        <!-- Card 2: Deep Analytics -->
        <article class="bg-surface-container-low rounded-[16px] p-6 md:p-8 hover:shadow-[0_8px_32px_rgba(26,86,219,0.12)] transition-shadow duration-300 group flex flex-col justify-between min-h-[320px] relative overflow-hidden border border-[#EDECE8]/40" data-animate="fade-up" data-delay="100">
            <div class="relative z-10">
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-primary-container mb-6 shadow-[0_2px_8px_rgba(26,86,219,0.08)]">
                    <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">bar_chart</span>
                </div>
                <h3 class="text-2xl font-bold font-headline text-[#0F1117] mb-3">Deep Analytics</h3>
                <p class="text-[#5A5F72] font-body text-base leading-relaxed mb-6">Understand your business at a glance. Visual reports that actually make sense to non-accountants.</p>
            </div>
            <div class="mt-auto bg-white rounded-xl p-4 shadow-sm border border-[#EDECE8]/40 h-24 flex items-end relative z-10 overflow-hidden">
                <div class="flex items-end justify-between w-full h-12 gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                    <div class="w-full bg-[#EFF4FF] hover:bg-primary-container transition-colors rounded-t-sm" style="height:30%"></div>
                    <div class="w-full bg-[#EFF4FF] hover:bg-primary-container transition-colors rounded-t-sm" style="height:45%"></div>
                    <div class="w-full bg-[#EFF4FF] hover:bg-primary-container transition-colors rounded-t-sm" style="height:35%"></div>
                    <div class="w-full bg-[#EFF4FF] hover:bg-primary-container transition-colors rounded-t-sm" style="height:60%"></div>
                    <div class="w-full bg-[#EFF4FF] hover:bg-primary-container transition-colors rounded-t-sm" style="height:50%"></div>
                    <div class="w-full bg-[#EFF4FF] hover:bg-primary-container transition-colors rounded-t-sm" style="height:80%"></div>
                    <div class="w-full bg-primary-container rounded-t-sm" style="height:100%"></div>
                </div>
            </div>
            <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-[#EFF4FF] rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
        </article>

        <!-- Card 3: Seamless Integrations -->
        <article class="bg-surface-container-low rounded-[16px] p-6 md:p-8 hover:shadow-[0_8px_32px_rgba(26,86,219,0.12)] transition-shadow duration-300 group flex flex-col justify-between min-h-[320px] relative overflow-hidden border border-[#EDECE8]/40" data-animate="fade-up" data-delay="200">
            <div class="relative z-10">
                <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-primary-container mb-6 shadow-[0_2px_8px_rgba(26,86,219,0.08)]">
                    <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">power</span>
                </div>
                <h3 class="text-2xl font-bold font-headline text-[#0F1117] mb-3">Seamless Integrations</h3>
                <p class="text-[#5A5F72] font-body text-base leading-relaxed mb-6">Connects instantly with the tools you already use — Shopify, QuickBooks, Stripe, and 50+ more.</p>
            </div>
            <div class="mt-auto flex gap-4 relative z-10">
                <div class="w-12 h-12 rounded-full bg-white shadow-sm border border-[#EDECE8]/40 flex items-center justify-center font-mono text-xs font-bold text-[#0F1117]">Shop</div>
                <div class="w-12 h-12 rounded-full bg-white shadow-sm border border-[#EDECE8]/40 flex items-center justify-center font-mono text-xs font-bold text-[#0F1117] -ml-6 relative z-10">QB</div>
                <div class="w-12 h-12 rounded-full bg-white shadow-sm border border-[#EDECE8]/40 flex items-center justify-center font-mono text-xs font-bold text-primary-container -ml-6 relative z-20">Str</div>
                <div class="w-12 h-12 rounded-full bg-[#EFF4FF] border border-white flex items-center justify-center text-primary-container -ml-6 relative z-30">
                    <span class="material-symbols-outlined text-sm">add</span>
                </div>
            </div>
            <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-[#EFF4FF] rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
        </article>

        <!-- Card 4: Multi-Location -->
        <article class="bg-surface-container-low rounded-[16px] p-6 md:p-8 hover:shadow-[0_8px_32px_rgba(26,86,219,0.12)] transition-shadow duration-300 group flex flex-col justify-between min-h-[320px] relative overflow-hidden border border-[#EDECE8]/40" data-animate="fade-up" data-delay="300">
            <div class="relative z-10">
                <div class="flex justify-between items-start mb-6">
                    <div class="w-12 h-12 rounded-xl bg-white flex items-center justify-center text-primary-container shadow-[0_2px_8px_rgba(26,86,219,0.08)]">
                        <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1">location_on</span>
                    </div>
                    <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-[#F5A623]/10 text-[#F5A623] text-sm font-bold font-mono">
                        <span class="w-2 h-2 rounded-full bg-[#F5A623] animate-pulse"></span>
                        50 Locations
                    </span>
                </div>
                <h3 class="text-2xl font-bold font-headline text-[#0F1117] mb-3">Multi-Location Mastery</h3>
                <p class="text-[#5A5F72] font-body text-base leading-relaxed mb-6">Manage one store or fifty from a single dashboard. Synchronize pricing, inventory, and staff globally.</p>
            </div>
            <div class="mt-auto relative z-10 h-24 bg-white rounded-xl border border-[#EDECE8]/40 overflow-hidden relative">
                <div class="absolute inset-0 opacity-20" style="background-image:repeating-linear-gradient(45deg,transparent,transparent 10px,#e2e8f0 10px,#e2e8f0 11px)"></div>
                <div class="absolute top-1/2 left-1/4 w-3 h-3 bg-primary-container rounded-full shadow-[0_0_0_4px_rgba(26,86,219,0.2)] transform -translate-y-1/2"></div>
                <div class="absolute top-1/3 left-1/2 w-3 h-3 bg-primary-container rounded-full shadow-[0_0_0_4px_rgba(26,86,219,0.2)]"></div>
                <div class="absolute bottom-1/4 right-1/4 w-4 h-4 bg-[#F5A623] rounded-full shadow-[0_0_0_4px_rgba(245,166,35,0.2)] flex items-center justify-center">
                    <div class="w-1.5 h-1.5 bg-white rounded-full"></div>
                </div>
            </div>
            <div class="absolute -right-12 -bottom-12 w-48 h-48 bg-[#EFF4FF] rounded-full blur-3xl opacity-50 group-hover:opacity-100 transition-opacity"></div>
        </article>
    </div>
</section>

<!-- ============================================
     PRICING SECTION — SCRUM-36 (Pricing Concept 2)
     ============================================ -->
<section id="pricing" class="py-24 px-6 md:px-12 bg-surface-container-low" aria-label="Pricing section">
    <div class="max-w-7xl mx-auto">

        <!-- Header + Toggle -->
        <div class="text-center max-w-3xl mx-auto mb-20" data-animate="fade-up">
            <h2 class="font-headline font-bold text-4xl md:text-5xl text-on-surface mb-6 leading-tight">
                Scale with <span class="font-display italic text-primary-container">Precision.</span>
            </h2>
            <p class="text-outline text-lg max-w-2xl mx-auto leading-relaxed mb-10">Transparent pricing designed for modern commerce. No hidden fees, just pure transactional power.</p>

            <!-- Billing Toggle (SCRUM-39) -->
            <div class="inline-flex bg-surface-container-high rounded-full p-1.5 border border-[#EDECE8]/40">
                <button id="toggleMonthly" class="px-6 py-2 rounded-full bg-surface-container-lowest text-on-surface font-medium text-sm shadow-sm transition-all" aria-pressed="true">Monthly</button>
                <button id="toggleAnnual"  class="px-6 py-2 rounded-full text-outline font-medium text-sm hover:text-on-surface transition-all flex items-center gap-2" aria-pressed="false">Annually <span class="text-xs bg-secondary-container/20 text-secondary-container px-2 py-0.5 rounded-full font-bold">Save 20%</span></button>
            </div>
        </div>

        <!-- Pricing Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 lg:gap-8 max-w-6xl mx-auto">

            <!-- Starter -->
            <div class="bg-surface-container-lowest rounded-[20px] p-10 border border-[#EDECE8]/40 flex flex-col hover:shadow-[0_12px_32px_rgba(26,86,219,0.12)] hover:-translate-y-1 transition-all duration-300" data-animate="fade-up" data-delay="0">
                <div class="mb-8">
                    <h3 class="font-headline font-bold text-xl text-on-surface mb-2">Starter</h3>
                    <p class="text-sm text-outline">For emerging pop-ups and single locations.</p>
                </div>
                <div class="mb-10">
                    <div class="flex items-baseline gap-1">
                        <span class="text-2xl font-medium text-outline">$</span>
                        <span class="font-mono text-5xl font-bold text-on-surface tracking-tighter price-monthly">0</span>
                        <span class="font-mono text-5xl font-bold text-on-surface tracking-tighter price-annual" style="display:none">0</span>
                        <span class="text-sm text-outline">/mo</span>
                    </div>
                    <p class="text-xs text-outline mt-2 font-medium">2.9% + 30¢ per transaction</p>
                </div>
                <a href="#contact" class="w-full py-3 rounded-lg border-2 border-outline-variant text-on-surface font-medium hover:border-primary-container hover:text-primary-container transition-colors mb-10 text-center block">Start Free</a>
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">1 Location</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">Basic Inventory</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">Standard Reporting</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-primary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">Email Support</span></li>
                </ul>
            </div>

            <!-- Professional (Highlighted) -->
            <div class="bg-primary-container rounded-[20px] p-10 flex flex-col relative transform md:-translate-y-4 shadow-[0_16px_48px_rgba(26,86,219,0.25)]" data-animate="fade-up" data-delay="100">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-secondary-container text-[#835500] text-xs font-bold px-4 py-1.5 rounded-full tracking-wider uppercase">Most Popular</div>
                <div class="mb-8">
                    <h3 class="font-headline font-bold text-xl text-white mb-2">Professional</h3>
                    <p class="text-sm text-primary-fixed-dim">For scaling multi-location businesses.</p>
                </div>
                <div class="mb-10">
                    <div class="flex items-baseline gap-1">
                        <span class="text-2xl font-medium text-primary-fixed-dim">$</span>
                        <span class="font-mono text-5xl font-bold text-white tracking-tighter price-monthly">79</span>
                        <span class="font-mono text-5xl font-bold text-white tracking-tighter price-annual" style="display:none">63</span>
                        <span class="text-sm text-primary-fixed-dim">/mo</span>
                    </div>
                    <p class="text-xs text-primary-fixed-dim mt-2 font-medium">2.4% + 15¢ per transaction</p>
                </div>
                <a href="#contact" class="w-full py-3 rounded-lg bg-white text-primary-container font-bold hover:bg-surface-container-low transition-colors mb-10 text-center block shadow-sm">Upgrade to Pro</a>
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-white">Up to 5 Locations</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-white">Advanced Inventory &amp; Routing</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-white">Real-time Analytics API</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-white">24/7 Priority Support</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-secondary-container text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-white">Custom Hardware Integration</span></li>
                </ul>
            </div>

            <!-- Enterprise -->
            <div class="bg-surface-container-lowest rounded-[20px] p-10 border border-[#EDECE8]/40 flex flex-col hover:shadow-[0_12px_32px_rgba(26,86,219,0.12)] hover:-translate-y-1 transition-all duration-300" data-animate="fade-up" data-delay="200">
                <div class="mb-8">
                    <h3 class="font-headline font-bold text-xl text-on-surface mb-2">Enterprise</h3>
                    <p class="text-sm text-outline">Bespoke infrastructure for global operations.</p>
                </div>
                <div class="mb-10">
                    <span class="font-mono text-5xl font-bold text-on-surface tracking-tighter">Custom</span>
                    <p class="text-xs text-outline mt-2 font-medium">Volume-based interchange rates</p>
                </div>
                <a href="#contact" class="w-full py-3 rounded-lg bg-surface-container-high text-on-surface font-medium hover:bg-surface-variant transition-colors mb-10 flex items-center justify-center gap-2 block">
                    Contact Sales <span class="material-symbols-outlined text-sm">arrow_forward</span>
                </a>
                <ul class="space-y-4 flex-grow">
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-outline text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">Unlimited Locations</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-outline text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">Dedicated Account Manager</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-outline text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">SLA Guarantees</span></li>
                    <li class="flex items-start gap-3"><span class="material-symbols-outlined text-outline text-xl" style="font-variation-settings:'FILL' 1">check_circle</span><span class="text-sm text-on-surface-variant">White-label Options</span></li>
                </ul>
            </div>
        </div>

        <!-- Trust Logos -->
        <div class="mt-24 text-center" data-animate="fade-up">
            <p class="text-xs font-bold text-outline uppercase tracking-widest mb-8">Trusted by industry leaders</p>
            <div class="flex flex-wrap justify-center gap-12 opacity-60 grayscale hover:grayscale-0 transition-all duration-500">
                <span class="font-headline font-bold text-xl text-outline">Vanguard</span>
                <span class="font-display italic text-2xl text-outline">Aura</span>
                <span class="font-headline font-extrabold text-xl text-outline tracking-tight">NEXUS</span>
                <span class="font-mono font-medium text-xl text-outline">KINETIC</span>
                <span class="font-headline font-medium text-xl text-outline">Lumina</span>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     CONTACT SECTION — SCRUM-37 (Contact Concept 2)
     ============================================ -->
<section id="contact" class="py-24 px-6 md:px-12 relative overflow-hidden bg-surface-container-lowest" aria-label="Contact section">
    <!-- Decorative Blobs -->
    <div class="absolute top-[-20%] left-[-10%] w-[50%] h-[60%] bg-primary-fixed-dim/20 rounded-full blur-[120px] pointer-events-none"></div>
    <div class="absolute bottom-[-20%] right-[-10%] w-[40%] h-[50%] bg-secondary-fixed/20 rounded-full blur-[100px] pointer-events-none"></div>

    <div class="w-full max-w-7xl mx-auto relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-16 xl:gap-24 items-start">

        <!-- Left: Editorial Copy -->
        <div class="flex flex-col gap-10 mt-8" data-animate="fade-up">
            <div class="space-y-4">
                <p class="font-headline font-bold text-primary-container tracking-widest uppercase text-sm">Get in Touch</p>
                <h2 class="font-headline text-5xl md:text-6xl font-extrabold text-on-surface leading-tight tracking-tight">
                    Let's accelerate your <span class="italic font-light text-primary-container">growth.</span>
                </h2>
                <p class="text-lg text-on-surface-variant leading-relaxed max-w-md mt-4">
                    Speak with our team to see how QuickPOS can transform your retail operations with precision and speed.
                </p>
            </div>
            <div class="flex flex-col gap-8 mt-4">
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary-container group-hover:bg-primary-container group-hover:text-on-primary transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-[24px]">chat_bubble</span>
                    </div>
                    <div>
                        <h3 class="font-headline font-semibold text-on-surface text-lg">Sales Inquiries</h3>
                        <p class="text-on-surface-variant text-sm mt-1">Chat with our enterprise experts.</p>
                        <a href="mailto:sales@quickpos.com" class="text-primary-container font-medium text-sm mt-1 inline-block hover:underline">sales@quickpos.com</a>
                    </div>
                </div>
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary-container group-hover:bg-primary-container group-hover:text-on-primary transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-[24px]">headset_mic</span>
                    </div>
                    <div>
                        <h3 class="font-headline font-semibold text-on-surface text-lg">Technical Support</h3>
                        <p class="text-on-surface-variant text-sm mt-1">24/7 priority support for active clients.</p>
                        <a href="#" class="text-primary-container font-medium text-sm mt-1 inline-block hover:underline">Visit Support Portal</a>
                    </div>
                </div>
                <div class="flex items-start gap-5 group">
                    <div class="w-12 h-12 rounded-full bg-primary-fixed flex items-center justify-center text-primary-container group-hover:bg-primary-container group-hover:text-on-primary transition-colors duration-300 shadow-sm">
                        <span class="material-symbols-outlined text-[24px]">location_on</span>
                    </div>
                    <div>
                        <h3 class="font-headline font-semibold text-on-surface text-lg">Global Headquarters</h3>
                        <p class="text-on-surface-variant text-sm mt-1 leading-relaxed">100 Innovation Drive<br>Suite 400<br>San Francisco, CA 94103</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right: PHP Form (SCRUM-37 PHP rewire) -->
        <div class="relative w-full" data-animate="fade-up" data-delay="100">
            <div class="absolute inset-0 bg-gradient-to-tr from-primary-fixed-dim/40 to-surface-container-lowest blur-2xl rounded-3xl z-0 transform translate-y-4"></div>
            <div class="relative z-10 bg-surface rounded-[24px] p-8 md:p-10 shadow-[0_8px_32px_rgba(26,86,219,0.06)] border border-surface-variant/40 hover:shadow-[0_12px_48px_rgba(26,86,219,0.12)] hover:border-primary-container/20 transition-all duration-500">

                <?php
                // Display validation errors if redirected back from contact.php
                $errors   = isset($_GET['errors'])   ? json_decode(base64_decode($_GET['errors']), true)  : [];
                $old      = isset($_GET['old'])      ? json_decode(base64_decode($_GET['old']), true)     : [];
                $hasError = function(string $field) use ($errors): bool { return !empty($errors[$field]); };
                $val      = function(string $field) use ($old): string   { return htmlspecialchars($old[$field] ?? '', ENT_QUOTES, 'UTF-8'); };
                ?>

                <?php if (!empty($errors)): ?>
                <div class="mb-6 p-4 rounded-xl bg-error-container border border-error/20" role="alert">
                    <p class="text-sm font-medium text-error">Please fix the errors below and try again.</p>
                </div>
                <?php endif; ?>

                <form method="POST" action="contact.php" id="contactForm" novalidate>
                    <div class="flex flex-col gap-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-on-surface" for="firstName">First Name</label>
                                <input id="firstName" name="firstName" type="text" placeholder="Jane"
                                    value="<?= $val('firstName') ?>"
                                    class="form-input w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 text-on-surface shadow-sm <?= $hasError('firstName') ? 'border-error' : '' ?>"
                                    <?= $hasError('firstName') ? 'aria-describedby="firstNameErr" aria-invalid="true"' : '' ?>>
                                <?php if ($hasError('firstName')): ?>
                                <p id="firstNameErr" class="text-xs text-error mt-1"><?= htmlspecialchars($errors['firstName'], ENT_QUOTES, 'UTF-8') ?></p>
                                <?php endif; ?>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-sm font-semibold text-on-surface" for="lastName">Last Name</label>
                                <input id="lastName" name="lastName" type="text" placeholder="Doe"
                                    value="<?= $val('lastName') ?>"
                                    class="form-input w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 text-on-surface shadow-sm <?= $hasError('lastName') ? 'border-error' : '' ?>"
                                    <?= $hasError('lastName') ? 'aria-describedby="lastNameErr" aria-invalid="true"' : '' ?>>
                                <?php if ($hasError('lastName')): ?>
                                <p id="lastNameErr" class="text-xs text-error mt-1"><?= htmlspecialchars($errors['lastName'], ENT_QUOTES, 'UTF-8') ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-on-surface" for="email">Work Email</label>
                            <input id="email" name="email" type="email" placeholder="jane@company.com"
                                value="<?= $val('email') ?>"
                                class="form-input w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 text-on-surface shadow-sm <?= $hasError('email') ? 'border-error' : '' ?>"
                                <?= $hasError('email') ? 'aria-describedby="emailErr" aria-invalid="true"' : '' ?>>
                            <?php if ($hasError('email')): ?>
                            <p id="emailErr" class="text-xs text-error mt-1"><?= htmlspecialchars($errors['email'], ENT_QUOTES, 'UTF-8') ?></p>
                            <?php endif; ?>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-on-surface" for="companySize">Company Size</label>
                            <div class="relative">
                                <select id="companySize" name="companySize"
                                    class="form-input w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 text-on-surface appearance-none shadow-sm <?= $hasError('companySize') ? 'border-error' : '' ?>">
                                    <option value="" disabled <?= empty($val('companySize')) ? 'selected' : '' ?>>Select size...</option>
                                    <option value="1-49"  <?= $val('companySize')==='1-49'  ? 'selected' : '' ?>>1–49 locations</option>
                                    <option value="50-249" <?= $val('companySize')==='50-249' ? 'selected' : '' ?>>50–249 locations</option>
                                    <option value="250+"  <?= $val('companySize')==='250+'  ? 'selected' : '' ?>>250+ locations</option>
                                </select>
                                <span class="material-symbols-outlined absolute right-4 top-1/2 transform -translate-y-1/2 text-on-surface-variant pointer-events-none">expand_more</span>
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-sm font-semibold text-on-surface" for="message">How can we help?</label>
                            <textarea id="message" name="message" rows="4"
                                placeholder="Tell us about your current POS setup and goals..."
                                class="form-textarea w-full bg-surface-container-lowest border border-outline-variant rounded-lg px-4 py-3 text-on-surface shadow-sm resize-none <?= $hasError('message') ? 'border-error' : '' ?>"
                                <?= $hasError('message') ? 'aria-describedby="messageErr" aria-invalid="true"' : '' ?>><?= $val('message') ?></textarea>
                            <?php if ($hasError('message')): ?>
                            <p id="messageErr" class="text-xs text-error mt-1"><?= htmlspecialchars($errors['message'], ENT_QUOTES, 'UTF-8') ?></p>
                            <?php endif; ?>
                        </div>
                        <button id="submitBtn" type="submit"
                            class="w-full text-on-primary py-4 rounded-xl font-bold text-base shadow-[0_4px_16px_rgba(26,86,219,0.25)] hover:shadow-[0_6px_24px_rgba(26,86,219,0.35)] hover:-translate-y-0.5 transition-all duration-300 mt-2"
                            style="background:linear-gradient(to right,#1A56DB,#003fb1)">
                            Send Message
                        </button>
                        <p class="text-xs text-on-surface-variant text-center mt-2">
                            By submitting, you agree to our <a href="#" class="text-primary-container hover:underline">Privacy Policy</a>.
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ============================================
     FOOTER — SCRUM-38 (Footer Concept 2: Dark 4-column)
     ============================================ -->
<footer class="bg-[#0F1117] relative overflow-hidden text-white/90 font-body py-16 border-t border-white/5 w-full" aria-label="Site footer">
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-[#161B2A] to-transparent pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-8 w-full relative z-10">

        <!-- Main Grid -->
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
            <!-- Brand -->
            <div class="md:col-span-4 flex flex-col items-start">
                <div class="flex items-center gap-2 mb-6">
                    <span class="material-symbols-outlined text-white text-3xl">bolt</span>
                    <span class="text-2xl font-bold tracking-tighter text-white font-headline">QuickPOS</span>
                </div>
                <p class="text-white/55 text-base leading-relaxed mb-8 max-w-sm">
                    The fastest way to run your retail business — from checkout to close.
                </p>
                <div class="flex gap-3">
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#1A56DB] transition-colors duration-300 group" aria-label="Website">
                        <span class="material-symbols-outlined text-[18px] text-white/80 group-hover:text-white">language</span>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#1A56DB] transition-colors duration-300 group" aria-label="LinkedIn">
                        <span class="material-symbols-outlined text-[18px] text-white/80 group-hover:text-white">work</span>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#1A56DB] transition-colors duration-300 group" aria-label="Instagram">
                        <span class="material-symbols-outlined text-[18px] text-white/80 group-hover:text-white">photo_camera</span>
                    </a>
                    <a href="#" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#1A56DB] transition-colors duration-300 group" aria-label="YouTube">
                        <span class="material-symbols-outlined text-[18px] text-white/80 group-hover:text-white">play_arrow</span>
                    </a>
                </div>
            </div>
            <!-- Product -->
            <div class="md:col-span-2 md:col-start-6 flex flex-col gap-5">
                <h4 class="text-[12px] font-medium tracking-wider text-white/40 uppercase">PRODUCT</h4>
                <nav>
                    <a href="#features" class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Features</a>
                    <a href="#pricing"  class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Pricing</a>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Integrations</a>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Changelog</a>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block">Roadmap</a>
                </nav>
            </div>
            <!-- Company -->
            <div class="md:col-span-2 flex flex-col gap-5">
                <h4 class="text-[12px] font-medium tracking-wider text-white/40 uppercase">COMPANY</h4>
                <nav>
                    <a href="#" class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">About</a>
                    <a href="#" class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Blog</a>
                    <a href="#" class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Careers</a>
                    <a href="#" class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Press</a>
                    <a href="#" class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block">Partners</a>
                </nav>
            </div>
            <!-- Support -->
            <div class="md:col-span-2 flex flex-col gap-5">
                <h4 class="text-[12px] font-medium tracking-wider text-white/40 uppercase">SUPPORT</h4>
                <nav>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Help Center</a>
                    <a href="#contact"  class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Contact Us</a>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">System Status</a>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block mb-3">Privacy Policy</a>
                    <a href="#"         class="text-white/70 hover:text-[#1A56DB] transition-colors text-sm block">Terms of Service</a>
                </nav>
            </div>
        </div>

        <!-- Divider -->
        <div class="w-full h-[1px] bg-white/10 mb-8"></div>

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-[13px] text-white/40">
                &copy; <?= date('Y') ?> QuickPOS. All rights reserved.
            </p>
            <div class="flex items-center gap-2">
                <div class="w-9 h-6 rounded bg-white/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[16px] text-white/60">credit_card</span>
                </div>
                <div class="w-9 h-6 rounded bg-white/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[16px] text-white/60">account_balance_wallet</span>
                </div>
                <div class="w-9 h-6 rounded bg-white/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[16px] text-white/60">payments</span>
                </div>
                <div class="w-9 h-6 rounded bg-white/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-[16px] text-white/60">currency_exchange</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="js/main.js"></script>
</body>
</html>
