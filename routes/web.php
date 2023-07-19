<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\FrontendUserProfileController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('frontend/frontend_layout/home');
});

Route::get('/contact', function () {
    return view('frontend/frontend_layout/contact');
});

Route::get('/about', function () {
    return view('frontend/frontend_layout/about');
});
Route::get('/log', function () {
    return view('frontend/frontend_layout/login');
});

Route::get('/users', function () {
    return view('frontend/frontend_layout/user');
});

Route::get('/products', function () {
    return view('frontend/frontend_layout/products',[
        'id'=>'a1',
		'price' => '12000',
        'currency' => 'vnd',
        'name' => "Ao quan",
        'rating' =>'3',
        'image_1'=>'data:image/jpeg;base64,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'
    ]);
}); 



// user 
// user middlware to group route request????
Route::middleware(['auth:web'])->group(function () {

    // muon dung class FrontendUserProfileController ?? import Controller FrontendUserProfileController
    Route::middleware(['auth:sanctum, web', 'verified'])->get('/dashboard', [FrontendUserProfileController::class, 'userdashboard'])->name('dashboard');

    Route::prefix('/user')->group(function () {
        Route::get('/logout', [FrontendUserProfileController::class, 'userlogout'])->name('user.logout');
        Route::get('/profile', [FrontendUserProfileController::class, 'userprofile'])->name('user.profile');
        Route::post('/profile', [FrontendUserProfileController::class, 'userprofileupdate'])->name('user.profile');
        Route::get('/password/change', [FrontendUserProfileController::class, 'userpasswordchange'])->name('user.change.password');
        Route::post('/password/update', [FrontendUserProfileController::class, 'userpasswordupdate'])->name('user.update.password');

    });

});

//admin
Route::group(['prefix'=> 'admin', 'middleware'=>['admin:admin']], function(){
	Route::get('/bakerz_333/login',[AdminController::class, 'loginForm']);
	Route::post('/login',[AdminController::class, 'store'])->name('admin.login');
});