<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaptopController extends Controller
{
    public function create()
    {
        return view('laptop.create');
    }

    public function insert(Request $request)
    {
        DB::table('product')->insert([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'discount' => $request->discount,
        ]);
        return redirect('laptops');

    }
    public function index(){
        $posts = DB::table('product')->get();
        return view('laptop.index', ['posts' => $posts]);
    }

    public function edit($id){
        $post = DB::table('product')->where('id', $id)->first();
        return view('laptop.edit', ['post' => $post]);
    }
    public function update(Request $request, $id){
        DB::table('product')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'img' => $request->img,
            'type' => $request->type,
            'discount' => $request->discount,
        ]);
        return redirect()->route('laptops');
    }
    public function delete($id){
        DB::table('product')->where('id', $id)->delete();
        return redirect()->route('laptops');
    }
}
