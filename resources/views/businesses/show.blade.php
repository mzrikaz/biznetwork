<x-app-layout>

    <x-slot:title>{{ $business->name }}</x-slot:title>

    <div class="w-full h-full p-6 bg-[#F9F9F9] dark:bg-[#121212]">
        <main class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold mb-4 text-gray-800 dark:text-gray-200">{{ $business->name }}</h1>
            <p class="text-gray-700 dark:text-gray-300">{{ $business->description }}</p>
            <!-- Add more business details as needed -->
        </main>
    </div>

</x-app-layout>