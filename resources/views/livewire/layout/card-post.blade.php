<!-- component -->
<div class = "flex flex-col text-start rounded-sm bg-gray-100 w-[95%] md:w-3/4 items-center justify-center">


    <div x-data='{isCommentShow : false}' class="bg-white p-8 rounded-lg shadow-md max-w-md w-full">
        <!-- User Info with Three-Dot Menu -->
        <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-2">

                <img src="https://thumbs.dreamstime.com/b/boy-disguised-mask-profile-avatar-fake-nose-mustache-glasses-cartoon-character-vector-illustration-graphic-design-149133502.jpg"
                    alt="User Avatar" class="w-10 h-10 object-cover border rounded-full">

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
            <img src="https://images.unsplash.com/photo-1529778873920-4da4926a72c2?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y3V0ZSUyMGNhdHxlbnwwfHwwfHx8MA%3D%3D"
                alt="Post Image" class="w-full h-48 object-cover rounded-md">
        </div>
        <!-- Like and Comment Section -->
        <div class="flex items-center justify-between text-gray-500">
            @livewire('components.card-post.post-like', ['post' => $post])

            @livewire('components.card-post.comment.button', ['post' => $post])
        </div>

        @livewire('components.card-post.post-comment', ['post' => $post])

    </div>

</div>
