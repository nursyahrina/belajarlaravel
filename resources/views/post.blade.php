<x-layout :title="$title">
  
  {{-- <article class="py-8 max-w-3xl border-b border-gray-300">  
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
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
    <div class="texr-base text-gray-500">
      <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 1 Januari 2025
    </div>
    <p class="my-4 font-light">
      {{ $post->body }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&larr; Back to all posts </a>
  </article> --}}

  <!-- 
Install the "flowbite-typography" NPM package to apply styles and format the article content: 

URL: https://flowbite.com/docs/components/typography/ 
-->

  <main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
    <div class="flex justify-between px-4 mx-auto max-w-7xl ">
        <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
            <a href="/posts/{{ $post->slug }}" class="my-4 inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-500 no-underline hover:underline">
              <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg>  
               Back to all posts.
            </a>  
            <header class="mb-4 lg:mb-6 not-format">
                <address class="flex items-center mb-6 not-italic">
                    <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                        <img class="mr-4 w-20 h-20 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                        <div>
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

                            <a href="/categories/{{ $post->category->slug }}" class="block w-fit rounded-md px-2 py-1 my-2 text-xs font-medium transition-colors duration-150 inset-ring
                                          {{ $color['bg'] }} {{ $color['text'] }} {{ $color['hover'] }}">
                              {{ $post->category->name }}
                            </a>
                            <a href="/posts/{{ $post->author->username }}" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                            <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </address>
                <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
            </header>
            <p>{{ $post->body }}</p>
        </article>
    </div>
  </main>

</x-layout> 