<?php
use App\Http\Controllers\logi;
use Illuminate\Support\Facades\Route;

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

route::post('/savedata',[logi::class,'save']);

route::get('/table',[logi::class,'index']);

route::get('/edit/{id}',[logi::class,'edit']);

route::post ('/update-data',[logi::class,'update']);

route::get("/delete/{id}",[logi::class,'delete']);