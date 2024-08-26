<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{

    public function index()
    {
        // جلب البيانات من جداول متعددة
        $hp = DB::table('hp')->get();
        $dell = DB::table('dell')->get();
        $mac = DB::table('mac')->get();
        $microsoft = DB::table('microsoft')->get();
        $toshiba = DB::table('toshiba')->get();
        $samsong = DB::table('samsong')->get();





        // تمرير البيانات إلى العرض
        return view('about', [
            'hp' => $hp,
            'dell' => $dell,
            'mac' => $mac,
            'microsoft' => $microsoft,
            'toshiba' => $toshiba,
            'samsong' => $samsong,
        ]);
    }
}
