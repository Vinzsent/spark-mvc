<?php require_once APPROOT . '/Views/templates/header.php'; ?>

<div class="space-y-8">
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">User Dashboard</h1>
            <p class="text-slate-500 mt-1">Welcome back, <?= $data['user_name']; ?>. Here's what's happening today.</p>
        </div>
        <div class="flex space-x-3">
            <button class="bg-white border border-slate-200 px-4 py-2 rounded-xl text-sm font-semibold hover:bg-slate-50 transition-all shadow-sm">Download Report</button>
            <button class="bg-primary text-white px-4 py-2 rounded-xl text-sm font-semibold hover:bg-secondary transition-all shadow-lg shadow-primary/20">New Action</button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center space-x-4">
            <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500">Active Sessions</p>
                <h3 class="text-2xl font-bold text-slate-900">12</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center space-x-4">
            <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500">Completed Tasks</p>
                <h3 class="text-2xl font-bold text-slate-900">48</h3>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 flex items-center space-x-4">
            <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center text-amber-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                </svg>
            </div>
            <div>
                <p class="text-sm font-medium text-slate-500">Energy Score</p>
                <h3 class="text-2xl font-bold text-slate-900">92%</h3>
            </div>
        </div>
    </div>

    <!-- Content Area -->
    <div class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
        <div class="px-6 py-4 border-b border-slate-100">
            <h2 class="text-lg font-bold text-slate-900">Recent Activity</h2>
        </div>
        <div class="divide-y divide-slate-100">
            <div class="px-6 py-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
                <div class="flex items-center space-x-4">
                    <div class="w-2 h-2 bg-primary rounded-full"></div>
                    <span class="text-sm text-slate-700 font-medium">Updated profile information</span>
                </div>
                <span class="text-xs text-slate-400">2 hours ago</span>
            </div>
            <div class="px-6 py-4 flex items-center justify-between hover:bg-slate-50 transition-colors">
                <div class="flex items-center space-x-4">
                    <div class="w-2 h-2 bg-emerald-500 rounded-full"></div>
                    <span class="text-sm text-slate-700 font-medium">Logged in successfully</span>
                </div>
                <span class="text-xs text-slate-400">5 hours ago</span>
            </div>
        </div>
    </div>
</div>

<?php require_once APPROOT . '/Views/templates/footer.php'; ?>
