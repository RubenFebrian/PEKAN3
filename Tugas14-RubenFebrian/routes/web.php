<?php

use App\Http\Controllers\TableController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("table", [TableController::class, "get_table"]);
Route::get("data-table", [TableController::class, "get_dataTable"]);
Route::get("/", [TableController::class, "get_table"]);