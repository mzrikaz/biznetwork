<x-app-layout>

    <x-slot:title>Dashboard</x-slot:title>

    <div class="w-full h-full p-6">
        <main class="max-w-7xl mx-auto">

            <section class="flex justify-between">
                <h1 class="text-3xl font-bold text-gray-900 dark:text-gray-100">Dashboard</h1>
                <a href="{{ route('businesses.create') }}" class="bg-[#54C465] text-white px-4 py-2 rounded hover:bg-[#3ba04a]">Add New Business</a>
            </section>

            <ul>
                @foreach ($businesses as $business)
                    <li><a href="{{ route('businesses.show', ['business' => $business->slug]) }}" target="blank">{{ $business->name }}</a></li>
                @endforeach
            </ul>
            

            
        </main>
    </div>

</x-app-layout>
