@extends('dashboard.administrasi')

@section('title', 'Activity Log')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Activity Log</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Riwayat aktivitas pengguna sistem</p>
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
            <p class="text-sm text-gray-500 dark:text-gray-400">Total Aktivitas Hari Ini</p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">1,247</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Login Berhasil</p>
            <p class="text-2xl font-bold text-green-600">89</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Login Gagal</p>
            <p class="text-2xl font-bold text-red-600">3</p>
        </div>
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
            <p class="text-sm text-gray-500 dark:text-gray-400">Data Diedit</p>
            <p class="text-2xl font-bold text-blue-600">156</p>
        </div>
    </div>

    {{-- Filters --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl p-4 mb-6 shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="flex flex-wrap items-center gap-4">
            <div class="flex-1 min-w-64">
                <div class="relative">
                    <input type="text" placeholder="Cari aktivitas..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                    <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </div>
            </div>
            <select class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
                <option>Semua Tipe</option>
                <option>Login</option>
                <option>Create</option>
                <option>Update</option>
                <option>Delete</option>
            </select>
            <input type="date" class="px-3 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-indigo-500 dark:bg-gray-700 dark:text-white">
        </div>
    </div>

    {{-- Activity Timeline --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="p-6">
            <div class="space-y-6">
                @php
                $activities = [
                    ['user' => 'Ahmad Fauzi', 'action' => 'Login ke sistem', 'time' => '2 menit yang lalu', 'type' => 'login', 'ip' => '192.168.1.10'],
                    ['user' => 'Budi Santoso', 'action' => 'Menambah pengguna baru: Eka Putri', 'time' => '15 menit yang lalu', 'type' => 'create', 'ip' => '192.168.1.15'],
                    ['user' => 'Citra Dewi', 'action' => 'Mengupdate role Manager', 'time' => '32 menit yang lalu', 'type' => 'update', 'ip' => '192.168.1.22'],
                    ['user' => 'Dedi Kurniawan', 'action' => 'Menghapus data transaksi #TRX-45231', 'time' => '1 jam yang lalu', 'type' => 'delete', 'ip' => '192.168.1.18'],
                    ['user' => 'Eka Putri', 'action' => 'Logout dari sistem', 'time' => '2 jam yang lalu', 'type' => 'logout', 'ip' => '192.168.1.25'],
                    ['user' => 'Ahmad Fauzi', 'action' => 'Export laporan penjualan', 'time' => '3 jam yang lalu', 'type' => 'export', 'ip' => '192.168.1.10'],
                    ['user' => 'System', 'action' => 'Backup database otomatis', 'time' => '4 jam yang lalu', 'type' => 'system', 'ip' => '127.0.0.1'],
                ];
                @endphp

                @foreach($activities as $activity)
                @php
                $icons = [
                    'login' => ['color' => 'green', 'icon' => 'M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1'],
                    'logout' => ['color' => 'gray', 'icon' => 'M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1'],
                    'create' => ['color' => 'blue', 'icon' => 'M12 4v16m8-8H4'],
                    'update' => ['color' => 'yellow', 'icon' => 'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z'],
                    'delete' => ['color' => 'red', 'icon' => 'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16'],
                    'export' => ['color' => 'purple', 'icon' => 'M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4'],
                    'system' => ['color' => 'indigo', 'icon' => 'M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01']
                ];
                $iconData = $icons[$activity['type']] ?? $icons['system'];
                @endphp

                <div class="flex items-start space-x-4">
                    <div class="w-10 h-10 rounded-full bg-{{ $iconData['color'] }}-100 dark:bg-{{ $iconData['color'] }}-900/50 flex items-center justify-center flex-shrink-0">
                        <svg class="w-5 h-5 text-{{ $iconData['color'] }}-600 dark:text-{{ $iconData['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $iconData['icon'] }}"/></svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center justify-between">
                            <p class="text-sm font-medium text-gray-900 dark:text-white">
                                {{ $activity['user'] }}
                                <span class="text-gray-500 dark:text-gray-400 font-normal">{{ $activity['action'] }}</span>
                            </p>
                            <span class="text-xs text-gray-400">{{ $activity['time'] }}</span>
                        </div>
                        <div class="flex items-center space-x-4 mt-1">
                            <span class="text-xs px-2 py-1 rounded-full bg-{{ $iconData['color'] }}-100 text-{{ $iconData['color'] }}-700 dark:bg-{{ $iconData['color'] }}-900/30 dark:text-{{ $iconData['color'] }}-300 uppercase">{{ $activity['type'] }}</span>
                            <span class="text-xs text-gray-500 dark:text-gray-400">IP: {{ $activity['ip'] }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="p-4 border-t border-gray-200 dark:border-gray-700 flex items-center justify-between">
            <p class="text-sm text-gray-500 dark:text-gray-400">Menampilkan 7 dari 1,247 aktivitas</p>
            <div class="flex space-x-2">
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Sebelumnya</button>
                <button class="px-3 py-1 border border-gray-300 dark:border-gray-600 rounded-lg text-sm text-gray-600 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Selanjutnya</button>
            </div>
        </div>
    </div>
@endsection
