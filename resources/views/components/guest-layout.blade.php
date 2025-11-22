<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="It's a business networking platform.">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-primary h-screen">

    <header class="header">
        <div class="w-7xl mx-auto">
            <h1 class="text-2xl font-bold"><a href="{{ config('app.url') }}">{{ config('app.name') }}</a></h1>
        </div>
    </header>

    <main class="w-full grid place-items-center h-[calc(100vh-4rem)]">
        {{ $slot }}
    </main>
    
</body>
</html>