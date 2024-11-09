{{-- <div class="pt-10 pb-10 bg-white mx-auto max-w-7xl">
    <div class="text-left ">
        <h1 class="text-xl ml-2 mr-2 font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center md:text-left">
            Featured <span class="text-indigo-900">Articles</span>
        </h1>
    </div>

    <div class="grid grid-cols-3 gap-8  ml-2 mr-2">
        @foreach ($articles as $article)
            <div class="p-4 border rounded-lg shadow-md">
                <h3 class="font-bold">{{ $article->title ?? $article->title2 ?? $article->title1 }}</h3>

                <!-- Display content based on article type -->
                @if ($article->type === 'video')
                    <a href="{{ $article->video_link }}" target="_blank">
                        <iframe width="100%" height="200"
                            src="{{ $article->youtube_link }}"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </a>
                @elseif ($article->type === 'photo')
                    <a href="{{ $article->photo_link }}" target="_blank">
                        <img src="{{ $article->photo_link }}" alt="{{ $article->title ?? 'Photo' }}"
                            class="w-full h-48 object-cover">
                    </a>
                @elseif ($article->type === 'news')
                    <a href="{{ $article->news_link }}" target="_blank">
                        <img src="{{ $article->image }}" alt="{{ $article->title ?? 'News Image' }}"
                            class="w-full h-48 object-cover">
                            <img src="{{ $article->image }}" alt="" srcset="">
                        <p>{{ $article->content }}</p>
                    </a>
                @endif

                <p><strong>Type:</strong> {{ ucfirst($article->type) }}</p>

                <!-- Toggle Featured Button -->
                <button wire:click="toggleFeatured({{ $article->id }})"
                        class="mt-4 bg-red-900 text-white px-3 py-2 rounded-md">
                    {{ $article->is_featured ? 'Unfeature' : 'Feature' }}
                </button>
            </div>
        @endforeach
    </div>
</div> --}}
<div class="pt-10 pb-10 bg-white mx-auto max-w-7xl">
    <div class="text-left">
        <h1
            class="text-xl ml-2 mr-2 font-bold text-red-900 sm:text-3xl mb-4 font-playfair-l w-fit pb-1 px-2 rounded-md border-b-2 border-red-800 text-center md:text-left">
            Featured <span class="text-indigo-900">Articles</span>
        </h1>
    </div>

    <div class="grid lg:grid-cols-3 grid-cols-2 gap-8 ml-2 mr-2">
        @foreach ($articles as $article)
            <div class="p-4 border rounded-lg shadow-md">
                <h3 class="font-bold text-lg">{{ $article->title ?? ($article->title2 ?? $article->title3) }}</h3>
                @if (!empty($article->subtitle))
                    <p class="text-sm text-gray-600">{{ $article->subtitle }}</p>
                @endif

                @if ($article->type === 'video')
                    <a href="{{ $article->video_link }}" target="_blank">
                        <iframe width="100%" height="200" src="{{ $article->youtube_link }}" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </a>
                @elseif ($article->type === 'photo')
                    <a href="{{ $article->photo_link }}" target="_blank">
                        <img src="{{ $article->photo_link }}" alt="{{ $article->title ?? 'Photo' }}"
                            class="w-full h-48 object-cover">
                    </a>
                @elseif ($article->type === 'news')
                    <a href="{{ $article->news_link }}" target="_blank">
                        <img src="{{ $article->image }}" alt="{{ $article->title ?? 'News Image' }}"
                            class="w-full h-48 object-cover mb-2">
                        <p class="text-gray-700">{{ $article->content }}</p>
                    </a>
                @endif

                <p><strong>Type:</strong> {{ ucfirst($article->type) }}</p>

                <button wire:click="toggleFeatured({{ $article->id }})"
                    class="mt-4 bg-red-900 text-white px-3 py-2 rounded-md">
                    {{ $article->is_featured ? 'Unfeature' : 'Feature' }}
                </button>
            </div>
        @endforeach
    </div>
</div>
