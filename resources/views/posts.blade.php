@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
        <div>{{$post->title}}</div>
        <div>{{$post->content}}</div>
        <div>{{$post->like}}</div>
        @endforeach
</div>
@endsection