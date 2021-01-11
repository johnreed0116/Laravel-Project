<?php

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\ImageController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

    #Menu
    Route::get('menu', [MenuController::class, 'index'])->name('admin_menu');
    Route::get('menu/add', [MenuController::class, 'add'])->name('admin_menu_add');
    Route::post('menu/create', [MenuController::class, 'create'])->name('admin_menu_create');
    Route::get('menu/edit/{id}', [MenuController::class, 'edit'])->name('admin_menu_edit');
    Route::post('menu/update/{id}', [MenuController::class, 'update'])->name('admin_menu_update');
    Route::get('menu/delete/{id}', [MenuController::class, 'delete'])->name('admin_menu_delete');
    Route::get('menu/show', [MenuController::class, 'show'])->name('admin_menu_show');

    #Content
    Route::prefix('content')->group(function (){
        Route::get('/', [ContentController::class, 'index'])->name('admin_content');
        Route::get('add', [ContentController::class, 'add'])->name('admin_content_add');
        Route::post('store', [ContentController::class, 'store'])->name('admin_content_store');
        Route::get('edit/{id}', [ContentController::class, 'edit'])->name('admin_content_edit');
        Route::post('update/{id}', [ContentController::class, 'update'])->name('admin_content_update');
        Route::get('delete/{id}', [ContentController::class, 'delete'])->name('admin_content_delete');
        Route::get('show', [ContentController::class, 'show'])->name('admin_content_show');
    });

    #Image
    Route::prefix('image')->group(function (){
        Route::get('add/{content_id}', [ImageController::class, 'add'])->name('admin_image_add');
        Route::post('store/{content_id}', [ImageController::class, 'store'])->name('admin_image_store');
        Route::get('delete/{id}/{content_id}', [ImageController::class, 'delete'])->name('admin_image_delete');
        Route::get('show', [ImageController::class, 'show'])->name('admin_image_show');
    });

    #Setting
    Route::get('setting', [SettingController::class, 'index'])->name('admin_setting');
    Route::post('setting/update', [SettingController::class, 'update'])->name('admin_setting_update');

    #Message
    Route::prefix('message')->group(function (){
        Route::get('/', [MessageController::class, 'index'])->name('admin_message');
        Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
        Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
        Route::get('delete/{id}', [MessageController::class, 'delete'])->name('admin_message_delete');
        Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
    });

});

Route::middleware('auth')->prefix('account')->namespace('account')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('profile');
});

Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {
    Route::get('/profile', [UserController::class, 'index'])->name('userprofile');
});

//Route::get('/admin', [HomeController::class, 'index'])->name('admin')->middleware('auth');
Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/admin/logout', [HomeController::class, 'logout'])->name('admin_logout');

/*
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
*/
