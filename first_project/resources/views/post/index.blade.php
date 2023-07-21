@extends('layouts.main')
@section('content')
<div>
    <div>
        @foreach($posts as $post)
            <div><a href="{{route('post.show',$post->id)}}"> {{$post->id}}. {{$post->title}}</a></div>
        @endforeach
    </div>
    <div>
        <a href="{{route('post.create')}}">Create New Post</a>
    </div>
</div>
@endsection

