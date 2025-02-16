<form wire:submit.prevent="save">
        <div class="flex justify-center gap-1 mt-3">

         <input wire:model='text' type="text" placeholder="type comment" class="w-full py-2 bg-transparent focus:outline-none xl:w-125 text-black @error('text') border-red-600 @enderror">
 
        <button class="text-white  hover:bg-slate-600 rounded-sm p-1 bg-slate-800">send</button>
    </div>
</form>
