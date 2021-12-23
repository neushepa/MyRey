<?php
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

// Start of the Public Routes

Route::get('/', [FrontendController::class, 'index']);
Route::get('/', [FrontendController::class, 'showfeatured']);
Route::get('/gallery', FrontendController::class . '@showgallery')->name('gallery.show'); ;

Route::get('/blog', BlogController::class . '@index')->name('blog.index');
Route::get('/blog/{slug}', BlogController::class . '@show');
Route::get('/blog/{id}', BlogController::class . '@showcat');
//Route::get('/blog/{id}', [CategoryController::class, 'show']);

Route::get('/profile/show/{id}', [UserController::class, 'show'])->name('profile.show');

Auth::routes();
Route::get('/auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocialiteController@handleProvideCallback');

Route::get('/home', function () {
    if (Auth::user()->role == 'admin') {
        return redirect('/admin/dashboard');
    } else {
        return redirect('/');
    }
})->name('home');

// Start of the Admin Routes
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
    Route::prefix('admin')->group(function () {
        Route::prefix('post')->group(function () {
            Route::get('/', [PostController::class, 'index'])->name('post.index');
            Route::get('/create', [PostController::class, 'create'])->name('post.create');
            Route::post('/store', [PostController::class, 'store'])->name('post.store');
            Route::get('/edit/{id}', [PostController::class, 'edit'])->name('post.edit');
            Route::put('/update/{id}', [PostController::class, 'update'])->name('post.update');
            Route::delete('/delete/{id}', [PostController::class, 'destroy'])->name('post.destroy');
        });
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::put('/update/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
        });
        Route::prefix('gallery')->group(function () {
            Route::get('/', [GalleryController::class, 'index'])->name('gallery.index');
            Route::get('/create', [GalleryController::class, 'create'])->name('gallery.create');
            Route::post('/store', [GalleryController::class, 'store'])->name('gallery.store');
            Route::get('/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
            Route::put('/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
            Route::delete('/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
        });
        Route::prefix('user')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('user.index');
            Route::get('/create', [UserController::class, 'create'])->name('user.create');
            Route::post('/store', [UserController::class, 'store'])->name('user.store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::put('/update/{id}', [UserController::class, 'update'])->name('profile.update');
            Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        });
        Route::prefix('todo')->group(function () {
            Route::get('/', [TodoController::class, 'index'])->name('todo.index');
            Route::get('/create', [TodoController::class, 'create'])->name('todo.create');
            Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
            Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
            Route::put('/update/{id}', [TodoController::class, 'update'])->name('todo.update');
            Route::delete('/delete/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');
        });
    });
});
// End of the Admin Routes
