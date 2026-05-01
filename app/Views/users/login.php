<?php require_once APPROOT . '/Views/templates/header.php'; ?>

<div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 bg-white p-10 rounded-2xl shadow-xl border border-slate-100">
        <div>
            <h2 class="mt-6 text-center text-3xl font-extrabold text-slate-900">
                Welcome Back
            </h2>
            <p class="mt-2 text-center text-sm text-slate-600">
                Please sign in to your account
            </p>
        </div>

        <?php flash('register_success'); ?>

        <form id="loginForm" class="mt-8 space-y-6" action="<?= URLROOT; ?>/users/login" method="POST">
            <div class="rounded-md shadow-sm space-y-4">
                <div>
                    <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Email Address</label>
                    <input id="email" name="email" type="email" required 
                        class="appearance-none rounded-xl relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all sm:text-sm <?= (!empty($data['email_err'])) ? 'border-red-500 ring-2 ring-red-100' : ''; ?>" 
                        placeholder="you@example.com" value="<?= $data['email']; ?>">
                    <?php if(!empty($data['email_err'])): ?>
                        <p class="text-xs text-red-500 mt-1"><?= $data['email_err']; ?></p>
                    <?php endif; ?>
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-slate-700 mb-1">Password</label>
                    <input id="password" name="password" type="password" required 
                        class="appearance-none rounded-xl relative block w-full px-4 py-3 border border-slate-300 placeholder-slate-400 text-slate-900 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-all sm:text-sm <?= (!empty($data['password_err'])) ? 'border-red-500 ring-2 ring-red-100' : ''; ?>" 
                        placeholder="••••••••" value="<?= $data['password']; ?>">
                    <?php if(!empty($data['password_err'])): ?>
                        <p class="text-xs text-red-500 mt-1"><?= $data['password_err']; ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="relative">
                <button type="submit" id="submitBtn"
                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-xl text-white bg-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all shadow-lg shadow-primary/25 disabled:opacity-70 disabled:cursor-not-allowed">
                    <span id="btnText">Sign In</span>
                    <span id="loader" class="hidden">
                        <svg class="animate-spin h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </form>

        <div id="loginOverlay" class="fixed inset-0 bg-white/60 backdrop-blur-sm z-[100] hidden flex flex-col items-center justify-center transition-all duration-300">
            <div class="bg-white p-8 rounded-3xl shadow-2xl border border-slate-100 flex flex-col items-center space-y-4 scale-95 animate-in zoom-in-95 duration-300">
                <div class="relative">
                    <div class="w-16 h-16 border-4 border-slate-100 border-t-primary rounded-full animate-spin"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-8 h-8 bg-primary/10 rounded-full animate-pulse"></div>
                    </div>
                </div>
                <div class="text-center">
                    <h3 class="text-lg font-extrabold text-slate-900">Logging in...</h3>
                    <p class="text-sm text-slate-500 font-medium mt-1">Authenticating your account</p>
                </div>
            </div>
        </div>

        <script>
            document.getElementById('loginForm').addEventListener('submit', function(e) {
                const btn = document.getElementById('submitBtn');
                const btnText = document.getElementById('btnText');
                const loader = document.getElementById('loader');
                const overlay = document.getElementById('loginOverlay');

                // Disable button and show spinner
                btn.disabled = true;
                btnText.classList.add('hidden');
                loader.classList.remove('hidden');

                // Show global overlay
                overlay.classList.remove('hidden');
                overlay.classList.add('flex');
            });
        </script>

        <div class="text-center mt-6">
            <p class="text-sm text-slate-600">
                Don't have an account? 
                <a href="<?= URLROOT; ?>/users/register" class="font-bold text-primary hover:text-secondary transition-colors">
                    Create one now
                </a>
            </p>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/Views/templates/footer.php'; ?>
