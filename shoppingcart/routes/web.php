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
Route::post('/sendmail',function(\Illuminate\Http\Request $request,\Illuminate\Mail\Mailer $mailer){
	$mailer->to($request->input('mail'))->send(new \App\Mail\MyMail($request->input('title')));
    return redirect()->back();
})->name('sendmail');
Route::get('/user/sendmail', ['uses'=>'UserController@getSendmail','as'=>'user.sendmail']);

Route::get('/', ['uses'=>'ProductController@getIndex','as'=>'product.index']);
Route::get('/add-to-cart/{id}', ['uses'=>'ProductController@getAddToCart','as'=>'product.addToCart']);
Route::get('/shopping-cart', ['uses'=>'ProductController@getCart','as'=>'product.shoppingCart']);
Route::get('/reduce/{id}', ['uses'=>'ProductController@getReduceByOne','as'=>'product.reduceByOne']);
Route::get('/remove/{id}', ['uses'=>'ProductController@getRemoveItem','as'=>'product.remove']);


Route::group(['prefix'=>'user'],function(){
	Route::group(['middleware'=>'guest'],function(){
		Route::get('/signup', ['uses'=>'UserController@getSignup','as'=>'user.signup']);
		Route::post('/signup', ['uses'=>'UserController@postSignup','as'=>'user.signup']);
		Route::get('/signin', ['uses'=>'UserController@getSignin','as'=>'user.signin']);
		Route::post('/signin', ['uses'=>'UserController@postSignin','as'=>'user.signin']);
		Route::get('/logout', ['uses'=>'Auth\LoginController@userLogout','as'=>'user.logout']);
	});	
	Route::group(['middleware'=>'auth'],function(){
		Route::get('/checkout', ['uses'=>'ProductController@getCheckout','as'=>'checkout']);		
		Route::post('/checkout', ['uses'=>'ProductController@postCheckout','as'=>'checkout']);
		Route::get('/profile', ['uses'=>'UserController@getProfile','as'=>'user.profile']);
		Route::get('/logout', ['uses'=>'UserController@getLogout','as'=>'user.logout']);

	});		
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', ['uses'=>'admin\DashboardController@getIndex','as'=>'admin.dashboard']);	
	Route::get('dashboard', ['uses'=>'admin\DashboardController@getIndex','as'=>'admin.dashboard']);
	Route::get('category', ['uses'=>'admin\CategoryController@getIndex','as'=>'admin.category']);
	Route::get('login', ['uses'=>'Auth\AdminLoginController@showLoginForm','as'=>'admin.login']);
	Route::post('login', ['uses'=>'Auth\AdminLoginController@login','as'=>'admin.login']);
	Route::get('logout', ['uses'=>'Auth\AdminLoginController@logout','as'=>'admin.logout']);
	Route::get('profile', ['uses'=>'admin\DashboardController@getProfile','as'=>'admin.profile']);
});

