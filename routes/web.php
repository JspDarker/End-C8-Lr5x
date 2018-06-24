<?php

#use Doctrine\DBAL\Schema\Schema;
#use Illuminate\Database\Schema\Blueprint;

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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('kye',function() {
    return view('kye');
});

Route::get('db',function() {
    Schema::table('users', function ($table) {
        $table->string('username')->unique()->after('name');
        #$table->dropColumn('phone');
    });
});

//========CHECK ACCOUNT USING AJAX================

Route::post('check-ajax', 'AccountController@loginAjax');

//==DB/Basic====


