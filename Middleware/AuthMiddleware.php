<?php


namespace Middleware;

session_start();
class AuthMiddleware
{
    public static function handle()
    {
        if (!isset($_SESSION['user_id'])) {
            // Redirect or handle unauthorized access
            header('Location: /login');
            exit();
        }
    }
}
