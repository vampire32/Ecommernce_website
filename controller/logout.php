<?php
session_start();


session_unset();

// Redirect the user to the homepage
header("Location: /");

session_destroy();

