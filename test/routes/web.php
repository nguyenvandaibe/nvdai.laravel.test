<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('tim-kiem/{search}', function ($search) {

    // Tìm theo tỉnh thành
    // tim-kiem/nha-dat-ban_ha-noi
    if (preg_match('/^[a-z0-9-]+$/', $search)) {
        dd('Menu: ' . $search);
    }

    // Tìm theo menu
    // tim-kiem/nha-dat-ban
    elseif (preg_match('/^[a-z0-9-]+_[a-z0-9-]+$/', $search)) {
        dd('Province: ' . $search);
    } else {
        dd('None');
    }
});
