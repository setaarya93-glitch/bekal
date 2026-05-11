@extends('dashboard.inventory')

@section('title', 'Barang Keluar')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Barang Keluar</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Pencatatan barang keluar untuk produksi atau penjualan</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Input Barang Keluar</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Barang Keluar Hari Ini</p>
            <p class="text-2xl font-bold text-red-600">89 item</p>
            <p class="text-sm text-gray-500">Produksi & Penjualan</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Nilai Barang Keluar</p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">Rp 28.5M</p>
            <p class="text-sm text-gray-500">Hari ini</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Untuk Produksi</p>
            <p class="text-2xl font-bold text-blue-600">45</p>
            <p class="text-sm text-gray-500">Batch produksi</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Retur Supplier</p>
            <p class="text-2xl font-bold text-amber-600">3</p>
            <p class="text-sm text-gray-500">Menunggu proses</p>
        </div>
    </div>

    {{-- Filters --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 mb-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="flex flex-wrap items-center gap-4">
            <div class="flex-1 min-w-64">
                <div class="relative">
                    <input type="text" placeholder="Cari nomor surat jalan atau barang..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
            <input type="date" class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white">
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-red-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Tujuan</option>
                <option>Produksi</option>
                <option>Penjualan</option>
                <option>Retur Supplier</option>
                <option>Rusak</option>
            </select>
        </div>
    </div>

    {{-- Barang Keluar Table --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">No. Surat Jalan</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Tanggal</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Tujuan</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Jumlah Item</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Total Nilai</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach([
                    ['no' => 'SJK-20240511-001', 'date' => '11 Mei 2024', 'purpose' => 'Produksi', 'items' => 25, 'value' => 8500000, 'status' => 'processed'],
                    ['no' => 'SJK-20240511-002', 'date' => '11 Mei 2024', 'purpose' => 'Penjualan', 'items' => 12, 'value' => 5600000, 'status' => 'shipped'],
                    ['no' => 'SJK-20240511-003', 'date' => '11 Mei 2024', 'purpose' => 'Retur Supplier', 'items' => 5, 'value' => 1200000, 'status' => 'pending'],
                    ['no' => 'SJK-20240510-001', 'date' => '10 Mei 2024', 'purpose' => 'Produksi', 'items' => 18, 'value' => 6200000, 'status' => 'processed'],
                    ['no' => 'SJK-20240510-002', 'date' => '10 Mei 2024', 'purpose' => 'Rusak', 'items' => 3, 'value' => 450000, 'status' => 'approved'],
                ] as $bk)
                @php
                $statusColors = [
                    'processed' => 'bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300',
                    'shipped' => 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300',
                    'pending' => 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/50 dark:text-yellow-300',
                    'approved' => 'bg-purple-100 text-purple-700 dark:bg-purple-900/50 dark:text-purple-300'
                ];
                $statusLabels = ['processed' => 'Diproses', 'shipped' => 'Dikirim', 'pending' => 'Menunggu', 'approved' => 'Disetujui'];
                $purposeColors = [
                    'Produksi' => 'bg-blue-50 text-blue-700',
                    'Penjualan' => 'bg-green-50 text-green-700',
                    'Retur Supplier' => 'bg-yellow-50 text-yellow-700',
                    'Rusak' => 'bg-red-50 text-red-700'
                ];
                @endphp
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-6 py-4 text-sm font-mono font-medium text-gray-900 dark:text-white">{{ $bk['no'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $bk['date'] }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{ $purposeColors[$bk['purpose']] }}">{{ $bk['purpose'] }}</span>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $bk['items'] }} item</td>
                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-white">Rp {{ number_format($bk['value'], 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{ $statusColors[$bk['status']] }}">{{ $statusLabels[$bk['status']] }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-lg dark:text-blue-400 dark:hover:bg-blue-900/50">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                            </button>
                            <button class="p-2 text-gray-600 hover:bg-gray-50 rounded-lg dark:text-gray-400 dark:hover:bg-gray-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <p class="text-sm text-gray-500 dark:text-gray-400">Menampilkan 1-5 dari 89 barang keluar</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Sebelumnya</button>
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Selanjutnya</button>
            </div>
        </div>
    </div>
@endsection
