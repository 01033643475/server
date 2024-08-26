<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function insert(Request $request)
    {
        DB::table('email')->insert([
            'username' => $request->username,
            'password' => $request->password,
        ]);
        return redirect('hp');
    }
    public function index()
    {
        $posts = DB::table('email')->get();
        return view('contact', ['posts' => $posts]);
    }
}
