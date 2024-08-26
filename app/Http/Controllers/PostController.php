<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }

    public function insert(Request $request)
    {
        DB::table('dell')->insert([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'Company' => $request->Company,
            'ratings' => $request->ratings,
        ]);

        return redirect('posts');
    }
    public function index()
    {
        $posts = DB::table('dell')->get();
        return view('posts.index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        $post = DB::table('dell')->where('id', $id)->first();
        return view('posts.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('dell')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'Company' => $request->Company,
            'ratings' => $request->ratings,
        ]);
        return redirect()->route('posts');
    }
    public function delete($id)
    {
        DB::table('dell')->where('id', $id)->delete();
        return redirect()->route('posts');
    }

    // Empty methods for potential future use
    public function store(Request $request) {}
    public function show(string $id) {}
    public function destroy(string $id) {}
}
