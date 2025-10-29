@extends('layouts.main')
@section('content')
    <div class="flex flex-col gap-2">
        @foreach($posts as $post)
        <div><ul><li><a href="{{route('post.show', $post->id)}}">{{$post->id}} {{$post->title}}</a>
        </li></ul></div>
        @endforeach
         <div>
            <a href="{{route('post.create')}}">Post create</a>
        </div>
@endsection