<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MicrosoftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      public function create()
    {
        return view('microsoft.create');
    }

    public function insert(Request $request)
    {
        DB::table('microsoft')->insert([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
              'discount' => $request->discount,
            'shipping' => $request->shipping,
            'location' => $request->location,
            'watch' => $request->watch,
            'seller' => $request->seller,
        ]);
        return redirect('microsofts');

    }
    public function index(){
        $posts = DB::table('microsoft')->get();
        return view('microsoft.index', ['posts' => $posts]);
    }

    public function edit($id){
        $post = DB::table('microsoft')->where('id', $id)->first();
        return view('microsoft.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('microsoft')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'discount' => $request->discount,
            'shipping' => $request->shipping,
            'location' => $request->location,
            'watch' => $request->watch,
            'seller' => $request->seller,

        ]);
        return redirect()->route('microsofts');
    }
    public function delete(string $id){
        DB::table('microsoft')->where('id', $id)->delete();
        return redirect()->route('microsofts');
    }

}