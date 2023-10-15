<?php
require_once __DIR__ . '/../Components/Footer.php';
require_once __DIR__ . '/../Components/Header.php';
require_once __DIR__ . '/../Components/SideMenu.php';

function renderLayout($contentCallback) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Web App</title>
        <!-- Include other meta tags, styles, scripts -->
    </head>
    <body>
        <?php renderHeader(); ?>
        <?php renderSideMenu(); ?>
        <main>
            <?php $contentCallback(); ?>
        </main>
        <?php renderFooter(); ?>
    </body>
    </html>
    <?php
}