@extends('layouts.app')
@section('content')

<h2>Edit Blog</h2>
<form action="{{ route('blog.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Judul:</label>
    <input type="text" name="title" value="{{ old('title', $blog->title) }}">
    <br><br>
    <label>Isi:</label>
    <textarea name="body">{{ old('body', $blog->body) }}</textarea>
    <br><br>

    <button type="submit">Update</button>
</form>
@endsection