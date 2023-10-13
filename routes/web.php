<?php

use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;
use App\Models\Listmovie;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "One Piece",
        "email" => "wirya@gmail.com",
        "image" => "mangwi.jpg"
    ]);
});


Route::get('/list', [ListController::class, 'index']);

Route::get('/list/{slug}', [ListController::class, 'show']);

// Route::get('/connection', function () {
//         try{
//             DB::connection()->getPdo();
//             return 'conected sukses';
//         }
//         catch(\Exception $ex){
//             dd($ex->getMessage());
//         }
//     });
    
