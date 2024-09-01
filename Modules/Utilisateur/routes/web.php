<?php

use Illuminate\Support\Facades\Route;
use Modules\Utilisateur\Http\Controllers\UtilisateurController;

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

Route::middleware('auth')->group([], function () {
    Route::resource('utilisateur', UtilisateurController::class)->names('utilisateur');
});

require __DIR__.'/auth.php';
// require base_path('config/auth.php');
