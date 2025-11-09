<x-layout :title="$title">
  
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
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post->title }}</h2>
    <div class="texr-base text-gray-500">
      <a href="/authors/{{ $post->author->username }}" class="hover:underline">{{ $post->author->name }}</a> | 1 Januari 2025
    </div>
    <p class="my-4 font-light">
      {{ $post->body }}
    </p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&larr; Back to all posts </a>
  </article>

</x-layout> 