<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Security::esc($data['title']); ?> - <?= SITENAME; ?></title>
    <!-- Modern Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1d4ed8',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        .glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-900 min-h-screen font-sans">
    <header class="sticky top-0 z-50 glass shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="<?= URLROOT; ?>" class="text-2xl font-extrabold text-primary tracking-tight">Spark<span class="text-slate-700">MVC</span></a>
            
            <nav class="hidden md:flex items-center space-x-8">
                <a href="<?= URLROOT; ?>" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Home</a>
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?= URLROOT; ?>/dashboard" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Dashboard</a>
                    <a href="<?= URLROOT; ?>/users/profile" class="text-sm font-semibold text-slate-600 hover:text-primary transition-colors">Profile</a>
                <?php endif; ?>
            </nav>

            <div class="flex items-center space-x-4">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <div class="flex items-center gap-3 bg-white px-3 py-1.5 rounded-full border border-slate-200">
                        <div class="w-7 h-7 bg-primary rounded-full flex items-center justify-center text-white text-xs font-bold uppercase">
                            <?= substr($_SESSION['user_name'], 0, 1); ?>
                        </div>
                        <span class="text-sm font-medium text-slate-700"><?= $_SESSION['user_name']; ?></span>
                    </div>
                    <a href="<?= URLROOT; ?>/users/logout" class="text-sm font-bold text-red-500 hover:text-red-600">Logout</a>
                <?php else : ?>
                    <a href="<?= URLROOT; ?>/users/login" class="text-sm font-bold text-slate-700 hover:text-primary transition-colors">Login</a>
                    <a href="<?= URLROOT; ?>/users/register" class="bg-primary text-white px-5 py-2 rounded-lg text-sm font-bold hover:bg-secondary transition-all shadow-md shadow-primary/20">Sign Up</a>
                <?php endif; ?>
            </div>
        </div>
    </header>
    <main class="container mx-auto px-4 py-8">
