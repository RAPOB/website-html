<?php 
$year = date('Y'); 

// Get all images from the adventures folder
$adventuresPath = 'images/adventures/';
$images = [];

if (is_dir($adventuresPath)) {
    $files = scandir($adventuresPath);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)) {
            $images[] = $file;
        }
    }
    // Sort images alphabetically
    sort($images);
}

// Fallback adventure titles and descriptions
$adventureDescriptions = [
    // 'Mountain Adventures - Exploring peaks and conquering challenges',
    // 'Team Leadership - Building and managing successful teams',
    // 'Global Conferences - Presenting research worldwide',
    // 'Racing Engineering - High-speed innovation and competition', 
    // 'Field Research - Testing technology in real environments',
    // 'International Travel - Collaborative research across borders',
    // 'Innovation Labs - Developing cutting-edge solutions',
    // 'Team Collaboration - Working together on complex projects',
    // 'Technical Challenges - Solving complex engineering problems',
    // 'Competition Success - Achieving excellence in motorsport',
    // 'Research Breakthroughs - Advancing the field of robotics',
    // 'Adventure Sports - Pushing personal limits',
    // 'Academic Excellence - Pursuing knowledge and innovation',
    // 'Cultural Exploration - Experiencing diverse perspectives',
    // 'Professional Growth - Developing expertise and skills'
    ''
];
?>
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
      --bg: #0f0a14; 
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
      background: linear-gradient(135deg, var(--bg), #0a0f1e 50%, var(--bg)); 
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
    
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 24px;
      margin: 32px 0;
    }
    
    .gallery-item {
      position: relative;
      aspect-ratio: 4/3;
      border-radius: 16px;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border: 2px solid var(--border);
      background: var(--panel);
    }
    
    .gallery-item:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(255, 178, 0, 0.3);
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
      padding: 20px;
      transform: translateY(100%);
      transition: transform 0.3s ease;
    }
    
    .gallery-item:hover .gallery-overlay {
      transform: translateY(0);
    }
    
    .gallery-overlay h3 {
      margin: 0 0 8px 0;
      font-size: 1.2em;
      color: var(--orange);
    }
    
    .gallery-overlay p {
      margin: 0;
      font-size: 0.9em;
      opacity: 0.9;
    }
    
    @media (max-width: 768px) {
      .header h1 { font-size: 2em; }
      .gallery { grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 16px; }
      .wrap { padding: 20px 16px 60px; }
    }
  </style>
</head>
<body>
  <div class="wrap">
    <a href="/" class="back-btn">← Back to Home</a>
    
    <div class="header">
      <h1>Adventures</h1>
      <p>Capturing moments of planned chaos</p>
      <?php if (count($images) > 0): ?>
        <p style="font-size: 0.9em; opacity: 0.8; margin-top: 12px;">
          <?php echo count($images); ?> adventures captured
        </p>
      <?php endif; ?>
    </div>
    
    <div class="gallery">
      <?php if (count($images) > 0): ?>
        <?php foreach ($images as $index => $image): ?>
          <?php 
            $imagePath = $adventuresPath . $image;
            $imageTitle = pathinfo($image, PATHINFO_FILENAME);
            // Clean up the filename for display
            $displayTitle = ucwords(str_replace(['_', '-'], ' ', $imageTitle));
            // Get description from array, cycle through if we have more images than descriptions
            $description = $adventureDescriptions[$index % count($adventureDescriptions)];
          ?>
          <div class="gallery-item">
            <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                 alt="<?php echo htmlspecialchars($displayTitle); ?>" 
                 loading="lazy"
                 onerror="this.src='images/cover.jpeg'">
            <div class="gallery-overlay">
              <h3><?php echo htmlspecialchars($displayTitle); ?></h3>
              <p><?php echo htmlspecialchars($description); ?></p>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else: ?>
        <!-- Fallback content when no images are found -->
        <div style="grid-column: 1 / -1; text-align: center; padding: 60px 20px;">
          <h3 style="color: var(--orange); margin-bottom: 16px;">No Adventures Yet</h3>
          <p style="color: var(--muted);">
            Upload images to the <code>images/adventures/</code> folder to see them here automatically!
          </p>
        </div>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
