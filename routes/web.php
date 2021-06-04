<?php

//Setiap Controller nak guna mesti declare dekat atas sini dulu.
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\TCController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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


//Default root page/home page
// Route::get('/', function () {
//     return view('welcome');
// });

//Setiap function mesti declare di Route sebelum boleh guna.
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
// Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
// Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit');
// Route::post('/products/{product}', [ProductController::class, 'update'])->name('products.update');
// Route::post('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy');

//Route::resource() cara mudah untuk declare semua function sekaligus (Hanya index,create,store,show,edit,update,destroy sahaja. Any custom/new function, kena declare satu satu seperti di atas.)
//Naming dia akan ikut first parameter, (ie: 'products' => products.index, products.edit, products.show, etc...) , boleh diubah kepada apa sahaja seperti 'produk' (ie: produk.index, produk.show, etc...)

//Current homepage (Aku tukar kepada index page for Product untuk memudahkan kerja).
Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes(['register' => false]);

Route::middleware('auth')->group(function () {

    Route::middleware('role:1')->group(function () {
        Route::get('/dashboard/admin', [AdminController::class, 'dashboard_admin'])->name('admin');
        Route::resource('courses', CourseController::class);
        Route::resource('programmes', ProgrammeController::class);
        Route::resource('groups', GroupController::class);
        Route::resource('semesters', SemesterController::class);
        Route::resource('users', UserController::class);
    });

    Route::middleware('role:2')->group(function () {
        Route::get('/dashboard/coordinator', [CoordinatorController::class, 'dashboard_coordinator'])->name('coordinator');
        Route::resource('forms', FormController::class);
    });

    Route::middleware('role:3')->group(function () {
        Route::get('/dashboard/tc', [TCController::class, 'dashboard_tc'])->name('tc');
    });


});

Route::resource('products', ProductController::class);

Route::get('/error/no_permission', function(){ return view('error.no_permission'); })->name('error.no_permission');


// Route::get('/flush', function(){
//     Session::flush();
//     Auth::logout();
//     return Redirect::to("/login")
//       ->with('message', array('type' => 'success', 'text' => 'You have successfully logged out'));
// });
