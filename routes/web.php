<?php

use Illuminate\Support\Facades\Route;
use AstroCommerce\Domain\User\User;

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

    $user = User::CreateNew(
        "Test",
        "Test password",
        "Test email"
    );


    return view('welcome', ['user'=> $user]);
});
