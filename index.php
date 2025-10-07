<?php $year = date('Y'); ?> <!doctype html> <html lang="en"> <head> <meta charset="utf-8"> <title>Reuben O’Brien</title> <meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="description" content="Reuben O’Brien — personal website"> <link rel="canonical" href="https://reubenobrien.com/"> <meta property="og:title" content="Reuben O’Brien"> <meta property="og:description" content="Personal website"> <meta property="og:type" content="website"> <meta property="og:url" content="https://reubenobrien.com/"> <meta name="theme-color" content="#0f172a"> <style> :root { --bg: #0b1020; --panel: #0f172a; --text: #e5e7eb; --muted: #94a3b8; --border: #1f2a44; --accent: #60a5fa; --accent-2: #22d3ee; --link: #93c5fd; --card: #111827; } @media (prefers-color-scheme: light) { :root { --bg: #f8fafc; --panel: #ffffff; --text: #0f172a; --muted: #475569; --border: #e2e8f0; --accent: #2563eb; --accent-2: #0891b2; --link: #1d4ed8; --card: #ffffff; } } * { box-sizing: border-box; } html, body { margin: 0; padding: 0; } body { background: linear-gradient(135deg, var(--bg), #0a0f1e 50%, var(--bg)); color: var(--text); font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji"; } a { color: var(--link); text-decoration: none; } a:hover { text-decoration: underline; } .wrap { max-width: 1100px; margin: 0 auto; padding: 32px 20px 80px; } header.site-header { display: flex; align-items: center; justify-content: space-between; gap: 12px; background: rgba(255,255,255,0.02); border: 1px solid var(--border); backdrop-filter: blur(6px); border-radius: 14px; padding: 14px 16px; margin-bottom: 24px; } .brand { display: flex; align-items: center; gap: 12px; font-weight: 700; letter-spacing: 0.2px; } .brand .dot { width: 10px; height: 10px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), var(--accent-2)); box-shadow: 0 0 18px var(--accent); } nav a { margin-left: 16px; padding: 8px 10px; border-radius: 8px; border: 1px solid transparent; white-space: nowrap; } nav a:hover { text-decoration: none; border-color: var(--border); background: rgba(255,255,255,0.03); }
.grid {
  display: grid;
  grid-template-columns: 320px 1fr;
  gap: 24px;
}
@media (max-width: 900px) {
  .grid { grid-template-columns: 1fr; }
}

aside.profile {
  background: var(--panel);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 22px;
  position: sticky;
  top: 20px;
  height: fit-content;
}
.avatar {
  width: 120px; height: 120px; border-radius: 50%;
  background: #0b1020 center/cover no-repeat;
  border: 2px solid var(--border);
  box-shadow: 0 10px 30px rgba(0,0,0,0.25);
}
.profile h1 {
  font-size: 26px; margin: 16px 0 6px;
}
.profile .role { color: var(--muted); font-size: 15px; margin-bottom: 12px; }
.profile .bio { color: var(--text); opacity: 0.9; margin: 12px 0 18px; }
.social {
  display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;
}
.chip {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 8px 10px; border-radius: 10px;
  border: 1px solid var(--border); background: rgba(255,255,255,0.03);
}
.chip svg { width: 16px; height: 16px; }
.chip:hover { text-decoration: none; border-color: var(--accent); }

main.content {
  display: grid; gap: 24px;
}
section.card {
  background: var(--panel);
  border: 1px solid var(--border);
  border-radius: 16px;
  padding: 22px;
}
.card h2 { margin: 0 0 10px; }
.muted { color: var(--muted); }
.list {
  display: grid; gap: 12px; margin: 14px 0 0;
}
.item {
  background: var(--card);
  border: 1px solid var(--border);
  border-radius: 12px;
  padding: 14px;
}
.item h3 { margin: 0 0 6px; font-size: 18px; }
.item p { margin: 6px 0 0; color: var(--muted); }
.link-row { margin-top: 10px; display: flex; gap: 12px; flex-wrap: wrap; }
.btn {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 8px 12px; border-radius: 10px; border: 1px solid var(--border);
  color: var(--text); text-decoration: none;
  background: linear-gradient(135deg, rgba(96,165,250,0.08), rgba(34,211,238,0.06));
}
.btn:hover { border-color: var(--accent); text-decoration: none; }
footer {
  margin-top: 28px; color: var(--muted); font-size: 14px; text-align: center;
}
.tagline {
  font-size: 15px; color: var(--muted);
  background: rgba(255,255,255,0.03);
  border: 1px solid var(--border);
  padding: 10px 12px; border-radius: 10px; display: inline-block;
}
</style> </head> <body> <div class="wrap"> <header class="site-header"> <div class="brand"> <div class="dot" aria-hidden="true"></div> <div>Reuben O’Brien</div> </div> <nav> <a href="#about">About</a> <a href="#projects">Projects</a> <a href="#publications">Publications</a> <a href="#contact">Contact</a> </nav> </header>
<div class="grid">
  <aside class="profile">
    <img src="avatar.jpg" alt="Profile photo" class="avatar" onerror="this.style.display='none'">
    <h1>Reuben O’Brien</h1>
    <div class="role">Your role or title</div>
    <div class="tagline">Short tagline about your work or interests</div>
    <p class="bio">
      Brief bio. One or two sentences about what you do, your interests, or where you work/study.
    </p>
    <div class="social">
      <a class="chip" href="mailto:you@reubenobrien.com" aria-label="Email">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 4H4c-1.1 0-2 .9-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2m0 4-8 5L4 8V6l8 5 8-5z"/></svg>
        <span>Email</span>
      </a>
      <a class="chip" href="https://github.com/rapob" target="_blank" rel="noopener" aria-label="GitHub">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .5A12 12 0 0 0 0 12.6c0 5.34 3.44 9.86 8.2 11.46.6.12.82-.26.82-.58 0-.28-.01-1.03-.02-2.02-3.34.75-4.04-1.64-4.04-1.64-.55-1.43-1.35-1.81-1.35-1.81-1.1-.77.08-.76.08-.76 1.22.09 1.86 1.27 1.86 1.27 1.08 1.91 2.84 1.36 3.53 1.04.11-.8.42-1.35.76-1.66-2.67-.31-5.48-1.38-5.48-6.14 0-1.36.46-2.47 1.23-3.34-.12-.31-.53-1.56.12-3.25 0 0 1.01-.33 3.3 1.27a11.2 11.2 0 0 1 6 0c2.3-1.6 3.3-1.27 3.3-1.27.66 1.69.24 2.94.12 3.25.77.87 1.23 1.98 1.23 3.34 0 4.78-2.81 5.82-5.49 6.13.43.37.81 1.1.81 2.23 0 1.61-.02 2.9-.02 3.29 0 .32.21.7.83.58A12 12 0 0 0 24 12.6 12 12 0 0 0 12 .5Z"/></svg>
        <span>GitHub</span>
      </a>
      <a class="chip" href="https://www.linkedin.com/in/yourusername" target="_blank" rel="noopener" aria-label="LinkedIn">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.94 6.5A2.44 2.44 0 1 1 4.5 4.06 2.45 2.45 0 0 1 6.94 6.5zM4.75 8.5h4.4V20h-4.4zM13 8.5h4.22v1.57h.06c.59-1.02 2.03-2.1 4.18-2.1 4.47 0 5.3 2.57 5.3 5.91V20h-4.39v-5.02c0-1.2-.02-2.76-1.68-2.76-1.69 0-1.95 1.32-1.95 2.67V20H13z"/></svg>
        <span>LinkedIn</span>
      </a>
      <a class="chip" href="https://twitter.com/yourhandle" target="_blank" rel="noopener" aria-label="X">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M18.244 2H21.5l-7.52 8.583L22.5 22h-5.845l-5.14-6.112L5.59 22H2.332l8.057-9.197L1.5 2h5.988l4.65 5.727L18.244 2zm-2.05 18h1.61L7.88 4H6.17l10.024 16z"/></svg>
        <span>X</span>
      </a>
    </div>
  </aside>

  <main class="content">
    <section id="about" class="card">
      <h2>About</h2>
      <p>
        Welcome to my site. Replace this text with a short introduction. You can talk about your current work, interests, and what visitors can find here.
      </p>
      <p class="muted">
        Tip: Upload a square image named avatar.jpg next to this file to show a profile photo.
      </p>
    </section>

    <section id="projects" class="card">
      <h2>Projects</h2>
      <div class="list">
        <div class="item">
          <h3>Project One</h3>
          <p>A brief description of what this project is and what you worked on or achieved.</p>
          <div class="link-row">
            <a class="btn" href="#" target="_blank" rel="noopener">Live demo</a>
            <a class="btn" href="https://github.com/rapob/your-repo" target="_blank" rel="noopener">Source</a>
          </div>
        </div>
        <div class="item">
          <h3>Project Two</h3>
          <p>Another project summary. Keep it short and focused on impact or result.</p>
          <div class="link-row">
            <a class="btn" href="#" target="_blank" rel="noopener">Website</a>
            <a class="btn" href="#" target="_blank" rel="noopener">Paper</a>
          </div>
        </div>
      </div>
    </section>

    <section id="publications" class="card">
      <h2>Publications</h2>
      <div class="list">
        <div class="item">
          <h3>Title of Paper (Year)</h3>
          <p class="muted">Author1, Author2, Reuben O’Brien. Venue/Conference.</p>
          <div class="link-row">
            <a class="btn" href="#" target="_blank" rel="noopener">PDF</a>
            <a class="btn" href="#" target="_blank" rel="noopener">BibTeX</a>
          </div>
        </div>
        <div class="item">
          <h3>Another Publication (Year)</h3>
          <p class="muted">O’Brien, R., et al. Journal/Conference.</p>
          <div class="link-row">
            <a class="btn" href="#" target="_blank" rel="noopener">PDF</a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="card">
      <h2>Contact</h2>
      <p>
        The best way to reach me: <a href="mailto:you@reubenobrien.com">you@reubenobrien.com</a>
      </p>
    </section>

    <footer>
      © <?php echo $year; ?> Reuben O’Brien • Hosted on my server
    </footer>
  </main>
</div>
</div> </body> </html>
