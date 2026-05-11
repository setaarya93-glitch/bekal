@extends('dashboard.crm')

@section('title', 'Customers')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Customers</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Daftar pelanggan dan histori transaksi</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                <span>Export</span>
            </button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                <span>Tambah Customer</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Customers</p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">1,847</p>
            <p class="text-sm text-green-600">+23 baru bulan ini</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Active Customers</p>
            <p class="text-2xl font-bold text-blue-600">1,523</p>
            <p class="text-sm text-gray-500">82.5% dari total</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">VIP Customers</p>
            <p class="text-2xl font-bold text-purple-600">128</p>
            <p class="text-sm text-gray-500">Top 7% spenders</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Avg. Lifetime Value</p>
            <p class="text-2xl font-bold text-green-600">Rp 12.5M</p>
            <p class="text-sm text-green-600">+8% naik</p>
        </div>
    </div>

    {{-- Filters --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 mb-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="flex flex-wrap items-center gap-4">
            <div class="flex-1 min-w-64">
                <div class="relative">
                    <input type="text" placeholder="Cari customer..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Tipe</option>
                <option>VIP</option>
                <option>Regular</option>
                <option>Baru</option>
            </select>
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Status</option>
                <option>Active</option>
                <option>Inactive</option>
            </select>
        </div>
    </div>

    {{-- Customers Grid --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach([
            ['name' => 'PT Maju Jaya', 'contact' => 'Budi Santoso', 'email' => 'budi@maju-jaya.com', 'phone' => '0812-3456-7890', 'type' => 'VIP', 'orders' => 45, 'spent' => 450000000],
            ['name' => 'CV Sinar Abadi', 'contact' => 'Siti Aminah', 'email' => 'siti@sinarabadi.com', 'phone' => '0813-4567-8901', 'type' => 'Regular', 'orders' => 23, 'spent' => 125000000],
            ['name' => 'UD Karya Mandiri', 'contact' => 'Ahmad Yani', 'email' => 'ahmad@karyamandiri.com', 'phone' => '0814-5678-9012', 'type' => 'Regular', 'orders' => 18, 'spent' => 89000000],
            ['name' => 'PT Teknologi Nusantara', 'contact' => 'Dewi Kusuma', 'email' => 'dewi@teknologinusantara.com', 'phone' => '0815-6789-0123', 'type' => 'VIP', 'orders' => 67, 'spent' => 780000000],
            ['name' => 'CV Delta Sinar', 'contact' => 'Eko Prasetyo', 'email' => 'eko@deltasinar.com', 'phone' => '0816-7890-1234', 'type' => 'Regular', 'orders' => 12, 'spent' => 56000000],
            ['name' => 'PT Global Sukses', 'contact' => 'Rini Wulandari', 'email' => 'rini@globalsukses.com', 'phone' => '0817-8901-2345', 'type' => 'VIP', 'orders' => 89, 'spent' => 1200000000],
        ] as $customer)
        @php
        $typeColors = [
            'VIP' => 'bg-purple-100 text-purple-700 dark:bg-purple-900/50 dark:text-purple-300',
            'Regular' => 'bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300',
            'Baru' => 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300'
        ];
        @endphp
        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between mb-4">
                <div class="flex items-center space-x-3">
                    <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white font-bold text-lg">
                        {{ substr($customer['name'], 0, 1) }}
                    </div>
                    <div>
                        <h3 class="font-semibold text-gray-900 dark:text-white">{{ $customer['name'] }}</h3>
                        <p class="text-sm text-gray-500 dark:text-gray-400">{{ $customer['contact'] }}</p>
                    </div>
                </div>
                <span class="px-2 py-1 text-xs rounded-full {{ $typeColors[$customer['type']] }}">{{ $customer['type'] }}</span>
            </div>
            <div class="space-y-2 mb-4">
                <div class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                    <span>{{ $customer['email'] }}</span>
                </div>
                <div class="flex items-center space-x-2 text-sm text-gray-600 dark:text-gray-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>{{ $customer['phone'] }}</span>
                </div>
            </div>
            <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                <div class="text-center">
                    <p class="text-lg font-bold text-gray-900 dark:text-white">{{ $customer['orders'] }}</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Orders</p>
                </div>
                <div class="text-center">
                    <p class="text-lg font-bold text-blue-600">Rp {{ number_format($customer['spent'] / 1000000, 1) }}M</p>
                    <p class="text-xs text-gray-500 dark:text-gray-400">Total Spent</p>
                </div>
                <div class="flex space-x-1">
                    <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg dark:text-blue-400 dark:hover:bg-blue-900/50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </button>
                    <button class="p-2 text-gray-600 hover:bg-gray-50 rounded-lg dark:text-gray-400 dark:hover:bg-gray-700">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
                    </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
