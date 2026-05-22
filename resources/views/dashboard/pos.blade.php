@extends('layouts.dashboard')

@section('title', 'POS')

@php $activeDashboard = 'pos'; @endphp

@section('sidebar')
    <nav class="space-y-1">
        <a href="{{ url('/dashboard/pos') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/pos') && !request()->is('dashboard/pos/*') ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
            <span class="text-sm font-medium">Dashboard POS</span>
        </a>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Operasional</p>
            <a href="{{ url('/dashboard/pos/kasir') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/pos/kasir*') ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                <span class="text-sm">POS Kasir <span class="text-xs text-emerald-500">(Cepat)</span></span>
            </a>
            <a href="{{ url('/dashboard/pos/transactions') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/pos/transactions*') ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
                <span class="text-sm">Transaksi</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Marketing</p>
            <a href="{{ url('/dashboard/pos/promo') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/pos/promo*') ? 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                <span class="text-sm">Promo & Diskon</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Laporan</p>
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                <span class="text-sm">Laporan Harian</span>
            </a>
        </div>
    </nav>
@endsection

@section('header')
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">Point of Sale</h1>
            <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">Transaksi penjualan dan manajemen kasir</p>
        </div>
        <span class="inline-flex items-center px-3 py-1.5 bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300 rounded-full text-sm font-medium self-start sm:self-auto">
            <span class="w-2 h-2 rounded-full bg-green-500 mr-2 animate-pulse"></span>
            Kasir: Terminal 1
        </span>
    </div>
@endsection

