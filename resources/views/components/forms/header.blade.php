<div class="mb-12">
    <h2 class="sr-only">Steps</h2>
    
    <div
      class="relative after:absolute after:inset-x-0 after:top-1/2 after:block after:h-0.5 after:-translate-y-1/2 after:rounded-lg after:bg-white"
    >
      <ol class="relative z-10 flex justify-between text-sm font-medium text-gray-500">
        <li class="flex items-center gap-2 bg-slate-100 p-2">
          <span class="size-6 rounded-full text-center text-[10px]/6 font-bold {{ $step === '1' ? 'bg-blue-600 text-white' : 'bg-white'}}"> 1 </span>
  
          <span class="hidden sm:block">Personal</span>
        </li>
  
        <li class="flex items-center gap-2 bg-slate-100 p-2">
          <span
            class="size-6 rounded-full text-center text-[10px]/6 font-bold {{ $step === '2' ? 'bg-blue-600 text-white' : 'bg-white'}}"
          >
            2
          </span>
  
          <span class="hidden sm:block">Vehicle</span>
        </li>
  
        <li class="flex items-center gap-2 bg-slate-100 p-2">
          <span class="size-6 rounded-full text-center text-[10px]/6 font-bold {{ $step === '3' ? 'bg-blue-600 text-white' : 'bg-white'}}"> 3 </span>
  
          <span class="hidden sm:block">Submit</span>
        </li>
      </ol>
    </div>
  </div>