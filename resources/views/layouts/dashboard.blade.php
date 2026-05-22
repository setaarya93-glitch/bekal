<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data="{ mobileMenuOpen: false, sidebarOpen: true, mobileSidebarOpen: false }">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Dashboard') - {{ config('app.name', 'Bekal') }}</title>

    @fonts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 font-sans antialiased">

    {{-- Dynamic Navbar Component --}}
    @php
    $dashboards = [
        'administrasi' => [
            'label' => 'Administrasi',
            'url' => '/dashboard/administrasi',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>',
            'color' => 'indigo'
        ],
        'crm' => [
            'label' => 'CRM',
            'url' => '/dashboard/crm',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
            'color' => 'blue'
        ],
        'pos' => [
            'label' => 'POS',
            'url' => '/dashboard/pos',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>',
            'color' => 'emerald'
        ],
        'inventory' => [
            'label' => 'Inventory',
            'url' => '/dashboard/inventory',
            'icon' => '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>',
            'color' => 'amber'
        ]
    ];
    $active = $activeDashboard ?? 'administrasi';

    // Literal class maps for Tailwind v4 static scanner
    $sidebarGradientMap = [
        'indigo'  => 'from-indigo-500 to-indigo-600',
        'blue'    => 'from-blue-500 to-blue-600',
        'emerald' => 'from-emerald-500 to-emerald-600',
        'amber'   => 'from-amber-500 to-amber-600',
    ];
    $bottomNavActiveMap = [
        'indigo'  => 'text-indigo-600 dark:text-indigo-400 bg-indigo-50 dark:bg-indigo-900/30',
        'blue'    => 'text-blue-600 dark:text-blue-400 bg-blue-50 dark:bg-blue-900/30',
        'emerald' => 'text-emerald-600 dark:text-emerald-400 bg-emerald-50 dark:bg-emerald-900/30',
        'amber'   => 'text-amber-600 dark:text-amber-400 bg-amber-50 dark:bg-amber-900/30',
    ];
    @endphp

    @include('components.navbar', ['dashboards' => $dashboards, 'active' => $active])

    {{-- Mobile Sidebar Drawer --}}
    <div x-show="mobileSidebarOpen" class="fixed inset-0 z-50 md:hidden" style="display: none;">
        {{-- Backdrop --}}
        <div x-show="mobileSidebarOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="mobileSidebarOpen = false"
             class="absolute inset-0 bg-gray-900/60 backdrop-blur-sm"></div>

        {{-- Drawer Panel --}}
        <div x-show="mobileSidebarOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full"
             class="absolute inset-y-0 left-0 w-72 bg-white dark:bg-gray-800 shadow-2xl flex flex-col overflow-hidden">

            {{-- Drawer Header --}}
            <div class="flex items-center justify-between px-4 py-4 border-b border-gray-200 dark:border-gray-700 flex-shrink-0">
                <div class="flex items-center space-x-3">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br {{ $sidebarGradientMap[$dashboards[$active]['color']] }} flex items-center justify-center text-white">
                        {!! $dashboards[$active]['icon'] !!}
                    </div>
                    <div>
                        <h2 class="text-sm font-semibold text-gray-800 dark:text-white">{{ $dashboards[$active]['label'] }}</h2>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Dashboard Panel</p>
                    </div>
                </div>
                <button @click="mobileSidebarOpen = false"
                        class="p-2 rounded-lg text-gray-500 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

            {{-- Drawer Body --}}
            <div class="flex-1 overflow-y-auto p-4">
                @yield('sidebar')
            </div>
        </div>
    </div>

    {{-- Main Content Area --}}
    <div class="min-h-screen flex">
        {{-- Desktop Sidebar --}}
        <aside class="hidden md:flex md:flex-col w-64 bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 flex-shrink-0 transition-all duration-300"
               :class="{ '-ml-64': !sidebarOpen }">
            <div class="p-6 flex-1 overflow-y-auto">
                <div class="flex items-center space-x-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br {{ $sidebarGradientMap[$dashboards[$active]['color']] }} flex items-center justify-center text-white">
                        {!! $dashboards[$active]['icon'] !!}
                    </div>
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800 dark:text-white">{{ $dashboards[$active]['label'] }}</h2>
                        <p class="text-xs text-gray-500 dark:text-gray-400">Dashboard Panel</p>
                    </div>
                </div>

                @yield('sidebar')
            </div>
        </aside>

        {{-- Main Content --}}
        <main class="flex-1 overflow-auto min-w-0">
            {{-- Page Header --}}
            @hasSection('header')
                <header class="bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 md:py-6">
                        @yield('header')
                    </div>
                </header>
            @endif

            {{-- Content --}}
            <div class="max-w-7xl mx-auto px-3 sm:px-6 lg:px-8 py-4 md:py-8 pb-24 md:pb-8">
                @yield('content')
            </div>
        </main>
    </div>

    {{-- Mobile Bottom Navigation Bar --}}
    <nav class="md:hidden fixed bottom-0 inset-x-0 z-40 bg-white/95 dark:bg-gray-800/95 backdrop-blur-md border-t border-gray-200 dark:border-gray-700 pb-safe">
        <div class="grid grid-cols-5 h-20 px-1">
            {{-- Sidebar/Menu Toggle --}}
            <button @click="mobileSidebarOpen = true"
                    class="flex flex-col items-center justify-center space-y-1.5 rounded-2xl m-1 transition-colors text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200 active:bg-gray-100 dark:active:bg-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8M4 18h16"/>
                </svg>
                <span class="text-[10px] font-bold uppercase tracking-wider">Menu</span>
            </button>

            {{-- Dashboard Nav Links --}}
            @foreach($dashboards as $key => $item)
                @php
                    $isActive  = $active === $key;
                    $navClass  = $isActive ? ($bottomNavActiveMap[$item['color']] ?? '') : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200';
                @endphp
                <a href="{{ url($item['url']) }}"
                   class="flex flex-col items-center justify-center space-y-1.5 rounded-2xl m-1 transition-all duration-200 {{ $navClass }} active:scale-95">
                    <span class="transition-transform duration-200 {{ $isActive ? 'scale-110' : '' }}">
                        {!! $item['icon'] !!}
                    </span>
                    <span class="text-[10px] font-bold uppercase tracking-wider truncate max-w-full px-1">{{ $item['label'] }}</span>
                </a>
            @endforeach
        </div>
    </nav>

</body>
</html>
