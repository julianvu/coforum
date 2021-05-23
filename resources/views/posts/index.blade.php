@extends('layouts.app')

@section('content')
    <div class="container bg-light rounded-3 p-4">
        <h1 class="display-6 mb-4">Forum Threads</h1>
        @foreach($posts as $post)
            <p>{{ $post->title }}</p>
            {!! $post->body !!}
        @endforeach
    </div>
@endsection
