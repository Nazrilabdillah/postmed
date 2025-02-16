 <div x-data='{isDropdownShow:false}' class="text-gray-500 cursor-pointer">
     <!-- Three-dot menu icon -->
     <button @@click='isDropdownShow=!isDropdownShow' class="hover:bg-gray-50 rounded-full p-1">
         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
             <circle cx="12" cy="7" r="1" />
             <circle cx="12" cy="12" r="1" />
             <circle cx="12" cy="17" r="1" />
         </svg>
     </button>
     <div x-show="isDropdownShow" @click.outside="isDropdownShow= false"
         class="absolute translate-x-[-4.5rem] z-10  p-4 origin-top-right rounded-md bg-white py-1 ring-1 shadow-lg ring-black/5 focus:outline-hidden"
         role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1" style="">
         <!-- Active: "bg-gray-100 outline-hidden", Not Active: "" -->


         @if (Auth::user() && Auth::user()->id == $post->user->id)
             <a wire:navigate="true" href="{{ route('posts.edit', $post->id) }}"
                 class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-300" role="menuitem" tabindex="-1"
                 id="user-menu-item-1">&#9998; edit</a>
             <button wire:click="deletePost" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-300"
                 role="menuitem" tabindex="-1" id="user-menu-item-2">&#128465; delete</button>
         @else
             <a wire:navigate="true" href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-300"
                 role="menuitem" tabindex="-1" id="user-menu-item-0">&#128190; save</a>
         @endif
     </div>
 </div>
