<?php
use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route:: get('index',[BasicController::class,'index'])->name('index');
Route:: get('about',[BasicController::class,'about'])->name('about');

Route:: get('post',[BasicController::class,'post'])->name('post');

Route:: get('contact',[BasicController::class,'contact'])->name('contact');
