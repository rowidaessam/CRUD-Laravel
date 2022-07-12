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
// get post put/patch delete 

Route::get('/iti', function () {
    return view('welcome');
});

Route::get("/mynewpage", function (){
    return  view('iti'); // 
});


Route::get('/exa1', function () {
    $names = ["title" => "post1", "body"=> "description"];
    return $names; 
});


Route::get('/exa2/{name}/{id}', function ($name, $id) {
    return $name.$id;
});


Route::get('/exa3/{post}',function($post){

  $posts = [
      "title1" => "post1", "body"=> "description1", 
      "title2" => "post2", "body"=> "description2", 
      "title3" => "post3", "body"=> "description3", 
      "title4" => "post4", "body"=> "description4", 
    ];

    return $posts[$post];
});


Route::get("/search", function(){

    $reqParams = request("age");
    // dd($reqParams); // dump and die 
    dump($reqParams);
});


Route::get("/", function(){
    return view('layout.navbar');
});

Route::get("/home",[App\Http\Controllers\PostController::class, "home"]);


Route::get("/aboutushello", function(){
    return view('aboutus');
});
Route::get("/contactus", function(){
    return view('contactus');
});

// post , put _ patch edit
Route::get("/post/show/{id}",  [App\Http\Controllers\PostController::class, "show"]);
Route::get("/posts/edit/{id}",  [App\Http\Controllers\PostController::class, "edit"]);
Route::post("/posts/update/{id}",  [App\Http\Controllers\PostController::class, "update"]);
Route::get("/posts", [App\Http\Controllers\PostController::class, "index"]);
Route::get("/posts/delete/{id}", [App\Http\Controllers\PostController::class, "destroy"]);
Route::get("/post/create",  [App\Http\Controllers\PostController::class, "create"]);
Route::post("/post/store",  [App\Http\Controllers\PostController::class, "store"]);
Route::resource('/articles', App\Http\Controllers\ArticleController::class);
// crud 
Route::resource('/students', App\Http\Controllers\StudentController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
