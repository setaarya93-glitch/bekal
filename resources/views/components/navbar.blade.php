@php
// Pemetaan warna dinamis tema dashboard ke class Tailwind CSS literal agar terbaca oleh static scanner Tailwind v4.
$buttonColorMap = [
    'indigo' => 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/50 dark:text-indigo-300 hover:bg-indigo-100 dark:hover:bg-indigo-900/70',
    'blue' => 'bg-blue-50 text-blue-700 dark:bg-blue-900/50 dark:text-blue-300 hover:bg-blue-100 dark:hover:bg-blue-900/70',
    'emerald' => 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 hover:bg-emerald-100 dark:hover:bg-emerald-900/70',
    'amber' => 'bg-amber-50 text-amber-700 dark:bg-amber-900/50 dark:text-amber-300 hover:bg-amber-100 dark:hover:bg-amber-900/70',
];

$itemActiveColorMap = [
    'indigo' => 'bg-indigo-50 text-indigo-700 dark:bg-indigo-900/40 dark:text-indigo-300 font-medium',
    'blue' => 'bg-blue-50 text-blue-700 dark:bg-blue-900/40 dark:text-blue-300 font-medium',
    'emerald' => 'bg-emerald-50 text-emerald-700 dark:bg-emerald-900/40 dark:text-emerald-300 font-medium',
    'amber' => 'bg-amber-50 text-amber-700 dark:bg-amber-900/40 dark:text-amber-300 font-medium',
];

// Explicit literal scanner registration untuk text-colors
// text-indigo-500 text-blue-500 text-emerald-500 text-amber-500

$activeTheme = $dashboards[$active]['color'] ?? 'indigo';
$activeButtonClass = $buttonColorMap[$activeTheme] ?? $buttonColorMap['indigo'];
@endphp

<nav class="bg-white border-b border-gray-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-14 md:h-16">
            {{-- Logo & Brand + Desktop Dropdown --}}
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center flex-shrink-0">
                        <span class="text-white font-bold text-sm">B</span>
                    </div>
                    <span class="text-lg md:text-xl font-semibold text-gray-800 dark:text-white">Bekal</span>
                </a>

                {{-- Desktop Dashboard Dropdown --}}
                <div class="hidden md:flex ml-10 items-center space-x-1">
                    <div class="relative" x-data="{ dropdownOpen: false }" @click.away="dropdownOpen = false">
                        <button @click="dropdownOpen = !dropdownOpen"
                                class="flex items-center space-x-2 px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200
                                {{ in_array($active, array_keys($dashboards))
                                    ? $activeButtonClass
                                    : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900 dark:text-gray-300 dark:hover:bg-gray-800 dark:hover:text-white' }}">
                            <span class="flex items-center">
                                {!! $dashboards[$active]['icon'] ?? '<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>' !!}
                            </span>
                            <span>{{ $dashboards[$active]['label'] ?? 'Dashboard' }}</span>
                            <svg class="w-4 h-4 transition-transform duration-200" :class="{ 'rotate-180': dropdownOpen }"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>

                        {{-- Dropdown Panel --}}
                        <div x-show="dropdownOpen"
                             x-transition:enter="transition ease-out duration-150"
                             x-transition:enter-start="transform opacity-0 scale-95 -translate-y-1"
                             x-transition:enter-end="transform opacity-100 scale-100 translate-y-0"
                             x-transition:leave="transition ease-in duration-100"
                             x-transition:leave-start="transform opacity-100 scale-100 translate-y-0"
                             x-transition:leave-end="transform opacity-0 scale-95 -translate-y-1"
                             class="absolute left-0 mt-2 w-56 bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-gray-100 dark:border-gray-700 py-2 z-50">

                            <p class="px-4 py-1.5 text-xs font-semibold text-gray-400 dark:text-gray-500 uppercase tracking-wider">Dashboard</p>

                            @foreach($dashboards as $key => $item)
                                <a href="{{ url($item['url']) }}"
                                   @click="dropdownOpen = false"
                                   class="flex items-center space-x-3 px-4 py-2.5 text-sm transition-colors duration-150
                                   {{ $active === $key
                                       ? ($itemActiveColorMap[$item['color']] ?? $itemActiveColorMap['indigo'])
                                       : 'text-gray-700 hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-gray-700/60' }}">
                                    <span class="flex-shrink-0 text-{{ $item['color'] }}-500">
                                        {!! $item['icon'] !!}
                                    </span>
                                    <span>{{ $item['label'] }}</span>
                                    @if($active === $key)
                                        <svg class="w-4 h-4 ml-auto text-{{ $item['color'] }}-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right Side Actions --}}
            <div class="flex items-center space-x-1 sm:space-x-3">
                {{-- Notifications --}}
                <button class="p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-gray-200 dark:hover:bg-gray-800 transition-colors relative">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-red-500 rounded-full ring-2 ring-white dark:ring-gray-900"></span>
                </button>

                {{-- User Menu --}}
                <div class="relative" x-data="{ open: false }" @click.away="open = false">
                    <button @click="open = !open" class="flex items-center space-x-2 p-1.5 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                        <div class="w-8 h-8 bg-gradient-to-br from-green-400 to-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                            <span class="text-white text-sm font-medium">{{ substr(auth()->user()->name ?? 'A', 0, 1) }}</span>
                        </div>
                        <span class="hidden md:block text-sm font-medium text-gray-700 dark:text-gray-300 max-w-24 truncate">{{ auth()->user()->name ?? 'Admin' }}</span>
                        <svg class="hidden md:block w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>

                    <div x-show="open"
                         x-transition:enter="transition ease-out duration-100"
                         x-transition:enter-start="transform opacity-0 scale-95"
                         x-transition:enter-end="transform opacity-100 scale-100"
                         x-transition:leave="transition ease-in duration-75"
                         x-transition:leave-start="transform opacity-100 scale-100"
                         x-transition:leave-end="transform opacity-0 scale-95"
                         class="absolute right-0 mt-2 w-48 bg-white dark:bg-gray-800 rounded-xl shadow-xl border border-gray-200 dark:border-gray-700 py-1 z-50">
                        <a href="#" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">Profil</a>
                        <a href="#" class="block px-4 py-2.5 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">Pengaturan</a>
                        <div class="border-t border-gray-200 dark:border-gray-700 my-1"></div>
                        <a href="#" class="block px-4 py-2.5 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors">Keluar</a>
                    </div>
                </div>

                {{-- Mobile: Hamburger for Sidebar Drawer --}}
                <button @click="mobileSidebarOpen = !mobileSidebarOpen"
                        class="md:hidden p-2 rounded-lg text-gray-500 hover:text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
