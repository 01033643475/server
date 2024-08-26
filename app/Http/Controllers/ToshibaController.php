<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ToshibaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function create()
    {
        return view('toshiba.create');
    }

    public function insert(Request $request)
    {
        DB::table('toshiba')->insert([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'shipping' => $request->shipping,
            'seller' => $request->seller,
            'watch' => $request->watch,
            'location' => $request->location,
            'location' => $request->location,
        ]);
        return redirect('toshibas');
    }
    public function index()
    {
        $posts = DB::table('toshiba')->get();
        return view('toshiba.index', ['posts' => $posts]);
    }

    public function edit($id)
    {
        $post = DB::table('toshiba')->where('id', $id)->first();
        return view('toshiba.edit', ['post' => $post]);
    }
    public function update(Request $request, $id)
    {
        DB::table('toshiba')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'shipping' => $request->shipping,
            'seller' => $request->seller,
            'watch' => $request->watch,
            'location' => $request->location,
            'location' => $request->location,
        ]);
        return redirect()->route('toshibas');
    }
    public function delete($id)
    {
        DB::table('toshiba')->where('id', $id)->delete();
        return redirect()->route('toshibas');
    }
}
