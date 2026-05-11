@extends('dashboard.crm')

@section('title', 'Sales Pipeline')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Sales Pipeline</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Tahapan prospek menjadi pembeli</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Tambah Deal</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Pipeline Stats --}}
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-8">
        @foreach([
            ['stage' => 'Lead Baru', 'count' => 45, 'value' => 0, 'color' => 'gray'],
            ['stage' => 'Kontak Dibuat', 'count' => 32, 'value' => 125000000, 'color' => 'blue'],
            ['stage' => 'Proposal Dikirim', 'count' => 18, 'value' => 450000000, 'color' => 'indigo'],
            ['stage' => 'Negosiasi', 'count' => 12, 'value' => 680000000, 'color' => 'purple'],
            ['stage' => 'Deal Closed', 'count' => 8, 'value' => 890000000, 'color' => 'green'],
        ] as $stat)
        <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700 border-t-4 border-t-{{ $stat['color'] }}-500">
            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $stat['stage'] }}</p>
            <p class="text-2xl font-bold text-gray-900 dark:text-white">{{ $stat['count'] }} deals</p>
            @if($stat['value'] > 0)
            <p class="text-sm text-{{ $stat['color'] }}-600">Rp {{ number_format($stat['value'], 0, ',', '.') }}</p>
            @endif
        </div>
        @endforeach
    </div>

    {{-- Kanban Pipeline --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 p-6">
        <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
            @foreach([
                ['name' => 'Lead Baru', 'color' => 'gray', 'deals' => [
                    ['title' => 'PT Maju Jaya', 'value' => 50000000, 'contact' => 'Budi Santoso'],
                    ['title' => 'CV Sinar Abadi', 'value' => 35000000, 'contact' => 'Siti Aminah'],
                    ['title' => 'UD Karya Mandiri', 'value' => 25000000, 'contact' => 'Ahmad Yani'],
                ]],
                ['name' => 'Kontak Dibuat', 'color' => 'blue', 'deals' => [
                    ['title' => 'PT Teknologi Nusantara', 'value' => 75000000, 'contact' => 'Dewi Kusuma'],
                    ['title' => 'CV Delta Sinar', 'value' => 50000000, 'contact' => 'Budi Santoso'],
                ]],
                ['name' => 'Proposal', 'color' => 'indigo', 'deals' => [
                    ['title' => 'PT Global Sukses', 'value' => 150000000, 'contact' => 'Eko Prasetyo'],
                    ['title' => 'CV Mandiri Jaya', 'value' => 120000000, 'contact' => 'Rini Wulandari'],
                ]],
                ['name' => 'Negosiasi', 'color' => 'purple', 'deals' => [
                    ['title' => 'PT Digital Kreatif', 'value' => 200000000, 'contact' => 'Fajar Maulana'],
                    ['title' => 'UD Sumber Rejeki', 'value' => 180000000, 'contact' => 'Hendra Wijaya'],
                ]],
                ['name' => 'Closed', 'color' => 'green', 'deals' => [
                    ['title' => 'PT Sukses Selalu', 'value' => 250000000, 'contact' => 'Irfan Hakim'],
                    ['title' => 'CV Berkah Abadi', 'value' => 200000000, 'contact' => 'Joko Susilo'],
                ]],
            ] as $column)
            <div class="bg-gray-50 dark:bg-gray-700/50 rounded-xl p-4">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-gray-900 dark:text-white">{{ $column['name'] }}</h3>
                    <span class="px-2 py-1 text-xs rounded-full bg-{{ $column['color'] }}-100 text-{{ $column['color'] }}-700 dark:bg-{{ $column['color'] }}-900/50 dark:text-{{ $column['color'] }}-300">{{ count($column['deals']) }}</span>
                </div>
                <div class="space-y-3">
                    @foreach($column['deals'] as $deal)
                    <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-600 hover:shadow-md transition-shadow cursor-pointer">
                        <h4 class="font-medium text-gray-900 dark:text-white text-sm mb-2">{{ $deal['title'] }}</h4>
                        <p class="text-lg font-bold text-{{ $column['color'] }}-600 mb-2">Rp {{ number_format($deal['value'], 0, ',', '.') }}</p>
                        <div class="flex items-center space-x-2 text-xs text-gray-500 dark:text-gray-400">
                            <div class="w-6 h-6 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white">
                                {{ substr($deal['contact'], 0, 1) }}
                            </div>
                            <span>{{ $deal['contact'] }}</span>
                        </div>
                        <div class="mt-3 flex items-center justify-between">
                            <span class="text-xs text-gray-400">{{ rand(1, 14) }} hari</span>
                            <div class="flex space-x-1">
                                <button class="p-1 text-gray-400 hover:text-blue-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                                </button>
                                <button class="p-1 text-gray-400 hover:text-green-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <button class="w-full mt-3 py-2 border-2 border-dashed border-gray-300 dark:border-gray-600 rounded-lg text-gray-500 hover:border-blue-500 hover:text-blue-500 transition-colors text-sm flex items-center justify-center space-x-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                    <span>Tambah</span>
                </button>
            </div>
            @endforeach
        </div>
    </div>
@endsection
