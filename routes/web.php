<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::view("/","site.home")->name("home");
Route::view("/about","site.about")->name("about");
Route::view("/contact","site.contact")->name("contact");

Route::post("/contact",[SiteController::class,"formHandler"])->name("contact.submit");


