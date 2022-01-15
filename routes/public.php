<?php 

Auth::routes([
    'verify' => (boolean)setting('verify_email', true),
    'register' => (boolean)setting('user_can_register', true),
]);
