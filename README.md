# QuickPOS Landing Page

A professional, pixel-perfect, and fully responsive landing page for **QuickPOS** — a modern Point of Sale (POS) system.

Built as part of the **Software Project Management (SPM)** course assignment.

---

## 🚀 Tech Stack

| Layer | Technology |
|-------|------------|
| Backend | PHP 8+ |
| Frontend | HTML5, CSS3 (Vanilla), JavaScript (Vanilla) |
| Dev Server | PHP built-in server |

---

## ⚙️ Local Development Setup

### Prerequisites

- PHP 8.0 or higher
- Git

### Steps

1. **Clone the repository:**
   ```bash
   git clone https://github.com/taqi-m/sell-sphere.git
   cd sell-sphere
   ```

2. **Check out the develop branch:**
   ```bash
   git checkout develop
   ```

3. **Start the PHP development server:**
   ```bash
   php -S localhost:8000
   ```

4. **Open your browser and navigate to:**
   ```
   http://localhost:8000
   ```

5. **To test the contact form** (requires PHP to handle POST requests):
   - Fill out the form in the Contact Us section
   - Submit — you will be redirected to `thank-you.html`

---

## 📁 Project Structure

```
sell-sphere/
├── index.php              ← Main landing page (all sections)
├── contact.php            ← PHP form handler (POST, validate, redirect)
├── thank-you.html         ← Post-form success page
├── css/
│   └── style.css          ← All styles (responsive, animations)
├── js/
│   └── main.js            ← Smooth scroll, client-side validation
├── assets/
│   └── images/            ← POS mockup image, icons
└── README.md
```

---

## 🌿 Branching Strategy (GitFlow)

| Branch | Purpose |
|--------|---------|
| `main` | Stable, production-ready code (sprint releases only) |
| `develop` | Integration branch — all features merge here |
| `feature/SCRUM-XX-*` | One branch per Jira ticket |
| `bugfix/SCRUM-XX-*` | Bug fix branches |

**Rules:**
- ❌ No direct commits to `main` or `develop`
- ✅ All changes via reviewed Pull Requests
- ✅ Self-review required before merge

---

## 📝 Commit Convention

Every commit must reference a Jira ticket:

```
[SCRUM-XX] Short description of change
```

**Examples:**
```
[SCRUM-20] Implement sticky navigation bar
[SCRUM-21] Build hero section layout
[SCRUM-24] Add contact form PHP handler
```

---

## 📋 Jira Project

- **Board**: [SellSphere Jira Backlog](https://sellsphere.atlassian.net/jira/software/projects/SCRUM/boards/1/backlog)
- **Project Key**: `SCRUM`

---

## 📄 License

Academic project — Software Project Management Course, 2026.
