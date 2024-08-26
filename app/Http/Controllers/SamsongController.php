<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SamsongController extends Controller
{

        public function create()
        {
            return view('samsong.create');
        }

        public function insert(Request $request)
        {
            DB::table('samsong')->insert([
                'title' => $request->title,
                'price' => $request->price,
                'img' => $request->img,
               'range' => $request->range,
                'shipping' => $request->shipping,
                'location' => $request->location,
                'img' => $request->img,
            ]);
        return redirect('samsungs');

        }
        public function index(){
            $posts = DB::table('samsong')->get();
            return view('samsong.index', ['posts' => $posts]);
        }

        public function edit($id){
            $post = DB::table('samsong')->where('id', $id)->first();
            return view('samsong.edit', ['post' => $post]);
        }
        public function update(Request $request, $id){
            DB::table('samsong')->where('id', $id)->update([
                'title' => $request->title,
                'price' => $request->price,
                'img' => $request->img,
                'range' => $request->range,
                'shipping' => $request->shipping,
                'location' => $request->location,
                'img' => $request->img,
            ]);
            return redirect()->route('samsungs');
        }
        public function delete($id){
            DB::table('samsong')->where('id', $id)->delete();
            return redirect()->route('samsungs');
        }
}
