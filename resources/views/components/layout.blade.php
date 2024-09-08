<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-lvh bg-black text-white px-10 py-4 font-hanken-grotesk">
    <x-navigation-menu/>
    <main class="mt-10 max-w-[960px] mx-auto">
        {{ $slot }}
    </main>
</body>
</html>
