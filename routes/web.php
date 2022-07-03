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
    $examples = File::allFiles(resource_path("views/examples"));
    return view('index', [
        "examples" => $examples
    ]);
});
Route::get("/{template}", function (string $template) {
    return view("examples.$template");
})->name("Example");
