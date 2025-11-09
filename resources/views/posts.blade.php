<x-layout :title="$title">

  {{-- @foreach ($posts as $post)
  
  <article class="py-8 max-w-3xl border-b border-gray-300">
    @php
        $colors = [
            ['bg' => 'bg-red-50', 'text' => 'text-red-700', 'inset-ring' => 'inset-ring-red-100', 'hover' => 'hover:bg-red-100'],
            ['bg' => 'bg-orange-50', 'text' => 'text-orange-700', 'inset-ring' => 'inset-ring-orange-100', 'hover' => 'hover:bg-orange-100'],
            ['bg' => 'bg-yellow-50', 'text' => 'text-yellow-700', 'inset-ring' => 'inset-ring-yellow-100', 'hover' => 'hover:bg-yellow-100'],
            ['bg' => 'bg-lime-50', 'text' => 'text-lime-700', 'inset-ring' => 'inset-ring-lime-100', 'hover' => 'hover:bg-lime-100'],
            ['bg' => 'bg-teal-50', 'text' => 'text-teal-700', 'inset-ring' => 'inset-ring-teal-100', 'hover' => 'hover:bg-teal-100'],
            ['bg' => 'bg-green-50', 'text' => 'text-green-700', 'inset-ring' => 'inset-ring-green-100', 'hover' => 'hover:bg-green-100'],
            ['bg' => 'bg-blue-50', 'text' => 'text-blue-700', 'inset-ring' => 'inset-ring-blue-100', 'hover' => 'hover:bg-blue-100'],
            ['bg' => 'bg-indigo-50', 'text' => 'text-indigo-700', 'inset-ring' => 'inset-ring-indigo-100', 'hover' => 'hover:bg-indigo-100'],
            ['bg' => 'bg-purple-50', 'text' => 'text-purple-700', 'inset-ring' => 'inset-ring-purple-100', 'hover' => 'hover:bg-purple-100'],
            ['bg' => 'bg-pink-50', 'text' => 'text-pink-700', 'inset-ring' => 'inset-ring-pink-100', 'hover' => 'hover:bg-pink-100'],
            ['bg' => 'bg-rose-50', 'text' => 'text-rose-700', 'inset-ring' => 'inset-ring-rose-100', 'hover' => 'hover:bg-rose-100'],
            ['bg' => 'bg-gray-50', 'text' => 'text-gray-700', 'inset-ring' => 'inset-ring-gray-100', 'hover' => 'hover:bg-gray-100'],
        ];

        $index = $post->category->id % count($colors);
        $color = $colors[$index];
    @endphp

    <a href="/categories/{{ $post->category->slug }}">
      <div class="inline-flex items-center gap-1.5 rounded-md px-3 py-1 my-3 font-medium transition-colors duration-150 inset-ring
                  {{ $color['bg'] }} {{ $color['text'] }} {{ $color['hover'] }}">
        {{ $post->category->name }}
      </div>
    </a>

    </a>
    <a href="/posts/{{ $post->slug }}" class="hover:underline">
      <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
    </a>
    <div class="texr-base text-gray-500">
      <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 1 Januari 2025
    </div>
    <p class="my-4 font-light">
      {{ Str::limit($post->body, 80) }}
    </p>
    <a href="/posts/{{ $post->slug }}" class="font-medium text-blue-500 hover:underline">Read more &rArr;</a>
  </article>

  @endforeach --}}

  <div class="py-8 px-4 mx-auto max-w-7xl lg:py-16 lg:px-6">
      <div class="grid gap-8 lg:grid-cols-3 md:grid-cols-2">
          @foreach ($posts as $post)
          <article class="grid content-between p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
              <div class="flex justify-between items-center mb-5 text-gray-500">
                  @php
                      $colors = [
                          ['bg' => 'bg-red-50', 'text' => 'text-red-700', 'inset-ring' => 'inset-ring-red-100', 'hover' => 'hover:bg-red-100'],
                          ['bg' => 'bg-orange-50', 'text' => 'text-orange-700', 'inset-ring' => 'inset-ring-orange-100', 'hover' => 'hover:bg-orange-100'],
                          ['bg' => 'bg-yellow-50', 'text' => 'text-yellow-700', 'inset-ring' => 'inset-ring-yellow-100', 'hover' => 'hover:bg-yellow-100'],
                          ['bg' => 'bg-lime-50', 'text' => 'text-lime-700', 'inset-ring' => 'inset-ring-lime-100', 'hover' => 'hover:bg-lime-100'],
                          ['bg' => 'bg-teal-50', 'text' => 'text-teal-700', 'inset-ring' => 'inset-ring-teal-100', 'hover' => 'hover:bg-teal-100'],
                          ['bg' => 'bg-green-50', 'text' => 'text-green-700', 'inset-ring' => 'inset-ring-green-100', 'hover' => 'hover:bg-green-100'],
                          ['bg' => 'bg-blue-50', 'text' => 'text-blue-700', 'inset-ring' => 'inset-ring-blue-100', 'hover' => 'hover:bg-blue-100'],
                          ['bg' => 'bg-indigo-50', 'text' => 'text-indigo-700', 'inset-ring' => 'inset-ring-indigo-100', 'hover' => 'hover:bg-indigo-100'],
                          ['bg' => 'bg-purple-50', 'text' => 'text-purple-700', 'inset-ring' => 'inset-ring-purple-100', 'hover' => 'hover:bg-purple-100'],
                          ['bg' => 'bg-pink-50', 'text' => 'text-pink-700', 'inset-ring' => 'inset-ring-pink-100', 'hover' => 'hover:bg-pink-100'],
                          ['bg' => 'bg-rose-50', 'text' => 'text-rose-700', 'inset-ring' => 'inset-ring-rose-100', 'hover' => 'hover:bg-rose-100'],
                          ['bg' => 'bg-gray-50', 'text' => 'text-gray-700', 'inset-ring' => 'inset-ring-gray-100', 'hover' => 'hover:bg-gray-100'],
                      ];

                      $index = $post->category->id % count($colors);
                      $color = $colors[$index];
                  @endphp

                  <a href="/categories/{{ $post->category->slug }}" class="inline-flex items-center gap-1.5 rounded-md px-2 py-1 my-2 text-xs font-medium transition-colors duration-150 inset-ring
                                {{ $color['bg'] }} {{ $color['text'] }} {{ $color['hover'] }}">
                    {{ $post->category->name }}
                  </a>
                  <span class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
              </div>
              <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a href="#">{{ $post->title }}</a></h2>
              <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post->body, 80) }}</p>
              <div class="flex justify-between items-center">
                  <a href="/authors/{{ $post->author->username }}" class="hover:underline">
                    <div class="flex items-center space-x-4">
                        <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="{{ $post->author->name }}" />
                        <span class="font-medium text-sm dark:text-white">
                            {{ $post->author->name }}
                        </span>
                    </div>
                  </a>
                  <a href="/posts/{{ $post->slug }}" class="inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 hover:underline">
                      Read more
                      <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                  </a>
              </div>
          </article> 
          @endforeach
      </div>  
  </div>

</x-layout> 