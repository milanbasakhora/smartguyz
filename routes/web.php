<?php

use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\admin\ActivityController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BoardMemberController;
use App\Http\Controllers\admin\CarouselController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\CompanyController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\EditorialController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\admin\JumbotronController;
use App\Http\Controllers\admin\MapController;
use App\Http\Controllers\admin\MemberCategoryController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\admin\NoticeController;
use App\Http\Controllers\Admin\PrivacyController;
use App\Http\Controllers\Admin\TermsController;
use App\Http\Controllers\Admin\WelcomeMessageController;
use App\Http\Controllers\AdminProfileController;
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
// Get Routes Begin
Route::get('/', [FrontendController::class,'home'] );
Route::get('/about', [FrontendController::class,'about'] );
Route::get('/team', [FrontendController::class,'team']);
Route::get('/blog', [FrontendController::class,'blog']);
Route::get('/blog/{slug}', [FrontendController::class,'blogdetails']);
Route::get('/contact', [FrontendController::class,'contact']);
Route::get('/editorial-team', [FrontendController::class,'editorialteam']);
Route::get('/gallery', [FrontendController::class,'gallery']);
Route::get('/notices', [FrontendController::class,'notices']);
Route::get('/terms-n-conditions', [FrontendController::class,'terms']);
Route::get('/privacy', [FrontendController::class,'privacy']);
Route::get('/members', [FrontendController::class,'members']);
// Get Routes End

// Post Routes Begin
Route::post('/postmember', [FrontendController::class,'postMember']);
Route::post('/postmessage', [FrontendController::class,'postMessage']);
Route::post('/postcomment', [FrontendController::class,'postComment']);
// Post Routes End

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware(['auth:user', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

//Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin/profile', [AdminProfileController::class, 'edit'])->name('admin.profile.edit');
    Route::patch('/admin/profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::delete('/admin/profile', [AdminProfileController::class, 'destroy'])->name('admin.profile.destroy');
    Route::resource('/admin/company', CompanyController::class)->names(['comapany']);
    Route::resource('/admin/welcome_message', WelcomeMessageController::class)->names(['welcome_message']);
    Route::resource('/admin/menu', MenuController::class)->names(['menus']);
    Route::resource('/admin/aboutus', AboutUsController::class)->names(['aboutus']);
    Route::resource('/admin/activity', ActivityController::class)->names(['activity']);
    Route::resource('/admin/gallery', GalleryController::class)->names(['gallery']);
    Route::resource('/admin/member', MemberController::class)->names(['member']);
    Route::resource('/admin/notice', NoticeController::class)->names(['notice']);
    Route::resource('/admin/contact', ContactController::class)->names(['contact']);
    Route::resource('/admin/terms_and_conditions', TermsController::class)->names(['terms_and_conditions']);
    Route::resource('/admin/privacy', PrivacyController::class)->names(['privacy']);
    Route::resource('/admin/jumbotron', JumbotronController::class)->names(['jumbotron']);
    Route::resource('/admin/boardmember', BoardMemberController::class)->names(['boardmember']);
    Route::resource('/admin/editorial', EditorialController::class)->names(['editorial']);
    Route::resource('/admin/banner', BannerController::class)->names(['banner']);
    Route::resource('/admin/map', MapController::class)->names(['map']);
    Route::resource('/admin/comment', CommentController::class)->names(['comment']);
});

require __DIR__ . '/adminauth.php';
