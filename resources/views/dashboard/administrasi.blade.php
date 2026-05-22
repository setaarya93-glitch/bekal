@extends('layouts.dashboard')

@section('title', 'Administrasi')

@php $activeDashboard = 'administrasi'; @endphp

@section('sidebar')
    <nav class="space-y-1">
        <a href="{{ url('/dashboard/administrasi') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/administrasi') && !request()->is('dashboard/administrasi/*') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/50 dark:text-indigo-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
            <span class="text-sm font-medium">Overview</span>
        </a>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Manajemen</p>
            <a href="{{ url('/dashboard/administrasi/users') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/administrasi/users*') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/50 dark:text-indigo-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                <span class="text-sm">User Management</span>
            </a>
            <a href="{{ url('/dashboard/administrasi/roles') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/administrasi/roles*') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/50 dark:text-indigo-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"/></svg>
                <span class="text-sm">Role & Permission</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Sistem</p>
            <a href="{{ url('/dashboard/administrasi/activity-log') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/administrasi/activity-log*') ? 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/50 dark:text-indigo-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <span class="text-sm">Activity Log</span>
            </a>
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                <span class="text-sm">Pengaturan</span>
            </a>
        </div>
    </nav>
@endsection

@section('header')
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">Dashboard Administrasi</h1>
            <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">Kelola pengguna, laporan, dan pengaturan sistem</p>
        </div>
        <div class="flex items-center gap-2">
            <button class="w-full sm:w-auto px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors flex items-center justify-center space-x-2 text-sm font-medium">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Tambah Pengguna</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Stats Grid --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 mb-6 md:mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Total Pengguna</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">1,247</p>
                    <p class="text-xs text-green-600 mt-1">+12% bulan lalu</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Aktif Hari Ini</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">89</p>
                    <p class="text-xs text-green-600 mt-1">+5% kemarin</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-green-100 dark:bg-green-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Laporan Masuk</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">24</p>
                    <p class="text-xs text-amber-600 mt-1">Perlu ditinjau</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-amber-100 dark:bg-amber-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Status Sistem</p>
                    <p class="text-xl md:text-2xl font-bold text-green-600 dark:text-green-400 mt-1 md:mt-2">Normal</p>
                    <p class="text-xs text-gray-500 mt-1">Uptime 99.9%</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"/></svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
        {{-- Line Chart: Aktivitas Pengguna --}}
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Aktivitas Pengguna</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Interaksi & pendaftaran 7 hari terakhir</p>
                </div>
                <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-indigo-50 text-indigo-700 dark:bg-indigo-900/50 dark:text-indigo-300 flex-shrink-0">
                    Minggu Ini
                </span>
            </div>
            <div class="relative h-48 md:h-72">
                <canvas id="adminActivityChart"></canvas>
            </div>
        </div>

        {{-- Doughnut Chart: Peran Pengguna --}}
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="mb-4">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Peran Pengguna</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Komposisi hak akses</p>
            </div>
            <div class="relative h-48 md:h-72 flex items-center justify-center">
                <canvas id="adminRolesChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isDark = document.documentElement.classList.contains('dark') || document.querySelector('html').getAttribute('class')?.includes('dark');
            const textColor = isDark ? '#9ca3af' : '#4b5563';
            const gridColor = isDark ? '#374151' : '#f3f4f6';

            const ctxActivity = document.getElementById('adminActivityChart').getContext('2d');
            const gradient = ctxActivity.createLinearGradient(0, 0, 0, 300);
            gradient.addColorStop(0, 'rgba(99, 102, 241, 0.4)');
            gradient.addColorStop(1, 'rgba(99, 102, 241, 0.0)');

            new Chart(ctxActivity, {
                type: 'line',
                data: {
                    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    datasets: [{
                        label: 'Pengguna Aktif',
                        data: [65, 78, 72, 89, 85, 92, 120],
                        borderColor: '#6366f1', borderWidth: 3,
                        backgroundColor: gradient, fill: true, tension: 0.4,
                        pointBackgroundColor: '#6366f1', pointHoverRadius: 7
                    }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { display: false }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } },
                    scales: { x: { grid: { display: false }, ticks: { color: textColor, maxTicksLimit: 7 } }, y: { grid: { color: gridColor }, ticks: { color: textColor } } }
                }
            });

            const ctxRoles = document.getElementById('adminRolesChart').getContext('2d');
            new Chart(ctxRoles, {
                type: 'doughnut',
                data: {
                    labels: ['Admin', 'Manager', 'Kasir', 'Customer'],
                    datasets: [{ data: [5, 12, 35, 1195], backgroundColor: ['#4f46e5', '#818cf8', '#c7d2fe', '#e0e7ff'], borderWidth: isDark ? 2 : 0, borderColor: '#1f2937' }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { position: 'bottom', labels: { color: textColor, padding: 12, font: { size: 11 } } }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } },
                    cutout: '65%'
                }
            });
        });
    </script>

    {{-- Recent Activity & Quick Actions --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6">
        {{-- Recent Users --}}
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Pengguna Terbaru</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-3">
                    @for($i = 1; $i <= 5; $i++)
                    <div class="flex items-center justify-between py-2 border-b border-gray-100 dark:border-gray-700 last:border-0">
                        <div class="flex items-center space-x-3 min-w-0">
                            <div class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-gradient-to-br from-indigo-400 to-purple-500 flex items-center justify-center text-white font-medium text-sm flex-shrink-0">
                                U{{ $i }}
                            </div>
                            <div class="min-w-0">
                                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">User {{ $i }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400 truncate">user{{ $i }}@example.com</p>
                            </div>
                        </div>
                        <span class="ml-2 flex-shrink-0 px-2 py-1 text-xs rounded-full {{ $i % 2 == 0 ? 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300' : 'bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300' }}">
                            {{ $i % 2 == 0 ? 'Aktif' : 'Nonaktif' }}
                        </span>
                    </div>
                    @endfor
                </div>
            </div>
        </div>

        {{-- Quick Actions --}}
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Aksi Cepat</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-3">
                    <button class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg bg-indigo-50 text-indigo-700 hover:bg-indigo-100 dark:bg-indigo-900/30 dark:text-indigo-300 dark:hover:bg-indigo-900/50 transition-colors text-sm font-medium">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        <span>Tambah Pengguna Baru</span>
                    </button>
                    <button class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg bg-gray-50 text-gray-700 hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 transition-colors text-sm font-medium">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        <span>Generate Laporan</span>
                    </button>
                    <button class="w-full flex items-center space-x-3 px-4 py-3 rounded-lg bg-gray-50 text-gray-700 hover:bg-gray-100 dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 transition-colors text-sm font-medium">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>Pengaturan Sistem</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
