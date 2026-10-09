@extends('layouts.app')
@section('content')

<h2>Halaman Blog</h2>
<p>Ini adalah halaman blog CRUD</p>

@foreach($posts as $post)
    <h3>{{ $post->title }}</h3>
    <p>{{ $post->body }}</p>
    <a href="{{ route('blog.show', $post->id) }}">Lihat</a>
    <a href="{{ route('blog.edit', $post->id) }}">Edit</a>

    <form action="{{ route('blog.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Hapus</button>
</form>

@endforeach

{{ $posts->links() }}
@endsection
