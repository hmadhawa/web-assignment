<?php

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


// -------------------frontend--------------------------
// home
Route::get('/', function () {
    return redirect('/homepage');
});
Route::get('homepage',function(){
    return view('frontend/home');
});


// blog
Route::get('/blog', function () {
    return redirect('/blog');
});
Route::get('blog',function(){
    return view('frontend/blog');
});

// donations
// Route::get('/donation', function () {
//     return redirect('/donation');
// });
Route::get('donation',function(){
    return view('frontend/donation');
});


//eco
Route::get('/eco', function () {
    return redirect('/eco');
});
Route::get('eco',function(){
    return view('frontend/eco');
});

//af_form
Route::get('/af_form', function () {
    return redirect('/af_form');
});
Route::get('af_form',function(){
    return view('frontend/af_form');
});

//unicef_form
Route::get('/unicef_form', function () {
    return redirect('/unicef_form');
});
Route::get('unicef_form',function(){
    return view('frontend/unicef_form');
});

//solocal_form
Route::get('/solocal_form', function () {
    return redirect('/solocal_form');
});
Route::get('solocal_form',function(){
    return view('frontend/solocal_form');
});

//bc_form
Route::get('/bc_form', function () {
    return redirect('/bc_form');
});
Route::get('bc_form',function(){
    return view('frontend/bc_form');
});

//usaid_form
Route::get('/usaid_form', function () {
    return redirect('/usaid_form');
});
Route::get('usaid_form',function(){
    return view('frontend/usaid_form');
});

//pbi_form
Route::get('/pbi_form', function () {
    return redirect('/pbi_form');
});
Route::get('pbi_form',function(){
    return view('frontend/pbi_form');
});



Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/greeting','test');

Route::get('/{any?}', function(){
    return view('admin/dashboard/index');
});

//////// Riderecting routes will be define here
Route::get('/admin/admin-users', function () {
    return redirect('/home');
});
Route::get('/admin/stationary-product', function () {
    return redirect('/home');
});
Route::get('/admin/stationary-custom', function () {
    return redirect('/home');
});
Route::get('/admin/stationary-cart', function () {
    return redirect('/home');
});
Route::get('/admin/pharmacy-product', function () {
    return redirect('/home');
});
Route::get('/admin/pharmacy-custom', function () {
    return redirect('/home');
});
Route::get('/admin/pharmacy-cart', function () {
    return redirect('/home');
});
Route::get('/admin/advertisements', function () {
    return redirect('/home');
});



Route::prefix('/admin')->name('admin.')->group(function(){
    //All the admin routes will be defined here...

    
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/fetch/admin', [App\Http\Controllers\Admin\AdminUserController::class, 'index']);
        Route::post('/create/admin', [App\Http\Controllers\Admin\AdminUserController::class, 'store']);
        Route::delete('/delete/admin/{id}', [App\Http\Controllers\Admin\AdminUserController::class, 'delete']);
        Route::put('/update/admin', [App\Http\Controllers\Admin\AdminUserController::class, 'update']);
        Route::post('/destroy/admin', [App\Http\Controllers\Admin\AdminUserController::class, 'destroy']);

        Route::get('/fetch/donations', [App\Http\Controllers\DonationController::class, 'index']);
        Route::post('/delete/donations', [App\Http\Controllers\DonationController::class, 'deleteDonation']);


  });



  Route::post('/submitdonation','App\Http\Controllers\DonationController@insertDonations');