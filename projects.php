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
    
    .project-section {
      background: var(--panel);
      border: 2px solid var(--border);
      border-radius: 20px;
      padding: 32px;
      margin-bottom: 40px;
      transition: border-color 0.3s ease;
    }
    
    .project-section:hover {
      border-color: var(--orange);
    }
    
    .project-header {
      text-align: center;
      margin-bottom: 32px;
    }
    
    .project-header h2 {
      font-size: 2.2em;
      margin: 0 0 16px 0;
      color: var(--orange);
    }
    
    .project-header p {
      font-size: 1.1em;
      color: var(--muted);
      max-width: 800px;
      margin: 0 auto 20px auto;
    }
    
    .project-links {
      display: flex;
      gap: 12px;
      justify-content: center;
      flex-wrap: wrap;
      margin-top: 16px;
    }
    
    .project-btn {
      padding: 8px 16px;
      background: var(--orange);
      color: var(--purple);
      text-decoration: none;
      border-radius: 12px;
      font-weight: 600;
      transition: transform 0.2s ease;
    }
    
    .project-btn:hover {
      transform: translateY(-1px);
      text-decoration: none;
    }
    
    .project-gallery {
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
      .project-header h2 { font-size: 1.8em; }
      .project-section { padding: 24px 20px; margin-bottom: 32px; }
      .project-gallery { grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 16px; }
      .wrap { padding: 20px 16px 60px; }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <a href="/" class="back-btn">← Back to Home</a>
    
    <div class="header">
      <h1>Projects</h1>
      <p>Engineering innovations in robotics, AI, and autonomous systems</p>
    </div>
    
    <!-- Autonomous Trimaran Project -->
    <div class="project-section">
      <div class="project-header">
        <h2>Autonomous Robotic Trimaran</h2>
        <p>A 3D printed, waterjet-powered autonomous boat designed for environmental inspection and monitoring. This open-source platform combines advanced navigation systems with environmental sensors for marine research applications.</p>
        <div class="tags">
          <span class="tag">Robotics</span>
          <span class="tag">Autonomous Systems</span>
          <span class="tag">3D Printing</span>
          <span class="tag">Environmental Monitoring</span>
        </div>
        <div class="project-links">
          <a href="https://scholar.google.com/citations?view_op=view_citation&hl=en&user=A0ajSv8AAAAJ&citation_for_view=A0ajSv8AAAAJ:9yKSN-GCB0IC" class="project-btn" target="_blank">Research Paper</a>
        </div>
      </div>
      
      <div class="project-gallery">
        <div class="gallery-item">
          <img src="images/trimaran-1.jpg" alt="Trimaran Design" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Hull Design</h4>
            <p>3D printed trimaran hull optimized for stability and efficiency</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/trimaran-2.jpg" alt="Waterjet System" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Waterjet Propulsion</h4>
            <p>Custom waterjet propulsion system for precise maneuvering</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/trimaran-3.jpg" alt="Testing" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Field Testing</h4>
            <p>Real-world testing in marine environments</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Formula SAE Project -->
    <div class="project-section">
      <div class="project-header">
        <h2>Formula SAE Electric Racing</h2>
        <p>Race Engineer for the University of Auckland Formula SAE Team, developing high-performance electric race cars. Achieved 5th place overall in the electric division at FSAE Australasia in Melbourne.</p>
        <div class="tags">
          <span class="tag">Electric Vehicles</span>
          <span class="tag">Race Engineering</span>
          <span class="tag">Team Leadership</span>
          <span class="tag">Performance Optimization</span>
        </div>
        <div class="project-links">
          <a href="https://www.fsae.co.nz/" class="project-btn" target="_blank">FSAE NZ</a>
        </div>
      </div>
      
      <div class="project-gallery">
        <div class="gallery-item">
          <img src="images/fsae-1.jpg" alt="Race Car" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Electric Race Car</h4>
            <p>High-performance electric formula race car design</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/fsae-2.jpg" alt="Competition" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Competition Day</h4>
            <p>FSAE Australasia competition in Melbourne</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/fsae-3.jpg" alt="Team" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Team Collaboration</h4>
            <p>Working with the engineering team on race strategy</p>
          </div>
        </div>
      </div>
    </div>

    <!-- AI Robotics Project -->
    <div class="project-section">
      <div class="project-header">
        <h2>AI-Powered Robotics Research</h2>
        <p>Development of dexterous manipulation systems and humanoid robotics at Acumino. Working on next-generation AI-powered robot workers for addressing labor and skill shortages in various industries.</p>
        <div class="tags">
          <span class="tag">AI</span>
          <span class="tag">Humanoid Robotics</span>
          <span class="tag">Dexterous Manipulation</span>
          <span class="tag">Industry Applications</span>
        </div>
        <div class="project-links">
          <a href="https://acumino.ai/" class="project-btn" target="_blank">Acumino</a>
        </div>
      </div>
      
      <div class="project-gallery">
        <div class="gallery-item">
          <img src="images/robot-1.jpg" alt="Humanoid Robot" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Humanoid Design</h4>
            <p>Advanced humanoid robot for industrial applications</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/robot-2.jpg" alt="Manipulation" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Dexterous Hands</h4>
            <p>AI-powered manipulation for complex tasks</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/robot-3.jpg" alt="Lab Work" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Research Lab</h4>
            <p>Development and testing in the Acumino lab</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Crown Equipment Project -->
    <div class="project-section">
      <div class="project-header">
        <h2>Autonomous Forklift Systems</h2>
        <p>Research and development of autonomous features for industrial forklifts at Crown Equipment Corporation's Robotic Technology Centre. Focus on dual-mode automation and warehouse robotics.</p>
        <div class="tags">
          <span class="tag">Industrial Robotics</span>
          <span class="tag">Automation</span>
          <span class="tag">Warehouse Technology</span>
          <span class="tag">C++</span>
        </div>
        <div class="project-links">
          <a href="https://www.crown.com/en-nz/automation/dualmode.html" class="project-btn" target="_blank">Crown Automation</a>
        </div>
      </div>
      
      <div class="project-gallery">
        <div class="gallery-item">
          <img src="images/crown-1.jpg" alt="Autonomous Forklift" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Autonomous Forklift</h4>
            <p>Advanced automation systems for material handling</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/crown-2.jpg" alt="Warehouse Testing" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Warehouse Integration</h4>
            <p>Testing automation in real warehouse environments</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="images/crown-3.jpg" alt="Control Systems" onerror="this.src='images/cover.jpeg'">
          <div class="gallery-overlay">
            <h4>Control Systems</h4>
            <p>Developing dual-mode automation technology</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
