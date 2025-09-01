<?php
header("Content-Type: application/xml; charset=utf-8");

// Change this to your domain
$domain = "https://www.zlliq.com";

$pages = [
    "/",              // homepage
    "/about",         // about page
    "/services",      // services page
    "/contact",       // contact page
    // add more URLs here
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach($pages as $page): ?>
  <url>
    <loc><?= $domain . $page ?></loc>
    <lastmod><?= date('Y-m-d') ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority><?= $page === "/" ? "1.0" : "0.8" ?></priority>
  </url>
<?php endforeach; ?>
</urlset>
