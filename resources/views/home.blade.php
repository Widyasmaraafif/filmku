@extends('layouts.app') <!-- Menggunakan template app.blade.php -->

@section('title', 'Home Page') <!-- Mengisi title -->

@section('content')
    <div class="h-64 bg-black text-white flex flex-col justify-center items-center text-center">
        <h1 class="text-4xl font-bold">Selamat Datang di FILMKU</h1>
        <p class="mt-2 max-w-xl">Temukan informasi lengkap tentang film favorit Anda di FILMKU—sinopsis, rating, genre,
            hingga jadwal tayang terbaru!</p>
    </div>

    <div class="my-4 mx-14">
        <div class="flex w-8 justify-between">
            <h1 class="flex text-4xl font-bold">Trending</h1>
            <div class="flex">
                <button>Today</button>
                <button>This Week</button>
            </div>
        </div>
    </div>


@endsection
