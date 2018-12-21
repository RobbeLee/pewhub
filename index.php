<?php
require_once 'include/db.php';
require_once 'include/header.php';
require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'include/header.php'; ?>
        <title><?php echo ucfirst($_BRAND); ?></title>
        <?php echo getTheme($fetchDir); ?>
    </head>
    <body>
        <div class="container">
            <?php include 'include/nav.php'; ?>
            <main id="main">
            </main>
        </div>
    </body>
</html>
