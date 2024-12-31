<?php $var = 'PHP Tutorial'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $var ?> - Document</title>
</head>
<body>

    <?php 
        echo "<h3>".$var."<h3>";
    ?>
    <p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.</p>

    <p><a href="https://www.w3resource.com/php/php-home.php" target="_blank">Go to the <?php echo $var; ?></a>.</p>
</body>
</html>