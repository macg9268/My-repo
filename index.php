<?php
// index.php

// Basic configuration
$title = "My First PHP Page";

// Output HTML
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1>Welcome to <?php echo $title; ?>!</h1>
    <p>This is a simple PHP-powered homepage.</p>
</body>
</html>
