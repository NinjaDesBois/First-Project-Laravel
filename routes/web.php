<?php

use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\ContactController as ControllersContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

// VERSION ANCIENNE SYNTAX DE ROUTE
// Route::get('contact','ContactController@showContact');


// NOUVELLE VERSION SYNTAX LARAVEL8 POUR LES ROUTES
  Route::get('contact', [ContactController::class,'showContact']);
 Route::post('send-message',[contactcontroller::class,'sendContact'])->name('send-message');

























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

// Route::get('/', function () {
//     return view('welcome');
// });

// Appeller un view avec une fonction showcontact dans la classe contactcontroller
// Route::get('/contact', [contactcontroller::class, 'showcontact'])->name('contactroute');

// Route::get('/', [contactcontroller::class, 'showHome'])->name('Homeroute');

// Exemple si on fait tout sur la page web.php, vous constatez aue le fichier peu vite devenir tres charge,m il vaut mieux donc tout declarer dans les controllers
// Route::get('/contact',function(){
//     $names=['sohaib','jack','carlos','freeze'];
//     return view('contact',compact('names'));
// });

