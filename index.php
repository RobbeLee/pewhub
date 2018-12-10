<?php
require_once 'include/db.php';
require_once 'include/header.php';
require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once 'include/header.php'; ?>
        <title><?php echo ucfirst($brand); ?></title>
        <!-- use cookies for dark and light theme -->
        <link rel="stylesheet" href="/videoPlatform/assets/css/home.css">
        <link rel="stylesheet" href="/videoPlatform/assets/css/default.css">
    </head>
    <body>
        <div class="container">
            <?php include 'include/nav.php'; ?>
            <main id="main">
            </main>
        </div>
        <?php include $root.'/videoPlatform/include/scripts.php'; ?>
        <script>$(document).ready(function(){$('#nav-toggle').prop('checked', true);$('#main').css('padding-left','230px');});</script>
        <script>
            let navToggle = document.getElementById('nav-toggle');
            $('#nav-toggle').click(function() {
                if (navToggle.checked) {
                    console.log("checked");
                    $('#main').css('padding-left','230px');
                } else {
                    console.log("unchecked");
                    $('#main').css('padding-left','0');
                }
            });
        </script>
    </body>
</html>
