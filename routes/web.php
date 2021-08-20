<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
use App\Http\Controllers\ActionController;


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

Route::get('/', [NavController::class, 'home']);

Route::get("/designersList", [NavController::class, 'designersList']);

Route::get('/addCharacter', [NavController::class, 'addCharacter']);
Route::post('/addCharacter', [ActionController::class, 'add']);

Route::get('/addDesigner', [NavController::class, 'addDesigner']);
Route::post('/addDesigner', [ActionController::class, 'addDesigner']);

Route::post('/deleteCharacter', [ActionController::class, 'deleteCharacter']);
Route::post('/deleteDesigner', [ActionController::class, 'deleteDesigner']);


Route::post('/updateCharacter', [NavController::class, 'updateCharacter']);
Route::post('/updateOneCharacter', [ActionController::class, 'updateCharacter']);

Route::post('/updateDesigner', [NavController::class, 'updateDesigner']);
Route::post('/updateOneDesigner', [ActionController::class, 'updateDesigner']);

