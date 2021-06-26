<?php
// use App\Http\Controllers\todosController;
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

// Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
// Route::post('/login/admin', 'Auth\LoginController@adminLogin');
// Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::get('/home', 'HomeController@index')->name('home');
// Route::view('/admin', 'admin');
Route::get('blogs','blogsController@index');
Route::get('blogs/{blog}','blogsController@show');
Route::get('create_content','blogsController@create_content');
Route::post('Store','blogsController@store');
Route::get('blogs/{blog}/edit','blogsController@edit');
Route::post('blogs/{blog}/update','blogsController@update');
Route::get('blogs/{blog}/delete','blogsController@destroy');
Route::get('productlist','productsController@index');
Route::get('addproduct','productsController@addproduct');
Route::post('store','productsController@store');
Route::get('products/{product}/edit','productsController@edit');
Route::post('products/{product}/update','productsController@update');
Route::get('products/{product}/delete','productsController@destroy');
// Route::get('post','postsController@index');
// Route::resource('categories','CategoriesController');
Route::resource('posts','PostsController');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
