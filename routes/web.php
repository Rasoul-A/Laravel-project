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

Route::get('/', function () {
    return view('welcome');
});
Route::get("aboutus",function(){
    return "<h1>First Demo of about us page</h1>";
})->name("about_page");
Route::get("contact/{id}",function ($id){
    return "You provided : $id";
})->name('contact');
Route::get("home",function (){
    return "<a href='".\route("contact",22)."'>Go to contacts page</a>";
});
//Route grouping
Route::group(['prefix'=>'customer'],function(){
   Route::get('/',function(){
       return "<h1>Customer list</h1>";
   });
    Route::get('/create',function(){
        return "<h1>Customer create</h1>";
    });
    Route::get('/show',function(){
        return "<h1>Customer show</h1>";
    });
});
// Using views
Route::get('aboutview',function (){
    return view('about');
});
Route::get('customerview',function (){
    return view('customer.index');
});
Route::get('about',function (){
    $mydata = 'This is comming from my variable.';
    $mydata2 = 'More data is comming from my variable.';
//    return view('about',['mydata'=>$mydata]);
    return view('about',compact('mydata','mydata2'));
});
//Route::get('/myhome',function (){
//    $blogs=[
//        [
//            'title'=>'Title 1',
//            'body'=> 'Body for title 1',
//            'status' => 1
//        ],
//        [
//            'title'=>'Title 2',
//            'body'=> 'Body for title 2',
//            'status'=> 0
//        ],
//        [
//            'title'=>'Title 3',
//            'body'=> 'Body for title 3',
//            'status'=> 0
//        ]
//    ];
//    return view('home',compact('blogs'));
//});
Route::get('/myhome',[\App\Http\Controllers\HomeController::class,'index']);
Route::get('/myhome2',\App\Http\Controllers\HomeController2::class);
Route::get('/login',[\App\Http\Controllers\LoginController::class,'index'])->name('login');
Route::post('/login',[\App\Http\Controllers\LoginController::class,'handleLogin'])->name('login.submit');
Route::get('/posts',[\App\Http\Controllers\PostsController::class,'index']);
Route::get('/post-orm',\App\Http\Controllers\PostsOrm::class);
Route::fallback(function(){
    return "Route not exist.";
});
