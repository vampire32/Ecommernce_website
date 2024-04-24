<?php

namespace Middleware;

class AdminMiddleware
{
    public static function handle()
    {
        // Assume $_SESSION['user_role'] contains the role of the user
        if ($_SESSION['user_role'] !== 'admin') {
            // Redirect or handle unauthorized access
            header('Location: /admin');
            exit();
        }
    }
}
