<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My App</title>
    @vite(['resources/css/app.css'])
    <script src="https://unpkg.com/htmx.org@1.9.12" integrity="sha384-ujb1lZYygJmzgSwoxRggbCHcjc0rB2XoQrxeTUQyRjrOnlCoYta87iKBWq3EsdM2" crossorigin="anonymous"></script>
</head>
<body class="bg-slate-100">
    <div class="max-w-screen-md mx-auto py-12" hx-boost="true">
        <div id="exampleForm">
            <button hx-get="/form/1" hx-target="#exampleForm" class="w-full rounded-lg bg-blue-600 text-white p-3 text-sm">Get Started</button>
        </div>
    </div>
</body>
</html>