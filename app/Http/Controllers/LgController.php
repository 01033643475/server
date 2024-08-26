<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LgController extends Controller
{
    public function create(){
        return view('LG.create');
    }
    public function insert(Request $request){
        DB::table('LG')->insert([
            'title'=>$request->title,
            'type'=>$request->type,
            'price'=>$request->price,
            'watch'=>$request->watch,
            'seller'=>$request->seller,

        ]);
        return view('LGS');
    }

public function index(){
    $posts = DB::table('LG')->get();
        return view('LG.index', ['posts' => $posts]);
}

public function edit($id){
    $post = DB::table('LG')->where('id',$id)->first();
    return view('LG.edit',['post'=>$post]);
}
 public function update(Request $request, $id){
        DB::table('LG')->where('id', $id)->update([
            'title' => $request->title,
            'price' => $request->price,
            'type' => $request->type,
            'watch' => $request->watch,
            'seller' => $request->seller,
        ]);
        return redirect()->route('LGs');
    }
     public function delete($id){
        DB::table('LG')->where('id', $id)->delete();
        return redirect()->route('LGs');
    }
}
