<?php $year = date('Y'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Reuben O'Brien - Robotics Engineer & PhD Student</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Robotics Engineer at Acumino and PhD Student at University of Glasgow. Research in autonomous robotics, waterjet-powered boats, and dexterous manipulation.">
  <link rel="canonical" href="https://reubenobrien.com/">
  <link rel="icon" type="image/jpeg" href="images/cover.jpeg?v=1">
  <link rel="shortcut icon" href="images/cover.jpeg?v=1">
  <link rel="apple-touch-icon" href="images/cover.jpeg?v=1">
  <link rel="apple-touch-icon" sizes="180x180" href="images/cover.jpeg?v=1">

  <meta property="og:title" content="Reuben O'Brien - Robotics Engineer & PhD Student">
  <meta property="og:description" content="Robotics Engineer at Acumino and PhD Student at University of Glasgow.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://reubenobrien.com/">
  <meta property="og:image" content="https://reubenobrien.com/images/cover.jpeg">
  <meta property="og:site_name" content="Reuben O'Brien">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Reuben O'Brien - Robotics Engineer & PhD Student">
  <meta name="twitter:description" content="Robotics Engineer at Acumino and PhD Student at University of Glasgow.">
  <meta name="twitter:image" content="https://reubenobrien.com/images/cover.jpeg">
  <meta name="theme-color" content="#640D5F">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Reuben O'Brien",
    "jobTitle": "Robotics Development Engineer",
    "affiliation": [
      { "@type": "Organization", "name": "Acumino", "url": "https://acumino.ai/" },
      { "@type": "Organization", "name": "University of Glasgow", "url": "https://www.gla.ac.uk/" }
    ],
    "alumniOf": { "@type": "Organization", "name": "University of Auckland", "url": "https://www.auckland.ac.nz/" },
    "url": "https://reubenobrien.com/",
    "image": "https://reubenobrien.com/images/cover.jpeg",
    "sameAs": [
      "https://www.linkedin.com/in/reubenapob",
      "https://github.com/rapob",
      "https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en",
      "https://www.researchgate.net/profile/Reuben-Obrien"
    ]
  }
  </script>

  <style>
  :root {
    --bg:       #2a1810;
    --panel:    #3d1a38;
    --card:     #4a0a41;
    --text:     #FFFFFF;
    --muted:    #d9a8c7;
    --border:   #7a2d6a;
    --accent:   #FFB200;
    --accent-2: #EB5B00;
    --magenta:  #D91656;
    --purple:   #640D5F;
  }
  @media (prefers-color-scheme: light) {
    :root {
      --bg:     #fdf8fc;
      --panel:  #fff0fb;
      --card:   #FFFFFF;
      --text:   #2a0a28;
      --muted:  #8b4a7a;
      --border: #e0c0d8;
      --accent: #D91656;
      --accent-2: #EB5B00;
      --magenta: #D91656;
      --purple: #640D5F;
    }
  }

  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }
  html, body { margin: 0; padding: 0; }
  body {
    background-color: #1a0d1a;
    background-image:
      linear-gradient(135deg, rgba(42,24,16,0.82) 0%, rgba(61,37,24,0.78) 25%, rgba(74,26,46,0.80) 50%, rgba(45,27,105,0.78) 75%, rgba(42,24,16,0.82) 100%),
      url('images/ruapehu.jpg');
    background-size: cover;
    background-position: center 40%;
    background-attachment: fixed;
    color: var(--text);
    font: 16px/1.65 system-ui, -apple-system, Segoe UI, sans-serif;
    min-height: 100vh;
  }
  a { color: var(--accent); text-decoration: none; }
  a:hover { text-decoration: underline; }

  .wrap { max-width: 860px; margin: 0 auto; padding: 0 24px 80px; }

  /* ── NAV ── */
  nav.site-nav {
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 0; border-bottom: 1px solid var(--border);
    margin-bottom: 0;
  }
  .brand { display: flex; align-items: center; gap: 10px; font-weight: 700; }
  .dot {
    width: 10px; height: 10px; border-radius: 50%;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    box-shadow: 0 0 14px var(--magenta);
  }
  .nav-links { display: flex; align-items: center; gap: 4px; }
  .nav-links a {
    margin-left: 16px; color: var(--muted); font-size: 15px;
    padding: 6px 0; border-bottom: 2px solid transparent;
  }
  .nav-links a:hover { color: var(--text); text-decoration: none; border-bottom-color: var(--accent); }
  .nav-sep { width: 1px; height: 16px; background: var(--border); margin: 0 8px; }
  .nav-links a.nav-page {
    margin-left: 0; padding: 5px 12px;
    border: 1px solid var(--border); border-radius: 20px;
    color: var(--text); font-size: 14px; border-bottom: 1px solid var(--border);
  }
  .nav-links a.nav-page:hover { border-color: var(--accent); color: var(--accent); text-decoration: none; }

  /* ── HERO ── */
  .hero { padding: 68px 0 60px; border-bottom: 1px solid var(--border); }
  .hero-meta { display: flex; align-items: center; gap: 10px; margin-bottom: 22px; }
  .status-dot {
    width: 8px; height: 8px; border-radius: 50%;
    background: #22c55e; box-shadow: 0 0 8px #22c55e;
    animation: pulse 2.4s ease-in-out infinite;
  }
  @keyframes pulse { 0%,100% { opacity: 1; } 50% { opacity: 0.35; } }
  .status-text { color: var(--muted); font-size: 14px; }
  .hero h1 {
    font-size: 56px; font-weight: 800; margin: 0 0 14px;
    letter-spacing: -2px; line-height: 1.05;
  }
  .hero h1 .punct { color: var(--magenta); }
  .hero-sub {
    font-size: 19px; color: var(--muted); margin: 0 0 30px;
    max-width: 560px; line-height: 1.55;
  }
  .hero-chips { display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 30px; }
  .chip {
    padding: 5px 13px; border-radius: 20px;
    border: 1px solid var(--border); background: rgba(255,255,255,0.04);
    font-size: 13px; color: var(--muted);
  }
  .chip.gold {
    border-color: rgba(255,178,0,0.45); color: var(--accent);
    background: rgba(255,178,0,0.08);
  }
  .hero-actions { display: flex; gap: 12px; flex-wrap: wrap; }
  .btn-primary {
    padding: 10px 22px; border-radius: 10px;
    background: linear-gradient(135deg, var(--accent), var(--accent-2));
    color: #000; font-weight: 700; font-size: 15px;
    border: none; cursor: pointer;
  }
  .btn-primary:hover { text-decoration: none; filter: brightness(1.1); }
  .btn-secondary {
    padding: 10px 22px; border-radius: 10px;
    border: 1px solid var(--border); background: rgba(255,255,255,0.04);
    color: var(--text); font-size: 15px;
  }
  .btn-secondary:hover { text-decoration: none; border-color: var(--accent); }

  /* ── SECTIONS ── */
  section { padding: 52px 0; border-bottom: 1px solid var(--border); }
  section:last-of-type { border-bottom: none; }
  .section-label {
    font-size: 11px; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.14em; color: var(--muted); margin-bottom: 28px;
  }

  /* ── HERO PHOTO ── */
  .hero-photo {
    width: 72px; height: 72px; border-radius: 50%;
    object-fit: cover; border: 2px solid var(--border);
    margin-bottom: 20px; display: block;
  }

  /* ── PROJECT GRID ── */
  .project-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
  .project-card {
    background: var(--card); border: 1px solid var(--border);
    border-radius: 14px; padding: 20px;
    transition: border-color 0.2s, transform 0.2s;
  }
  .project-card:hover { border-color: var(--accent); transform: translateY(-2px); }
  .project-card.featured {
    grid-column: span 2;
    background: linear-gradient(135deg, var(--card), #3a0a55);
    border-color: rgba(255,178,0,0.3);
    padding: 0; overflow: hidden;
  }
  .featured-inner {
    display: grid; grid-template-columns: 1fr auto;
    gap: 20px; align-items: center; padding: 20px;
  }
  .project-img {
    width: 100%; height: 180px; object-fit: cover;
    border-radius: 8px; margin-bottom: 14px;
    border: 1px solid var(--border); display: block;
  }
  .project-card.featured .project-img {
    height: 240px; border-radius: 0; margin-bottom: 0; border: none;
    border-bottom: 1px solid var(--border);
  }
  .project-tag {
    display: inline-block; font-size: 11px; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.1em;
    color: var(--accent); margin-bottom: 8px;
  }
  .project-card h3 { margin: 0 0 8px; font-size: 17px; }
  .project-card p { margin: 0; color: var(--muted); font-size: 14px; line-height: 1.5; }
  .project-card .item-link { display: inline-block; margin-top: 10px; font-size: 13px; }
  .award-badge {
    background: rgba(255,178,0,0.1); border: 1px solid rgba(255,178,0,0.35);
    border-radius: 10px; padding: 12px 16px; text-align: center; white-space: nowrap;
  }
  .award-badge .trophy { font-size: 24px; display: block; margin-bottom: 4px; }
  .award-badge span { font-size: 12px; color: var(--accent); font-weight: 700; }

  /* ── PUBLICATIONS ── */
  .pub-list { display: grid; }
  .pub-row {
    display: grid; grid-template-columns: 44px 1fr;
    gap: 20px; padding: 18px 0;
    border-bottom: 1px solid var(--border); align-items: start;
  }
  .pub-row.has-photo { grid-template-columns: 44px 1fr auto; }
  .pub-row:last-child { border-bottom: none; padding-bottom: 0; }
  .pub-year { color: var(--muted); font-size: 13px; font-weight: 600; padding-top: 2px; }
  .pub-title { font-size: 15px; line-height: 1.45; margin: 0 0 4px; }
  .pub-title a { color: var(--text); }
  .pub-venue { color: var(--muted); font-size: 13px; margin: 0; }
  .pub-photo {
    width: 130px; height: 86px; object-fit: cover;
    border-radius: 8px; border: 1px solid var(--border); flex-shrink: 0;
  }
  .pill {
    display: inline-block; border-radius: 4px;
    padding: 1px 8px; font-size: 11px; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.04em;
    margin-left: 8px; vertical-align: middle;
  }
  .pill-gold { background: rgba(255,178,0,0.15); color: var(--accent); }
  .pill-muted { background: rgba(255,255,255,0.06); color: var(--muted); }

  /* ── ABOUT ── */
  .about-text p { color: var(--muted); line-height: 1.75; margin: 0 0 16px; max-width: 680px; }
  .about-text p:last-child { margin-bottom: 0; }
  .about-text strong { color: var(--text); font-weight: 600; }

  /* ── AFFILIATIONS ── */
  .affil-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; }
  .affil-item {
    background: var(--card); border: 1px solid var(--border);
    border-radius: 12px; padding: 16px;
  }
  .affil-item h3 { margin: 0 0 4px; font-size: 15px; }
  .affil-item p { margin: 0; color: var(--muted); font-size: 13px; }

  /* ── SOCIAL ── */
  .social-row { display: flex; gap: 10px; flex-wrap: wrap; margin-top: 36px; }
  .social-chip {
    padding: 8px 16px; border-radius: 10px;
    border: 1px solid var(--border); background: rgba(255,255,255,0.03);
    font-size: 14px; color: var(--muted);
    display: flex; align-items: center; gap: 8px;
  }
  .social-chip:hover { border-color: var(--accent); color: var(--text); text-decoration: none; }

  /* ── CONTACT ── */
  .contact-text { color: var(--muted); font-size: 16px; }
  .contact-text a { color: var(--accent); }

  /* ── FOOTER ── */
  footer { padding: 32px 0 0; color: var(--muted); font-size: 13px; text-align: center; }

  /* ── MOBILE ── */
  @media (max-width: 640px) {
    .wrap { padding: 0 16px 60px; }
    .hero h1 { font-size: 38px; letter-spacing: -1px; }
    .hero-sub { font-size: 17px; }
    .project-grid { grid-template-columns: 1fr; }
    .project-card.featured { grid-column: span 1; }
    .featured-inner { grid-template-columns: 1fr; }
    .award-badge { display: none; }
    .pub-row.has-photo { grid-template-columns: 44px 1fr; }
    .pub-photo { display: none; }
    .affil-grid { grid-template-columns: 1fr; }
    .nav-links a { margin-left: 12px; font-size: 14px; }
  }
  </style>
