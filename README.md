# reubenobrien.com

Personal website for Reuben O'Brien. PHP, HTML, CSS. No frameworks.

## Stack

- PHP for server-side rendering (copyright year + adventures image scan)
- Single-file CSS with custom properties for theming
- Dark background with Ruapehu mountain photo (`images/ruapehu.jpg`) as a fixed, gradient-overlaid background
- No dark/light mode toggle — dark only

## Design

- Single-column hero layout with profile photo (`images/me.jpeg`)
- Color palette: `--bg #2a1810`, `--card #4a0a41`, `--accent #FFB200`, `--accent-2 #EB5B00`, `--magenta #D91656`
- Nav: scroll anchors (Projects, Publications, About, Contact) separated by a `|` divider from actual sub-pages (Adventures, Conferences) which use a pill border style

## Pages

| File | URL | Notes |
|---|---|---|
| `index.php` | `/` | Hero, Projects, Publications, About, Affiliations, Contact |
| `adventures.php` | `/adventures` | Auto-loads images from `images/adventures/`, masonry gallery with lightbox |
| `conferences.php` | `/conferences` | Manually maintained list of research + industry events |
| `router.php` | — | Local dev only, maps clean URLs to .php files |

## Local dev

Requires PHP CLI. Run from the `website-html/` directory:

```bash
php -S localhost:5050 router.php
```

## Deployment

Push to `main` on GitHub → GitHub Action triggers → cPanel auto-deploys.

The Action calls two cPanel UAPI endpoints in sequence:
1. `POST /execute/VersionControl/update` with `repository_root=...&branch=main` — git pulls latest commits onto the server (**`branch=main` is required**, without it the call only updates repo settings and does nothing)
2. `POST /execute/VersionControlDeployment/create` with `repository_root=...` — runs `.cpanel.yml` tasks

`.cpanel.yml` copies PHP files and the entire `images/` folder to `/home/reubenob/public_html/`.

cPanel server: `zoe.whsl206.com:2083`, username: `reubenob`
GitHub secret: `CPANEL_API_TOKEN`
Repo path on server: `/home/reubenob/repositories/website-html`

## File structure

```
website-html/
├── index.php               # Main page
├── adventures.php          # Adventures gallery
├── conferences.php         # Conferences & events
├── router.php              # Local dev URL router
├── .cpanel.yml             # Deployment tasks (copies files to public_html)
├── .github/workflows/
│   └── deploy.yml          # GitHub Action: pull then deploy on push to main
├── .htaccess               # Clean URLs on live server (/adventures → adventures.php)
├── robots.txt
├── sitemap.xml
└── images/
    ├── me.jpeg                     # Profile photo (hero)
    ├── cover.jpeg                  # Favicon
    ├── ruapehu.jpg                 # Background (CC BY 2.0, Geoff McKay via Wikimedia)
    ├── adventures/                 # Drop images here — auto-loaded by adventures.php
    ├── projects/
    │   ├── aerobuoy/               # aerobuoy_team.jpg (featured card), aerobuoy_field.jpg
    │   ├── aquatri/                # trimaran_water.jpeg, speed_boat_rear.jpeg
    │   ├── fsae/                   # fsae_2018_race.jpeg, fsae_2018_display.jpeg, fsae_2019_*.jpeg
    │   └── acumino/                # megachips_japan.jpg, plug_and_play.jpeg (also used on conferences page)
    └── conferences/                # Event photos — referenced manually in conferences.php
```

## Adding adventure photos

Drop images into `images/adventures/`. Name them `YY_MM_description.jpg` (e.g. `25_03_iros_hangzhou.jpg`). The page picks them up automatically and sorts by date descending. Duplicate detection strips the date prefix to avoid showing the same image twice.

## Adding conference events

Edit `conferences.php` directly. Two sections: Research Conferences and Industry Events, each ordered newest first. Event photos go in `images/conferences/`. The layout is a two-column grid (text left, photo right); omit the `<img>` tag if no photo.

## Projects on the main page

Edit `index.php`. The AeroBuoy card is `.project-card.featured` (full width, image on top). All other cards are standard grid items. Project images go in `images/projects/<project>/`. The featured AeroBuoy image uses `object-position: center 30%` to avoid cropping heads.

## Publications

Edit the `#publications` section in `index.php`. Rows with a photo use class `pub-row has-photo` (3-column grid: year / text / photo). Rows without use `pub-row` (2-column). Photos hide on mobile via `@media (max-width: 640px)`.

## Known content details

- AeroBuoy paper link: ResearchGate (not yet on Google Scholar as of Mar 2026)
- IROS 2025: Hangzhou, October 2025, Best Paper Award
- IROS 2024: Abu Dhabi, October 2024, Best Application Paper Finalist
- SSRR 2022: Sevilla, November 2022
- Startup Autobahn Expo 11: Stuttgart (DXC Technology), 2025 — first cohort
- Startup Autobahn Expo 12: Stuttgart, 2025 — Innovation Award (Acumino x Schaeffler x DXC)
- NVIDIA GTC: San Jose, March 2025
- GITEX Europe: Berlin, May 21–23 2025
- VivaTech: Paris, June 11–14 2025
- Humanoid Olympiad: Olympia, Greece, August 29–September 2 2025
