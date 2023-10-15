<?php
require_once __DIR__ . '/Layouts/Layout.php';

function renderHomeContent() {
    ?>
    <!-- Home page specific content goes here -->
    <h1>Welcome to the Home Page</h1>
    <p>This is the home content.</p>
    <?php
}

renderLayout('renderHomeContent');