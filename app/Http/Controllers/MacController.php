<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MacController extends Controller
{
    public function create()
    {
        return view('mac.create');
    }

    public function insert(Request $request)
    {
        DB::table('mac')->insert([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
             'discount' => $request->discount,

        ]);
        return redirect('macs');

    }
    public function index(){
        $posts = DB::table('mac')->get();
        return view('mac.index', ['posts' => $posts]);
    }

    public function edit($id){
        $post = DB::table('mac')->where('id', $id)->first();
        return view('mac.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('mac')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'discount' => $request->discount,
        ]);
        return redirect()->route('macs');
    }
    public function delete($id){
        DB::table('mac')->where('id', $id)->delete();
        return redirect()->route('macs');
    }
}
