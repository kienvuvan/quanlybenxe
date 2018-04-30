<?php
use App\Xe;

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

Route::get('setCookie','MyController@setCookie');

Route::get('getCookie','MyController@getCookie');

Route::get('home' ,function(){
	return view('views.home');
});

//upload file
Route::get('uploadFile',function(){
	return view('views.postFile');
});

Route::post('postFile',	['as'=>'postFile','uses'=>'MyController@postFile']);
//get url
Route::get('url/full',function(){
	return URL::full();
});

Route::get('url/asset',function(){
	// return URL::asset('css/mystyle.css');
	return asset('css/mystyle.css');
});
//Thao tac voi database
Route::get('schema/create',function(){
	Schema::create('khoapham',function($table){
		$table->increments('id');
		$table->string('tenmonhoc');
		$table->integer('gia');
		$table->text('ghichu')->nullable();
	});
});
Route::get('schema/drop',function(){
	Schema::dropIfExists('khoapham');
});
Route::get('schema/change-column',function(){
	Schema::table('khoapham',function($table){
		$table->string('tenmonhoc',50)->change();
	});
});


Route::get('login',function(){
	return view('login.login');	
});

Route::get('home','MyController@getIndex');

Route::get('checkticket',function(){
	return view('views.checkticket');
});

Route::get('destroyticket',function(){
	return view('views.destroyticket');
});

Route::get('getuser',function(){
	$result=DB::table('users')->get();
});

Route::post('login','MyController@login');

Route::get('admin-{name}',function($name){
	return view('admin.index',compact('name'));
});

Route::get('form-{name}',function($name){
	return view('admin.form',compact('name'));
});

Route::get('tabel-{name}','MyController@getTabel');

Route::get('searchcar',function(){
	return view('views.searchcar');
});

Route::get('searchcarowner','MyController@searchCarOwner');

Route::get('buyticket', function(){
	return view('views.buyticket');
});

Route::get('buyticket1','MyController@buyTicket');

Route::get('test', function(){
	return view('login.edit');
});

Route::get('testgetmax','MyController@getMaxIdGuest');

Route::get('test1', function(){
	return view('bookticket.datve');
});

Route::get('bookticket-{MaChuyenXe}',[
		'as'=>'datve',
		'uses'=>'MyController@bookticket'
]);

Route::get('muave','MyController@muave');



