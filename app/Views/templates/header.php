<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Security::esc($data['title']); ?> - <?= SITENAME; ?></title>
    <!-- Modern Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= URLROOT; ?>/css/style.css">
</head>
<body>
    <header class="navbar">
        <div class="container">
            <h1><a href="<?= URLROOT; ?>"><?= SITENAME; ?></a></h1>
            <nav>
                <ul>
                    <li><a href="<?= URLROOT; ?>/home">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container">
