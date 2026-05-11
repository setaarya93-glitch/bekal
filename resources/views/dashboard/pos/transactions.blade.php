@extends('dashboard.pos')

@section('title', 'Transaksi')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Transaksi</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Riwayat dan manajemen transaksi</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors dark:bg-gray-700 dark:text-gray-300 dark:hover:bg-gray-600 flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/></svg>
                <span>Export</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Transaksi Hari Ini</p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">142</p>
            <p class="text-sm text-emerald-600">+12 dari kemarin</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Nilai Transaksi</p>
            <p class="text-2xl font-bold text-emerald-600">Rp 12.5M</p>
            <p class="text-sm text-gray-500">Hari ini</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Rata-rata Transaksi</p>
            <p class="text-2xl font-bold text-blue-600">Rp 88K</p>
            <p class="text-sm text-gray-500">Per transaksi</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Refund</p>
            <p class="text-2xl font-bold text-red-600">3</p>
            <p class="text-sm text-gray-500">Rp 450K total</p>
        </div>
    </div>

    {{-- Filters --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 mb-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="flex flex-wrap items-center gap-4">
            <div class="flex-1 min-w-64">
                <div class="relative">
                    <input type="text" placeholder="Cari transaksi (ID, produk, pelanggan)..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
            <input type="date" class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white">
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Metode</option>
                <option>Tunai</option>
                <option>QRIS</option>
                <option>Kartu Debit</option>
                <option>Kartu Kredit</option>
            </select>
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Status</option>
                <option>Sukses</option>
                <option>Refund</option>
                <option>Pending</option>
            </select>
        </div>
    </div>

    {{-- Transactions Table --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">ID Transaksi</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Waktu</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Item</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Metode</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Kasir</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Total</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach([
                    ['id' => 'TRX-20240511-001', 'time' => '14:32', 'items' => 3, 'method' => 'Tunai', 'cashier' => 'Budi', 'total' => 84500, 'status' => 'success'],
                    ['id' => 'TRX-20240511-002', 'time' => '14:28', 'items' => 5, 'method' => 'QRIS', 'cashier' => 'Ani', 'total' => 125000, 'status' => 'success'],
                    ['id' => 'TRX-20240511-003', 'time' => '14:15', 'items' => 2, 'method' => 'Kartu Debit', 'cashier' => 'Budi', 'total' => 45000, 'status' => 'refund'],
                    ['id' => 'TRX-20240511-004', 'time' => '14:02', 'items' => 4, 'method' => 'Tunai', 'cashier' => 'Ani', 'total' => 98000, 'status' => 'success'],
                    ['id' => 'TRX-20240511-005', 'time' => '13:45', 'items' => 1, 'method' => 'QRIS', 'cashier' => 'Budi', 'total' => 25000, 'status' => 'success'],
                ] as $trx)
                @php
                $statusColors = [
                    'success' => 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300',
                    'refund' => 'bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300',
                    'pending' => 'bg-yellow-100 text-yellow-700 dark:bg-yellow-900/50 dark:text-yellow-300'
                ];
                $methodIcons = [
                    'Tunai' => 'M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a1 1 0 11-2 0 1 1 0 012 0z',
                    'QRIS' => 'M12 4v1m6 11h2m-2 0h-5m5 2v5m-5-5H8.707l-2.121-2.121A3 3 0 015.672 9.33L3.464 6.464A4 4 0 016 4m7 0h5m-5 0v1m0-1h-5m5 0v1',
                    'Kartu Debit' => 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z',
                ];
                @endphp
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-6 py-4 text-sm font-mono font-medium text-gray-900 dark:text-white">{{ $trx['id'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $trx['time'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $trx['items'] }} item</td>
                    <td class="px-6 py-4">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $methodIcons[$trx['method']] ?? 'M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z' }}"/></svg>
                            <span class="text-sm text-gray-700 dark:text-gray-300">{{ $trx['method'] }}</span>
                        </div>
                    </td>
                    <td class="px-6 py-4 text-sm text-gray-700 dark:text-gray-300">{{ $trx['cashier'] }}</td>
                    <td class="px-6 py-4 text-sm font-bold text-gray-900 dark:text-white">Rp {{ number_format($trx['total'], 0, ',', '.') }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{ $statusColors[$trx['status']] }}">{{ ucfirst($trx['status']) }}</span>
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
            <p class="text-sm text-gray-500 dark:text-gray-400">Menampilkan 1-5 dari 142 transaksi</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Sebelumnya</button>
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Selanjutnya</button>
            </div>
        </div>
    </div>
@endsection
