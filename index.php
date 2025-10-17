<?php $year = date('Y'); ?> <!doctype html> <html lang="en"> <head> <meta charset="utf-8"> <title>Reuben O’Brien</title> <meta name="viewport" content="width=device-width, initial-scale=1"> <meta name="description" content="Reuben O’Brien — personal website"> <link rel="canonical" href="https://reubenobrien.com/"> <meta property="og:title" content="Reuben O’Brien"> <meta property="og:description" content="Personal website"> <meta property="og:type" content="website"> <meta property="og:url" content="https://reubenobrien.com/"> <meta name="theme-color" content="#0f172a"> <link rel="icon" type="image/jpeg" href="images/cover.jpeg?v=1"> <link rel="icon" type="image/png" href="images/cover.jpg?v=1"> <link rel="shortcut icon" href="images/cover.jpg?v=1"> <link rel="apple-touch-icon" href="images/cover.jpg?v=1"> <link rel="apple-touch-icon" sizes="180x180" href="images/cover.jpg?v=1"> <meta property="og:image" content="https://reubenobrien.com/images/cover.jpeg"> <meta property="og:site_name" content="Reuben O'Brien"> <meta name="twitter:card" content="summary_large_image"> <meta name="twitter:title" content="Reuben O'Brien - Robotics Engineer & PhD Student"> <meta name="twitter:description" content="Robotics Engineer at Acumino and PhD Student at University of Glasgow."> <meta name="twitter:image" content="https://reubenobrien.com/images/cover.jpeg"> <script type="application/ld+json"> { "@context": "https://schema.org", "@type": "Person", "name": "Reuben O'Brien", "jobTitle": "Robotics Development Engineer", "affiliation": [ { "@type": "Organization", "name": "Acumino", "url": "https://acumino.ai/" }, { "@type": "Organization", "name": "University of Glasgow", "url": "https://www.gla.ac.uk/" } ], "alumniOf": { "@type": "Organization", "name": "University of Auckland", "url": "https://www.auckland.ac.nz/" }, "url": "https://reubenobrien.com/", "image": "https://reubenobrien.com/images/cover.jpeg", "sameAs": [ "https://www.linkedin.com/in/reubenapob", "https://github.com/rapob", "https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en", "https://www.researchgate.net/profile/Reuben-Obrien" ] } </script> <style> :root { --bg: #0f1426; --panel: #1E2C69; --text: #FFFFFF; --muted: #a8b3d9; --border: #2a3b7a; --accent: #F5E21D; --accent-2: #8E5EB3; --link: #F5E21D; --card: #152041; --navy: #1E2C69; --yellow: #F5E21D; --purple: #8E5EB3; --white: #FFFFFF; --black: #000000; } @media (prefers-color-scheme: light) { :root { --bg: #f8fafc; --panel: #FFFFFF; --text: #1E2C69; --muted: #475569; --border: #e2e8f0; --accent: #1E2C69; --accent-2: #8E5EB3; --link: #1E2C69; --card: #FFFFFF; } } * { box-sizing: border-box; } html, body { margin: 0; padding: 0; } body { background: linear-gradient(135deg, var(--bg), #0a0f1e 50%, var(--bg)); color: var(--text); font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji"; } a { color: var(--link); text-decoration: none; } a:hover { text-decoration: underline; } .wrap { max-width: 1100px; margin: 0 auto; padding: 32px 20px 80px; } header.site-header { display: flex; align-items: center; justify-content: space-between; gap: 12px; background: rgba(255,255,255,0.02); border: 1px solid var(--border); backdrop-filter: blur(6px); border-radius: 14px; padding: 14px 16px; margin-bottom: 24px; } .brand { display: flex; align-items: center; gap: 12px; font-weight: 700; letter-spacing: 0.2px; } .brand .dot { width: 10px; height: 10px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), var(--accent-2)); box-shadow: 0 0 18px var(--accent); } nav a { margin-left: 16px; padding: 8px 10px; border-radius: 8px; border: 1px solid transparent; white-space: nowrap; } nav a:hover { text-decoration: none; border-color: var(--border); background: rgba(255,255,255,0.03); }
.grid {
  display: grid;
  grid-template-columns: 320px 1fr;
  gap: 24px;
}
@media (max-width: 900px) {
  .grid { grid-template-columns: 1fr; }
  aside.profile {
    position: static; /* Remove sticky behavior on tablets too */
    top: auto;
  }
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

/* Force non-sticky behavior on mobile and tablet */
@media (max-width: 900px) {
  aside.profile {
    position: static !important;
    top: auto !important;
  }
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

/* Enhanced mobile responsiveness */
@media (max-width: 640px) {
  .wrap { padding: 20px 16px 60px; }
  header.site-header { 
    flex-direction: column; 
    align-items: flex-start; 
    gap: 16px; 
  }
  nav { 
    display: flex; 
    gap: 8px; 
    flex-wrap: wrap; 
  }
  nav a { 
    margin-left: 0; 
    padding: 6px 8px; 
    font-size: 14px; 
  }
  .profile { 
    padding: 18px;
    position: static; /* Remove sticky behavior on mobile */
    top: auto;
  }
  .avatar { 
    width: 100px; 
    height: 100px; 
  }
  .profile h1 { 
    font-size: 22px; 
  }
  .card { 
    padding: 18px; 
  }
  .item { 
    padding: 12px; 
  }
}

/* Smooth scrolling */
html {
  scroll-behavior: smooth;
}

/* Loading animations */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.card {
  animation: fadeInUp 0.6s ease-out;
}

.card:nth-child(2) { animation-delay: 0.1s; }
.card:nth-child(3) { animation-delay: 0.2s; }
.card:nth-child(4) { animation-delay: 0.3s; }
.card:nth-child(5) { animation-delay: 0.4s; }

.profile {
  animation: fadeInUp 0.6s ease-out;
}

/* Project images */
.project-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 8px;
  margin-bottom: 12px;
  border: 1px solid var(--border);
}

@media (max-width: 640px) {
  .project-image {
    height: 150px;
  }
}

/* Enhanced hover effects */
.item:hover {
  transform: translateY(-2px);
  transition: transform 0.2s ease;
  border-color: var(--accent);
}

.btn:hover {
  transform: translateY(-1px);
  transition: transform 0.2s ease;
}

/* Gallery styles */
.gallery {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 16px;
  margin: 16px 0;
}

.gallery-item {
  position: relative;
  aspect-ratio: 4/3;
  border-radius: 12px;
  overflow: hidden;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  border: 2px solid var(--border);
}

.gallery-item:hover {
  transform: translateY(-4px);
  box-shadow: 0 20px 40px rgba(245, 226, 29, 0.2);
  border-color: var(--yellow);
}

.gallery-item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: scale 0.3s ease;
}

.gallery-item:hover img {
  scale: 1.05;
}

.gallery-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(transparent, rgba(30, 44, 105, 0.9));
  color: var(--white);
  padding: 16px;
  transform: translateY(100%);
  transition: transform 0.3s ease;
}

