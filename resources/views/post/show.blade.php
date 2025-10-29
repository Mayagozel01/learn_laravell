@extends('layouts.main')
@section('content')
<!-- Single Post Card -->
  <article class="bg-white rounded-xl shadow-sm border border-gray-200 max-w-lg w-full overflow-hidden">
    


    <!-- Post Title -->
    <div class="px-4 pb-1">
      <h2 class="text-lg font-bold text-gray-900">{{$post->title}}</h2>
    </div>

    <!-- Post Content -->
    <div class="px-4 pb-3">
      <p class="text-gray-800 leading-relaxed">
        {{$post->content}}
      </p>
    </div>

    <!-- No Image (image: null) -->
    <!-- Engagement Actions -->
    <footer class="flex items-center justify-between px-4 py-3 text-gray-500 border-t">
      
      <button class="flex items-center space-x-2 hover:text-blue-600 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
        </svg>
        <span class="text-sm">—</span>
      </button>

      <button class="flex items-center space-x-2 hover:text-green-600 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
        </svg>
        <span class="text-sm">—</span>
      </button>

      <button class="flex items-center space-x-2 hover:text-red-600 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
        </svg>
        <span class="text-sm">500</span>
      </button>

      <button class="hover:text-blue-600 transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m9 0a3 3 0 11-6 0 3 3 0 016 0zm-9 3.684h.001M19 12h.001"/>
        </svg>
      </button>
    </footer>

  </article>
<div>
        <a href="{{route('post.index')}}">Back</a>
</div>

<div class="my-4">
        <a href="{{route('post.edit', $post->id)}}">Edit</a>
</div>
<div class="my-4">
    <form action="{{route('post.delete', $post->id)}}" method="post">
        @csrf
        @method("delete")
        <input type="submit" value="delete">
    </form>
</div>

@endsection