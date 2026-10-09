@extends('layout.app')
@section('content')

<h2>{{ $blog->title }}</h2>
<p>{{ $blog->body }}</p>

<a href="{{ route('blog.index') }}">Kembali</a>
@endsection
