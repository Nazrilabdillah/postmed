<x-default-layout>
    <div class="flex flex-col w-full bg-gray-100 justify-center items-center">

        @livewire('layout.card-post', ['posts' => $posts])
    </div>
</x-default-layout>
