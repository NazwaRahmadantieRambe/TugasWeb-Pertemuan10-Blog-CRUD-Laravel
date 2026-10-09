@extends('layouts.app')
@section('content')

<h2>Tambah Blog</h2>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <label>Judul:</label>
    <input type="text" name="title" value="{{ old('title') }}">

    @error('title')
        <p>{{ $message }}</p>
    @enderror
    <br><br>

    <label>Isi:</label>
    <textarea name="body">{{ old('body') }}</textarea>

    @error('body')
        <p>{{ $message }}</p>
    @enderror
    <br><br>
    <button type="submit">Simpan</button>
</form>
@endsection

