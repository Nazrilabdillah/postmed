<x-default-layout>
     <div class="flex flex-col w-full bg-gray-100 justify-center items-center">
     @foreach ( $posts  as $post ) 
          @livewire('layout.card-post', ['post' => $post])
          @endforeach 
     </div>      
</x-default-layout>