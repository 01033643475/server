<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LenovoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function create()
    {
        return view('lenovo.create');
    }

    public function insert(Request $request)
    {
        DB::table('lenovo')->insert([
           'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'shipping' => $request->shipping,
            'location' => $request->location,
            'watch' => $request->watch,
            'seller' => $request->seller,
        ]);
        return redirect('lenovos');

    }
    public function index(){
        $posts = DB::table('lenovo')->get();
        return view('lenovo.index', ['posts' => $posts]);
    }

    public function edit($id){
        $post = DB::table('lenovo')->where('id', $id)->first();
        return view('lenovo.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('lenovo')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'type' => $request->type,

            'img' => $request->img,
            'shipping' => $request->shipping,
            'location' => $request->location,
            'watch' => $request->watch,
            'seller' => $request->seller,
        ]);
        return redirect()->route('lenovos');
    }
    public function delete($id){
        DB::table('lenovo')->where('id', $id)->delete();
        return redirect()->route('lenovos');
    }

}
