<?php
// index.php - Simple static homepage

$title = "My Simple PHP Homepage";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>Welcome! This is a static homepage built with PHP and HTML.</p>
    <p>You can edit this file to add more content, links, or styling.</p>

    <hr>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Website</p>
    </footer>
</body>
</html>