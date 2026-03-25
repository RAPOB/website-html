# reubenobrien.com

Personal website. PHP, HTML, CSS. No frameworks.

## Stack

- PHP for server-side rendering (just the copyright year and adventures image scan)
- Single-file CSS with custom properties for theming
- Dark/light mode via `prefers-color-scheme`

## Local dev

Requires PHP CLI. Run from the `website-html/` directory:

```bash
php -S localhost:5050 router.php
```

The `router.php` handles clean URLs (`/adventures`, `/conferences`) for local dev. On the live server this is handled by cPanel/.htaccess.

## Deployment

Pushing to the connected GitHub repo triggers auto-deploy via `.cpanel.yml`, which rsyncs to `/home/reubenob/public_html`.

## File structure

```
website-html/
├── index.php           # Main page
├── adventures.php      # Adventures gallery (auto-loads from images/adventures/)
├── conferences.php     # Conferences page
├── projects.php        # Projects page
├── router.php          # Local dev URL router
├── robots.txt
├── sitemap.xml
└── images/
    ├── cover.jpeg              # Profile photo + favicon
    ├── adventures/             # Drop images here, named YY_MM_description.jpg
    ├── projects/
    │   ├── aerobuoy/
    │   ├── aquatri/
    │   ├── catamaran/
    │   └── fsae/
    └── conferences/
```

## Adding adventure photos

Drop images into `images/adventures/`. Name them `YY_MM_description.jpg` (e.g. `25_03_iros_hangzhou.jpg`) and the adventures page will pick them up and sort by date automatically.
