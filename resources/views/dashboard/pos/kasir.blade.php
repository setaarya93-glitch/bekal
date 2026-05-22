@extends('dashboard.pos')

@section('title', 'POS Kasir')

@section('header')
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white">POS Kasir</h1>
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">Antarmuka cepat untuk transaksi</p>
        </div>
        <div class="flex items-center space-x-3">
            <span class="px-3 py-1 bg-emerald-100 text-emerald-700 dark:bg-emerald-900/50 dark:text-emerald-300 rounded-full text-sm">
                Terminal 1 - Siap
            </span>
        </div>
    </div>
@endsection

@section('content')
    <div x-data="{ activeTab: 'products' }" class="space-y-4">
        {{-- Mobile Tab Switcher --}}
        <div class="flex lg:hidden bg-gray-100 dark:bg-gray-700/50 p-1 rounded-xl">
            <button @click="activeTab = 'products'"
                    :class="activeTab === 'products' ? 'bg-white dark:bg-gray-800 text-emerald-600 dark:text-emerald-400 shadow-sm' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200'"
                    class="flex-1 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200">
                Produk
            </button>
            <button @click="activeTab = 'cart'"
                    :class="activeTab === 'cart' ? 'bg-white dark:bg-gray-800 text-emerald-600 dark:text-emerald-400 shadow-sm' : 'text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-200'"
                    class="flex-1 py-2.5 text-sm font-semibold rounded-lg transition-all duration-200 flex items-center justify-center space-x-2">
                <span>Keranjang</span>
                <span class="inline-flex items-center justify-center px-2 py-0.5 text-xs font-bold leading-none text-white bg-emerald-500 rounded-full">3</span>
            </button>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            {{-- Products Grid --}}
            <div :class="activeTab === 'products' ? 'block' : 'hidden lg:block'"
                 class="lg:col-span-2 space-y-6">
                {{-- Search & Categories --}}
                <div class="bg-white dark:bg-gray-800 rounded-xl p-4 shadow-sm border border-gray-200 dark:border-gray-700">
                    <div class="flex flex-wrap items-center gap-4">
                        <div class="flex-1 min-w-64">
                            <div class="relative">
                                <input type="text" placeholder="Cari produk cepat..." class="w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-emerald-500 dark:bg-gray-700 dark:text-white">
                                <svg class="w-5 h-5 text-gray-400 absolute left-3 top-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="px-3 py-2 bg-emerald-100 text-emerald-700 rounded-lg text-sm font-medium dark:bg-emerald-900/50 dark:text-emerald-300">Semua</button>
                            <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-lg text-sm dark:text-gray-300 dark:hover:bg-gray-700">Makanan</button>
                            <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-lg text-sm dark:text-gray-300 dark:hover:bg-gray-700">Minuman</button>
                            <button class="px-3 py-2 text-gray-600 hover:bg-gray-100 rounded-lg text-sm dark:text-gray-300 dark:hover:bg-gray-700">Snack</button>
                        </div>
                    </div>
                </div>

                {{-- Quick Products --}}
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4">
                    @foreach([
                        ['Nasi Goreng', 25000, 'Makanan'],
                        ['Mie Goreng', 22000, 'Makanan'],
                        ['Ayam Bakar', 30000, 'Makanan'],
                        ['Sate Ayam', 28000, 'Makanan'],
                        ['Es Teh Manis', 8000, 'Minuman'],
                        ['Kopi Hitam', 12000, 'Minuman'],
                        ['Jus Jeruk', 15000, 'Minuman'],
                        ['Air Mineral', 5000, 'Minuman'],
                        ['Keripik Kentang', 10000, 'Snack'],
                        ['Roti Bakar', 15000, 'Snack'],
                        ['Pisang Goreng', 12000, 'Snack'],
                        ['Tahu Crispy', 10000, 'Snack'],
                    ] as $product)
                    <button class="bg-white dark:bg-gray-800 p-4 rounded-xl border border-gray-200 dark:border-gray-700 hover:border-emerald-500 hover:shadow-md transition-all text-left group">
                        <div class="w-full h-20 bg-gradient-to-br from-emerald-50 to-teal-50 dark:from-gray-700 dark:to-gray-600 rounded-lg mb-3 flex items-center justify-center group-hover:from-emerald-100 group-hover:to-teal-100">
                            <svg class="w-8 h-8 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                        </div>
                        <h4 class="font-medium text-gray-900 dark:text-white text-sm">{{ $product[0] }}</h4>
                        <p class="text-emerald-600 font-bold">Rp {{ number_format($product[1], 0, ',', '.') }}</p>
                    </button>
                    @endforeach
                </div>
            </div>

            {{-- Cart - Quick Checkout --}}
            <div :class="activeTab === 'cart' ? 'block' : 'hidden lg:block'"
                 class="bg-white dark:bg-gray-800 rounded-xl shadow-sm border border-gray-200 dark:border-gray-700 h-fit">
                <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex items-center justify-between">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Keranjang Cepat</h3>
                    <button class="text-red-500 text-sm hover:text-red-600">Kosongkan</button>
                </div>
                <div class="p-4 max-h-64 overflow-y-auto space-y-3">
                    @foreach(['Nasi Goreng', 'Es Teh Manis', 'Ayam Bakar'] as $item)
                    <div class="flex items-center justify-between p-2 bg-gray-50 dark:bg-gray-700 rounded-lg">
                        <div>
                            <p class="font-medium text-gray-900 dark:text-white text-sm">{{ $item }}</p>
                            <p class="text-xs text-gray-500">Rp {{ number_format(rand(15000, 30000), 0, ',', '.') }}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <button class="w-6 h-6 rounded-full bg-gray-200 dark:bg-gray-600 flex items-center justify-center text-gray-600 dark:text-gray-300">-</button>
                            <span class="text-sm font-medium w-4 text-center">1</span>
                            <button class="w-6 h-6 rounded-full bg-emerald-500 flex items-center justify-center text-white">+</button>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="p-4 border-t border-gray-200 dark:border-gray-700 bg-gray-50 dark:bg-gray-700/50 rounded-b-xl">
                    <div class="space-y-2 mb-4">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600 dark:text-gray-400">Subtotal</span>
                            <span class="font-medium">Rp 77,000</span>
                        </div>
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600 dark:text-gray-400">PPN (10%)</span>
                            <span class="font-medium">Rp 7,700</span>
                        </div>
                        <div class="flex justify-between text-lg font-bold pt-2 border-t border-gray-200 dark:border-gray-600">
                            <span class="text-gray-900 dark:text-white">Total</span>
                            <span class="text-emerald-600">Rp 84,700</span>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-2">
                        <button class="py-3 bg-emerald-600 text-white rounded-lg font-bold hover:bg-emerald-700 transition-colors">
                            BAYAR
                        </button>
                        <button class="py-3 bg-gray-200 text-gray-700 rounded-lg font-medium hover:bg-gray-300 transition-colors dark:bg-gray-600 dark:text-gray-300">
                            SIMPAN
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
