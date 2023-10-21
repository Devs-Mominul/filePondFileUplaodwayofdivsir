<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadsController;

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

Route::get('/',
[UploadsController::class,'index']
);
// Filepond
Route::post('/filepond/upload', [UploadsController::class, 'filepondUpload'])
->name('filepond.upload');
Route::delete('/filepond/delete', [UploadsController::class, 'filepondDelete'])
->name('filepond.delete');
