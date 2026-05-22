@extends('layouts.dashboard')

@section('title', 'Inventory')

@php $activeDashboard = 'inventory'; @endphp

@section('sidebar')
    <nav class="space-y-1">
        <a href="{{ url('/dashboard/inventory') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/inventory') && !request()->is('dashboard/inventory/*') ? 'bg-amber-50 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
            <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/></svg>
            <span class="text-sm font-medium">Overview</span>
        </a>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Manajemen Stok</p>
            <a href="{{ url('/dashboard/inventory/stock') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/inventory/stock*') ? 'bg-amber-50 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                <span class="text-sm">Stock (Opname)</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Pergerakan Barang</p>
            <a href="{{ url('/dashboard/inventory/masuk') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/inventory/masuk*') ? 'bg-amber-50 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                <span class="text-sm">Barang Masuk</span>
            </a>
            <a href="{{ url('/dashboard/inventory/keluar') }}" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg {{ request()->is('dashboard/inventory/keluar*') ? 'bg-amber-50 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800' }} transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10"/></svg>
                <span class="text-sm">Barang Keluar</span>
            </a>
        </div>

        <div class="pt-4 mt-4 border-t border-gray-200 dark:border-gray-700">
            <p class="px-3 text-xs font-semibold text-gray-400 uppercase tracking-wider mb-2">Laporan</p>
            <a href="#" class="flex items-center space-x-3 px-3 py-2.5 rounded-lg text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 transition-colors">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                <span class="text-sm">Laporan Stok</span>
            </a>
        </div>
    </nav>
@endsection

@section('header')
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
        <div>
            <h1 class="text-xl md:text-2xl font-bold text-gray-900 dark:text-white">Inventory Management</h1>
            <p class="mt-0.5 text-sm text-gray-500 dark:text-gray-400">Kelola stok barang dan gudang</p>
        </div>
        <button class="w-full sm:w-auto px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors flex items-center justify-center space-x-2 text-sm font-medium active:scale-95">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
            <span>Tambah Barang</span>
        </button>
    </div>
@endsection