</head>
<body>
<div class="wrap">

  <!-- NAV -->
  <nav class="site-nav">
    <div class="brand">
      <div class="dot" aria-hidden="true"></div>
      Reuben O'Brien
    </div>
    <div class="nav-links">
      <a href="#projects">Projects</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
      <div class="nav-sep" aria-hidden="true"></div>
      <a href="/adventures" class="nav-page">Adventures</a>
      <a href="/conferences" class="nav-page">Conferences</a>
    </div>
  </nav>

  <!-- HERO -->
  <div class="hero">
    <img src="images/me.jpeg" alt="Reuben O'Brien" class="hero-photo">
    <div class="hero-meta">
      <div class="status-dot"></div>
      <span class="status-text">PhD Student &middot; University of Glasgow &middot; Acumino</span>
    </div>
    <h1>Robotics<br>Engineer<span class="punct">.</span></h1>
    <p class="hero-sub">Building robots that learn from people. Boats, arms, gaze. Currently at <a href="https://acumino.ai/" target="_blank" rel="noopener">Acumino</a> and the <a href="https://www.gla.ac.uk/" target="_blank" rel="noopener">University of Glasgow</a>.</p>
    <div class="hero-chips">
      <span class="chip gold">IROS 2025 Best Paper</span>
      <span class="chip">ROS 2</span>
      <span class="chip">Imitation Learning</span>
      <span class="chip">Computer Vision</span>
      <span class="chip">C++</span>
      <span class="chip">PyTorch</span>
    </div>
    <div class="hero-actions">
      <a class="btn-primary" href="#publications">Publications</a>
      <a class="btn-secondary" href="/adventures">Adventures</a>
    </div>
  </div>

  <!-- PROJECTS -->
  <section id="projects">
    <div class="section-label">Projects</div>
    <div class="project-grid">
      <div class="project-card featured">
        <img src="images/projects/aerobuoy/aerobuoy_team.jpg" alt="AeroBuoy drone and buoy" class="project-img">
        <div class="featured-inner">
          <div>
            <div class="project-tag">IROS 2025</div>
            <h3>AeroBuoy</h3>
            <p>Drone-deployable, 3D printed autonomous buoy for environmental inspection in remote and hazardous river systems.</p>
            <a class="item-link" href="https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en" target="_blank" rel="noopener">Research Paper &rarr;</a>
          </div>
          <div class="award-badge">
            <span class="trophy">🏆</span>
            <span>Best Paper</span>
          </div>
        </div>
      </div>
      <div class="project-card">
        <img src="images/projects/aquatri/trimaran_water.jpeg" alt="Autonomous Trimaran" class="project-img">
        <div class="project-tag">IROS 2024</div>
        <h3>Autonomous Trimaran</h3>
        <p>3D printed, waterjet-powered autonomous boat for environmental inspection. Open-source. Muddy ponds, creeks, and the Manukau Harbour.</p>
        <a class="item-link" href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" target="_blank" rel="noopener">Research Paper &rarr;</a>
      </div>
      <div class="project-card">
        <img src="images/projects/aquatri/speed_boat_rear.jpeg" alt="Waterjet-powered robotic speedboat" class="project-img">
        <div class="project-tag">SSRR 2022</div>
        <h3>Waterjet-Powered Robotic Speedboats</h3>
        <p>Open-source, low-cost waterjet-powered robotic speedboats. Honours project that kicked off the whole aquatic robotics line.</p>
        <a class="item-link" href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:u5HHmVD_uO8C" target="_blank" rel="noopener">Research Paper &rarr;</a>
      </div>
      <div class="project-card">
        <img src="images/projects/fsae/fsae_2018_race.jpeg" alt="University of Auckland Formula SAE electric car" class="project-img">
        <div class="project-tag">FSAE 2018 &ndash; 2019</div>
        <h3>Formula SAE Electric Racing</h3>
        <p>Race Engineer for the University of Auckland Formula SAE team. 5th overall in the electric division at FSAE Australasia in Melbourne.</p>
        <a class="item-link" href="https://www.fsae.co.nz/" target="_blank" rel="noopener">FSAE NZ &rarr;</a>
      </div>
      <div class="project-card">
        <img src="images/projects/acumino/megachips_japan.jpg" alt="Acumino bimanual robot demo at MegaChips Japan" class="project-img">
        <div class="project-tag">Acumino</div>
        <h3>Vision-to-Action Manipulation</h3>
        <p>Vision-to-action models across UR, Mitsubishi, ABB, and Open ARM. Bimanual configs, 6-DoF pose estimation, imitation learning pipelines. Deployed across Europe, USA, Japan.</p>
        <a class="item-link" href="https://acumino.ai/" target="_blank" rel="noopener">Acumino &rarr;</a>
      </div>
    </div>
  </section>

  <!-- PUBLICATIONS -->
  <section id="publications">
    <div class="section-label">Publications</div>
    <div class="pub-list">
      <div class="pub-row has-photo">
        <div class="pub-year">2025</div>
        <div>
          <p class="pub-title">AeroBuoy: A Drone Deployable, 3D Printed, Autonomous Robotic Buoy for Environmental Inspection in Remote and Hazardous River Systems <span class="pill pill-gold">Best Paper</span></p>
          <p class="pub-venue">Reuben O'Brien et al. · IEEE/RSJ IROS</p>
        </div>
        <img src="images/conferences/iros_2025_award.jpg" alt="IROS 2025 Best Paper Award ceremony" class="pub-photo">
      </div>
      <div class="pub-row has-photo">
        <div class="pub-year">2024</div>
        <div>
          <p class="pub-title"><a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" target="_blank" rel="noopener">An Autonomous, 3D Printed, Waterjet-Powered, Open-Source Robotic Trimaran for Environmental Inspection and Monitoring</a> <span class="pill pill-muted">Best Application Finalist</span></p>
          <p class="pub-venue">Reuben O'Brien et al. · IEEE/RSJ IROS</p>
        </div>
        <img src="images/conferences/iros_2024_finalists.jpg" alt="IROS 2024 Best Application Paper Finalists" class="pub-photo">
      </div>
      <div class="pub-row">
        <div class="pub-year">2022</div>
        <div>
          <p class="pub-title"><a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:u5HHmVD_uO8C" target="_blank" rel="noopener">On the Development of Waterjet-Powered Robotic Speedboats</a></p>
          <p class="pub-venue">Reuben O'Brien et al. · IEEE SSRR</p>
        </div>
      </div>
      <div class="pub-row">
        <div class="pub-year"></div>
        <div>
          <p class="pub-venue">Full list on <a href="https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en" target="_blank" rel="noopener">Google Scholar</a>.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="section-label">About</div>
    <div class="about-text">
      <p>Started off as a wannabe Race Engineer in Formula SAE at the University of Auckland, then camera specialist with <strong>Toyota GAZOO Racing</strong> (Formula Regional Oceania). That led to the NZ Rally series, first event alongside the World Rally Championship, letting me work on series 2 cars. Formula racing is crazy, but rally is another whole level of insanity.</p>
      <p>Realizing that motorsports is for entertainment, I tried <strong>Fisher &amp; Paykel Healthcare</strong> as an intern working on medical devices. Cool to see Auckland on the global stage, but this still didn't do it for me.</p>
      <p>Final year at uni I found robotics. <strong>Crown Equipment Corporation</strong> let me work on autonomous lift trucks as a Systems Engineer: industrial hardware, PLCs, real-time C++. First overseas work trip, based in New Bremen, Ohio for a few months. Beer league baseball, golf, and ten-pin bowling.</p>
      <p>Picked up a Master's thesis to finish what I started with my Honours project. A year of madness: evenings, weekends, and remaining sanity in the labs, muddy ponds, creeks, and the Manukau Harbour. Transitioned to <strong>Acumino</strong> mid-thesis. Two IROS papers, first class. Then a Partnership PhD with Acumino and the <strong>University of Glasgow</strong> in Biomedical Engineering. This thesis will let me close a book within my family, and be the creator of many more adventures and chaos...</p>
    </div>
    <div class="social-row">
      <a class="social-chip" href="https://github.com/rapob" target="_blank" rel="noopener">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M12 .5A12 12 0 0 0 0 12.6c0 5.34 3.44 9.86 8.2 11.46.6.12.82-.26.82-.58 0-.28-.01-1.03-.02-2.02-3.34.75-4.04-1.64-4.04-1.64-.55-1.43-1.35-1.81-1.35-1.81-1.1-.77.08-.76.08-.76 1.22.09 1.86 1.27 1.86 1.27 1.08 1.91 2.84 1.36 3.53 1.04.11-.8.42-1.35.76-1.66-2.67-.31-5.48-1.38-5.48-6.14 0-1.36.46-2.47 1.23-3.34-.12-.31-.53-1.56.12-3.25 0 0 1.01-.33 3.3 1.27a11.2 11.2 0 0 1 6 0c2.3-1.6 3.3-1.27 3.3-1.27.66 1.69.24 2.94.12 3.25.77.87 1.23 1.98 1.23 3.34 0 4.78-2.81 5.82-5.49 6.13.43.37.81 1.1.81 2.23 0 1.61-.02 2.9-.02 3.29 0 .32.21.7.83.58A12 12 0 0 0 24 12.6 12 12 0 0 0 12 .5Z"/></svg>
        GitHub
      </a>
      <a class="social-chip" href="https://www.linkedin.com/in/reubenapob" target="_blank" rel="noopener">LinkedIn</a>
      <a class="social-chip" href="https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en" target="_blank" rel="noopener">Google Scholar</a>
      <a class="social-chip" href="https://www.researchgate.net/profile/Reuben-Obrien" target="_blank" rel="noopener">ResearchGate</a>
    </div>
  </section>

  <!-- AFFILIATIONS -->
  <section id="teams">
    <div class="section-label">Teams &amp; Affiliations</div>
    <div class="affil-grid">
      <div class="affil-item">
        <h3><a href="https://acumino.ai/" target="_blank" rel="noopener">Acumino</a></h3>
        <p>Robotics Development Engineer, May 2024 to present</p>
      </div>
      <div class="affil-item">
        <h3><a href="https://www.gla.ac.uk/" target="_blank" rel="noopener">University of Glasgow</a></h3>
        <p>PhD Student, Biomedical Engineering, 2025 to present</p>
      </div>
      <div class="affil-item">
        <h3><a href="https://www.araralab.uk/" target="_blank" rel="noopener">AraraLab</a></h3>
        <p>University of Glasgow robotics lab, PhD supervision</p>
      </div>
      <div class="affil-item">
        <h3><a href="https://newdexterity.org/" target="_blank" rel="noopener">New Dexterity</a></h3>
        <p>University of Auckland robotics lab, where the boats were built</p>
      </div>
      <div class="affil-item">
        <h3><a href="https://www.auckland.ac.nz/" target="_blank" rel="noopener">University of Auckland</a></h3>
        <p>MEng Mechatronics, Nov 2023 to Nov 2024. BE Mechatronics, Feb 2018 to Nov 2021.</p>
      </div>
      <div class="affil-item">
        <h3>UoA Snowsports Club</h3>
        <p>President, 2021 to 2023. 650+ members. Managed a $1.65M club-owned lodge on Mt Ruapehu.</p>
      </div>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact">
    <div class="section-label">Contact</div>
    <p class="contact-text">Best reached via <a href="https://www.linkedin.com/in/reubenapob" target="_blank" rel="noopener">LinkedIn</a>. For research or collaboration enquiries, find me through the <a href="https://www.araralab.uk/" target="_blank" rel="noopener">AraraLab</a> or <a href="https://acumino.ai/" target="_blank" rel="noopener">Acumino</a>.</p>
  </section>

  <footer>
    &copy; <?php echo $year; ?> Reuben O'Brien &middot; Send It...
  </footer>

</div>
</body>
</html>
