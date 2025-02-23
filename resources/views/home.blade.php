@extends('layouts.app') <!-- Menggunakan template app.blade.php -->

@section('title', 'Home Page') <!-- Mengisi title -->

@section('content')
    <div class="h-64 bg-black text-white flex flex-col justify-center items-center text-center">
        <h1 class="text-4xl font-bold">Selamat Datang di FILMKU</h1>
        <p class="mt-2 max-w-xl">Temukan informasi lengkap tentang film favorit Anda di FILMKU—sinopsis, rating, genre,
            hingga jadwal tayang terbaru!</p>
    </div>

    <div class="my-4 mx-14" x-data="{ selected: 'today' }">
        <div class="flex items-center space-x-4">
            <h1 class="text-2xl font-bold">Trending</h1>
    
            <!-- Toggle Switch -->
            <div class="relative inline-flex items-center w-64 rounded-full border-2 border-blue-600 p-1">
                <!-- Tombol Aktif (Slider) -->
                <div class="absolute bg-blue-600 rounded-full transition-all duration-300 ease-in-out w-1/2 h-full"
                    :class="selected === 'today' ? 'left-0' : 'left-1/2'">
                </div>
    
                <!-- Opsi Today -->
                <button @click="selected = 'today'"
                    class="relative z-10 flex-1 px-4 py-2 text-sm font-semibold transition-all duration-300 rounded-full"
                    :class="selected === 'today' ? 'text-white' : 'text-gray-400'">
                    Today
                </button>
    
                <!-- Opsi This Week -->
                <button @click="selected = 'week'"
                    class="relative z-10 flex-1 px-4 py-2 text-sm font-semibold transition-all duration-300 rounded-full"
                    :class="selected === 'week' ? 'text-white' : 'text-gray-400'">
                    This Week
                </button>
            </div>
        </div>
    
        <div class="mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            <!-- Menampilkan Trending Today -->
            <div x-show="selected === 'today'" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-64" x-cloak>
                @foreach (collect($todayMovies)->take(5) as $movie)
                    <x-card title="{{ $movie['title'] }}" date="{{ $movie['release_date'] }}"
                        image="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
                        rating="{{ $movie['vote_average'] }}" />
                @endforeach
            </div>
    
            <!-- Menampilkan Trending This Week -->
            <div x-show="selected === 'week'" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-64" x-cloak>
                @foreach (collect($weekMovies)->take(5) as $movie)
                    <x-card title="{{ $movie['title'] }}" date="{{ $movie['release_date'] }}"
                        image="https://image.tmdb.org/t/p/w500{{ $movie['poster_path'] }}"
                        rating="{{ $movie['vote_average'] }}" />
                @endforeach
            </div>
        </div>
    </div>
    
    

@endsection
