<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('posts.index', compact('posts'));
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'body' => 'required',
        ]);
        try {
            Post::create($validated);
            return redirect()->route('posts.index')
            ->with('success', 'Blog berhasil ditambahkan!');
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Blog gagal ditambahkan!');
        }
    } 
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:200',
            'body' => 'required',
        ]);
        try {
            $post->update($validated);
             return redirect()->route('posts.index')
            ->with('success', 'Blog berhasil diperbarui!');
        } catch (\Exception $e) {
            return back()->withInput()
                ->with('error', 'Blog gagal diperbarui!');
        }
    }
    public function destroy(Post $post)
    {
        try {
            $post->delete();
        return redirect()->route('posts.index')
            ->with('success', 'Blog berhasil dihapus!');
        } catch (\Exeption $e) {
            return back()
                ->with('error', 'Blog gagal dihapus!');
        }
    }
}
