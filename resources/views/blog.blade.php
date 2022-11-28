@extends('template')

@section('content')
<h1>Listado</h1>
@foreach($posts as $post)
<p>
    <strong>{{ $post->id }}</strong>
    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
</p>
<small>{{ $post->user->name }}</small>
@endforeach


{{ $posts->links() }}
@endsection