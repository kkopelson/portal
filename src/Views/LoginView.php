<?php

namespace App\Views;

class LoginView {

    public function renderLogin($mcdata, $hwcompany, $msg = null, $msg1 = null) {
        // Begin output buffering to capture the HTML as a string
        ob_start();

        // Here's how you can close PHP tags, insert HTML, then reopen your PHP tags:
        ?>
        
        <!-- You can use the variables here -->
        <div>
            <!-- Use $msg and $msg1 for error messages or notifications -->
            <?php if($msg): ?>
                <p class="error"><?= $msg; ?></p>
            <?php endif; ?>

            <?php if($msg1): ?>
                <p class="notification"><?= $msg1; ?></p>
            <?php endif; ?>
        </div>

        <form action="/login-process" method="post">
            <input type="hidden" name="hwcompany" value="<?= $hwcompany; ?>" />

            <label for="username">Username:</label>
            <input type="text" id="username" name="username">
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password">
            
            <input type="submit" value="Login">
        </form>
        
        <?php

        // Return the captured HTML
        return ob_get_clean();
    }
}