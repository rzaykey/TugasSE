<?php
	Route::get('/', function () {
    return view('welcome');
});
	Auth::routes();
	Route::get('/home', 'HomeController@index')->name('home');
	Route::group(['middleware' => 'web'], function(){
	Route::auth();
});
	Route::group(['middleware' => ['web','auth']], function()
{
	Route::get('/home', 'HomeController@index');
	Route::get('/', function(){
		if (Auth::user()->admin == 2) {
			return view('home');
		}
		elseif (Auth::user()->admin == 1) {
			return view('home');
		}
		else {
			return view('home');
		}
	});
	Route::get('/barang','BarangController@index');
	Route::get('/barang/tambah','BarangController@tambah');
	Route::post('/barang/store','BarangController@store');
	Route::get('/barang/edit/{id}','BarangController@edit');
	Route::post('/barang/update','BarangController@update');
	Route::get('/barang/hapus/{id}','BarangController@hapus');
});		
	Route::get('admin', ['middleware' => ['web','auth','admin'], function () { return view('admin/admin');
}]);
	Route::get('owner', ['middleware' => ['web','auth','owner'], function () { return view('owner/owner');
}]);

//barang

