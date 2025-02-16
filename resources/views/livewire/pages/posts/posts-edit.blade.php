<div class="text-white mt-5 w-full flex flex-col h-screen justify-center items-center text-center bg-slate-900">
    <div class="flex flex-col gap-3 w-3/4 bg-slate-800 p-5">


        <h2 class="mb-4 text-2xl font-bold">Edit Post</h2>

        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-2 rounded">{{ session('success') }}</div>
        @endif

        <form wire:submit.prevent="save">
            <div class="flex flex-col mb-3 text-white gap-2">
                <label for="title" class="block text-sm font-medium">Judul</label>
                <input type="text"
                    class=" text-black w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-500 @error('title') border-red-500 @enderror"
                    wire:model="title">
                @error('title')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3 flex flex-col gap-2">
                <label for="tags" class="block text-sm font-medium">Tags (Pisahkan dengan koma)</label>
                <input type="text"
                    class="text-black w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-500 @error('tags') border-red-500 @enderror"
                    wire:model="tags">
                @error('tags')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3  flex flex-col gap-2">
                <label for="image" class="block text-sm font-medium">Upload Gambar</label>
                <input type="file"
                    class="w-full p-2 border rounded focus:outline-none focus:ring focus:ring-blue-500 @error('image') border-red-500 @enderror"
                    wire:model="image">
                @error('image')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>


            @if ($this->image)
                <p>Preview: {{ $image }}</p>
                {{-- <img src="{{ $image->temporaryUrl() }}" width="200" class="mb-3"> --}}
            @endif

            <button type="submit"
                class=" bg-white hover:bg-gray-400 text-slate-900 font-bold py-2 px-4 rounded">Simpan</button>
        </form>
    </div>
</div>
