<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
   public function create()
    {
        return view('hp.create');
    }

    public function insert(Request $request)
    {
        DB::table('hp')->insert([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'discount' => $request->discount,

        ]);

        return redirect('hps');
    }
    public function index(){
        $posts = DB::table('hp')->get();
        return view('hp.index', ['posts' => $posts]);
    }

    public function edit($id){
        $post = DB::table('hp')->where('id', $id)->first();
        return view('hp.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('hp')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'discount' => $request->discount,

        ]);
        return redirect()->route('hps');
    }
    public function delete($id){
        DB::table('hp')->where('id', $id)->delete();
        return redirect()->route('hps');
    }

    /**
     * Show the form for editing the specified resource.
     */

}