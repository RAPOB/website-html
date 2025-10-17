<?php $year = date('Y'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Adventures - Reuben O'Brien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Adventures and experiences by Reuben O'Brien - Leadership, Travel, and Personal Growth">
  <link rel="icon" type="image/jpeg" href="images/cover.jpeg?v=1">
  <style>
    :root { 
      --bg: #0f1426; 
      --panel: #1E2C69; 
      --text: #FFFFFF; 
      --muted: #a8b3d9; 
      --border: #2a3b7a; 
      --accent: #F5E21D; 
      --accent-2: #8E5EB3; 
      --link: #F5E21D; 
      --card: #152041; 
      --navy: #1E2C69;
      --yellow: #F5E21D;
      --purple: #8E5EB3;
      --white: #FFFFFF;
      --black: #000000;
    }
    
    * { box-sizing: border-box; }
    html, body { margin: 0; padding: 0; scroll-behavior: smooth; }
    body { 
      background: linear-gradient(135deg, var(--bg), #0a0f1e 50%, var(--bg)); 
      color: var(--text); 
      font: 16px/1.6 system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
    }
    
    .wrap { max-width: 1200px; margin: 0 auto; padding: 32px 20px 80px; }
    
    .header { 
      text-align: center; 
      margin-bottom: 48px; 
      padding: 40px 20px;
      background: linear-gradient(135deg, var(--purple), var(--navy));
      border-radius: 20px;
      border: 2px solid var(--yellow);
    }
    
    .header h1 { 
      font-size: 3em; 
      margin: 0 0 16px 0; 
      color: var(--yellow);
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
      background: var(--yellow);
      color: var(--navy);
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
    
    .adventure-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 32px;
      margin: 32px 0;
    }
    
    .adventure-card {
      background: var(--panel);
      border: 2px solid var(--border);
      border-radius: 20px;
      overflow: hidden;
      transition: transform 0.3s ease, border-color 0.3s ease;
      position: relative;
    }
    
    .adventure-card:hover {
      transform: translateY(-8px);
      border-color: var(--yellow);
    }
    
    .adventure-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
      position: relative;
    }
    
    .adventure-content {
      padding: 24px;
    }
    
    .adventure-content h3 {
      font-size: 1.5em;
      margin: 0 0 12px 0;
      color: var(--yellow);
    }
    
    .adventure-content p {
      color: var(--muted);
      margin: 0 0 16px 0;
    }
    
    .adventure-meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 16px;
      font-size: 0.9em;
      color: var(--muted);
    }
    
    .adventure-tags {
      display: flex;
      flex-wrap: wrap;
      gap: 8px;
      margin: 16px 0;
    }
    
    .tag {
      background: var(--purple);
      color: var(--white);
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.8em;
      font-weight: 500;
    }
    
    .highlight-card {
      grid-column: 1 / -1;
      background: linear-gradient(135deg, var(--navy), var(--purple));
      border: 3px solid var(--yellow);
    }
    
    .highlight-card .adventure-content h3 {
      font-size: 2em;
      color: var(--yellow);
    }
    
    @media (max-width: 768px) {
      .header h1 { font-size: 2em; }
      .adventure-grid { grid-template-columns: 1fr; gap: 24px; }
      .wrap { padding: 20px 16px 60px; }
      .highlight-card { grid-column: 1; }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <a href="index.php" class="back-btn">← Back to Home</a>
    
    <div class="header">
      <h1>Adventures</h1>
      <p>Leadership, exploration, and personal growth experiences</p>
    </div>
    
    <div class="adventure-grid">
      <div class="adventure-card highlight-card">
        <img src="images/leadership.jpg" alt="Leadership Experience" class="adventure-image" onerror="this.src='images/cover.jpeg'">
        <div class="adventure-content">
          <h3>🏆 Leadership & Team Building</h3>
          <div class="adventure-meta">
            <span>2019-2021</span>
            <span>University of Auckland</span>
          </div>
          <p>Served as President of the University of Auckland Snowsports Club with 650+ members and managed a $1.65 million club-owned lodge on Mt Ruapehu. Coordinated multi-week ski trips, handled flights, lodging, and group logistics while liaising with local clubs and government agencies.</p>
          <div class="adventure-tags">
            <span class="tag">Leadership</span>
            <span class="tag">Event Management</span>
            <span class="tag">Team Building</span>
            <span class="tag">Logistics</span>
          </div>
        </div>
      </div>
      
      <div class="adventure-card">
        <img src="images/skiing.jpg" alt="Mountain Adventures" class="adventure-image" onerror="this.src='images/cover.jpeg'">
        <div class="adventure-content">
          <h3>🎿 Mountain Adventures</h3>
          <div class="adventure-meta">
            <span>Ongoing</span>
            <span>New Zealand & Beyond</span>
          </div>
          <p>Passionate snowsports enthusiast with extensive experience across New Zealand's mountains. From the slopes of Mt Ruapehu to international ski destinations, exploring the intersection of adventure and leadership development.</p>
          <div class="adventure-tags">
            <span class="tag">Snowsports</span>
            <span class="tag">Adventure</span>
            <span class="tag">Outdoor Leadership</span>
          </div>
        </div>
      </div>
      
      <div class="adventure-card">
        <img src="images/conferences.jpg" alt="Global Conferences" class="adventure-image" onerror="this.src='images/cover.jpeg'">
        <div class="adventure-content">
          <h3>🌍 Global Conference Circuit</h3>
          <div class="adventure-meta">
            <span>2022-2024</span>
            <span>International</span>
          </div>
          <p>Presenting research at prestigious international conferences including IEEE IROS. Finalist for Best Paper and Best Application awards, sharing innovations in autonomous robotics and waterjet-powered systems with the global research community.</p>
          <div class="adventure-tags">
            <span class="tag">Public Speaking</span>
            <span class="tag">Research Presentation</span>
            <span class="tag">International Travel</span>
            <span class="tag">Networking</span>
          </div>
        </div>
      </div>
      
      <div class="adventure-card">
        <img src="images/racing.jpg" alt="Formula SAE Racing" class="adventure-image" onerror="this.src='images/cover.jpeg'">
        <div class="adventure-content">
          <h3>🏎️ Formula SAE Racing</h3>
          <div class="adventure-meta">
            <span>2018-2020</span>
            <span>Auckland & Melbourne</span>
          </div>
          <p>Race Engineer for the University of Auckland Formula SAE Team. Led the team to 5th place overall in the electric division at FSAE Australasia in Melbourne, managing high-pressure competition environments and collaborative engineering challenges.</p>
          <div class="adventure-tags">
            <span class="tag">Motorsport</span>
            <span class="tag">Competition</span>
            <span class="tag">Engineering</span>
            <span class="tag">Teamwork</span>
          </div>
        </div>
      </div>
      
      <div class="adventure-card">
        <img src="images/innovation.jpg" alt="Innovation Challenges" class="adventure-image" onerror="this.src='images/cover.jpeg'">
        <div class="adventure-content">
          <h3>💡 Innovation & Entrepreneurship</h3>
          <div class="adventure-meta">
            <span>2024-Present</span>
            <span>Global</span>
          </div>
          <p>Contributing to groundbreaking robotics innovations at Acumino, including the first demonstration environment for AI-powered robotics in Japan. Part of bringing next-generation robot workers to address global labor shortages.</p>
          <div class="adventure-tags">
            <span class="tag">Innovation</span>
            <span class="tag">Entrepreneurship</span>
            <span class="tag">International Business</span>
            <span class="tag">Technology Transfer</span>
          </div>
        </div>
      </div>
      
      <div class="adventure-card">
        <img src="images/research.jpg" alt="Research Adventures" class="adventure-image" onerror="this.src='images/cover.jpeg'">
        <div class="adventure-content">
          <h3>🔬 Research Expeditions</h3>
          <div class="adventure-meta">
            <span>2021-Present</span>
            <span>Field Testing</span>
          </div>
          <p>Taking autonomous robotic systems into real-world environments for testing and validation. From harbors in Auckland to international waters, pushing the boundaries of what's possible with waterjet-powered autonomous vessels.</p>
          <div class="adventure-tags">
            <span class="tag">Field Research</span>
            <span class="tag">Autonomous Systems</span>
            <span class="tag">Marine Testing</span>
            <span class="tag">Problem Solving</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
