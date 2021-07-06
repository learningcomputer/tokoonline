<?php
//tambahan sendiri

use Illuminate\Routing\RouteGroup;
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
    return view('index');
});
Route::get('/list', function () {
    return view('list');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::group(['prefix'=>'user'], function () {
    Route::get('/mybook', function () {
        return view('user.mybook');
    });
});

Route::group(['prefix'=>'admin'], function () {
    //manajemen buku
    Route::get('/buku', function () {
        return view('admin.buku.index');
    });

    Route::get('/buku/create', function () {
        return view('admin.buku.create');
    });

    Route::get('/buku/update', function () {
        return view('admin.buku.update');
    });

    //manajemen user
    
    Route::get('/user', function () {
        return view('admin.user.index');
    });

    Route::get('/user/create', function () {
        return view('admin.user.create');
    });

    Route::get('/user/update', function () {
        return view('admin.user.update');
    });


});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
