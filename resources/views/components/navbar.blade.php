<div x-data="{ open: false, selectedLocation: 'Surakarta, Jawa Tengah' }">
    <!-- Navbar -->
    <nav class="bg-gray-900 text-white px-14 py-3  ">
        <div class="container mx-auto max-w-screen flex justify-between items-center ">
            <!-- Kiri: Logo + Menu Button -->
            <div class="flex items-center space-x-4 flex-1 ">
                <!-- Menu Button -->
                <button @click="open = !open" class="text-white text-xl focus:outline-none md:hidden">
                    <i class="fas fa-bars"></i>
                </button>


                <!-- Logo -->
                <a href="/" class="text-xl font-bold flex items-center">
                    FILMKU <span class="text-orange-500 text-2xl ml-1">•</span>
                </a>
            </div>

            <!-- Tengah: Menu Items -->
            <div class="hidden justify-center md:flex space-x-6 text-gray-300 flex-1 ">
                <a href="#" class="hover:text-white">Film</a>
                <a href="#" class="hover:text-white">Serial TV</a>
                <a href="#" class="hover:text-white">Watchlist</a>
                <a href="#" class="hover:text-white">Tentang</a>
            </div>

            <!-- Kanan: Lokasi + Login -->
            <div class="flex items-center justify-end space-x-4 flex-1">
                <!-- Lokasi -->
                <div x-data="{ dropdownOpen: false }" class="relative">
                    <button @click="dropdownOpen = !dropdownOpen"
                        class="flex items-center text-gray-300 hover:text-white">
                        <i class="fas fa-map-marker-alt text-blue-400"></i>
                        <span class="ml-1" x-text="selectedLocation"></span>
                        <i class="fas fa-chevron-down ml-2 text-sm"></i>
                    </button>

                    <!-- Dropdown Content -->
                    <div x-show="dropdownOpen" @click.away="dropdownOpen = false" x-transition
                        class="absolute left-0 mt-2 w-48 bg-gray-800 text-white rounded-md shadow-lg py-2 z-50">
                        <button @click="selectedLocation = 'Surakarta, Jawa Tengah'; dropdownOpen = false"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-700">Surakarta, Jawa Tengah</button>
                        <button @click="selectedLocation = 'Demak, Jawa Tengah'; dropdownOpen = false"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-700">Demak, Jawa Tengah</button>
                        <button @click="selectedLocation = 'Depok, Yogyakarta'; dropdownOpen = false"
                            class="block w-full text-left px-4 py-2 hover:bg-gray-700">Depok, Yogyakarta</button>

                        <!-- Tombol Tambah Lokasi -->
                        <a href="/add-location" class="block text-left px-4 py-2 text-blue-400 hover:bg-gray-700">
                            <i class="fas fa-plus-circle"></i> Tambah Lokasi
                        </a>
                    </div>
                </div>

                <!-- Login -->
                <a href="#" class="flex items-center space-x-2 text-gray-300 hover:text-white">
                    <i class="fas fa-user"></i>
                    <span>Log in</span>
                </a>
            </div>
        </div>
        <x-search/>
    </nav>

    <!-- Sidebar -->
    <div x-show="open" class="fixed inset-0 bg-black bg-opacity-50 z-40" @click="open = false"></div>
    <div x-show="open" x-transition class="fixed top-0 left-0 w-64 h-full bg-gray-800 text-white z-50 shadow-lg p-6"
        @keydown.escape.window="open = false">
        <button @click="open = false" class="absolute top-3 right-3 text-white text-2xl">
            &times;
        </button>

        <h2 class="text-lg font-bold mb-4">Menu</h2>
        <ul class="space-y-4">
            <li x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full hover:text-orange-500" :class="open ? 'text-orange-500' : ''">
                    <span>Film</span>
                    <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"></i>
                </button>
                
                <!-- Sub-menu Movies -->
                <ul x-show="open" x-collapse class="ml-4 mt-2 space-y-2">
                    <li><a href="#" class="block ">Populer</a></li>
                    <li><a href="#" class="block hover:text-orange-500">Sedang diputar</a></li>
                    <li><a href="#" class="block hover:text-orange-500">Mendatang</a></li>
                    <li><a href="#" class="block  hover:text-orange-500">Top Rating</a></li>
                </ul>
            </li>

            {{-- series --}}
            <li x-data="{ open: false }">
                <button @click="open = !open" class="flex items-center justify-between w-full hover:text-orange-500" :class="open ? 'text-orange-500' : ''">
                    <span>Serial TV</span>
                    <i :class="open ? 'fas fa-chevron-up' : 'fas fa-chevron-down'"></i>
                </button>
                
                <!-- Sub-menu Movies -->
                <ul x-show="open" x-collapse class="ml-4 mt-2 space-y-2">
                    <li><a href="#" class="block ">Populer</a></li>
                    <li><a href="#" class="block hover:text-orange-500">Sedang diputar</a></li>
                    <li><a href="#" class="block hover:text-orange-500">Mendatang</a></li>
                    <li><a href="#" class="block  hover:text-orange-500">Top Rating</a></li>
                </ul>
            </li>

            <li><a href="#" class="block hover:text-orange-500">Watchlist</a></li>
            <li><a href="#" class="block hover:text-orange-500">Tentang</a></li>
        </ul>
    </div>
</div>
