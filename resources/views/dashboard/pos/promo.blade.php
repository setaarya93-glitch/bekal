@extends('dashboard.pos')

@section('title', 'Promo & Diskon')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Promo & Diskon</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Kelola promo, diskon, dan voucher</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Buat Promo</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Promo Aktif</p>
            <p class="text-2xl font-bold text-emerald-600">12</p>
            <p class="text-sm text-gray-500">Sedang berjalan</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Voucher Terpakai Hari Ini</p>
            <p class="text-2xl font-bold text-blue-600">28</p>
            <p class="text-sm text-gray-500">Dari 50 voucher</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Diskon Diberikan</p>
            <p class="text-2xl font-bold text-amber-600">Rp 2.5M</p>
            <p class="text-sm text-gray-500">Bulan ini</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Conversion Rate</p>
            <p class="text-2xl font-bold text-purple-600">34%</p>
            <p class="text-sm text-emerald-600">+5% naik</p>
        </div>
    </div>

    {{-- Active Promos --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @foreach([
            ['name' => 'Diskon Awal Tahun', 'type' => 'Diskon', 'value' => '20%', 'code' => 'NEWYEAR20', 'start' => '01 Jan 2024', 'end' => '31 Jan 2024', 'used' => 145, 'limit' => 500, 'status' => 'active', 'color' => 'emerald'],
            ['name' => 'Cashback Weekend', 'type' => 'Cashback', 'value' => 'Rp 10K', 'code' => 'WEEKEND10', 'start' => '01 Mei 2024', 'end' => '30 Mei 2024', 'used' => 89, 'limit' => 200, 'status' => 'active', 'color' => 'blue'],
            ['name' => 'Beli 2 Gratis 1', 'type' => 'Bundle', 'value' => 'B2G1', 'code' => 'B2G1PROMO', 'start' => '15 Mei 2024', 'end' => '15 Jun 2024', 'used' => 234, 'limit' => 1000, 'status' => 'active', 'color' => 'purple'],
            ['name' => 'Member Special', 'type' => 'Diskon', 'value' => '15%', 'code' => 'MEMBER15', 'start' => '01 Mei 2024', 'end' => '31 Des 2024', 'used' => 567, 'limit' => null, 'status' => 'active', 'color' => 'amber'],
            ['name' => 'Flash Sale 50%', 'type' => 'Flash Sale', 'value' => '50%', 'code' => 'FLASH50', 'start' => '20 Mei 2024', 'end' => '20 Mei 2024', 'used' => 0, 'limit' => 100, 'status' => 'scheduled', 'color' => 'red'],
            ['name' => 'Gratis Ongkir', 'type' => 'Gratis Ongkir', 'value' => '100%', 'code' => 'FREEONGKIR', 'start' => '01 Jun 2024', 'end' => '30 Jun 2024', 'used' => 0, 'limit' => 300, 'status' => 'scheduled', 'color' => 'indigo'],
        ] as $promo)
        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-{{ $promo['color'] }}-100 dark:bg-{{ $promo['color'] }}-900/50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-{{ $promo['color'] }}-600 dark:text-{{ $promo['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                </div>
                <div class="flex space-x-1">
                    @if($promo['status'] == 'active')
                    <span class="px-2 py-1 text-xs rounded-full bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300">Aktif</span>
                    @else
                    <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300">Terjadwal</span>
                    @endif
                </div>
            </div>
            <h3 class="font-semibold text-gray-900 dark:text-white text-lg mb-1">{{ $promo['name'] }}</h3>
            <div class="flex items-center space-x-2 mb-3">
                <span class="px-2 py-1 text-xs rounded-full bg-{{ $promo['color'] }}-100 text-{{ $promo['color'] }}-700 dark:bg-{{ $promo['color'] }}-900/50 dark:text-{{ $promo['color'] }}-300">{{ $promo['type'] }}</span>
                <span class="text-2xl font-bold text-{{ $promo['color'] }}-600">{{ $promo['value'] }}</span>
            </div>
            <div class="bg-gray-100 dark:bg-gray-700 rounded-lg p-2 mb-3">
                <p class="text-xs text-gray-500 dark:text-gray-400">Kode Promo</p>
                <p class="font-mono font-bold text-gray-900 dark:text-white">{{ $promo['code'] }}</p>
            </div>
            <div class="space-y-2 text-sm text-gray-500 dark:text-gray-400 mb-4">
                <div class="flex justify-between">
                    <span>Periode:</span>
                    <span>{{ $promo['start'] }} - {{ $promo['end'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span>Terpakai:</span>
                    <span>{{ $promo['used'] }} {{ $promo['limit'] ? '/ '.$promo['limit'] : '' }}</span>
                </div>
            </div>
            @if($promo['limit'])
            <div class="w-full bg-gray-200 dark:bg-gray-600 rounded-full h-2 mb-4">
                <div class="bg-{{ $promo['color'] }}-500 h-2 rounded-full" style="width: {{ min(100, ($promo['used'] / $promo['limit']) * 100) }}%"></div>
            </div>
            @endif
            <div class="flex space-x-2">
                <button class="flex-1 py-2 bg-{{ $promo['color'] }}-100 text-{{ $promo['color'] }}-700 rounded-lg text-sm font-medium hover:bg-{{ $promo['color'] }}-200 transition-colors dark:bg-{{ $promo['color'] }}-900/50 dark:text-{{ $promo['color'] }}-300 dark:hover:bg-{{ $promo['color'] }}-900">Edit</button>
                <button class="flex-1 py-2 bg-gray-100 text-gray-700 rounded-lg text-sm font-medium hover:bg-gray-200 transition-colors dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600">Detail</button>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Promo History --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Riwayat Promo</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full min-w-[800px]">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Promo</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Periode</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Total Penggunaan</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Total Diskon</th>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach([
                        ['name' => 'Lebaran Sale 2023', 'period' => '15 Apr - 30 Apr 2023', 'usage' => 1234, 'discount' => 45600000, 'status' => 'expired'],
                        ['name' => 'Mid Year Sale', 'period' => '01 Jun - 30 Jun 2023', 'usage' => 892, 'discount' => 32100000, 'status' => 'expired'],
                        ['name' => 'New Year 2023', 'period' => '01 Jan - 31 Jan 2023', 'usage' => 2156, 'discount' => 89200000, 'status' => 'expired'],
                    ] as $history)
                    <tr>
                        <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $history['name'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $history['period'] }}</td>
                        <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ number_format($history['usage'], 0, ',', '.') }}x</td>
                        <td class="px-6 py-4 text-sm font-medium text-red-600">Rp {{ number_format($history['discount'], 0, ',', '.') }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded-full bg-gray-100 text-gray-700 dark:bg-gray-700 dark:text-gray-300">Berakhir</span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
