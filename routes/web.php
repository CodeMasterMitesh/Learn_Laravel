<?php
// how to pass query string in url in laravel
// how to named route in laravel
// how to create group route in laravel
// how to create route prefix in laravel
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::view("/aboutus", "about");
Route::prefix("aboutus")->group(function(){
    
    Route::get('/employee', function () {
        return view('about');
    })->name("aboutus");
    
    Route::get('/company', function () {
        return view('companydetailes');
    });
    
    Route::get('/customer', function () {
        return view('customer');
    });
});

Route::get("/blogs",function(){
    return view("blog/blogs");
});

Route::get("/blogs/{id?}/{blogname?}",function(string $id=null,string $blogname = null){
    // return view("blog/blogs");
    echo "<h1>Blog Page And Blog No Is ". $id . " and Blog Name is ".$blogname."</h1>";
});
