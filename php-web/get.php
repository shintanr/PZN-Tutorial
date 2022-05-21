<?php
$say = "Hello " . htmlspecialchars($_GET['name'] . " ". $_GET['last_name']);
?>

<html>
    <body>
        <h1><?= $say ?></h1>
    </body>
</html>