.gallery-item:hover .gallery-overlay {
  transform: translateY(0);
}

.gallery-overlay h4 {
  margin: 0 0 4px 0;
  font-size: 16px;
  color: var(--yellow);
}

.gallery-overlay p {
  margin: 0;
  font-size: 14px;
  opacity: 0.9;
}

.view-all-btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 20px;
  background: linear-gradient(135deg, var(--yellow), var(--purple));
  color: var(--navy);
  text-decoration: none;
  border-radius: 25px;
  font-weight: 600;
  margin-top: 16px;
  transition: transform 0.2s ease, box-shadow 0.2s ease;
}

.view-all-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 20px rgba(245, 226, 29, 0.3);
  text-decoration: none;
}

@media (max-width: 640px) {
  .gallery {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 12px;
  }
  
  .gallery-overlay {
    padding: 12px;
  }
}
</style> </head> <body> <div class="wrap"> <header class="site-header"> <div class="brand"> <div class="dot" aria-hidden="true"></div> <div>Reuben O’Brien</div> </div> <nav> <a href="#about">About</a> <a href="#projects">Projects</a> <a href="#publications">Publications</a> <a href="#contact">Contact</a> </nav> </header>
<div class="grid">
  <aside class="profile">
    <img src="images/cover.jpeg" alt="Profile photo" class="avatar" onerror="this.style.display='none'">
    <h1>Reuben O’Brien</h1>
    <div class="role">Robotics Development Engineer &amp; PhD Student</div>
    <div style="margin-bottom: 18px;"><a href="https://acumino.ai/" target="_blank" rel="noopener" style="margin-right: 10px;">Acumino</a><a href="https://www.gla.ac.uk/" target="_blank" rel="noopener">University of Glasgow</a></div>
    <div style="margin-bottom: 18px;"></div>
    <div style="background: rgba(255,255,255,0.04); border-radius: 12px; border: 1px solid var(--border); padding: 12px 10px; display: flex; flex-direction: column; gap: 10px;">
      <a class="chip" href="https://github.com/rapob" target="_blank" rel="noopener" aria-label="GitHub">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .5A12 12 0 0 0 0 12.6c0 5.34 3.44 9.86 8.2 11.46.6.12.82-.26.82-.58 0-.28-.01-1.03-.02-2.02-3.34.75-4.04-1.64-4.04-1.64-.55-1.43-1.35-1.81-1.35-1.81-1.1-.77.08-.76.08-.76 1.22.09 1.86 1.27 1.86 1.27 1.08 1.91 2.84 1.36 3.53 1.04.11-.8.42-1.35.76-1.66-2.67-.31-5.48-1.38-5.48-6.14 0-1.36.46-2.47 1.23-3.34-.12-.31-.53-1.56.12-3.25 0 0 1.01-.33 3.3 1.27a11.2 11.2 0 0 1 6 0c2.3-1.6 3.3-1.27 3.3-1.27.66 1.69.24 2.94.12 3.25.77.87 1.23 1.98 1.23 3.34 0 4.78-2.81 5.82-5.49 6.13.43.37.81 1.1.81 2.23 0 1.61-.02 2.9-.02 3.29 0 .32.21.7.83.58A12 12 0 0 0 24 12.6 12 12 0 0 0 12 .5Z"/></svg>
        <span>GitHub</span>
      </a>
      <a class="chip" href="https://www.linkedin.com/in/reubenapob" target="_blank" rel="noopener" aria-label="LinkedIn">
        <span>LinkedIn</span>
      </a>
      <a class="chip" href="https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en" target="_blank" rel="noopener" aria-label="Google Scholar">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z"/></svg>
        <span>Google Scholar</span>
      </a>
      <a class="chip" href="https://www.researchgate.net/profile/Reuben-Obrien" target="_blank" rel="noopener" aria-label="ResearchGate">
        <span>ResearchGate</span>
      </a>
    </div>
  </aside>

  <main class="content">
    <section id="about" class="card">
      <h2>About</h2>
      <p>
        Reuben O'Brien is a Robotics Engineer and PhD student at the University of Glasgow, currently working as a Robotics Development Engineer at Acumino. He has previously held engineering roles at Crown Equipment Corporation, TOYOTA GAZOO Racing, and Fisher & Paykel Healthcare, contributing to autonomous robotics, onboard camera systems, and product development.
      </p>
      <p>
        Reuben holds a Master of Engineering (First Class Honours) in Mechatronics, Robotics, and Automation Engineering from the University of Auckland, and is a finalist for Best Paper and Best Application at IEEE IROS. His projects include autonomous waterjet-powered robotic speedboats and Formula SAE electric race engineering. He has also served as President of the University of Auckland Snowsports Club and Race Engineer for the Formula SAE Team.
      </p>
    </section>

    <section id="projects" class="card">
      <h2>Projects</h2>
      <div class="gallery">
        <div class="gallery-item" onclick="window.location.href='projects.php'">
          <img src="images/trimaran.jpg" alt="Autonomous Trimaran" onerror="this.src='images/fsae.jpg'">
          <div class="gallery-overlay">
            <h4>Autonomous Trimaran</h4>
            <p>3D printed waterjet-powered robotic boat for environmental monitoring</p>
          </div>
        </div>
        <div class="gallery-item" onclick="window.location.href='projects.php'">
          <img src="images/fsae.jpg" alt="Formula SAE" onerror="this.style.display='none'">
          <div class="gallery-overlay">
            <h4>Formula SAE</h4>
            <p>Electric race car design and engineering</p>
          </div>
        </div>
        <div class="gallery-item" onclick="window.location.href='projects.php'">
          <img src="images/robotics.jpg" alt="Robotics Research" onerror="this.style.display='none'">
          <div class="gallery-overlay">
            <h4>Robotics Research</h4>
            <p>AI-powered dexterous manipulation systems</p>
          </div>
        </div>
      </div>
      <a href="projects.php" class="view-all-btn">
        View All Projects →
      </a>
    </section>

    <section id="adventures" class="card">
      <h2>Adventures</h2>
      <div class="gallery">
        <div class="gallery-item" onclick="window.location.href='adventures.php'">
          <img src="images/skiing.jpg" alt="Skiing Adventures" onerror="this.style.display='none'">
          <div class="gallery-overlay">
            <h4>Mountain Adventures</h4>
            <p>Snowsports club president and skiing enthusiast</p>
          </div>
        </div>
        <div class="gallery-item" onclick="window.location.href='adventures.php'">
          <img src="images/travel.jpg" alt="Travel" onerror="this.style.display='none'">
          <div class="gallery-overlay">
            <h4>Global Conferences</h4>
            <p>Presenting research around the world</p>
          </div>
        </div>
        <div class="gallery-item" onclick="window.location.href='adventures.php'">
          <img src="images/teamwork.jpg" alt="Team Building" onerror="this.style.display='none'">
          <div class="gallery-overlay">
            <h4>Team Leadership</h4>
            <p>Building and leading high-performance teams</p>
          </div>
        </div>
      </div>
      <a href="adventures.php" class="view-all-btn">
        View All Adventures →
      </a>
    </section>

    <section id="publications" class="card">
      <h2>Publications</h2>
      <div class="list">
        <div class="item">
          <h3><a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" target="_blank" rel="noopener">An Autonomous, 3D Printed, Waterjet-Powered, Open-Source Robotic Trimaran for Environmental Inspection and Monitoring</a> (2024)</h3>
          <p class="muted">Reuben O'Brien, et al. IEEE/RSJ International Conference on Intelligent Robots and Systems (IROS).</p>
        </div>
        <div class="item">
          <h3><a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:u5HHmVD_uO8C" target="_blank" rel="noopener">On the Development of Waterjet-Powered Robotic Speedboats: An Open-Source, Low-Cost Platform for Education and Research</a> (2022)</h3>
          <p class="muted">Reuben O'Brien, et al. IEEE International Symposium on Safety, Security, and Rescue Robotics.</p>
        </div>
        <div class="item">
          <h3><a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" target="_blank" rel="noopener">Other publications</a></h3>
          <p class="muted">See full list on <a href="https://scholar.google.com/citations?user=A0ajSv8AAAAJ&hl=en" target="_blank" rel="noopener">Google Scholar</a>.</p>
        </div>
      </div>
    </section>

    <section id="teams" class="card">
      <h2>Teams & Affiliations</h2>
      <div class="list">
        <div class="item">
          <h3><a href="https://newdexterity.org/" target="_blank" rel="noopener">New Dexterity</a></h3>
          <p class="muted">Research group focused on robotics and dexterous manipulation.</p>
        </div>
        <div class="item">
          <h3><a href="https://acumino.ai/" target="_blank" rel="noopener">Acumino</a></h3>
          <p class="muted">Company specializing in AI-powered robotics and automation.</p>
        </div>
        <div class="item">
          <h3><a href="https://www.gla.ac.uk/" target="_blank" rel="noopener">University of Glasgow</a></h3>
          <p class="muted">PhD Student, Biomedical Engineering.</p>
        </div>
        <div class="item">
          <h3><a href="https://www.auckland.ac.nz/" target="_blank" rel="noopener">University of Auckland</a></h3>
          <p class="muted">MEng, Mechatronics, Robotics, and Automation Engineering.</p>
        </div>
        <div class="item">
          <h3><a href="https://www.araralab.uk/" target="_blank" rel="noopener">AraraLab</a></h3>
          <p class="muted">Research group focused on robotics and artificial intelligence.</p>
        </div>
      </div>
    </section>

    <section id="contact" class="card">
      <h2>Contact</h2>
      <p>
        The easiest way to contact me is via <a href="https://www.linkedin.com/in/reubenapob" target="_blank" rel="noopener">LinkedIn</a>.
      </p>
    </section>

    <footer>
      © <?php echo $year; ?> Reuben O’Brien • Hosted on my server
    </footer>
  </main>
</div>
</div> </body> </html>
