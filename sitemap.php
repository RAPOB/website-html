<?php
header('Content-Type: application/xml; charset=utf-8');

// loc => source file used for an honest lastmod
$pages = [
    ['/',            'index.php',       '1.0'],
    ['/conferences', 'conferences.php', '0.7'],
    ['/adventures',  'adventures.php',  '0.6'],
];

echo '<?xml version="1.0" encoding="UTF-8"?>', "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">', "\n";
foreach ($pages as [$loc, $file, $priority]) {
    $path = __DIR__ . '/' . $file;
    $lastmod = date('Y-m-d', is_file($path) ? filemtime($path) : time());
    echo "  <url>\n";
    echo "    <loc>https://reubenobrien.com{$loc}</loc>\n";
    echo "    <lastmod>{$lastmod}</lastmod>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>{$priority}</priority>\n";
    echo "  </url>\n";
}
echo '</urlset>', "\n";
