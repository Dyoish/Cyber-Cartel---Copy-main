<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\Authentication_Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Http\Controllers\Authetication_Controller;
use App\Http\Controllers\Category_Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Profile_Controller;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
// Route::get('/dashboard',[DashboardController::class, 'dashboard']);

// Route::get('/login',[LoginController::class, 'login']);

// Route::get('/signup',[SignupController::class, 'signup']);

Route::get('/', function () {
    return view('DashBoard');
})->name('home');
;
Route::get('/', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');
;

//Authentication
Route::get('/login', [LoginController::class, 'Login'])->name('Login');
Route::post('/login', [LoginController::class, 'Loginpost'])->name('Login.post');
Route::get('/signup', [LoginController::class, 'Signup'])->name('Signup');
Route::post('/signup', [LoginController::class, 'Signuppost'])->name('Signup.post');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::group(['middleware' => 'auth'], function () {
    //PROFILE
    Route::get('/change_number', [Profile_Controller::class, 'New_PhoneNumber_Route']);
    //purchase
    Route::get('/my_purchase', [Profile_Controller::class, 'My_Purchase_Route']);
    Route::get('/my_purchase/{id}/delete', [CartController::class, 'destroy2']);
    Route::get('/my_bought', [CartController::class, 'bought']);
    Route::get('/my_refunded', [CartController::class, 'refunded']);
    Route::get('/my_cancelled', [CartController::class, 'cancelled']);
    //refunded
    Route::get('/my_refunded/{id}/delete', [CartController::class, 'destroy3']);

    //cancelled
    Route::get('/my_cancelled/{id}/delete', [CartController::class, 'destroy4']);

    Route::get('/profile', [Profile_Controller::class, 'Profile_Route']);
    Route::get('/bank_and_card', [Profile_Controller::class, 'BankandCard_Route']);
    Route::get('/add_card_details', [Profile_Controller::class, 'New_Card_Route']);
    //Address
    Route::get('/address', [AddressController::class, 'index']);
    Route::get('/add_new_address', [AddressController::class, 'create']);
    Route::post('/add_new_address', [AddressController::class, 'store']);

    Route::get('/change_passwordV', [Profile_Controller::class, 'Pass_Verification_Route']);
    Route::post('/change_password', [Profile_Controller::class, 'New_Password_Route']);
    Route::get('/change_email', [Profile_Controller::class, 'New_Email_Route']);
    Route::get('/my_account/edit', [LoginController::class, 'edit'])->name('user.edit-profile');
    Route::put('/my_account', [LoginController::class, 'update'])->name('user.update-profile');
    Route::get('/my_account', [LoginController::class, 'Profile_Route'])->name('user.profile');
    //product and checkout

    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/addcart/{id}', [CartController::class, 'add_cart']);
    Route::post('/increasecart/{id}', [CartController::class, 'increase']);
    Route::get('/decreasecart/{id}', [CartController::class, 'decrease']);
    Route::get('/addcart/{id}/delete', [CartController::class, 'destroy']);
    Route::post('/buynow/{id}', [CartController::class, 'buy_now']);
    Route::post('/topurchase/{id}', [CartController::class, 'checkout']);
    Route::post('/torefund/{id}', [\App\Http\Controllers\API\ProductsController::class, 'refund']);
    Route::post('/tocancel/{id}', [\App\Http\Controllers\API\ProductsController::class, 'cancel']);
    Route::get('/checkOut', [CartController::class, 'checkoutindex']);
    Route::get('/verify', function () {
        return view('Verify_Page');
    });
    Route::post('/verify', function () {
        return view('Verify_Page');
    });


});
Route::get('/enterEmail', [ForgetPasswordManager::class, 'forgetPassword'])->name("forget.password");
Route::post('/enterEmail', [ForgetPasswordManager::class, 'forgetPasswordPost'])->name("forget.password.post");
Route::get('/conPass/{token}', [ForgetPasswordManager::class, 'resetPassword'])->name("resetPassword")->name("reset.password");
Route::post('/conPass', [ForgetPasswordManager::class, 'resetPasswordPost'])->name("resetPassword")->name("reset.password.post");


//Admin panel
Route::get('/adminmanagements', [DashboardController::class, 'adminmanagement']);
Route::get('/admindashboards', [DashboardController::class, 'admindashboard']);
Route::get('/adminanalytics', [DashboardController::class, 'adminanalytics']);
Route::get('/admincustomers', [DashboardController::class, 'admincustomers']);
Route::get('/adminlogin', [DashboardController::class, 'adminlogin']);
//productmanagement
Route::get('/adminmanagements', [App\Http\Controllers\productController::class, 'index']);
Route::get('productmanagements/create', [App\Http\Controllers\productController::class, 'create']);
Route::post('productmanagements/create', [App\Http\Controllers\productController::class, 'store']);
Route::get('productmanagements/{id}/edit', [App\Http\Controllers\productController::class, 'edit']);
Route::put('productmanagements/{id}/edit', [App\Http\Controllers\productController::class, 'update']);
Route::get('productmanagements/{id}/delete', [App\Http\Controllers\productController::class, 'destroy']);

//products
Route::get('/product_demo/{id}', [DashboardController::class, 'details']);



//CATEGORIES
Route::get('/processor_category', [Category_Controller::class, 'Cpu_Category_Route']);
Route::get('/gpu_category', [Category_Controller::class, 'Gpu_Category_Route']);
Route::get('/ram_category', [Category_Controller::class, 'Ram_Category_Route']);
Route::get('/hdd_category', [Category_Controller::class, 'HDD_Category_Route']);
Route::get('/storage_category', [Category_Controller::class, 'SSD_Category_Route']);
Route::get('/motherboard_category', [Category_Controller::class, 'Motherboard_Category_Route']);
Route::get('/chassis_category', [Category_Controller::class, 'Chassis_Category_Route']);
Route::get('/monitor_category', [Category_Controller::class, 'Monitor_Category_Route']);
Route::get('/pre_built_units', [Category_Controller::class, 'PreBuilt_Category_Route']);
Route::get('/psu_category', [Category_Controller::class, 'PSU_Category_Route']);

Route::get('/terms', function () {
    return view('Terms');
});