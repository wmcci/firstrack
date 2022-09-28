<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\FichiersController;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

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


Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware('admin:admin');
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');
Route::get('/admin/forgot-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');
Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');
Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');


// Get insertion Element for admin routes
Route::get('/admin/videos/insert', [VideosController::class, 'index'])->name('insert_video');
Route::post('/admin/videos/store', [VideosController::class, 'StoreVideos'])->name('store_video');
Route::get('/admin/videos/all', [VideosController::class, 'allVideos'])->name('all_videos');

Route::get('/admin/fichiers/insert', [FichiersController::class, 'index'])->name('insert_fichier');
Route::post('/admin/fichiers/store', [FichiersController::class, 'storeFichiers'])->name('store_fichier');
Route::get('/admin/fichiers/all', [FichiersController::class, 'allFichiers'])->name('all_files');
Route::get('/admin/fichiers/delete/{id}', [FichiersController::class, 'DeleteFichier'])->name('delete_fichier');


// Get insertion for Contac section
Route::get('/admin/contacts/all', [ContactController::class, 'allContacts'])->name('all_contact');
Route::get('/admin/contacts/delete/{id}', [ContactController::class, 'DeleteContact'])->name('delete_contact');

Route::get('/contact/create', [ContactController::class, 'indexContact']);
Route::post('/contact/insert', [ContactController::class, 'insertContact'])->name('insert_contact');
