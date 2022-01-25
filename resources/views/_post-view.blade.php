<div class=" p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
    </div>
    <div>
        <h5 class="font-bold mb-2">
            {{ $tweet->user->name }}
            </a>
        </h5>
        <div class="flex justify-center ..">
            <img class="img-body" src="{{ asset('images/' . $tweet->image) }}">
            <br>
        </div>
        <p class="text-sm mb-3">
            {{ $tweet->title }}
        </p>
        <div style="display: flex">
            <p class="text-sm mb-3">
                {{ $tweet->body }}
            </p>
        </div>
        @auth

            <div style="display:flex; justify-content:space-between">
                <button type="submit"
                    class="bg-red-600 hover:bg-red-800 rounded-lg shadow px-10 text-sm text-white h-10 btn">
                    Remove
                </button>
                <x-like-buttons :tweet="$tweet" />

            </div>
        @endauth

        </button>
    </div>
</div>
