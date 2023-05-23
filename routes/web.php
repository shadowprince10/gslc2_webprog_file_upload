<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\UploadController;

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

Route::get('file/', function() {
    Route::get('/file-upload-rename', UploadController::uploadFile) -> name('upload_file');
    Route::get('/{fileName}/{fileType}', FileController::viewFile) -> name('view_file');
    // nama route penting supaya apabila url di web.php dimodifikasi, tidak perlu mengubah url di semua file yang lain juga
    // di file lain: route('upload_file') untuk refer ke Route::get('/file-upload-rename', UploadController::uploadFile)
    // di file lain: route('view_file') untuk refer Route::get('/{fileName}/{fileType}', FileController::viewFile)
});
