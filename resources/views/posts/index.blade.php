@extends('layouts.app')
@section('content')

<h2>Halaman Posts</h2>

<a href="{{ route('posts.create') }}">Tambah Blog</a>

@foreach($posts as $post)
    <x-card>
        <h3>{{ $post->title}}</h3>
        <p>{{ $post->body }}</p>

        <a href="{{ route('posts.show', $post->id) }}">Lihat</a>
        <a href="{{ route('posts.edit', $post->id) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Hapus</button>
        </form>
    </x-card>
@endforeach
 {{ $posts->links() }}
 @endsection