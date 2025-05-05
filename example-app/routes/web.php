<?php

use App\Http\Controllers\SecondTestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return "hello from laravel";
});

/*
Route::view("about-us", "aboutus");

Route::get("about-us/{name}/{id}", function ($name, $id) {
    // $name = "tester";
    // $email = "tester@gmail.com";
    // return view("aboutus")->with("name", $name)->with("email", $email);
    // return view("aboutus", compact("name", "email"));
    // return view("aboutus", ["name"=>$name,"email"=>$email]);
    return view("aboutus", ["name" => $name, "id" => $id]);
});

Route::view("contact-us/{name}/{id}", "contactus",);
*/

/*
Cách dùng controller trong routes một cách độc lập 
Route::get("students", [StudentController::class, "index"]);
Route::get("about-us", [StudentController::class, "aboutUs"]);
*/

Route::controller(StudentController::class)->group(function (){
    Route::get("students", "index");
    Route::get("about-us/{id}/{name}", "aboutUs");
});

Route::get("invoke", TestController::class);

Route::resource('second-test', SecondTestController::class);
/*
Route::get("details/students", function(){
    return "this is student";
});

Route::get("details/teachers", function(){
    return "this is teacher";
});

Route::prefix("details") -> group(function() {
    Route::get("students", function(){
        return "this is student";
    })->name("student-Details");
    
    Route::get("teachers", function(){
        return "this is teacher";
    })->name("teacher-Details");;
});

Route::get("students/{id}/{reg}", function($id, $reg){
    return "student number ".$id." registration number ".$reg;
});

Route::fallback(function(){
    return "this page is no found please try again";
});
*/