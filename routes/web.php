<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificadoController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', HomeController::class );


Route::controller(CertificadoController::class) -> group(function($gen_code){

    Route::get('certificado', 'index');  //home
    Route::get('certificado/validacion/{gen_code?}', 'show'); 
    //Route::get('certificado/validacion/{gen_code?}', 'create'); 

});














//Route::get('certificado', [CertificadoController::class,'index']);  //home
//Route::get('certificado/validacion', [CertificadoController::class,'show']); 
//Route::get('certificado/validacion/{gen_code}', [CertificadoController::class,'show']);


//HOLA MUNDO
// Esto es prueba
/*
Route::get('fio', function () {
    return "fiolina";
});

Route::get('certificado/validacion', function () {
    return "Esta en la sección de validación, no ingreso qr";
});

Route::get('certificado/validacion/{gen_code}', function ($gen_code) {             // Nota: esto puede servir para la lectura de los qr
    
    return "leyendo qr :$gen_code";
});
*/

