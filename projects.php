<?php $year = date('Y'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Projects - Reuben O'Brien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Projects by Reuben O'Brien - Robotics, AI, and Engineering">
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
      background: linear-gradient(135deg, var(--navy), var(--purple));
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
    
    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
      gap: 32px;
      margin: 32px 0;
    }
    
    .project-card {
      background: var(--panel);
      border: 2px solid var(--border);
      border-radius: 20px;
      overflow: hidden;
      transition: transform 0.3s ease, border-color 0.3s ease;
    }
    
    .project-card:hover {
      transform: translateY(-8px);
      border-color: var(--yellow);
    }
    
    .project-image {
      width: 100%;
      height: 250px;
      object-fit: cover;
    }
    
    .project-content {
      padding: 24px;
    }
    
    .project-content h3 {
      font-size: 1.5em;
      margin: 0 0 12px 0;
      color: var(--yellow);
    }
    
    .project-content p {
      color: var(--muted);
      margin: 0 0 16px 0;
    }
    
    .project-tags {
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
    
    .project-links {
      display: flex;
      gap: 12px;
      margin-top: 20px;
    }
    
    .project-btn {
      padding: 8px 16px;
      background: var(--yellow);
      color: var(--navy);
      text-decoration: none;
      border-radius: 12px;
      font-weight: 600;
      transition: transform 0.2s ease;
    }
    
    .project-btn:hover {
      transform: translateY(-1px);
      text-decoration: none;
    }
    
    @media (max-width: 768px) {
      .header h1 { font-size: 2em; }
      .project-grid { grid-template-columns: 1fr; gap: 24px; }
      .wrap { padding: 20px 16px 60px; }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <a href="index.php" class="back-btn">← Back to Home</a>
    
    <div class="header">
      <h1>Projects</h1>
      <p>Engineering innovations in robotics, AI, and autonomous systems</p>
    </div>
    
    <div class="project-grid">
      <div class="project-card">
        <img src="images/trimaran.jpg" alt="Autonomous Trimaran" class="project-image" onerror="this.src='images/cover.jpeg'">
        <div class="project-content">
          <h3>Autonomous Robotic Trimaran</h3>
          <p>A 3D printed, waterjet-powered autonomous boat designed for environmental inspection and monitoring. This open-source platform combines advanced navigation systems with environmental sensors for marine research applications.</p>
          <div class="project-tags">
            <span class="tag">Robotics</span>
            <span class="tag">Autonomous Systems</span>
            <span class="tag">3D Printing</span>
            <span class="tag">Environmental Monitoring</span>
          </div>
          <div class="project-links">
            <a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" class="project-btn" target="_blank">Research Paper</a>
          </div>
        </div>
      </div>
      
      <div class="project-card">
        <img src="images/fsae.jpg" alt="Formula SAE" class="project-image" onerror="this.src='images/cover.jpeg'">
        <div class="project-content">
          <h3>Formula SAE Electric Racing</h3>
          <p>Race Engineer for the University of Auckland Formula SAE Team, developing high-performance electric race cars. Achieved 5th place overall in the electric division at FSAE Australasia in Melbourne.</p>
          <div class="project-tags">
            <span class="tag">Electric Vehicles</span>
            <span class="tag">Race Engineering</span>
            <span class="tag">Team Leadership</span>
            <span class="tag">Performance Optimization</span>
          </div>
          <div class="project-links">
            <a href="https://www.fsae.co.nz/" class="project-btn" target="_blank">FSAE NZ</a>
          </div>
        </div>
      </div>
      
      <div class="project-card">
        <img src="images/robotics.jpg" alt="Robotics Research" class="project-image" onerror="this.src='images/cover.jpeg'">
        <div class="project-content">
          <h3>AI-Powered Robotics Research</h3>
          <p>Development of dexterous manipulation systems and humanoid robotics at Acumino. Working on next-generation AI-powered robot workers for addressing labor and skill shortages in various industries.</p>
          <div class="project-tags">
            <span class="tag">AI</span>
            <span class="tag">Humanoid Robotics</span>
            <span class="tag">Dexterous Manipulation</span>
            <span class="tag">Industry Applications</span>
          </div>
          <div class="project-links">
            <a href="https://acumino.ai/" class="project-btn" target="_blank">Acumino</a>
          </div>
        </div>
      </div>
      
      <div class="project-card">
        <img src="images/crown.jpg" alt="Crown Equipment" class="project-image" onerror="this.src='images/cover.jpeg'">
        <div class="project-content">
          <h3>Autonomous Forklift Systems</h3>
          <p>Research and development of autonomous features for industrial forklifts at Crown Equipment Corporation's Robotic Technology Centre. Focus on dual-mode automation and warehouse robotics.</p>
          <div class="project-tags">
            <span class="tag">Industrial Robotics</span>
            <span class="tag">Automation</span>
            <span class="tag">Warehouse Technology</span>
            <span class="tag">C++</span>
          </div>
          <div class="project-links">
            <a href="https://www.crown.com/en-nz/automation/dualmode.html" class="project-btn" target="_blank">Crown Automation</a>
          </div>
        </div>
      </div>
      
      <div class="project-card">
        <img src="images/fpkh.jpg" alt="Fisher & Paykel Healthcare" class="project-image" onerror="this.src='images/cover.jpeg'">
        <div class="project-content">
          <h3>Medical Device Development</h3>
          <p>Product development engineering intern at Fisher & Paykel Healthcare, focusing on non-invasive ventilation (NIV) mask prototypes. Experience with CAD modeling, prototyping, and medical device testing.</p>
          <div class="project-tags">
            <span class="tag">Medical Devices</span>
            <span class="tag">Product Development</span>
            <span class="tag">CAD Modeling</span>
            <span class="tag">Prototyping</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
