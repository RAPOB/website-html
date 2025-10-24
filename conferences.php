<?php $year = date('Y'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Conferences & Events - Reuben O'Brien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Conferences and Events by Reuben O'Brien - Research Presentations and Professional Networking">
  <link rel="icon" type="image/jpeg" href="images/cover.jpeg?v=1">
  <style>
    :root { 
      --bg: #2a1810; 
      --panel: #640D5F; 
      --text: #FFFFFF; 
      --muted: #d9a8c7; 
      --border: #7a2d6a; 
      --accent: #FFB200; 
      --accent-2: #EB5B00; 
      --link: #FFB200; 
      --card: #4a0a41; 
      --orange: #FFB200;
      --red-orange: #EB5B00;
      --magenta: #D91656;
      --purple: #640D5F;
      --white: #FFFFFF;
      --black: #000000;
    }
    
    * { box-sizing: border-box; }
    html, body { margin: 0; padding: 0; scroll-behavior: smooth; }
    body { 
      background: linear-gradient(135deg, var(--bg) 0%, #3d2518 25%, #4a1a2e 50%, #2d1b69 75%, var(--bg) 100%); 
      color: var(--text); 
      font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
    }
    
    .wrap { max-width: 1200px; margin: 0 auto; padding: 32px 20px 80px; }
    
    .header { 
      text-align: center; 
      margin-bottom: 48px; 
      padding: 40px 20px;
      background: linear-gradient(135deg, var(--purple), var(--magenta));
      border-radius: 20px;
      border: 2px solid var(--orange);
    }
    
    .header h1 { 
      font-size: 3em; 
      margin: 0 0 16px 0; 
      color: var(--orange);
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }
    
    .header p { 
      font-size: 1.2em; 
      margin: 0; 
      opacity: 0.9; 
    }
    
    .back-btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 12px 20px;
      background: var(--orange);
      color: var(--purple);
      text-decoration: none;
      border-radius: 25px;
      font-weight: 600;
      margin-bottom: 32px;
      transition: transform 0.2s ease;
    }
    
    .back-btn:hover {
      transform: translateY(-2px);
      text-decoration: none;
    }
    
    .conference-section {
      background: var(--panel);
      border: 2px solid var(--border);
      border-radius: 20px;
      padding: 32px;
      margin-bottom: 40px;
      transition: border-color 0.3s ease;
    }
    
    .conference-section:hover {
      border-color: var(--orange);
    }
    
    .conference-header {
      text-align: center;
      margin-bottom: 32px;
    }
    
    .conference-header h2 {
      font-size: 2.2em;
      margin: 0 0 16px 0;
      color: var(--orange);
    }
    
    .conference-header p {
      font-size: 1.1em;
      color: var(--muted);
      max-width: 800px;
      margin: 0 auto 20px auto;
    }
    
    .conference-links {
      display: flex;
      gap: 12px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 16px;
    }
    
    .conference-btn {
      padding: 8px 16px;
      background: var(--orange);
      color: var(--purple);
      text-decoration: none;
      border-radius: 12px;
      font-weight: 600;
      transition: transform 0.2s ease;
    }
    
    .conference-btn:hover {
      transform: translateY(-1px);
      text-decoration: none;
    }
    
    .conference-gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 20px;
      margin: 24px 0;
    }
    
    .gallery-item {
      position: relative;
      aspect-ratio: 4/3;
      border-radius: 12px;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 2px solid var(--border);
      background: var(--card);
    }
    
    .gallery-item:hover {
      transform: translateY(-4px);
      box-shadow: 0 15px 30px rgba(255, 178, 0, 0.2);
      border-color: var(--orange);
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
      background: linear-gradient(transparent, rgba(100, 13, 95, 0.95));
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
      font-size: 1em;
      color: var(--orange);
    }
    
    .gallery-overlay p {
      margin: 0;
      font-size: 0.85em;
      opacity: 0.9;
    }
    
    .tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin: 16px 0;
      justify-content: center;
    }
    
    .tag {
      background: var(--red-orange);
      color: var(--white);
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.8em;
      font-weight: 500;
    }
    
    @media (max-width: 768px) {
      .header h1 { font-size: 2em; }
      .conference-header h2 { font-size: 1.8em; }
      .conference-section { padding: 24px 20px; margin-bottom: 32px; }
      .conference-gallery { grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; }
      .wrap { padding: 20px 16px 60px; }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <a href="/" class="back-btn">← Back to Home</a>
    
    <div class="header">
      <h1>Conferences & Events</h1>
      <p>Sharing research, building networks, and advancing the field of robotics</p>
    </div>
    
    <!-- IEEE IROS 2024 -->
    <div class="conference-section">
      <div class="conference-header">
        <h2>IEEE IROS 2024 - Abu Dhabi</h2>
        <p>Presented research on autonomous robotic trimaran at the premier international conference on intelligent robots and systems. Paper selected as finalist for Best Application Paper award.</p>
        <div class="tags">
          <span class="tag">Best Paper Finalist</span>
          <span class="tag">Autonomous Robotics</span>
          <span class="tag">Marine Systems</span>
          <span class="tag">Abu Dhabi</span>
        </div>
        <div class="conference-links">
          <a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" class="conference-btn" target="_blank">Research Paper</a>
        </div>
      </div>
      
      <div class="conference-gallery">
        <div class="gallery-item">
          <img src="images/iros2024-presentation.jpg" alt="IROS 2024 Presentation" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Research Presentation</h4>
            <p>Presenting autonomous trimaran research to international audience</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/iros2024-poster.jpg" alt="IROS 2024 Poster" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Poster Session</h4>
            <p>Interactive discussions during the poster presentation</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/iros2024-networking.jpg" alt="IROS 2024 Networking" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Academic Networking</h4>
            <p>Building connections with leading robotics researchers</p>
          </div>
        </div>
      </div>
    </div>

    <!-- SSRR 2022 -->
    <div class="conference-section">
      <div class="conference-header">
        <h2>IEEE SSRR 2022 - Sevilla</h2>
        <p>Received Best Paper Award on Search and Safety and Rescue Robotics for work on waterjet-powered robotic speedboats. Recognition for innovative approach to marine rescue applications.</p>
        <div class="tags">
          <span class="tag">Best Paper Award</span>
          <span class="tag">Search & Rescue</span>
          <span class="tag">Marine Robotics</span>
          <span class="tag">Spain</span>
        </div>
        <div class="conference-links">
          <a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:u5HHmVD_uO8C" class="conference-btn" target="_blank">Award Paper</a>
        </div>
      </div>
      
      <div class="conference-gallery">
        <div class="gallery-item">
          <img src="images/ssrr2022-award.jpg" alt="SSRR 2022 Award" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Best Paper Award</h4>
            <p>Receiving recognition for search and rescue robotics research</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/ssrr2022-demo.jpg" alt="SSRR 2022 Demo" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Live Demonstration</h4>
            <p>Showcasing waterjet-powered robot capabilities</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/ssrr2022-conference.jpg" alt="SSRR 2022 Conference" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Conference Venue</h4>
            <p>IEEE SSRR 2022 conference in beautiful Sevilla, Spain</p>
          </div>
        </div>
      </div>
    </div>

    <!-- University Events -->
    <div class="conference-section">
      <div class="conference-header">
        <h2>University Research Events</h2>
        <p>Presenting research at various university symposiums, graduate showcases, and academic events. Sharing progress and findings with the local academic community.</p>
        <div class="tags">
          <span class="tag">Graduate Research</span>
          <span class="tag">University Events</span>
          <span class="tag">Academic Presentations</span>
          <span class="tag">Research Showcase</span>
        </div>
      </div>
      
      <div class="conference-gallery">
        <div class="gallery-item">
          <img src="images/uni-symposium.jpg" alt="University Symposium" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Research Symposium</h4>
            <p>Annual university research presentation and networking</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/thesis-defense.jpg" alt="Thesis Defense" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Masters Thesis Defense</h4>
            <p>Successfully defending Masters thesis with First Class Honours</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/grad-showcase.jpg" alt="Graduate Showcase" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Graduate Showcase</h4>
            <p>Demonstrating research to industry and academic visitors</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Industry Events -->
    <div class="conference-section">
      <div class="conference-header">
        <h2>Industry Events & Networking</h2>
        <p>Participating in industry conferences, tech meetups, and professional networking events. Building connections between academia and industry applications.</p>
        <div class="tags">
          <span class="tag">Industry Networking</span>
          <span class="tag">Tech Meetups</span>
          <span class="tag">Professional Events</span>
          <span class="tag">Innovation Showcases</span>
        </div>
      </div>
      
      <div class="conference-gallery">
        <div class="gallery-item">
          <img src="images/tech-meetup.jpg" alt="Tech Meetup" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Robotics Meetup</h4>
            <p>Sharing insights at local robotics and AI meetups</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/industry-panel.jpg" alt="Industry Panel" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Industry Panel</h4>
            <p>Participating in discussions on future of robotics</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/innovation-expo.jpg" alt="Innovation Expo" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Innovation Expo</h4>
            <p>Showcasing Acumino's robotics technology to industry</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
