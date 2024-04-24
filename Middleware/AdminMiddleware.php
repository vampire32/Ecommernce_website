<?php

namespace Middleware;
 session_start();
class AdminMiddleware
{
    public static function handle()
    {
        // Check if user session is present
        if (!isset($_SESSION['user_role'])) {
            header('Location: /admin');
            exit();
        }
    }
}
