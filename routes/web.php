<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Frontend\webController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\Frontend\categoryController as FrontendcategoryController;
use App\Http\Controllers\Frontend\menuController as FrontendmenuController;
use App\Http\Controllers\Frontend\reservationController as FrontendreservationController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TestimonaialController;
use App\Http\Controllers\FeedbackAnalyticsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ProfileController;
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




// web
Route::get('/', 'Frontend\webController@web')->name('Home');
// Frontend
Route::get('/cate', [FrontendcategoryController::class, 'index'])->name('cate.index');
Route::get('/cate/{id}', [FrontendcategoryController::class, 'show'])->name('cate.show');
Route::get('/menu', [FrontendmenuController::class, 'index'])->name('menu.index');
Route::get('/menus_details/{id}', [FrontendmenuController::class, 'menus_details'])->name('menu.menus_details');
// cart
Route::POST('/add_cart/{id}', [FrontendmenuController::class, 'add_cart'])->name('menu.add_cart');
Route::get('/show_cart', [FrontendmenuController::class, 'show_cart'])->name('menu.show_cart');
Route::get('/remove_cart/{id}', [FrontendmenuController::class, 'remove_cart'])->name('menu.remove_cart');


// order
Route::get('/cash_order', [FrontendmenuController::class, 'cash_order'])->name('menu.cash_order');
Route::get('/show_order', [FrontendmenuController::class, 'show_order'])->name('menu.show_order');
Route::get('/cancel_order/{id}', [FrontendmenuController::class, 'cancel_order'])->name('menu.cancel_order');





// regiter
Route::get('register','Auth\AuthController@showRegister')->name('register');
Route::post('register','Auth\AuthController@postRegister')->name('register.post');
    
// login
Route::get('/login','Auth\AuthController@showlogin')->name('login');
Route::post('login','Auth\AuthController@postlogin')->name('login.post');
Route::get('logout','Auth\AuthController@logout')->name('logout');

// forget password
route::get('/forget' ,'Auth\AuthController@forgetpasswordload');
route::post('/forgetpassword' ,'Auth\AuthController@forgetpassword')->name('forgetpassword');
// forget password

//reset password
route::get('/reset/{token}' ,'Auth\AuthController@resetpasswordload');
route::post('/reset/{token}' ,'Auth\AuthController@resetpassword')->name('resetPassword');
//reset password


// testimonial start
route::get('testimonial/home' ,[TestimonaialController::class,'home']);
// testimonial end

//   reservation start
Route::get('/reservation/step-one', [FrontendreservationController::class, 'stepone'])->name('reservation.step.one');
Route::post('/reservation/step-one', [FrontendreservationController::class, 'storestepone'])->name('reservation.store.step.one');
Route::get('/reservation/step-two', [FrontendreservationController::class, 'steptwo'])->name('reservation.step.two');
Route::post('/reservation/step-two', [FrontendreservationController::class, 'storesteptwo'])->name('reservation.store.step.two');
Route::get('/thankYou', [FrontendReservationController::class, 'thankYou'])->name('thankYou');
Route::get('/reservations/{id}', [FrontendreservationController::class, 'show'])->name('reservations.show')->middleware('auth');
Route::get('/reservation/{id}/pdf', 'Frontend\ReservationController@generatePdf')->name('reservation.pdf');
// reservation end

// Paypal
Route::post('pay', 'PaymentController@pay')->name('payment');
Route::get('success', 'PaymentController@success')->name('success');
Route::get('error', 'PaymentController@error')->name('error');


// start staff
Route::get('/staff.index', [StaffController::class, 'index'])->name('staff.index');
// end staff




         // contact
         Route::get('/contact','Frontend\ContactController@show')->name('contact.show');
         Route::delete('/contacts/{contact}', 'App\Http\Controllers\Frontend\ContactController@destroy')->name('contacts.destroy');
          // Contact
          Route::get('/create/contact', 'Frontend\ContactController@create')->name('create');
          Route::post('/store/contact', 'Frontend\ContactController@store')->name('contact.store');
     





// middleware start

Route::group(['middleware'=>['web','checkUser']],function()
{
    // reservation
    Route::get('/reser', [FrontendreservationController::class, 'index'])->name('reservations.index');
    Route::put('/reservations/{id}/cancel',  [FrontendreservationController::class, 'cancel'])->name('reservations.cancel');
    // review
    route::get('customer/add-testimonials' ,[TestimonaialController::class , 'add_testimonial']);
    route::post('customer/save-testimonials' ,[TestimonaialController::class , 'save_testimonial']);

}); 


Route::group(['middleware'=>['web','checkAdmin']],function()
{
    


    Route::get('/dashboard','adminController@adminhome')->name('dashboard');
    Route::get('/users','adminController@user')->name('users');
    Route::get('/deleteuser/{id}','adminController@deleteuser')->name('deleteuser');

    Route::get('/cat','Admin\CategoryController@create1')->name('cat');
    
    Route::resource('/categories','Admin\CategoryController');
    Route::resource('/menus','Admin\MenuController');
    Route::resource('/tables','Admin\TableController');
    Route::resource('/reservation','Admin\ReservationController');
    // reports
    Route::get('/analytics', [AnalyticsController::class, 'index']);
    Route::get('/generate-reports', [AnalyticsController::class, 'generateReports'])->name('generate.reports');
    Route::get('/feedback-analytics', [FeedbackAnalyticsController::class, 'showAnalytics'])->name('feedback-analytics.show');
    Route::get('/feedback-analytics/generate', [FeedbackAnalyticsController::class, 'generateReport'])->name('feedback-analytics.generate');

    // Review
    route::get('/review/show' ,[TestimonaialController::class,'show']);
    Route::delete('/testimonials/{testimonial}', 'App\Http\Controllers\TestimonaialController@destroy')->name('testimonials.destroy');

    Route::get('/profile.index', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/create', 'ProfileController@create')->name('profile.create');
Route::post('/profile', 'ProfileController@store')->name('profile.store');
Route::get('/profile/{id}/edit', 'ProfileController@edit')->name('profile.edit');
Route::put('/profile/{id}', 'ProfileController@update')->name('profile.update');
Route::delete('/profile/{id}', 'ProfileController@destroy')->name('profile.destroy');
}); 

Route::get('/staff.dashindex', [StaffController::class, 'dashindex'])->name('staff.dashindex');
Route::get('/staff/create', 'StaffController@create')->name('staff.create');
Route::post('/staff', 'StaffController@store')->name('staff.store');
Route::get('/staff/{id}/edit', 'StaffController@edit')->name('staff.edit');
Route::put('/staff/{id}', 'StaffController@update')->name('staff.update');
Route::delete('/staff/{id}', 'StaffController@destroy')->name('staff.destroy');

// order detail for dashboard
Route::get('order','Admin\MenuController@order')->name('order');
Route::get('delivered/{id}','Admin\MenuController@delivered')->name('delivered');
Route::get('print_pdf/{id}','Admin\MenuController@print_pdf')->name('print_pdf');

// middleware end

 
