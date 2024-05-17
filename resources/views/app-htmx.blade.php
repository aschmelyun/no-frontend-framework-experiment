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
    <div class="max-w-screen-md mx-auto py-12">
        <div>
            <form hx-get="{{ url()->current() }}" hx-target="#vehicleTable" hx-trigger="change" hx-push-url="true" class="flex items-center gap-4 mb-4">
                <div>
                    <label for="color" class="block text-sm font-medium text-gray-900">Color</label>
    
                    <select name="color" id="filterColor"
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                        <option value="">Please select</option>
                        @foreach($possibleColors as $color)
                            <option @selected($color === request('color')) value="{{ $color }}">{{ $color }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="make" class="block text-sm font-medium text-gray-900">Make</label>
    
                    <select name="make" id="filterMake"
                        class="mt-1.5 w-full rounded-lg border-gray-300 text-gray-700 sm:text-sm">
                        <option value="">Please select</option>
                        @foreach($possibleMakes as $make)
                            <option @selected($make === request('make')) value="{{ $make }}">{{ $make }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
            <div class="overflow-x-auto border border-gray-200 rounded-lg">
                <x-table :vehicles="$vehicles"></x-table>
            </div>
        </div>
    </div>
</body>
</html>