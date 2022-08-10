<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\Homecontroller;

Route::get("/",[Homecontroller::class,"index"])->name("homepage");
Route::get("/search",[Homecontroller::class,"search"])->name("search");
Route::post("/",[Homecontroller::class,"store"])->name("store"); //for data insertion
Route::get("/{r_id}/delete/",[Homecontroller::class,"destroy"])->name("remove");
Route::get("/{r_id}/edit/",[Homecontroller::class,"edit"])->name("edit");
Route::get("/{id}/view/",[Homecontroller::class,"view"])->name("view");

