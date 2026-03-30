<?php
// Initialize session for CSRF tokens
session_start();

// Require config and core files
require_once '../app/Config/config.php';
require_once '../app/Core/Database.php';
require_once '../app/Core/Security.php';
require_once '../app/Core/Controller.php';
require_once '../app/Core/App.php';

// Instantiate the App
$app = new App();
