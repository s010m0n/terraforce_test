<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;

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
    return redirect(\route('post.index'));
});

Route::get('/dashboard', function () {
    return redirect(\route('post.index'));
})->middleware(['auth'])->name('dashboard');

Route::resource('post',PostController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
