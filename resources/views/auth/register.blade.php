<x-layout>
    <div class="bg-[#273433] w-xl text-white p-6 flex flex-col gap-y-4">
        <h2 class="text-center text-2xl">Register</h2>
        <form method="POST" action="/register" class="flex flex-col space-y-2">
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="bg-red-500 text-white p-2">{{ $error }}</div>
                @endforeach
            @endif
            @csrf
            <input type="text" id="name" name="name" placeholder="Enter your name"
                class="block w-full p-2 bg-[#E1EBDB] text-[#273433]" required>
            <input type="email" id="email" name="email" placeholder="Enter your email"
                class="block w-full p-2 bg-[#E1EBDB] text-[#273433]" required>
            <input type="password" id="password" name="password" placeholder="Enter your password"
                class="block w-full p-2 bg-[#E1EBDB] text-[#273433]" required>
                 <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password"
                class="block w-full p-2 bg-[#E1EBDB] text-[#273433]" required>
            <button type="submit" class="bg-[#54C465] p-2 hover:bg-[#3ba04a]">Register</button>
            <p>Already have an account? <a href="{{ route('login') }}" class="text-amber-500">Login</a></p>
        </form>

    </div>
</x-layout>
