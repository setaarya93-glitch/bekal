@extends('dashboard.inventory')

@section('title', 'Stock Opname')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Stock Opname</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Pencatatan dan perhitungan stok fisik</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Mulai Opname Baru</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Opname Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Opname Terakhir</p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">15 Mei 2024</p>
            <p class="text-sm text-gray-500">3 hari yang lalu</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Selisih Stok</p>
            <p class="text-2xl font-bold text-red-600">-23 item</p>
            <p class="text-sm text-red-500">Perlu investigasi</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Akurasi Stok</p>
            <p class="text-2xl font-bold text-green-600">98.5%</p>
            <p class="text-sm text-green-500">Sangat baik</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Item Belum Dicek</p>
            <p class="text-2xl font-bold text-amber-600">156</p>
            <p class="text-sm text-gray-500">Dari 2,847 item</p>
        </div>
    </div>

    {{-- Active Opname Alert --}}
    <div class="bg-amber-50 dark:bg-amber-900/20 border border-amber-200 dark:border-amber-800 rounded-xl p-4 mb-6">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-amber-100 dark:bg-amber-800 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                    <h3 class="font-semibold text-amber-800 dark:text-amber-300">Opname Bulan Mei Sedang Berlangsung</h3>
                    <p class="text-sm text-amber-600 dark:text-amber-400">Progress: 2,691 dari 2,847 item (94.5%)</p>
                </div>
            </div>
            <button class="px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700 transition-colors text-sm">Lanjutkan</button>
        </div>
    </div>

    {{-- Filters --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 mb-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="flex flex-wrap items-center gap-4">
            <div class="flex-1 min-w-64">
                <div class="relative">
                    <input type="text" placeholder="Cari barang..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 dark:bg-gray-700 dark:text-white">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Status</option>
                <option>Sudah Dicek</option>
                <option>Belum Dicek</option>
                <option>Selisih</option>
            </select>
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-amber-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Kategori</option>
                <option>Bahan Baku</option>
                <option>Barang Jadi</option>
                <option>Packaging</option>
            </select>
        </div>
    </div>

    {{-- Opname Table --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 overflow-hidden">
        <table class="w-full">
            <thead class="bg-gray-50 dark:bg-gray-700">
                <tr>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Kode Barang</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Nama Barang</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Stok Sistem</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Stok Fisik</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Selisih</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Status</th>
                    <th class="px-6 py-4 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                @foreach([
                    ['code' => 'BRG-001', 'name' => 'Beras Premium 5kg', 'system' => 150, 'physical' => 148, 'category' => 'Bahan Baku'],
                    ['code' => 'BRG-002', 'name' => 'Minyak Goreng 2L', 'system' => 85, 'physical' => 85, 'category' => 'Bahan Baku'],
                    ['code' => 'BRG-003', 'name' => 'Gula Pasir 1kg', 'system' => 200, 'physical' => 195, 'category' => 'Bahan Baku'],
                    ['code' => 'BRG-004', 'name' => 'Kecap Manis 600ml', 'system' => 75, 'physical' => 78, 'category' => 'Barang Jadi'],
                    ['code' => 'BRG-005', 'name' => 'Saus Sambal 340ml', 'system' => 60, 'physical' => 60, 'category' => 'Barang Jadi'],
                ] as $item)
                @php
                $selisih = $item['physical'] - $item['system'];
                $status = $selisih == 0 ? 'match' : ($selisih < 0 ? 'minus' : 'plus');
                $statusColors = [
                    'match' => 'bg-green-100 text-green-700 dark:bg-green-900/50 dark:text-green-300',
                    'minus' => 'bg-red-100 text-red-700 dark:bg-red-900/50 dark:text-red-300',
                    'plus' => 'bg-blue-100 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300'
                ];
                $statusLabels = ['match' => 'Sesuai', 'minus' => 'Kurang', 'plus' => 'Lebih'];
                @endphp
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-700/50">
                    <td class="px-6 py-4 text-sm font-medium text-gray-900 dark:text-white">{{ $item['code'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-900 dark:text-white">{{ $item['name'] }}</td>
                    <td class="px-6 py-4 text-sm text-gray-500 dark:text-gray-400">{{ $item['system'] }}</td>
                    <td class="px-6 py-4">
                        <input type="number" value="{{ $item['physical'] }}" class="w-20 px-2 py-1 border border-gray-300 dark:border-gray-600 rounded text-center dark:bg-gray-700 dark:text-white focus:ring-2 focus:ring-amber-500">
                    </td>
                    <td class="px-6 py-4 text-sm font-bold {{ $selisih < 0 ? 'text-red-600' : ($selisih > 0 ? 'text-blue-600' : 'text-green-600') }}">
                        {{ $selisih > 0 ? '+' : '' }}{{ $selisih }}
                    </td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs rounded-full {{ $statusColors[$status] }}">{{ $statusLabels[$status] }}</span>
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex space-x-2">
                            <button class="p-2 text-amber-600 hover:bg-amber-50 rounded-lg dark:text-amber-400 dark:hover:bg-amber-900/50">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                            </button>
                            <button class="p-2 text-gray-600 hover:bg-gray-50 rounded-lg dark:text-gray-400 dark:hover:bg-gray-700">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h.01M15 12h.01M10 16h.01M14 16h.01M7 16h.01"/></svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="p-4 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <p class="text-sm text-gray-500 dark:text-gray-400">Menampilkan 1-5 dari 2,847 barang</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Sebelumnya</button>
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Selanjutnya</button>
            </div>
        </div>
    </div>
@endsection
