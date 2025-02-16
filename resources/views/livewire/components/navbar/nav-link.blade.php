 <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
 <div class="flex flex-col">
@auth
    
<a wire:navigate href="{{route('welcome')}}" :class = "{{$this->isActive('welcome')}} ? 'bg-gray-900' : 'hover:bg-gray-700'" class="rounded-md px-3 py-2 text-sm font-medium text-white transition-all delay-75">Home</a>
<a wire:navigate href="{{route('profile')}}" :class = "{{$this->isActive('profile')}} ? 'bg-gray-900' : 'hover:bg-gray-700'" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">Profile</a>
<a wire:navigate href="{{route('setting')}}"  :class = "{{$this->isActive('setting')}} ? 'bg-gray-900' : 'hover:bg-gray-700'"  class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">Setting</a>
<a wire:navigate href="{{route('posts.create')}}" :class = "{{$this->isActive('posts.create')}} ? 'bg-gray-900' : 'hover:bg-gray-700'" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:text-white">create posts</a>
@endauth
@guest
<h2 class="rounded-md px-3 py-2 text-sm font-medium text-white bg-gray-900  mb-2">Welcome to postMed</h2>
<a wire:navigate :class = "{{$this->isActive('login')}} ? 'bg-gray-900' : 'hover:bg-gray-700'" href="{{route('login')}}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
<a wire:navigate :class = "{{$this->isActive('register')}} ? 'bg-gray-900' : 'hover:bg-gray-700'" href="{{route('register')}}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a>
    
@endguest


     
</div>