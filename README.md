Revelans IT — Static Site + WordPress Starter

Overview

- Static, visually rich marketing site ready for GitHub Pages.
- Matching WordPress theme starter (`wp-theme/revelansit/`) for a clean migration path later.

Local Preview

- Open `index.html` directly in your browser, or serve the folder:
  - Python: `python -m http.server 8080`
  - Node: `npx serve .`

Deploy to GitHub Pages

1. Push to a GitHub repo with the `main` branch.
2. Ensure Actions are enabled. The included workflow `.github/workflows/pages.yml` deploys on push to `main`.
3. In Settings → Pages, set Source to “GitHub Actions” (if prompted).
4. Optional: add `CNAME` file with your domain to enable a custom domain.

Branding

- Update text and palette in `assets/css/styles.css` under `:root`.
- Replace `assets/img/favicon.ico` with your favicon (optional).

WordPress Migration

The `wp-theme/revelansit` folder contains a minimal theme skeleton mirroring the static structure.

- Copy `wp-theme/revelansit` into `wp-content/themes/revelansit`.
- Activate “Revelans IT” theme in WP Admin.
- Create Pages: Home, Services, Portfolio, About, Contact. Assign “Home” as Homepage under Settings → Reading.
- Replace hardcoded hero/features content inside `front-page.php` with blocks or ACF fields as needed.

Where to Customize in WP

- `header.php`, `footer.php`: global layout, navigation, and footer.
- `functions.php`: enqueue styles, register menus.
- `front-page.php`: homepage hero and features.
- `page.php`: default page markup.

Notes

- Links are relative (e.g., `assets/...`, `about.html`) to work on GitHub Pages subpaths.
- Accessibility and performance are considered; tweak copy and images as you add content.

