<?php $year = date('Y'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Conferences & Events - Reuben O'Brien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Conferences and events attended by Reuben O'Brien.">
  <link rel="icon" type="image/jpeg" href="images/cover.jpeg?v=1">
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

  nav.site-nav {
    display: flex; align-items: center; justify-content: space-between;
    padding: 20px 0; border-bottom: 1px solid var(--border);
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
  .nav-links a.nav-page.active { border-color: var(--accent); color: var(--accent); }

  .page-header { padding: 52px 0 40px; border-bottom: 1px solid var(--border); }
  .page-header h1 { font-size: 40px; font-weight: 800; letter-spacing: -1.5px; margin: 0 0 10px; }
  .page-header p { color: var(--muted); font-size: 17px; margin: 0; }

  .section-label {
    font-size: 11px; font-weight: 700; text-transform: uppercase;
    letter-spacing: 0.14em; color: var(--muted); margin-bottom: 24px;
  }

  .event-list { display: grid; gap: 0; }
  .event {
    display: grid; grid-template-columns: 1fr auto;
    gap: 24px; padding: 32px 0;
    border-bottom: 1px solid var(--border);
    align-items: start;
  }
  .event:last-child { border-bottom: none; }
  .event-body h2 { font-size: 20px; margin: 0 0 4px; }
  .event-meta { color: var(--muted); font-size: 14px; margin: 0 0 10px; }
  .event-desc { color: var(--muted); font-size: 15px; line-height: 1.6; margin: 0 0 12px; max-width: 560px; }
  .pill {
    display: inline-block; border-radius: 4px;
    padding: 1px 8px; font-size: 11px; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.04em; margin-right: 6px;
  }
  .pill-gold { background: rgba(255,178,0,0.15); color: var(--accent); }
  .pill-muted { background: rgba(255,255,255,0.06); color: var(--muted); }

  .event-photo {
    width: 200px; height: 134px; object-fit: cover;
    border-radius: 10px; border: 1px solid var(--border); flex-shrink: 0;
  }

  section { padding: 48px 0; border-bottom: 1px solid var(--border); }
  section:last-of-type { border-bottom: none; }

  footer { padding: 32px 0 0; color: var(--muted); font-size: 13px; text-align: center; }

  @media (max-width: 640px) {
    .wrap { padding: 0 16px 60px; }
    .page-header h1 { font-size: 28px; }
    .event { grid-template-columns: 1fr; }
    .event-photo { width: 100%; height: 180px; }
    .nav-links a { margin-left: 12px; font-size: 14px; }
  }
  </style>
</head>
<body>
<div class="wrap">

  <nav class="site-nav">
    <div class="brand">
      <div class="dot" aria-hidden="true"></div>
      <a href="/" style="color: var(--text);">Reuben O'Brien</a>
    </div>
    <div class="nav-links">
      <a href="/#projects">Projects</a>
      <a href="/#about">About</a>
      <a href="/#contact">Contact</a>
      <div class="nav-sep" aria-hidden="true"></div>
      <a href="/adventures" class="nav-page">Adventures</a>
      <a href="/conferences" class="nav-page active">Conferences</a>
    </div>
  </nav>

  <div class="page-header">
    <h1>Conferences &amp; Events</h1>
    <p>Research presentations, industry demos, and startup events.</p>
  </div>

  <!-- RESEARCH CONFERENCES -->
  <section>
    <div class="section-label">Research Conferences</div>
    <div class="event-list">

      <div class="event">
        <div class="event-body">
          <h2>IEEE IROS 2025 &middot; Hangzhou</h2>
          <p class="event-meta">October 2025</p>
          <p class="event-desc">Presented AeroBuoy at the 2025 IEEE/RSJ International Conference on Intelligent Robots and Systems.</p>
          <span class="pill pill-gold">Best Paper Award</span>
        </div>
        <img src="images/conferences/iros_2025_award.jpg" alt="IROS 2025 Best Paper Award ceremony" class="event-photo">
      </div>

      <div class="event">
        <div class="event-body">
          <h2>IEEE IROS 2024 &middot; Abu Dhabi</h2>
          <p class="event-meta">October 2024</p>
          <p class="event-desc">Presented the Autonomous Robotic Trimaran at IEEE/RSJ IROS 2024.</p>
          <span class="pill pill-muted">Best Application Paper Finalist</span>
        </div>
        <div style="display:flex; gap:8px; flex-shrink:0;">
          <img src="images/conferences/iros_2024_abu.jpeg" alt="IROS 2024 Abu Dhabi finalist" class="event-photo">
          <img src="images/conferences/iros_2024_finalists.jpg" alt="IROS 2024 Best Application Paper Finalists" class="event-photo">
        </div>
      </div>

      <div class="event">
        <div class="event-body">
          <h2>IEEE SSRR 2022 &middot; Sevilla</h2>
          <p class="event-meta">November 2022</p>
          <p class="event-desc">Presented research on waterjet-powered robotic speedboats at the IEEE International Symposium on Safety, Security, and Rescue Robotics.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- INDUSTRY EVENTS -->
  <section>
    <div class="section-label">Industry Events</div>
    <div class="event-list">

      <div class="event">
        <div class="event-body">
          <h2>Startup Autobahn Expo 12 &middot; Stuttgart</h2>
          <p class="event-meta">2025</p>
          <p class="event-desc">The Acumino x Schaeffler x DXC collaboration received the Global Plug and Play Innovation Award at Startup Autobahn Expo 12.</p>
          <span class="pill pill-gold">Innovation Award</span>
        </div>
        <img src="images/projects/acumino/plug_and_play.jpeg" alt="Startup Autobahn Innovation Award" class="event-photo">
      </div>

      <div class="event">
        <div class="event-body">
          <h2>Startup Autobahn Expo 11 &middot; Stuttgart</h2>
          <p class="event-meta">2025 &middot; DXC Technology</p>
          <p class="event-desc">Acumino's first Startup Autobahn cohort, demonstrating dexterous robotic assembly at DXC Technology.</p>
        </div>
        <img src="images/conferences/startup_autobahn_expo11.jpeg" alt="Startup Autobahn Expo 11" class="event-photo">
      </div>

      <div class="event">
        <div class="event-body">
          <h2>NVIDIA GTC &middot; San Jose</h2>
          <p class="event-meta">March 2025</p>
          <p class="event-desc">Demonstrated Acumino's bimanual assembly system at NVIDIA GTC 2025 as part of the Teradyne Robotics AI Accelerator launch. UR5e cobots doing cable handling.</p>
        </div>
        <img src="images/conferences/gtc.jpeg" alt="NVIDIA GTC 2025" class="event-photo">
      </div>

      <div class="event">
        <div class="event-body">
          <h2>VivaTech &middot; Paris</h2>
          <p class="event-meta">2025</p>
          <p class="event-desc">Represented Acumino at Viva Technology, Europe's biggest startup and tech event.</p>
        </div>
        <img src="images/conferences/vivatech_paris.jpeg" alt="VivaTech Paris 2024" class="event-photo">
      </div>

      <div class="event">
        <div class="event-body">
          <h2>GITEX &middot; Berlin</h2>
          <p class="event-meta">2025</p>
          <p class="event-desc">Represented Acumino at GITEX Europe.</p>
        </div>
        <img src="images/conferences/gitex.jpeg" alt="GITEX Berlin 2024" class="event-photo">
      </div>

      <div class="event">
        <div class="event-body">
          <h2>Humanoid Olympiad &middot; Olympia, Greece</h2>
          <p class="event-meta">2025</p>
          <p class="event-desc">Attended the Humanoid Olympiad at the birthplace of the Olympics.</p>
        </div>
        <img src="images/conferences/humanoid_olympiad.jpg" alt="Humanoid Olympiad, Olympia Greece" class="event-photo">
      </div>

    </div>
  </section>

  <footer>
    &copy; <?php echo $year; ?> Reuben O'Brien &middot; Send It...
  </footer>

</div>
</body>
</html>
