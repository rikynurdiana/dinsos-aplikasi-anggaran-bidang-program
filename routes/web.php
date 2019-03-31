<?php

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
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('lockscreen', '\App\Http\Controllers\Auth\LockscreenController@lockScreen')->name('lock');
Route::post('lockscreen/open', '\App\Http\Controllers\Auth\LockscreenController@openScreen')->name('open');

Route::get('/', 'Profile\ProfileController@index')->name('index');

Route::get('/blank', 'BlankController@index')->name('blank');

Route::get('/dashboard', 'Dashboard\DashboardController@index')->name('dashboard');
Route::get('/lakip', 'Dashboard\DashboardController@index')->name('lakip');

Route::prefix('/profile')->group(function() {
    Route::get('/index', 'Profile\ProfileController@index')->name('profile.index');
    Route::get('/edit/{id}', 'Profile\ProfileController@edit')->name('profile.edit');
    Route::get('/show/{id}', 'Profile\ProfileController@show')->name('profile.show');
    Route::post('/update/{id}', 'Profile\ProfileController@update')->name('profile.update','{id}');
    Route::post('/destroy/{id}', 'Profile\ProfileController@destroy')->name('profile.destroy','{id}');
    Route::post('/update-status/{id}', 'Profile\ProfileController@updateStatus')->name('profile.update.status','{id}');
});

Route::prefix('/kategori-pmks')->group(function() {
    Route::get('/index', 'Kategori\KategoriPmksController@index')->name('kategori-pmks.index');
    Route::get('/create', 'Kategori\KategoriPmksController@create')->name('kategori-pmks.create');
    Route::post('/store', 'Kategori\KategoriPmksController@store')->name('kategori-pmks.store');
    Route::get('/edit/{id}', 'Kategori\KategoriPmksController@edit')->name('kategori-pmks.edit');
    Route::get('/show/{id}', 'Kategori\KategoriPmksController@show')->name('kategori-pmks.show');
    Route::patch('/update/{id}', 'Kategori\KategoriPmksController@update')->name('kategori-pmks.update','{id}');
    Route::post('/destroy/{id}', 'Kategori\KategoriPmksController@destroy')->name('kategori-pmks.destroy','{id}');
    Route::post('/search', 'Kategori\KategoriPmksController@search')->name('kategori-pmks.search');
    Route::get('/printPdf', 'Kategori\KategoriPmksController@printToPdf')->name('kategori-pmks.print');
});

Route::prefix('/lkpj')->group(function() {
    Route::get('/index', 'Lkpj\LkpjController@index')->name('lkpj.index');
    Route::get('/create', 'Lkpj\LkpjController@create')->name('lkpj.create');
    Route::post('/store', 'Lkpj\LkpjController@store')->name('lkpj.store');
    Route::get('/edit/{id}', 'Lkpj\LkpjController@edit')->name('lkpj.edit');
    Route::get('/show/{id}', 'Lkpj\LkpjController@show')->name('lkpj.show');
    Route::patch('/update/{id}', 'Lkpj\LkpjController@update')->name('lkpj.update','{id}');
    Route::post('/destroy/{id}', 'Lkpj\LkpjController@destroy')->name('lkpj.destroy','{id}');
    Route::post('/search', 'Lkpj\LkpjController@search')->name('lkpj.search');
    Route::get('/get-kegiatan', 'Lkpj\LkpjController@getKegiatanByProgram');
    Route::post('/get-kegiatan', 'Lkpj\LkpjController@getKegiatanByProgram');
    Route::get('/printPdf', 'Lkpj\LkpjController@printToPdf')->name('lkpj.print');
});

Route::prefix('/lppd')->group(function() {
    Route::get('/index', 'Lppd\LppdController@index')->name('lppd.index');
    Route::get('/create', 'Lppd\LppdController@create')->name('lppd.create');
    Route::post('/store', 'Lppd\LppdController@store')->name('lppd.store');
    Route::get('/edit', 'Lppd\LppdController@edit')->name('lppd.edit');
    Route::patch('/update/{id}', 'Lppd\LppdController@update')->name('lppd.update','{id}');
    Route::post('/destroy/{id}', 'Lppd\LppdController@destroy')->name('lppd.destroy','{id}');
    Route::post('/search', 'Lppd\LppdController@search')->name('lppd.search');
    Route::get('/get-kegiatan', 'Lppd\LppdController@getKegiatanByProgram');
    Route::post('/get-kegiatan', 'Lppd\LppdController@getKegiatanByProgram');
    Route::get('/printPdf', 'Lppd\LppdController@printToPdf')->name('lppd.print');
});

Route::prefix('/program')->group(function() {
    Route::get('/index', 'Program\ProgramController@index')->name('program.index');
    Route::get('/create', 'Program\ProgramController@create')->name('program.create');
    Route::post('/store', 'Program\ProgramController@store')->name('program.store');
    Route::get('/edit/{id}', 'Program\ProgramController@edit')->name('program.edit','{id}');
    Route::get('/show/{id}', 'Program\ProgramController@show')->name('program.show','{id}');
    Route::patch('/update/{id}', 'Program\ProgramController@update')->name('program.update','{id}');
    Route::post('/destroy/{id}', 'Program\ProgramController@destroy')->name('program.destroy','{id}');
    Route::post('/search', 'Program\ProgramController@search')->name('program.search');
    Route::get('/printPdf', 'Program\ProgramController@printToPdf')->name('program.print');
});

Route::prefix('/kegiatan')->group(function() {
    Route::get('/index', 'Kegiatan\KegiatanController@index')->name('kegiatan.index');
    Route::get('/create', 'Kegiatan\KegiatanController@create')->name('kegiatan.create');
    Route::post('/store', 'Kegiatan\KegiatanController@store')->name('kegiatan.store');
    Route::get('/edit/{id}', 'Kegiatan\KegiatanController@edit')->name('kegiatan.edit');
    Route::get('/show/{id}', 'Kegiatan\KegiatanController@show')->name('kegiatan.show');
    Route::patch('/update/{id}', 'Kegiatan\KegiatanController@update')->name('kegiatan.update','{id}');
    Route::post('/destroy/{id}', 'Kegiatan\KegiatanController@destroy')->name('kegiatan.destroy','{id}');
    Route::post('/search', 'Kegiatan\KegiatanController@search')->name('kegiatan.search');
    Route::get('/printPdf', 'Kegiatan\KegiatanController@printToPdf')->name('kegiatan.print');
});

Route::prefix('/member')->group(function() {
    Route::get('/index', 'Member\MemberController@index')->name('member.index');
    Route::get('/create', 'Member\MemberController@create')->name('member.create');
    Route::post('/store', 'Member\MemberController@store')->name('member.store');
    Route::get('/edit/{id}', 'Member\MemberController@edit')->name('member.edit');
    Route::get('/show/{id}', 'Member\MemberController@show')->name('member.show');
    Route::patch('/update/{id}', 'Member\MemberController@update')->name('member.update','{id}');
    Route::post('/destroy/{id}', 'Member\MemberController@destroy')->name('member.destroy','{id}');
    Route::post('/search', 'Member\MemberController@search')->name('member.search');
});
