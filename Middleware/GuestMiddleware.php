<?php

namespace Middleware;

session_start();
class GuestMiddleware
{
    public static function handle()
    {
        if (isset($_SESSION['user_id'])) {
            // Redirect or handle authenticated user trying to access guest route
            header('Location: /');
            exit();
        }
    }
}
