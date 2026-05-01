<?php require_once APPROOT . '/Views/templates/header.php'; ?>

<div class="space-y-8">
    <div class="flex items-center justify-between">
        <div>
            <div class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-bold bg-primary/10 text-primary mb-2">
                ADMIN PANEL
            </div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">System Overview</h1>
            <p class="text-slate-500 mt-1">Global administrative controls and real-time system metrics.</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-primary text-white px-6 py-2.5 rounded-xl text-sm font-bold hover:bg-secondary transition-all shadow-lg shadow-primary/20">System Settings</button>
        </div>
    </div>

    <!-- Admin Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total Users</p>
            <h3 class="text-3xl font-extrabold text-slate-900 mt-1">1,280</h3>
            <div class="mt-2 text-xs font-bold text-emerald-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7 7 7" />
                </svg>
                12% from last month
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Revenue</p>
            <h3 class="text-3xl font-extrabold text-slate-900 mt-1">$42,500</h3>
            <div class="mt-2 text-xs font-bold text-emerald-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 10l7-7 7 7" />
                </svg>
                8% from yesterday
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Server Load</p>
            <h3 class="text-3xl font-extrabold text-slate-900 mt-1">24%</h3>
            <div class="mt-2 text-xs font-bold text-amber-500 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 w-3 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M12 8v4l3 3" />
                </svg>
                Optimal performance
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-wider">Security</p>
            <h3 class="text-3xl font-extrabold text-emerald-500 mt-1">Active</h3>
            <div class="mt-2 text-xs font-bold text-emerald-500 flex items-center">
                All systems safe
            </div>
        </div>
    </div>

    <!-- Management Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <h2 class="text-xl font-extrabold text-slate-900 mb-6">User Management</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-slate-200 rounded-full"></div>
                        <div>
                            <p class="text-sm font-bold text-slate-900">Michael Scott</p>
                            <p class="text-xs text-slate-500">michael@dundermifflin.com</p>
                        </div>
                    </div>
                    <span class="px-2 py-1 bg-emerald-100 text-emerald-700 text-[10px] font-bold rounded-lg uppercase">User</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-xl border border-primary/20">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-primary/20 rounded-full flex items-center justify-center text-primary font-bold">V</div>
                        <div>
                            <p class="text-sm font-bold text-slate-900"><?= $data['user_name']; ?> (You)</p>
                            <p class="text-xs text-slate-500"><?= $_SESSION['user_email']; ?></p>
                        </div>
                    </div>
                    <span class="px-2 py-1 bg-primary/10 text-primary text-[10px] font-bold rounded-lg uppercase">Admin</span>
                </div>
            </div>
            <button class="mt-6 w-full py-3 text-sm font-bold text-primary hover:bg-primary/5 transition-colors rounded-xl border border-dashed border-primary/50">View All Users</button>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-100 p-8">
            <h2 class="text-xl font-extrabold text-slate-900 mb-6">System Logs</h2>
            <div class="space-y-4">
                <div class="flex space-x-4">
                    <div class="w-2 h-2 mt-1.5 bg-red-500 rounded-full"></div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Failed login attempt</p>
                        <p class="text-xs text-slate-400">IP: 192.168.1.105 • 5 mins ago</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <div class="w-2 h-2 mt-1.5 bg-emerald-500 rounded-full"></div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">Database backup completed</p>
                        <p class="text-xs text-slate-400">Cloud Storage • 1 hour ago</p>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <div class="w-2 h-2 mt-1.5 bg-primary rounded-full"></div>
                    <div>
                        <p class="text-sm font-semibold text-slate-800">New user registered</p>
                        <p class="text-xs text-slate-400">user: dwight_schrute • 3 hours ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/Views/templates/footer.php'; ?>