@section('content')
    {{-- Quick Stats --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 mb-6 md:mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Penjualan Hari Ini</p>
                    <p class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">Rp 12.5M</p>
                    <p class="text-xs text-green-600 mt-1">+23% kemarin</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-emerald-100 dark:bg-emerald-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Transaksi</p>
                    <p class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">142</p>
                    <p class="text-xs text-blue-600 mt-1">Hari ini</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Rata-rata</p>
                    <p class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">Rp 88K</p>
                    <p class="text-xs text-green-600 mt-1">+5% naik</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-amber-100 dark:bg-amber-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Refund</p>
                    <p class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">3</p>
                    <p class="text-xs text-red-600 mt-1">Rp 450K total</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-red-100 dark:bg-red-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6"/></svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Tren Transaksi Harian</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Jumlah transaksi per interval waktu</p>
                </div>
                <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-emerald-50 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 flex-shrink-0">Kasir Aktif</span>
            </div>
            <div class="relative h-48 md:h-72">
                <canvas id="posSalesChart"></canvas>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="mb-4">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Metode Pembayaran</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Perbandingan jenis pembayaran</p>
            </div>
            <div class="relative h-48 md:h-72 flex items-center justify-center">
                <canvas id="posPaymentChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isDark = document.documentElement.classList.contains('dark') || document.querySelector('html').getAttribute('class')?.includes('dark');
            const textColor = isDark ? '#9ca3af' : '#4b5563';
            const gridColor = isDark ? '#374151' : '#f3f4f6';

            new Chart(document.getElementById('posSalesChart').getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['09:00', '11:00', '13:00', '15:00', '17:00', '19:00', '21:00'],
                    datasets: [{ label: 'Transaksi', data: [12, 28, 45, 30, 48, 72, 38], backgroundColor: '#10b981', borderRadius: 6, borderSkipped: false }]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: { legend: { display: false }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } },
                    scales: { x: { grid: { display: false }, ticks: { color: textColor } }, y: { grid: { color: gridColor }, ticks: { color: textColor } } }
                }
            });

            new Chart(document.getElementById('posPaymentChart').getContext('2d'), {
                type: 'pie',
                data: { labels: ['Tunai', 'QRIS', 'Kartu'], datasets: [{ data: [55, 62, 25], backgroundColor: ['#047857', '#10b981', '#a7f3d0'], borderWidth: isDark ? 2 : 0, borderColor: '#1f2937' }] },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', labels: { color: textColor, padding: 12, font: { size: 11 } } }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } } }
            });
        });
    </script>

    {{-- POS Layout --}}
    <div x-data="{ activeTab: 'products' }" class="space-y-4">
        {{-- Mobile Tab Switcher --}}
        <div class="flex lg:hidden bg-gray-100 dark:bg-gray-700/50 p-1 rounded-xl">
            <button @click="activeTab = 'products'"
                    :class="activeTab === 'products' ? 'bg-white dark:bg-gray-800 text-emerald-600 dark:text-emerald-400 shadow-sm' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200'"
                    class="flex-1 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200">
                Produk
            </button>
            <button @click="activeTab = 'cart'"
                    :class="activeTab === 'cart' ? 'bg-white dark:bg-gray-800 text-emerald-600 dark:text-emerald-400 shadow-sm' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200'"
                    class="flex-1 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 flex items-center justify-center space-x-2">
                <span>Keranjang</span>
                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs font-bold leading-none text-white bg-emerald-500 rounded-full">3</span>
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6">
            {{-- Product Grid --}}
            <div :class="activeTab === 'products' ? 'block' : 'hidden lg:block'"
                 class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                    <div class="flex items-center justify-between mb-3">
                        <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Produk</h3>
                        <div class="flex space-x-1 md:space-x-2">
                            <button class="px-2 md:px-3 py-1 text-xs md:text-sm rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 font-medium">Semua</button>
                            <button class="px-2 md:px-3 py-1 text-xs md:text-sm rounded-full text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700">Makanan</button>
                            <button class="px-2 md:px-3 py-1 text-xs md:text-sm rounded-full text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700">Minuman</button>
                        </div>
                    </div>
                    <div class="relative">
                        <input type="text" placeholder="Cari produk..." class="w-full pl-9 pr-4 py-2 text-sm border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                </div>
                <div class="p-3 md:p-6">
                    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 gap-2 md:gap-4">
                        @foreach(['Nasi Goreng', 'Mie Goreng', 'Ayam Bakar', 'Sate Ayam', 'Es Teh', 'Kopi', 'Jus Jeruk', 'Air Mineral'] as $product)
                        <button class="group p-3 md:p-4 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-emerald-500 dark:hover:border-emerald-500 hover:shadow-md transition-all text-left active:scale-95">
                            <div class="w-full h-16 md:h-20 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-600 rounded-lg mb-2 md:mb-3 flex items-center justify-center">
                                <svg class="w-6 h-6 md:w-8 md:h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                            </div>
                            <h4 class="font-medium text-gray-900 dark:text-white text-xs md:text-sm truncate">{{ $product }}</h4>
                            <p class="text-emerald-600 dark:text-emerald-400 font-semibold text-xs md:text-sm">Rp {{ number_format(rand(15, 50) * 1000, 0, ',', '.') }}</p>
                            <p class="text-xs text-gray-500 dark:text-gray-400">Stok: {{ rand(10, 100) }}</p>
                        </button>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Cart --}}
            <div :class="activeTab === 'cart' ? 'block' : 'hidden lg:block'"
                 class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
                <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Keranjang</h3>
                </div>
                <div class="p-4 md:p-6">
                    <div class="space-y-2 mb-4 max-h-48 md:max-h-64 overflow-y-auto">
                        @foreach(['Nasi Goreng', 'Es Teh', 'Ayam Bakar'] as $item)
                        <div class="flex items-center justify-between p-2.5 md:p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                            <div class="flex items-center space-x-2 min-w-0">
                                <div class="w-8 h-8 bg-gray-200 dark:bg-gray-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                </div>
                                <div class="min-w-0">
                                    <p class="text-xs font-medium text-gray-900 dark:text-white truncate">{{ $item }}</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Rp {{ number_format(rand(15, 35) * 1000, 0, ',', '.') }}</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-1.5 flex-shrink-0 ml-2">
                                <button class="w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-300 text-sm font-bold hover:bg-gray-300 dark:hover:bg-gray-500 active:scale-95">-</button>
                                <span class="text-sm font-medium w-5 text-center">1</span>
                                <button class="w-6 h-6 rounded-full bg-emerald-500 flex items-center justify-center text-white text-sm font-bold hover:bg-emerald-600 active:scale-95">+</button>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="border-t border-gray-200 dark:border-gray-700 pt-3 space-y-2">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600 dark:text-gray-400">Subtotal</span>
                            <span class="font-medium text-gray-900 dark:text-white">Rp 75,000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600 dark:text-gray-400">PPN (10%)</span>
                            <span class="font-medium text-gray-900 dark:text-white">Rp 7,500</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600 dark:text-gray-400">Diskon</span>
                            <span class="font-medium text-emerald-600">-Rp 5,000</span>
                        </div>
                        <div class="flex justify-between text-base font-bold pt-2 border-t border-gray-200 dark:border-gray-700">
                            <span class="text-gray-900 dark:text-white">Total</span>
                            <span class="text-emerald-600">Rp 77,500</span>
                        </div>
                    </div>

                    <div class="mt-4 space-y-2">
                        <button class="w-full py-3 bg-emerald-600 text-white rounded-lg font-semibold hover:bg-emerald-700 transition-colors flex items-center justify-center space-x-2 active:scale-95">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            <span>Bayar Tunai</span>
                        </button>
                        <div class="grid grid-cols-2 gap-2">
                            <button class="py-2.5 bg-blue-600 text-white rounded-lg font-medium hover:bg-blue-700 transition-colors text-sm active:scale-95">QRIS</button>
                            <button class="py-2.5 bg-gray-600 text-white rounded-lg font-medium hover:bg-gray-700 transition-colors text-sm active:scale-95">Kartu</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent Transactions --}}
    <div class="mt-6 md:mt-8 bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Transaksi Terakhir</h3>
            <button class="text-emerald-600 hover:text-emerald-700 text-sm font-medium flex-shrink-0 ml-2">Lihat Semua</button>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-max">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">ID</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase hidden sm:table-cell">Waktu</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase hidden sm:table-cell">Item</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Total</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Metode</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach(range(1, 5) as $i)
                    <tr>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">#TRX-{{ rand(10000, 99999) }}</td>
                        <td class="px-4 md:px-6 py-3 text-sm text-gray-500 dark:text-gray-400 hidden sm:table-cell whitespace-nowrap">{{ rand(10, 23) }}:{{ rand(10, 59) }}</td>
                        <td class="px-4 md:px-6 py-3 text-sm text-gray-900 dark:text-white hidden sm:table-cell">{{ rand(1, 5) }} item</td>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm font-medium text-gray-900 dark:text-white whitespace-nowrap">Rp {{ number_format(rand(50, 200) * 1000, 0, ',', '.') }}</td>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm text-gray-500 dark:text-gray-400 whitespace-nowrap">
                            @php $methods = ['Tunai', 'QRIS', 'Kartu']; @endphp
                            {{ $methods[array_rand($methods)] }}
                        </td>
                        <td class="px-4 md:px-6 py-3">
                            <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300">Sukses</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
