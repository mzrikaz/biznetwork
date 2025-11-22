<x-guest-layout>
    <div class="bg-[#273433] w-xl text-white p-6 flex flex-col gap-y-4">
        <h2 class="text-center text-2xl">Login</h2>
        <form method="POST" action="/login" class="flex flex-col space-y-2">
            @if($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="bg-red-500 text-white p-2">{{ $error }}</div>                    
                @endforeach
            @endif

            @session('success')
                <div class="bg-green-500 text-white p-2">{{ session('success') }}</div>
            @endsession
            @csrf
            <input type="email" id="email" name="email" placeholder="Enter your email" class="block w-full p-2 bg-[#E1EBDB] text-[#273433]" required>
            <input type="password" id="password" name="password" placeholder="Enter your password" class="block w-full p-2 bg-[#E1EBDB] text-[#273433]" required>
            <button type="submit" class="bg-[#54C465] p-2 hover:bg-[#3ba04a]">Login</button>
            <p>Doesn't have an account? <a href="{{ route('register') }}" class="text-amber-500">Register</a></p>
        </form>
    </div>
</x-guest-layout>