@extends('layouts.dashboard')

@section('title', 'CRM')

@php $activeDashboard = 'crm'; @endphp

@section('sidebar')
    <nav class="space-y-1">
        <a href="{{ url('/dashboard/crm') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/crm') && !request()->is('dashboard/crm/*') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
            <span class="text-sm font-medium">Overview</span>
        </a>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Penjualan</p>
            <a href="{{ url('/dashboard/crm/leads') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/crm/leads*') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                <span class="text-sm">Leads</span>
            </a>
            <a href="{{ url('/dashboard/crm/pipeline') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/crm/pipeline*') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span class="text-sm">Sales Pipeline</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Pelanggan</p>
            <a href="{{ url('/dashboard/crm/customers') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/crm/customers*') ? 'bg-blue-50 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                <span class="text-sm">Customers</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Tools</p>
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                <span class="text-sm">Tugas & Follow-up</span>
            </a>
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span class="text-sm">Analitik</span>
            </a>
        </div>
    </nav>
@endsection

@section('header')
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">CRM Dashboard</h1>
            <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">Kelola hubungan pelanggan dan tracking leads</p>
        </div>
        <button class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center justify-center space-x-2 text-sm font-medium">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
            <span>Tambah Lead</span>
        </button>
    </div>
@endsection

@section('content')
    {{-- CRM Stats --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 mb-6 md:mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Total Pelanggan</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">3,456</p>
                    <p class="text-xs text-green-600 mt-1">+8% bulan lalu</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Leads Aktif</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">128</p>
                    <p class="text-xs text-blue-600 mt-1">+15 minggu ini</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-indigo-100 dark:bg-indigo-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-indigo-600 dark:text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Konversi</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">24.5%</p>
                    <p class="text-xs text-green-600 mt-1">+2.1% naik</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-green-100 dark:bg-green-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Pendapatan</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">Rp 2.4M</p>
                    <p class="text-xs text-green-600 mt-1">+12% target</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Tren Pendapatan</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Nilai penjualan bulanan (Juta Rp)</p>
                </div>
                <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-blue-50 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300 flex-shrink-0">Tahun Ini</span>
            </div>
            <div class="relative h-48 md:h-72">
                <canvas id="crmRevenueChart"></canvas>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="mb-4">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Distribusi Leads</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Komposisi tahapan sales</p>
            </div>
            <div class="relative h-48 md:h-72 flex items-center justify-center">
                <canvas id="crmLeadsChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isDark = document.documentElement.classList.contains('dark') || document.querySelector('html').getAttribute('class')?.includes('dark');
            const textColor = isDark ? '#9ca3af' : '#4b5563';
            const gridColor = isDark ? '#374151' : '#f3f4f6';

            const ctxRevenue = document.getElementById('crmRevenueChart').getContext('2d');
            const gradientBlue = ctxRevenue.createLinearGradient(0, 0, 0, 300);
            gradientBlue.addColorStop(0, 'rgba(59, 130, 246, 0.4)');
            gradientBlue.addColorStop(1, 'rgba(59, 130, 246, 0.0)');

            new Chart(ctxRevenue, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                    datasets: [{ label: 'Pendapatan (Juta Rp)', data: [120, 145, 130, 168, 189, 210, 240], borderColor: '#3b82f6', borderWidth: 3, backgroundColor: gradientBlue, fill: true, tension: 0.4, pointBackgroundColor: '#3b82f6', pointHoverRadius: 7 }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { display: false }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } },
                    scales: { x: { grid: { display: false }, ticks: { color: textColor } }, y: { grid: { color: gridColor }, ticks: { color: textColor } } }
                }
            });

            new Chart(document.getElementById('crmLeadsChart').getContext('2d'), {
                type: 'doughnut',
                data: { labels: ['Prospect', 'Qualified', 'Proposal', 'Negotiation'], datasets: [{ data: [38, 24, 18, 12], backgroundColor: ['#1d4ed8', '#3b82f6', '#93c5fd', '#dbeafe'], borderWidth: isDark ? 2 : 0, borderColor: '#1f2937' }] },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', labels: { color: textColor, padding: 12, font: { size: 11 } } }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } }, cutout: '65%' }
            });
        });
    </script>

    {{-- Sales Pipeline (scrollable on mobile) --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Sales Pipeline</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="overflow-x-auto -mx-4 px-4 md:-mx-6 md:px-6">
                    <div class="grid grid-cols-4 gap-3 min-w-[768px]">
                        @foreach(['Prospect', 'Qualified', 'Proposal', 'Negotiation'] as $stage)
                        <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-3">
                            <h4 class="text-xs font-semibold text-gray-700 dark:text-gray-300 mb-2 truncate">{{ $stage }}</h4>
                            <div class="space-y-2">
                                @for($i = 1; $i <= 3; $i++)
                                <div class="bg-white dark:bg-gray-600 p-2 rounded shadow-sm">
                                    <p class="text-xs font-medium text-gray-900 dark:text-white truncate">Lead {{ $stage }} {{ $i }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Rp {{ number_format(rand(1, 10) * 1000000, 0, ',', '.') }}</p>
                                </div>
                                @endfor
                            </div>
                            <div class="mt-2 pt-2 border-t border-gray-200 dark:border-gray-600">
                                <p class="text-xs text-gray-600 dark:text-gray-400">{{ rand(5, 15) }} leads</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Aktivitas Hari Ini</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-4">
                    @foreach(['Meeting dengan ABC Corp', 'Follow-up email XYZ', 'Call dengan Prospect Baru', 'Update deal status'] as $activity)
                    <div class="flex items-start space-x-3">
                        <div class="w-8 h-8 rounded-full bg-blue-100 dark:bg-blue-900/50 flex items-center justify-center flex-shrink-0">
                            <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <div class="min-w-0">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">{{ $activity }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">{{ rand(1, 4) }} jam yang lalu</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Customers Table --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Pelanggan Terbaru</h3>
            <button class="text-blue-600 hover:text-blue-700 text-sm font-medium flex-shrink-0 ml-2">Lihat Semua</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-max">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Pelanggan</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Nilai</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase hidden sm:table-cell">Terakhir Kontak</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach(['PT Maju Jaya', 'CV Sinar Abadi', 'PT Digital Nusantara', 'Toko Berkah', 'UD Sumber Rejeki'] as $customer)
                    <tr>
                        <td class="px-4 md:px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 md:w-10 md:h-10 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white font-medium text-sm flex-shrink-0">
                                    {{ substr($customer, 0, 1) }}
                                </div>
                                <div class="min-w-0">
                                    <p class="text-sm font-medium text-gray-900 dark:text-white truncate max-w-28 md:max-w-none">{{ $customer }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400 hidden sm:block">customer@email.com</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-4 md:px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300">Active</span>
                        </td>
                        <td class="px-4 md:px-6 py-4 text-sm text-gray-900 dark:text-white whitespace-nowrap">Rp {{ number_format(rand(5, 50) * 100000, 0, ',', '.') }}</td>
                        <td class="px-4 md:px-6 py-4 text-sm text-gray-500 dark:text-gray-400 hidden sm:table-cell whitespace-nowrap">{{ rand(1, 7) }} hari lalu</td>
                        <td class="px-4 md:px-6 py-4">
                            <button class="text-blue-600 hover:text-blue-700 text-sm font-medium">Detail</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
