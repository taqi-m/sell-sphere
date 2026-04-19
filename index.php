<?php
/**
 * QuickPOS Landing Page — index.php
 * Sprint 1: Navigation, Hero, Features  ✅
 * Sprint 2: Pricing, Contact, Footer    ✅
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,300;0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;0,14..32,900;1,14..32,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- ========== NAVIGATION — SCRUM-20 ========== -->
    <nav class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
        <div class="nav-container">
            <a href="#" class="nav-logo" aria-label="QuickPOS Home">
                <svg class="logo-svg" width="30" height="30" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                    <path d="M13 2L3 14H12L11 22L21 10H12L13 2Z" fill="url(#logoGrad)"/>
                    <defs>
                        <linearGradient id="logoGrad" x1="3" y1="2" x2="21" y2="22" gradientUnits="userSpaceOnUse">
                            <stop offset="0%" stop-color="#6366f1"/>
                            <stop offset="100%" stop-color="#22d3ee"/>
                        </linearGradient>
                    </defs>
                </svg>
                <span class="logo-text">QuickPOS</span>
            </a>
            <ul class="nav-links" id="navLinks" role="list">
                <li><a href="#features" class="nav-link">Features</a></li>
                <li><a href="#pricing" class="nav-link">Pricing</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="nav-actions">
                <a href="#contact" class="btn btn-primary" id="signUpBtn">Sign Up Free</a>
            </div>
            <button class="hamburger" id="hamburger" aria-label="Toggle navigation menu" aria-expanded="false" aria-controls="navLinks">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
        </div>
    </nav>

    <!-- ========== HERO SECTION — SCRUM-21 ========== -->
    <section class="hero" id="hero" aria-label="Hero section">
        <div class="hero-bg-grid" aria-hidden="true"></div>
        <div class="hero-glow hero-glow-left" aria-hidden="true"></div>
        <div class="hero-glow hero-glow-right" aria-hidden="true"></div>
        <div class="container">
            <div class="hero-grid">
                <div class="hero-content" data-animate="fade-up">
                    <div class="hero-badge">
                        <span class="badge-dot" aria-hidden="true"></span>
                        Now in Beta &mdash; Join 10,000+ businesses
                    </div>
                    <h1 class="hero-title">
                        The Last POS System<br>
                        <span class="gradient-text">You'll Ever Need</span>
                    </h1>
                    <p class="hero-subtitle">
                        Streamline your sales, manage inventory in real-time, and grow your business with QuickPOS &mdash; the all-in-one point of sale platform built for modern retailers.
                    </p>
                    <div class="hero-actions">
                        <a href="#contact" class="btn btn-primary btn-lg" id="heroCta">
                            Get Started for Free
                            <svg class="btn-arrow" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="#features" class="btn btn-ghost btn-lg">See Features</a>
                    </div>
                    <div class="hero-stats" role="list">
                        <div class="stat-item" role="listitem"><strong>10K+</strong><span>Businesses</span></div>
                        <div class="stat-divider" aria-hidden="true"></div>
                        <div class="stat-item" role="listitem"><strong>99.9%</strong><span>Uptime SLA</span></div>
                        <div class="stat-divider" aria-hidden="true"></div>
                        <div class="stat-item" role="listitem"><strong>4.9&#9733;</strong><span>Avg. Rating</span></div>
                    </div>
                </div>
                <div class="hero-visual" data-animate="fade-left" aria-hidden="true">
                    <div class="pos-mockup-wrapper">
                        <div class="pos-glow"></div>
                        <div class="pos-mockup">
                            <div class="pos-header-bar">
                                <div class="pos-dot red"></div>
                                <div class="pos-dot yellow"></div>
                                <div class="pos-dot green"></div>
                                <span class="pos-title">QuickPOS &mdash; Dashboard</span>
                            </div>
                            <div class="pos-body">
                                <div class="pos-stat-row">
                                    <div class="pos-stat-card">
                                        <span class="pos-stat-label">Today's Revenue</span>
                                        <span class="pos-stat-value">$12,847</span>
                                        <span class="pos-stat-trend up">&#8593; 24%</span>
                                    </div>
                                    <div class="pos-stat-card">
                                        <span class="pos-stat-label">Orders</span>
                                        <span class="pos-stat-value">342</span>
                                        <span class="pos-stat-trend up">&#8593; 12%</span>
                                    </div>
                                </div>
                                <div class="pos-chart">
                                    <div class="chart-label">Weekly Revenue</div>
                                    <div class="chart-bars">
                                        <div class="chart-bar" style="height:38%"></div>
                                        <div class="chart-bar" style="height:62%"></div>
                                        <div class="chart-bar" style="height:48%"></div>
                                        <div class="chart-bar" style="height:82%"></div>
                                        <div class="chart-bar" style="height:58%"></div>
                                        <div class="chart-bar" style="height:91%"></div>
                                        <div class="chart-bar active" style="height:74%"></div>
                                    </div>
                                    <div class="chart-days">
                                        <span>Mon</span><span>Tue</span><span>Wed</span>
                                        <span>Thu</span><span>Fri</span><span>Sat</span><span>Sun</span>
                                    </div>
                                </div>
                                <div class="pos-items">
                                    <div class="pos-item-header">Recent Transactions</div>
                                    <div class="pos-item">
                                        <span class="item-dot"></span><span class="item-name">Espresso Blend</span><span class="item-price">$4.50</span>
                                    </div>
                                    <div class="pos-item">
                                        <span class="item-dot"></span><span class="item-name">Butter Croissant</span><span class="item-price">$3.25</span>
                                    </div>
                                    <div class="pos-item">
                                        <span class="item-dot"></span><span class="item-name">Avocado Toast</span><span class="item-price">$9.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="floating-badge badge-1">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
                            Payment Processed
                        </div>
                        <div class="floating-badge badge-2">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#f59e0b" stroke-width="2"><path d="M10.29 3.86L1.82 18a2 2 0 001.71 3h16.94a2 2 0 001.71-3L13.71 3.86a2 2 0 00-3.42 0z"/><line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/></svg>
                            Stock Alert: Low
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== FEATURES SECTION — SCRUM-22 ========== -->
    <section class="features" id="features" aria-label="Features section">
        <div class="container">
            <div class="section-header" data-animate="fade-up">
                <span class="section-tag">Why QuickPOS?</span>
                <h2 class="section-title">Everything You Need to<br>Run Your Business</h2>
                <p class="section-subtitle">Powerful tools designed for retailers of all sizes &mdash; from boutique shops to enterprise chains.</p>
            </div>
            <div class="features-grid">
                <article class="feature-card" data-animate="fade-up" data-delay="0">
                    <div class="feature-icon-wrap">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Inventory Management</h3>
                    <p class="feature-desc">Track every item in real-time across all your locations. Set reorder alerts, manage suppliers, and automate stock updates so you never lose a sale to an empty shelf.</p>
                    <div class="feature-link"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                </article>
                <article class="feature-card" data-animate="fade-up" data-delay="100">
                    <div class="feature-icon-wrap">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Sales Analytics</h3>
                    <p class="feature-desc">Unlock insights from every transaction. Monitor revenue trends, discover top-selling items, and understand customer behavior with beautiful real-time dashboards.</p>
                    <div class="feature-link"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                </article>
                <article class="feature-card" data-animate="fade-up" data-delay="200">
                    <div class="feature-icon-wrap">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Easy Integration</h3>
                    <p class="feature-desc">Connect with your favorite tools in minutes. Works seamlessly with Shopify, WooCommerce, QuickBooks, Stripe, PayPal, and 50+ other platforms you already use.</p>
                    <div class="feature-link"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                </article>
                <article class="feature-card" data-animate="fade-up" data-delay="300">
                    <div class="feature-icon-wrap">
                        <svg class="feature-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                        </svg>
                    </div>
                    <h3 class="feature-title">Real-Time Reporting</h3>
                    <p class="feature-desc">Get instant reports on sales, inventory, and staff performance. Schedule automated daily summaries delivered straight to your inbox &mdash; always stay informed.</p>
                    <div class="feature-link"><span>Learn more</span><svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14M12 5l7 7-7 7"/></svg></div>
                </article>
            </div>
        </div>
    </section>

    <!-- ========== PRICING SECTION — SCRUM-23 ========== -->
    <section class="pricing" id="pricing" aria-label="Pricing section">
        <div class="container">
            <div class="section-header" data-animate="fade-up">
                <span class="section-tag">Pricing</span>
                <h2 class="section-title">Simple, Transparent Pricing</h2>
                <p class="section-subtitle">No hidden fees. No long-term contracts.<br>Change plans or cancel anytime.</p>
            </div>

            <div class="pricing-toggle" data-animate="fade-up">
                <span class="toggle-label toggle-label--active" id="toggleMonthly">Monthly</span>
                <button class="toggle-switch" id="billingToggle" role="switch" aria-checked="false" aria-label="Toggle annual billing">
                    <span class="toggle-thumb"></span>
                </button>
                <span class="toggle-label" id="toggleAnnual">Annual <span class="toggle-save">Save 20%</span></span>
            </div>

            <div class="pricing-grid">

                <!-- Basic Plan -->
                <div class="pricing-card" data-animate="fade-up" data-delay="0">
                    <div class="plan-header">
                        <span class="plan-name">Basic</span>
                        <div class="plan-price-wrap">
                            <span class="price-currency">$</span>
                            <span class="price-amount" data-monthly="29" data-annual="23">29</span>
                            <span class="price-period">/mo</span>
                        </div>
                        <p class="plan-desc">Perfect for small shops and startups getting started with POS.</p>
                    </div>
                    <ul class="plan-features">
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Up to 5 team members</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> 1,000 products</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Standard analytics</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Email support</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> 1 location</li>
                        <li class="feat-no"><svg class="feat-icon-no" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> Multi-location</li>
                        <li class="feat-no"><svg class="feat-icon-no" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg> API access</li>
                    </ul>
                    <a href="#contact" class="btn btn-ghost btn-full">Get Started</a>
                </div>

                <!-- Pro Plan — FEATURED -->
                <div class="pricing-card pricing-card--featured" data-animate="fade-up" data-delay="100">
                    <div class="popular-badge">&#11088; Most Popular</div>
                    <div class="plan-header">
                        <span class="plan-name">Pro</span>
                        <div class="plan-price-wrap">
                            <span class="price-currency">$</span>
                            <span class="price-amount" data-monthly="79" data-annual="63">79</span>
                            <span class="price-period">/mo</span>
                        </div>
                        <p class="plan-desc">The complete solution for growing businesses and retail chains.</p>
                    </div>
                    <ul class="plan-features">
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Up to 25 team members</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Unlimited products</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Advanced analytics</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Priority support 24/7</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Up to 5 locations</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Multi-location support</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Advanced reporting</li>
                    </ul>
                    <a href="#contact" class="btn btn-primary btn-full">Start Free Trial</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="pricing-card" data-animate="fade-up" data-delay="200">
                    <div class="plan-header">
                        <span class="plan-name">Enterprise</span>
                        <div class="plan-price-wrap">
                            <span class="price-amount price-custom">Custom</span>
                        </div>
                        <p class="plan-desc">Bespoke solutions for large enterprises and franchise networks.</p>
                    </div>
                    <ul class="plan-features">
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Unlimited team members</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Unlimited products</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Custom dashboards</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Dedicated account manager</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Unlimited locations</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> White-label reporting</li>
                        <li class="feat-yes"><svg class="feat-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg> Full API access</li>
                    </ul>
                    <a href="#contact" class="btn btn-ghost btn-full">Contact Sales</a>
                </div>

            </div><!-- /.pricing-grid -->

            <p class="pricing-trust" data-animate="fade-up">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
                All plans include SSL encryption, 99.9% uptime SLA, and automatic daily backups.
            </p>
        </div>
    </section>

    <!-- Contact Us Form — SCRUM-24 (coming next branch) -->
    <!-- Footer          — SCRUM-26 (coming next branch) -->

    <script src="js/main.js"></script>
</body>
</html>
