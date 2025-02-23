<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-outerspace text-honeydew">
    <x-navbar />  <!-- Memanggil komponen navbar -->

    <div class="container mx-auto">
        @yield('content')  <!-- Tempat untuk isi halaman -->
    </div>
</body>
</html>
