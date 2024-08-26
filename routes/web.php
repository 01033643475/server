<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HpController;
use Illuminate\Foundation\Application;
use App\Http\Controllers\MacController;
use App\Http\Controllers\OurController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SmallController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\LenovoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SamsongController;
use App\Http\Controllers\ToshibaController;
use App\Http\Controllers\ComputerController;
use App\Http\Controllers\MicrosoftController;

// Route::get('', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/', function () {
    return view('contact');
});
Route::get('contact', function () {
    $result = DB::table('email')->get();
    return view('contact', ['email' => $result]);
});

Route::get('hp', function () {
    $result = DB::table('hp')->get();
    return view('hp', ['hp' => $result]);
});

Route::get('about', [AboutController::class, 'index']);

//
Route::get('dell', function () {
    $result = DB::table('dell')->get();
    return view('dell', ['dell' => $result]);
});
Route::get('mac', function () {
    $result = DB::table('mac')->get();
    return view('mac', ['mac' => $result]);
});
Route::get('lenovo', function () {
    $result = DB::table('lenovo')->get();
    return view('lenovo', ['lenovo' => $result]);
});
Route::get('microsoft', function () {
    $result = DB::table('microsoft')->get();
    return view('microsoft', ['microsoft' => $result]);
});
Route::get('toshiba', function () {
    $result = DB::table('toshiba')->get();
    return view('toshiba', ['toshiba' => $result]);
});
Route::get('computer', function () {
    $result = DB::table('computer')->get();
    return view('computer', ['computer' => $result]);
});
Route::get('samsung', function () {
    $result = DB::table('samsong')->get();

    return view('samsong', ['samsong' => $result]);
});


Route::get('admin', function () {
    return view('admin');
});

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
// Route::get('/contact', [ContactController::class, 'index'])->name('contact.page');


//
// Route::get('about', function () {
//     return view('about');
// });
Route::get('laptop', function () {
    $result = DB::table('product')->get();
    return view('laptop', ['laptop' => $result]);
});
Route::get('small', function () {
    $result = DB::table('samall')->get();
    return view('small', ['small' => $result]);
});
//contact

Route::get('post/create', [LoginController::class, 'create']);
Route::post('post/insert', [LoginController::class, 'insert']);
Route::get('post/index', [LoginController::class, 'index']);

//laptop
Route::controller(LaptopController::class)->group(function () {
    Route::get('laptops', 'index');
    Route::get('laptop/create', 'create');
    Route::post('laptop/insert', 'insert');
    Route::get('laptop/edit/{id}', 'edit');
    Route::post('laptop/update/{id}', 'update');
    Route::get('laptop/delete/{id}', 'delete');
});

// dell
Route::controller(PostController::class)->group(function () {
    Route::get('posts', 'index')->name('posts');
    Route::get('pos/create', 'create');
    Route::post('pos/insert', 'insert')->name('pos.insert');
    Route::get('pos/edit/{id}', 'edit')->name('pos.edit');
    Route::post('pos/update/{id}', 'update')->name('pos.update');
    Route::get('pos/delete/{id}', 'delete')->name('pos.delete');
});
// hp
Route::controller(HpController::class)->group(function () {
    Route::get('hps', 'index')->name('hps');
    Route::get('hp/create', 'create');
    Route::post('hp/insert', 'insert')->name('hp.insert');
    Route::get('hp/edit/{id}', 'edit')->name('hp.edit');
    Route::post('hp/update/{id}', 'update')->name('hp.update');
    Route::get('hp/delete/{id}', 'delete')->name('hp.delete');
});

// mac
Route::controller(MacController::class)->group(function () {
    Route::get('macs', 'index')->name('macs');
    Route::get('mac/create', 'create');
    Route::post('mac/insert', 'insert')->name('mac.insert');
    Route::get('mac/edit/{id}', 'edit')->name('mac.edit');
    Route::post('mac/update/{id}', 'update')->name('mac.update');
    Route::get('mac/delete/{id}', 'delete')->name('mac.delete');
});
// lenovo
Route::controller(LenovoController::class)->group(function () {
    Route::get('lenovos', 'index')->name('lenovos');
    Route::get('lenovo/create', 'create');
    Route::post('lenovo/insert', 'insert')->name('lenovo.insert');
    Route::get('lenovo/edit/{id}', 'edit')->name('lenovo.edit');
    Route::post('lenovo/update/{id}', 'update')->name('lenovo.update');
    Route::get('lenovo/delete/{id}', 'delete')->name('lenovo.delete');
});


// toshiba
Route::controller(ToshibaController::class)->group(function () {
    Route::get('toshibas', 'index')->name('toshibas');
    Route::get('toshiba/create', 'create');
    Route::post('toshiba/insert', 'insert')->name('toshiba.insert');
    Route::get('toshiba/edit/{id}', 'edit')->name('toshiba.edit');
    Route::post('toshiba/update/{id}', 'update')->name('toshiba.update');
    Route::get('toshiba/delete/{id}', 'delete')->name('toshiba.delete');
});

// microsoft
Route::controller(MicrosoftController::class)->group(function () {
    Route::get('microsofts', 'index')->name('microsofts');
    Route::get('microsoft/create', 'create');
    Route::post('microsoft/insert', 'insert')->name('microsoft.insert');
    Route::get('microsoft/edit/{id}', 'edit')->name('microsoft.edit');
    Route::post('microsoft/update/{id}', 'update')->name('microsoft.update');
    Route::get('microsoft/delete/{id}', 'delete')->name('microsoft.delete');
});
//computer
Route::controller(ComputerController::class)->group(function () {
    Route::get('computers', 'index')->name('computers');
    Route::get('computer/create', 'create');
    Route::post('computer/insert', 'insert')->name('computer.insert');
    Route::get('computer/edit/{id}', 'edit')->name('computer.edit');
    Route::post('computer/update/{id}', 'update')->name('computer.update');
    Route::get('computer/delete/{id}', 'delete')->name('computer.delete');
});
// samsung
Route::controller(SamsongController::class)->group(function () {
    Route::get('samsungs', 'index')->name('samsungs');
    Route::get('samsung/create', 'create');
    Route::post('samsung/insert', 'insert')->name('samsung.insert');
    Route::get('samsung/edit/{id}', 'edit')->name('samsung.edit');
    Route::post('samsung/update/{id}', 'update')->name('samsung.update');
    Route::get('samsung/delete/{id}', 'delete')->name('samsung.delete');
});

// laptop

Route::controller(LaptopController::class)->group(function () {
    Route::get('laptops', 'index')->name('samsungs');
    Route::get('laptop/create', 'create');
    Route::post('laptop/insert', 'insert')->name('laptop.insert');
    Route::get('laptop/edit/{id}', 'edit')->name('laptop.edit');
    Route::post('laptop/update/{id}', 'update')->name('laptop.update');
    Route::get('laptop/delete/{id}', 'delete')->name('laptop.delete');
});
//admin
Route::controller(AdminController::class)->group(function () {
    Route::get('admins', 'index')->name('admin');
    Route::get('admin/create', 'create');
    Route::post('admin/insert', 'insert')->name('admin.insert');
    Route::get('admin/edit/{id}', 'edit')->name('admin.edit');
    Route::post('admin/update/{id}', 'update')->name('admin.update');
    Route::get('admin/delete/{id}', 'delete')->name('admin.delete');
});
