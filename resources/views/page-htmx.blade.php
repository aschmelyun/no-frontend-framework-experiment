<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My App</title>
    @vite(['resources/css/app.css'])
    <script src="https://unpkg.com/htmx.org@1.9.12" integrity="sha384-ujb1lZYygJmzgSwoxRggbCHcjc0rB2XoQrxeTUQyRjrOnlCoYta87iKBWq3EsdM2" crossorigin="anonymous"></script>
</head>
<body>
    <div class="max-w-screen-md mx-auto py-12" hx-boost="true">
        <div>
            <h1 class="font-black text-3xl mb-8">Page {{ $page }}</h1>
            <p class="mb-4">You are currently on page #{{ $page }}. Use the links below to navigate:</p>
            @foreach ($links as $title => $link)
                @if ($link)
                    <a class="text-indigo-700 hover:underline mr-4" href="/page/{{ $link }}" class="mx-2">{{ $title }}</a>
                @endif
            @endforeach
        </div>
    </div>
</body>
</html>