@section('content')
    {{-- Inventory Stats --}}
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 md:gap-6 mb-6 md:mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Total Barang</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">2,847</p>
                    <p class="text-xs text-green-600 mt-1">+156 bulan ini</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-amber-100 dark:bg-amber-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Nilai Stok</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">Rp 450M</p>
                    <p class="text-xs text-blue-600 mt-1">+8% naik</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-blue-100 dark:bg-blue-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Stok Rendah</p>
                    <p class="text-2xl md:text-3xl font-bold text-red-600 dark:text-red-400 mt-1 md:mt-2">23</p>
                    <p class="text-xs text-red-600 mt-1">Perlu restock</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-red-100 dark:bg-red-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-start justify-between">
                <div class="min-w-0">
                    <p class="text-xs md:text-sm font-medium text-gray-600 dark:text-gray-400 truncate">Barang Masuk</p>
                    <p class="text-2xl md:text-3xl font-bold text-gray-900 dark:text-white mt-1 md:mt-2">145</p>
                    <p class="text-xs text-green-600 mt-1">Hari ini</p>
                </div>
                <div class="w-10 h-10 md:w-12 md:h-12 bg-green-100 dark:bg-green-900/50 rounded-lg flex items-center justify-center flex-shrink-0 ml-2">
                    <svg class="w-5 h-5 md:w-6 md:h-6 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
                </div>
            </div>
        </div>
    </div>

    {{-- Low Stock Alert --}}
    <div class="mb-6 md:mb-8 bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-xl p-4">
        <div class="flex items-start sm:items-center space-x-3">
            <div class="w-9 h-9 md:w-10 md:h-10 bg-red-100 dark:bg-red-800 rounded-lg flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 md:w-6 md:h-6 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
            </div>
            <div class="flex-1 min-w-0">
                <h3 class="text-sm md:text-base text-red-800 dark:text-red-300 font-semibold">Peringatan Stok Rendah</h3>
                <p class="text-xs md:text-sm text-red-600 dark:text-red-400 mt-0.5">23 item memiliki stok di bawah minimum. Segera lakukan restock.</p>
            </div>
            <button class="flex-shrink-0 px-3 py-1.5 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors text-xs md:text-sm font-medium active:scale-95">
                Detail
            </button>
        </div>
    </div>

    {{-- Charts Section --}}
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-6 md:mb-8">
        <div class="lg:col-span-2 bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="flex items-center justify-between mb-4">
                <div>
                    <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Pergerakan Stok</h3>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Barang masuk vs keluar minggu ini</p>
                </div>
                <span class="px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-50 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300 flex-shrink-0">Live</span>
            </div>
            <div class="relative h-48 md:h-72">
                <canvas id="inventoryMovementChart"></canvas>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 md:p-6 shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="mb-4">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Kategori Barang</h3>
                <p class="text-xs text-gray-500 dark:text-gray-400">Komposisi stok per kategori</p>
            </div>
            <div class="relative h-48 md:h-72 flex items-center justify-center">
                <canvas id="inventoryCategoryChart"></canvas>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const isDark = document.documentElement.classList.contains('dark') || document.querySelector('html').getAttribute('class')?.includes('dark');
            const textColor = isDark ? '#9ca3af' : '#4b5563';
            const gridColor = isDark ? '#374151' : '#f3f4f6';

            new Chart(document.getElementById('inventoryMovementChart').getContext('2d'), {
                type: 'bar',
                data: {
                    labels: ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
                    datasets: [
                        { label: 'Barang Masuk', data: [45, 60, 35, 70, 80, 50, 40], backgroundColor: '#f59e0b', borderRadius: 4 },
                        { label: 'Barang Keluar', data: [30, 48, 55, 40, 65, 30, 25], backgroundColor: '#b45309', borderRadius: 4 }
                    ]
                },
                options: {
                    responsive: true, maintainAspectRatio: false,
                    plugins: {
                        legend: { position: 'top', labels: { color: textColor, font: { size: 11 }, padding: 10 } },
                        tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' }
                    },
                    scales: { x: { grid: { display: false }, ticks: { color: textColor, maxRotation: 45 } }, y: { grid: { color: gridColor }, ticks: { color: textColor } } }
                }
            });

            new Chart(document.getElementById('inventoryCategoryChart').getContext('2d'), {
                type: 'doughnut',
                data: { labels: ['Bahan Baku', 'Barang Jadi', 'Packaging'], datasets: [{ data: [1420, 927, 500], backgroundColor: ['#d97706', '#fbbf24', '#fef3c7'], borderWidth: isDark ? 2 : 0, borderColor: '#1f2937' }] },
                options: { responsive: true, maintainAspectRatio: false, plugins: { legend: { position: 'bottom', labels: { color: textColor, padding: 12, font: { size: 11 } } }, tooltip: { padding: 12, cornerRadius: 8, backgroundColor: isDark ? '#1f2937' : '#ffffff', titleColor: isDark ? '#ffffff' : '#1f2937', bodyColor: isDark ? '#d1d5db' : '#4b5563' } }, cutout: '65%' }
            });
        });
    </script>

    {{-- Inventory Table --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 mb-6 md:mb-8">
        <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Daftar Barang</h3>
                <div class="flex items-center gap-2">
                    <div class="relative flex-1 sm:flex-none">
                        <input type="text" placeholder="Cari barang..." class="w-full sm:w-auto pl-9 pr-4 py-2 text-sm border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                        <svg class="w-4 h-4 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <select class="px-3 py-2 text-sm border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 focus:border-transparent dark:bg-gray-700 dark:text-white">
                        <option>Semua</option>
                        <option>Bahan Baku</option>
                        <option>Barang Jadi</option>
                        <option>Packaging</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-max">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase hidden sm:table-cell">Kode</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Nama Barang</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase hidden md:table-cell">Kategori</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Stok</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase hidden sm:table-cell">Harga</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Status</th>
                        <th class="px-4 md:px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach(['Beras Premium 5kg', 'Minyak Goreng 2L', 'Gula Pasir 1kg', 'Kecap Manis 600ml', 'Saus Sambal 340ml'] as $idx => $item)
                    @php $stock = rand(5, 150); $minStock = 20; @endphp
                    <tr>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm font-medium text-gray-900 dark:text-white hidden sm:table-cell whitespace-nowrap">BRG-{{ 1000 + $idx }}</td>
                        <td class="px-4 md:px-6 py-3">
                            <div class="flex items-center space-x-2 md:space-x-3">
                                <div class="w-8 h-8 bg-gray-100 dark:bg-gray-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                                </div>
                                <span class="text-xs md:text-sm font-medium text-gray-900 dark:text-white truncate max-w-24 md:max-w-none">{{ $item }}</span>
                            </div>
                        </td>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm text-gray-500 dark:text-gray-400 hidden md:table-cell whitespace-nowrap">{{ ['Bahan Baku', 'Barang Jadi', 'Packaging'][rand(0, 2)] }}</td>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm font-semibold {{ $stock < $minStock ? 'text-red-600' : 'text-gray-900 dark:text-white' }}">{{ $stock }}</td>
                        <td class="px-4 md:px-6 py-3 text-xs md:text-sm text-gray-900 dark:text-white hidden sm:table-cell whitespace-nowrap">Rp {{ number_format(rand(10, 100) * 1000, 0, ',', '.') }}</td>
                        <td class="px-4 md:px-6 py-3">
                            <span class="px-2 py-1 text-xs rounded-full {{ $stock < $minStock ? 'bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300' : 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300' }}">
                                {{ $stock < $minStock ? 'Rendah' : 'OK' }}
                            </span>
                        </td>
                        <td class="px-4 md:px-6 py-3">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-700 text-xs md:text-sm font-medium">Edit</button>
                                <button class="text-green-600 hover:text-green-700 text-xs md:text-sm font-medium">+Stok</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="p-4 border-t border-gray-200 dark:border-gray-700 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3">
            <p class="text-xs md:text-sm text-gray-500 dark:text-gray-400">Menampilkan 1-5 dari 2,847 barang</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1.5 border border-gray-300 dark:border-gray-600 rounded-lg text-xs md:text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">Sebelumnya</button>
                <button class="px-3 py-1.5 border border-gray-300 dark:border-gray-600 rounded-lg text-xs md:text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700 transition-colors">Selanjutnya</button>
            </div>
        </div>
    </div>

    {{-- Stock Movement --}}
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Barang Masuk Terakhir</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-3">
                    @foreach(['Beras Premium 5kg', 'Minyak Goreng 2L', 'Gula Pasir 1kg'] as $item)
                    <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="flex items-center space-x-3 min-w-0">
                            <div class="w-8 h-8 bg-green-100 dark:bg-green-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"/></svg>
                            </div>
                            <div class="min-w-0">
                                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">{{ $item }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">+{{ rand(20, 100) }} unit</p>
                            </div>
                        </div>
                        <span class="text-xs text-gray-500 dark:text-gray-400 flex-shrink-0 ml-2">{{ rand(1, 5) }}j lalu</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
            <div class="p-4 md:p-6 border-b border-gray-200 dark:border-gray-700">
                <h3 class="text-base md:text-lg font-semibold text-gray-900 dark:text-white">Barang Keluar Terakhir</h3>
            </div>
            <div class="p-4 md:p-6">
                <div class="space-y-3">
                    @foreach(['Kecap Manis 600ml', 'Saus Sambal 340ml', 'Tepung Terigu 1kg'] as $item)
                    <div class="flex items-center justify-between p-3 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div class="flex items-center space-x-3 min-w-0">
                            <div class="w-8 h-8 bg-amber-100 dark:bg-amber-800 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-4 h-4 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
                            </div>
                            <div class="min-w-0">
                                <p class="text-sm font-medium text-gray-900 dark:text-white truncate">{{ $item }}</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">-{{ rand(5, 50) }} unit</p>
                            </div>
                        </div>
                        <span class="text-xs text-gray-500 dark:text-gray-400 flex-shrink-0 ml-2">{{ rand(1, 5) }}j lalu</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
