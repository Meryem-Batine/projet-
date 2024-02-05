<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Models\Info;
use App\Models\User;
use Illuminate\Support\Facades\Route;
// 
use Barryvdh\DomPDF\Facade\Pdf;
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


Route::get('/' , [HomeController::class , "index"])->name("home.index");
Route::get('/info' , [InfoController::class , "index"])->name("info.index");
Route::post('/store', [InfoController::class , "store"])->name("info.store");


Route::get('/pdf',function(){
    $data=[
        // 'users'=>User::all()
        'infos' =>Info::all()

    ];
    $pdf=Pdf::loadView('users-pdf',$data);
    return $pdf->download('users-pdf.pdf');
});