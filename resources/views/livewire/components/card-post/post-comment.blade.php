 <div x-show='isCommentShow' @@click.outside='isCommentShow= false'>


     <hr class="mt-2 mb-2">
     <p class="text-gray-800 font-semibold">Comment</p>
     <hr class="mt-2 mb-2">
     <div class="mt-4">
         <!-- Comment 1 -->
         @foreach ($post->comments as $comment)
             <div class="flex items-center space-x-2">
                 <img src="{{ asset('storage/' . $comment->user->avatar_path) }}" alt="User Avatar"
                     class="w-6 h-6 rounded-full">
                 <div>
                     <p class="text-gray-800 font-semibold">{{ $comment->user->name }}</p>
                     <p class="text-gray-500 text-sm">{{ $comment->text }}</p>
                 </div>
             </div>
         @endforeach
     </div>
     {{-- <!-- Reply from John Doe with indentation -->
			<div class="flex items-center space-x-2 mt-2 ml-6">
				<img src="https://placekitten.com/40/40" alt="User Avatar" class="w-6 h-6 rounded-full">
				<div>
					<p class="text-gray-800 font-semibold">John Doe</p>
					<p class="text-gray-500 text-sm">That little furball is from a local shelter. You should check it out! 🏠😺</p>
				</div>
			</div>
			<!-- Add more comments and replies as needed --> --}}
     @livewire('components.card-post.comment.comment-create', ['post' => $post])
 </div>
