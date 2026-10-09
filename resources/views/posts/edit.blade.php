@extends('layouts.app')
@section('content')

<h2>Edit Blog</h2>
<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul:</label>
    <input type="text" name="title" value="{{ old('title', $post->title) }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <br><br>

    <label>Isi:</label>
    <textarea name="body">{{ old('body', $post->body) }}</textarea>

    @error('body')
        <p>{{ $message }}</p>
    @enderror
    <br><br>

    <button type="submit">Update</button>
</form>
@endsection