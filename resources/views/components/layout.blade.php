<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pixel Positions</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-lvh bg-black text-white">
    <div class="px-10 py-4">
        <x-navigation-menu/>
        <main class="mt-10 max-w-[960px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>
</html>
