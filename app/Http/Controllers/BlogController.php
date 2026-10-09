<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('blog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'body' => 'required',
        ]);
        Post::create($validated);
        return redirect()->route('blog.index')->with('success', 'Blog berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('blog.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index')->with('success', 'Blog berhasil dihapus!');
    }
}
