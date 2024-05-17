<x-forms.header step="1" />
<div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
    @if (count($errors))
        <x-forms.errors :errors="$errors" />
    @endif
    <form action="#" class="space-y-4" hx-post="/form/1" hx-target="#exampleForm">
        <div>
            <label class="sr-only" for="name">Name</label>
            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Name" type="text" id="name" name="name" value="{{ old('name') }}" />
        </div>

        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
                <label class="sr-only" for="email">Email</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Email address" type="email" 
                    id="email" name="email" value="{{ old('email') }}" />
            </div>

            <div>
                <label class="sr-only" for="phone">Phone</label>
                <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Phone Number" type="tel"
                    id="phone" name="phone" value="{{ old('phone') }}" />
            </div>
        </div>

        <div>
            @csrf
            <button class="w-full rounded-lg bg-blue-600 text-white p-3 text-sm" type="submit">Next</button>
        </div>
    </form>
</div>