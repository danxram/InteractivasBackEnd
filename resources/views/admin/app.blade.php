<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Mate</title>
    @vite('resources/css/app.css')
</head>
<body>
    <header class="header p-6 flex items-center">
        <a href="{{route('events.index')}}">
        <img src="{{ asset('images/EVENT MATE.png') }}" alt="Event Mate" class="h-8">
        </a>
    </header>
    <main class="p-6">
        @yield('content')
    </main>
</body>
</html>