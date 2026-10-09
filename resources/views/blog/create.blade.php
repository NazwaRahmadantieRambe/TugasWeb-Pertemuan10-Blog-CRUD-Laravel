@extends('layouts.app')
@section('content')

<h2>Tambah Blog</h2>
<form action="{{ route('blog.store') }}" method="POST">
    @csrf
    <label>Judul:</label>
    <input type="text" name="title" value="{{ old('title') }}">
    <br><br>

    <label>Isi:</label>
    <textarea name="body">{{ old('body') }}</textarea>
    <br><br>

    <button type="submit">Simpan</button>
</form>
@endsection

