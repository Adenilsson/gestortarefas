<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Main;
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
   try{
        DB::connection()->getPdo();
        echo "Connected Successfully.  ". DB::connection()->getDatabaseName();
    }catch(\Exception $e){
        die('Não foi possivel conectar a base de dados> Error: '.$e->getMessage());
   }
});
Route::get('/main',[Main::class, 'index']);