<x-app-layout>

    <x-slot:title>Dashboard</x-slot:title>

    <div class="w-full h-full p-6 bg-[#F9F9F9] dark:bg-[#121212]">
        <main class="max-w-7xl mx-auto">
            <p class="text-gray-700 dark:text-gray-300">Hi {{ auth()->user()->name }}!</p>
        </main>
    </div>

</x-app-layout>
