<?php



// FINAL VERSION
use Illuminate\Support\Facades\Route;
use App\Article;
use App\Category;
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




Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function(){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_management', 'namespace' => 'UserManagement'], function(){
        Route::resource('/user', 'UserController', ['as' => 'admin.user_management']);
    });
});

Route::get('/', function () {
    $articles = Article::all();
    $categories = Category::all();

		// return $articles;
    return view('home',['articles'=>$articles,'categories'=>$categories]);
});

Route::get('/profile', function () {
    return view('/profile');
});



Route::get('/aboutus', function () {
    return view('layouts/about');
});
Route::get('/contacts', function () {
    return view('layouts/contacts');
});

// Route::get('/', [
//     'as' => 'article', 'uses' => 'BlogController@home'
// ]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Comments
Route::post('comments/{article_id}',['uses'=>'CommentsController@store','as'=>'comments.store']);
