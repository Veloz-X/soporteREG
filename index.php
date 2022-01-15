<?php 
$actual_link = str_replace('index.php', '', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
?>
<html><head>
        <title>Ticky helpdesk</title>
    </head>
    <body style="text-align: center;padding: 0;margin: 0;background: #0b655c;">
    <div class="ticky-page" style="
    background: white;
    margin: 2rem auto;
    max-width: 30rem;
    padding: 0.5rem 1rem;
    border-radius: 0.5rem;
    box-shadow: 0 0 5rem 0.1rem #00000033;
">
        <p style="text-align:center;color: #607d8b;font-size: 1.5rem;">
            It looks like /public folder is not your subdomain / domain root folder
        </p>

        <a href="https://support.pandisoft.com/articles/18/" target="_blank">Removing /public from URLs</a>

        <p>
            Your ticky URL is <a href="<?php echo $actual_link; ?>public"><?php echo $actual_link; ?>public</a>
        </p>
    </div>
</body></html>

<?php exit(); ?>

<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';
