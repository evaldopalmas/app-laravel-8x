<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {

      $posts = Post::get();

      return view('admin.posts.index', compact('posts'));

    }

    public function create () {
      return view('admin.posts.create');
    }

    public function store (StoreUpdatePost $request) {

      Post::create($request->all());

      return  redirect()->route('posts.index');

    }

    public function show ($id) {

      if ( !$post = Post::findOrFail($id) )
        return  redirect()
        ->route('posts.index')
        ->with('error', 'Post não localizado');

      return view('admin.posts.show', compact('post'));
    }

    public function edit ($id) {

      if ( !$post = Post::findOrFail($id) )
        return  redirect()
        ->route('posts.index')
        ->with('error', 'Post não localizado');

      return view('admin.posts.edit', compact('post'));
    }

    public function update (StoreUpdatePost $request, $id) {

      if ( !$post = Post::findOrFail($id) )
      return  redirect()
      ->route('posts.index')
      ->with('error', 'Post não localizado');

      $post->update($request->all());

      return  redirect()->route('posts.index');

    }

    public function destroy ($id) {

      if ( !$post = Post::findOrFail($id) )
        return  redirect()
        ->route('posts.index')
        ->with('error', 'Post não localizado');


      $post->delete();

      return  redirect()
      ->route('posts.index')
      ->with('success', 'Post deletado com sucesso');
    }
}
