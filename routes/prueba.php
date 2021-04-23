<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba',function (){
   $resultados = DB::select("select * from servicio");
   dd($resultados);
});
