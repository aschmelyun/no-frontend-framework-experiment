<x-forms.header step="3" />
<div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
    <form action="#" class="space-y-4" hx-post="/form/3" hx-target="#exampleForm">
        <div>
            <label class="sr-only" for="notes">Additional Notes</label>
            <input class="w-full rounded-lg border-gray-200 p-3 text-sm" placeholder="Additional Notes..." type="text" id="notes" name="notes" />
        </div>
        <div>
            @csrf
            <button class="w-full rounded-lg bg-blue-600 text-white p-3 text-sm" type="submit">Finish</button>
        </div>
    </form>
</div>