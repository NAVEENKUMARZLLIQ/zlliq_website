<?php
// Test connection and PHP functionality
echo "<!DOCTYPE html>";
echo "<html><head><title>Connection Test</title></head><body>";
echo "<h1>PHP Connection Test</h1>";
echo "<p>Current Time: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server: " . $_SERVER['HTTP_HOST'] . "</p>";
echo "<p>Script: " . $_SERVER['SCRIPT_NAME'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";

echo "<h2>File Check:</h2>";
$files = ['index.php', 'home-page.php', 'header.php', 'footer.php'];
foreach($files as $file) {
    if(file_exists($file)) {
        echo "<p style='color: green;'>✓ $file exists</p>";
    } else {
        echo "<p style='color: red;'>✗ $file missing</p>";
    }
}

echo "<h2>Navigation Test:</h2>";
echo "<p><a href='index.php'>Test index.php</a></p>";
echo "<p><a href='home-page.php'>Test home-page.php</a></p>";
echo "<p><a href='services.php'>Test services.php</a></p>";

echo "</body></html>";
?>