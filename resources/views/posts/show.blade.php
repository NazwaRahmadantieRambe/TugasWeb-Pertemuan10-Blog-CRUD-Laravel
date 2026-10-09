@extends('layouts.app')
@section('content')

<h2>{{ $post->title }}</h2>
<p>{{ $post->body }}</p>
<a href="{{ route('posts.index') }}">Kembali</a>

@endsection