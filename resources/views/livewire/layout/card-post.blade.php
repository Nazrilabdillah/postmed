<!-- component -->
<div class="min-h-screen flex flex-col text-start rounded-sm bg-gray-100 w-[95%] md:w-3/4 items-center">
    @foreach ($posts as $post)
        <div class = "min-h-screen flex flex-col text-start rounded-sm bg-gray-100 w-[95%] md:w-3/4 items-center">


            <div x-data='{isCommentShow : false}' class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
                <!-- User Info with Three-Dot Menu -->
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center space-x-2">

                        <img src="{{ asset('storage/' . $post->user->avatar_path) }}" alt="User Avatar"
                            class="w-10 h-10 object-cover border rounded-full">

                        <div>
                            <p class="text-gray-800 font-semibold">{{ $post->user->name }}</p>
                            <p class="text-gray-500 text-sm">{{ $post->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    @livewire('components.card-post.dropdownMenu', ['post' => $post])

                </div>
                <!-- Message -->
                <div class="mb-4">
                    <p class="text-gray-800">{{ $post->title }}
                    </p>
                    <a href="" class="text-blue-600">{{ $post->tag }}</a>

                </div>
                <!-- Image -->
                <div class="mb-4">

                    <img src="{{ asset('storage/' . $post->img_path) }}" alt="Post Image"
                        class="w-full h-48 object-cover rounded-md">
                </div>
                <!-- Like and Comment Section -->
                <div class="flex items-center justify-between text-gray-500">
                    @livewire('components.card-post.post-like', ['post' => $post])

                    @livewire('components.card-post.comment.button', ['post' => $post])
                </div>

                @livewire('components.card-post.post-comment', ['post' => $post])

            </div>

        </div>
    @endforeach
</div>
