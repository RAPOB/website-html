<?php
$year = date('Y');
$adventuresPath = 'images/adventures/';
$images = [];

if (is_dir($adventuresPath)) {
    $files = scandir($adventuresPath);
    $seenImages = [];
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..' && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file)) {
            $coreFilename = strtolower(preg_replace('/^\d{2}_\d{2}_/', '', $file));
            if (!isset($seenImages[$coreFilename])) {
                $seenImages[$coreFilename] = $file;
                $images[] = $file;
            } elseif (preg_match('/^\d{2}_\d{2}_/', $file) && !preg_match('/^\d{2}_\d{2}_/', $seenImages[$coreFilename])) {
                $images = array_filter($images, fn($img) => $img !== $seenImages[$coreFilename]);
                $seenImages[$coreFilename] = $file;
                $images[] = $file;
            }
        }
    }
    usort($images, function($a, $b) {
        preg_match('/^(\d{2})_(\d{2})/', $a, $mA);
        preg_match('/^(\d{2})_(\d{2})/', $b, $mB);
        if (count($mA) >= 3 && count($mB) >= 3) {
            return $mA[1] !== $mB[1] ? $mB[1] - $mA[1] : $mB[2] - $mA[2];
        }
        if (count($mA) >= 3) return -1;
        if (count($mB) >= 3) return 1;
        return strcmp($a, $b);
    });
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Adventures - Reuben O'Brien</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Adventures by Reuben O'Brien. Planned chaos.">
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

  .wrap { max-width: 1100px; margin: 0 auto; padding: 0 24px 80px; }

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
  .nav-links a.active { color: var(--text); border-bottom-color: var(--accent); }
  .nav-sep { width: 1px; height: 16px; background: var(--border); margin: 0 8px; }
  .nav-links a.nav-page {
    margin-left: 0; padding: 5px 14px;
    background: linear-gradient(135deg, var(--accent), var(--accent-2), var(--magenta));
    border-radius: 20px; color: #fff; font-size: 14px; font-weight: 700;
    border-bottom: none; box-shadow: 0 2px 12px rgba(235,91,0,0.3);
    transition: box-shadow 0.18s, transform 0.18s;
  }
  .nav-links a.nav-page:hover { text-decoration: none; color: #fff; box-shadow: 0 4px 20px rgba(235,91,0,0.5); transform: translateY(-1px); }
  .nav-links a.nav-page.active { box-shadow: 0 4px 20px rgba(235,91,0,0.5); }

  .page-header { padding: 52px 0 40px; border-bottom: 1px solid var(--border); margin-bottom: 48px; }
  .page-header h1 { font-size: 40px; font-weight: 800; letter-spacing: -1.5px; margin: 0 0 10px; }
  .page-header p { color: var(--muted); font-size: 17px; margin: 0; }

  .gallery {
    columns: 3;
    column-gap: 16px;
  }
  .gallery-item {
    break-inside: avoid;
    margin-bottom: 16px;
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--border);
    position: relative;
    cursor: pointer;
    display: block;
  }
  .gallery-item img {
    width: 100%; display: block;
    transition: transform 0.3s ease;
  }
  .gallery-item:hover img { transform: scale(1.03); }
  .gallery-item:hover { border-color: var(--accent); }

  .empty {
    color: var(--muted); text-align: center; padding: 60px 0;
    font-size: 16px;
  }

  /* Lightbox */
  .lightbox {
    display: none; position: fixed; inset: 0;
    background: rgba(0,0,0,0.92); z-index: 999;
    align-items: center; justify-content: center;
  }
  .lightbox.open { display: flex; }
  .lightbox img {
    max-width: 92vw; max-height: 92vh;
    border-radius: 8px; object-fit: contain;
  }
  .lightbox-close {
    position: absolute; top: 20px; right: 28px;
    color: #fff; font-size: 32px; cursor: pointer; line-height: 1;
    background: none; border: none;
  }

  footer { padding: 40px 0 0; color: var(--muted); font-size: 13px; text-align: center; }

  @media (max-width: 900px) { .gallery { columns: 2; } }
  @media (max-width: 640px) {
    .wrap { padding: 0 16px 60px; }
    .gallery { columns: 1; }
    .page-header h1 { font-size: 28px; }
    .nav-links a { margin-left: 12px; font-size: 14px; }
    .nav-links a:not(.nav-page) { display: none; }
    .nav-sep { display: none; }
  }
  </style>
</head>
<body>
<div class="wrap">

  <nav class="site-nav">
    <div class="brand">
      <a href="/" style="color: var(--text);">Reuben O'Brien</a>
    </div>
    <div class="nav-links">
      <a href="/#projects">Projects</a>
      <a href="/#publications">Publications</a>
      <a href="/#about">About</a>
      <a href="/#contact">Contact</a>
      <div class="nav-sep" aria-hidden="true"></div>
      <a href="/adventures" class="nav-page active">Adventures</a>
    </div>
  </nav>

  <div class="page-header">
    <h1>Adventures</h1>
    <p>Planned chaos<?php if (count($images) > 0): ?> &middot; <?php echo count($images); ?> captured<?php endif; ?></p>
  </div>

  <?php if (count($images) > 0): ?>
    <div class="gallery">
      <?php foreach ($images as $image): ?>
        <?php
          $path = $adventuresPath . $image;
          $label = ucwords(str_replace(['_', '-'], ' ', preg_replace('/^\d{2}_\d{2}_/', '', pathinfo($image, PATHINFO_FILENAME))));
        ?>
        <div class="gallery-item" onclick="openLightbox('<?php echo htmlspecialchars($path); ?>')">
          <img src="<?php echo htmlspecialchars($path); ?>"
               alt="<?php echo htmlspecialchars($label); ?>"
               loading="lazy"
               onerror="this.closest('.gallery-item').style.display='none'">
        </div>
      <?php endforeach; ?>
    </div>
  <?php else: ?>
    <p class="empty">No photos yet. Drop images into <code>images/adventures/</code> named <code>YY_MM_description.jpg</code>.</p>
  <?php endif; ?>

  <footer>&copy; <?php echo $year; ?> Reuben O'Brien &middot; Send It...</footer>
</div>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
  <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
  <img id="lightbox-img" src="" alt="">
</div>

<script>
function openLightbox(src) {
  document.getElementById('lightbox-img').src = src;
  document.getElementById('lightbox').classList.add('open');
}
function closeLightbox() {
  document.getElementById('lightbox').classList.remove('open');
  document.getElementById('lightbox-img').src = '';
}
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });
</script>
</body>
</html>
