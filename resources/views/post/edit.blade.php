@extends('layouts.main')
@section('content')

<div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
  <div class="max-w-md mx-auto">
    <!-- Title Section -->
    <div class="text-center mb-8">
      <h1 class="text-3xl font-bold text-gray-900 mb-2">Edit post</h1>
      <p class="text-gray-600">Fill out the form below to get in touch with our team.</p>
    </div>

    <!-- Form -->
    <form class="bg-white shadow-md rounded-lg p-6 space-y-6" action="{{route('post.update', $post->id)}}" method="post">
        @csrf
        @method('patch')
      <!-- Name Input -->
      <div>
        <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
        <input
          type="text"
          id="title"
          name="title"
          required
          class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="title name"
          value="{{$post->title}}"
        />
      </div>


      <!-- Message Textarea -->
      <div>
        <label for="content" class="block text-sm font-medium text-gray-700 mb-2">Content</label>
        <textarea
          id="content"
          name="content"
          rows="4"
          required
          class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="Tell us about your inquiry..."
        > {{$post->content}}</textarea>
      </div>
            <div>
        <label for="image" class="block text-sm font-medium text-gray-700 mb-2">image</label>
        <input
          type="text"
          id="image"
          name="image"
          class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
          placeholder="image"
          value="{{ $post->image }}"
        />
      </div>
      <div class="mb-4">
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Choose category</label>
                <select id="category" name="category_id" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                @foreach ($categories as $category)    
                <option 
                {{ $category->id === $post->category->id ? 'selected' : ''}}
                value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
                </select>
            </div>
      <!-- Submit Button -->
      <div>
        <button
          type="submit"
          class="w-full bg-blue-600 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200"
        >
        Update
        </button>
      </div>
    </form>
  </div>
</div>
@endsection