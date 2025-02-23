<div class="w-[200px] h-[450px] bg-white border border-gray-200 rounded-lg shadow-md overflow-hidden">
    <!-- Gambar -->
    <img src="{{ $image }}" alt="Movie Image" class="w-full object-cover">
    
    <!-- Konten -->
    <div class="p-4">
        <h2 class="text-md font-semibold text-gray-900">{{ $title }}</h2>
        <p class="text-sm text-gray-700">{{ $date }}</p>

        <!-- Rating -->
        <div class="mt-3 flex items-center space-x-2">
            <span class="text-yellow-500 text-lg font-bold">{{ $rating }}</span>
            <span class="text-gray-500 text-sm">/ 10</span>
        </div>
    </div>
</div>
