<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\admin\ActivityController;
use App\Http\Controllers\admin\CarouselController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\MemberCategoryController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\Admin\WelcomeMessageController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [FrontendController::class,'home'] );
Route::get('/about', [FrontendController::class,'about'] );
Route::get('/team', [FrontendController::class,'team']);
Route::get('/blog', [FrontendController::class,'blog']);
Route::get('/blog-details', [FrontendController::class,'blogdetails']);
Route::get('/contact', [FrontendController::class,'contact']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/admin/company', CompanyController::class)->names(['comapany']);
    Route::resource('/admin/welcome_message', WelcomeMessageController::class)->names(['welcome_message']);
    Route::resource('/admin/menu', MenuController::class)->names(['menus']);
    Route::resource('/admin/aboutus', AboutUsController::class)->names(['aboutus']);
    Route::resource('/admin/activity', ActivityController::class)->names(['activity']);
    Route::resource('/admin/carousel', CarouselController::class)->names(['carousel']);
    Route::resource('/admin/membercategory', MemberCategoryController::class)->names(['membercategory']);
    Route::resource('/admin/member', MemberController::class)->names(['member']);
    Route::resource('/admin/notice', NoticeController::class)->names(['notice']);
});

require __DIR__ . '/adminauth.php';
