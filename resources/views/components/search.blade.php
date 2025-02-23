<div x-data="{ query: '' }" class="relative mx-2 mt-2 max-w-screen text-gray-600">
    <!-- Icon Search di Kiri -->
    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500"></i>

    <!-- Input -->
    <input 
        type="text" 
        x-model="query"
        class="w-full pl-10 pr-4 py-2 border rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500"
        placeholder="Search movies..."
    >
</div>
