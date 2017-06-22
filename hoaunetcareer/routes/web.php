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

Route::get('/', 'HomepageController@index');
Route::get('/register', function () {
    return view('Users/register_user');
});

Route::get('/forgotpass', function () {
    return view('Users/forgotpass');
});
Route::get('/newletters', function () {
    return view('newletter');
});
Route::get('/users/listjob', function () {
    return view('Users/listjob');
});
Route::get('/users/resume', function () {
    return view('Users/resume');
});
Route::get('/users/savejob', function () {
    return view('Users/savejob');
});
//nguoi xin viec
Route::get('/employee', 'EmployeeController@index');
//nha tuyen dung
Route::get('/employer', 'EmploymentsController@index');
Route::get('/employer/{id}/company', 'EmploymentsController@viewcompany');
Route::get('/employement/{id}/detail', 'EmploymentsController@detail');
Route::get('/employement/{id}/career', 'EmploymentsController@viewcareer');//list employment according career
Route::post('/employement/search', 'EmploymentsController@searchemployment');
/*Route::get('/news', function () {
	$articles = DB::table('articles')->latest->get();
   return view('Articles.index',compact('articles'));
});
Route::get('/employer', function () {
    return view('Users/employer');
});
*/
Route::get('/category/{id}', 'ArticlesController@category');
Route::get('/news', 'ArticlesController@index');
Route::get('/news/{short_url}/view', 'ArticlesController@view');
/*--------------------*/
Route::prefix('admin')->group(function () {
    Route::get('/articles/{id}/edit',  'ArticlesController@edit');
});




