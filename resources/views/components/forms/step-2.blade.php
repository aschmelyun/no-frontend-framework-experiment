<x-forms.header step="2" />
<div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
    <form action="#" class="space-y-4" hx-post="/form/2" hx-target="#exampleForm">
        
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <label class="sr-only" for="make">Make</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Make" type="text" id="make" name="make" value="{{ old('make') }}" />
            </div>

            <div>
                <label class="sr-only" for="model">Model</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Model" type="text"
                    id="model" name="model" value="{{ old('model') }}" />
            </div>

            <div>
                <label class="sr-only" for="color">Color</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Color" type="text"
                    id="color" name="color" value="{{ old('color') }}" />
            </div>

            <div>
                <label class="sr-only" for="year">Year</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Year" type="number" min="1960" max="2025"
                    id="year" name="year" value="{{ old('year') }}" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            @csrf
            <button class="w-full rounded-lg bg-blue-600 text-white p-3 text-sm" type="submit">Next</button>
        </div>
    </form>
</div>