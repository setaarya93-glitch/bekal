@extends('dashboard.administrasi')

@section('title', 'Role & Permission')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">Role & Permission</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Kelola role dan hak akses pengguna</p>
        </div>
        <div class="flex items-center space-x-3">
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition-colors flex items-center space-x-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                <span>Tambah Role</span>
            </button>
        </div>
    </div>
@endsection

@section('content')
    {{-- Roles List --}}
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        @foreach([
            ['name' => 'Super Admin', 'color' => 'red', 'users' => 2, 'desc' => 'Akses penuh ke semua fitur sistem'],
            ['name' => 'Admin', 'color' => 'orange', 'users' => 5, 'desc' => 'Kelola pengguna dan pengaturan sistem'],
            ['name' => 'Manager', 'color' => 'blue', 'users' => 8, 'desc' => 'Akses laporan dan manajemen tim'],
            ['name' => 'Kasir', 'color' => 'green', 'users' => 12, 'desc' => 'Akses POS dan transaksi'],
            ['name' => 'Staff', 'color' => 'gray', 'users' => 25, 'desc' => 'Akses terbatas sesuai departemen'],
            ['name' => 'Viewer', 'color' => 'purple', 'users' => 3, 'desc' => 'Hanya melihat laporan dan data']
        ] as $role)
        <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-sm border border-gray-200 dark:border-gray-700 hover:shadow-md transition-shadow">
            <div class="flex items-start justify-between mb-4">
                <div class="w-12 h-12 rounded-xl bg-{{ $role['color'] }}-100 dark:bg-{{ $role['color'] }}-900/50 flex items-center justify-center">
                    <svg class="w-6 h-6 text-{{ $role['color'] }}-600 dark:text-{{ $role['color'] }}-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                </div>
                <div class="flex space-x-1">
                    <button class="p-1.5 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg dark:hover:bg-blue-900/50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
                    </button>
                    <button class="p-1.5 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg dark:hover:bg-red-900/50">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
                    </button>
                </div>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-1">{{ $role['name'] }}</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mb-4">{{ $role['desc'] }}</p>
            <div class="flex items-center justify-between pt-4 border-t border-gray-200 dark:border-gray-700">
                <span class="text-sm text-gray-600 dark:text-gray-400">{{ $role['users'] }} pengguna</span>
                <button class="text-sm text-indigo-600 hover:text-indigo-700 font-medium">Lihat Detail</button>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Permissions Matrix --}}
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700">
        <div class="p-6 border-b border-gray-200 dark:border-gray-700">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Permission Matrix</h3>
            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">Hak akses untuk setiap role</p>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50 dark:bg-gray-700">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Permission</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Super Admin</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Admin</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Manager</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Kasir</th>
                        <th class="px-6 py-3 text-center text-xs font-semibold text-gray-500 dark:text-gray-400 uppercase">Staff</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                    @foreach([
                        'User Management',
                        'Role Management',
                        'View Reports',
                        'Create Transactions',
                        'Manage Products',
                        'Manage Inventory',
                        'View CRM Data',
                        'System Settings',
                        'Activity Log View'
                    ] as $permission)
                    <tr>
                        <td class="px-6 py-3 text-sm font-medium text-gray-900 dark:text-white">{{ $permission }}</td>
                        <td class="px-6 py-3 text-center"><svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></td>
                        <td class="px-6 py-3 text-center">
                            @if(in_array($permission, ['User Management', 'Role Management', 'View Reports', 'Manage Products', 'Manage Inventory', 'System Settings', 'Activity Log View']))
                                <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            @else
                                <svg class="w-5 h-5 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-center">
                            @if(in_array($permission, ['View Reports', 'View CRM Data']))
                                <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            @else
                                <svg class="w-5 h-5 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-center">
                            @if(in_array($permission, ['Create Transactions']))
                                <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            @else
                                <svg class="w-5 h-5 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            @endif
                        </td>
                        <td class="px-6 py-3 text-center">
                            @if(in_array($permission, ['View Reports', 'Manage Products']))
                                <svg class="w-5 h-5 text-green-500 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                            @else
                                <svg class="w-5 h-5 text-gray-300 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
