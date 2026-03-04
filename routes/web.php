<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\detailscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\MedicalStaffcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\Newservicescontroller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\AboutUsController;

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

Route::get('/', [homecontroller::class, 'home']);

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Illuminate\Http\Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('homedash');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
})->name('login.post');

Route::post('/logout', function (Illuminate\Http\Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::get('/services', [servicescontroller::class, 'services'])->name('services');

Route::get('/MedicalStaff', [MedicalStaffcontroller::class, 'MedicalStaff'])->name('MedicalStaff');

Route::get('/news', [newscontroller::class, 'news'])->name('news');

Route::get('/details/{id}', [detailscontroller::class, 'details'])->name('details');

Route::middleware('auth')->group(function () {
    Route::get('homedash', [homecontroller::class, 'dashboard'])->name('homedash');

    Route::get('servicesdash', [Newservicescontroller::class, 'index'])->name('servicesdash');

    Route::get('newsdash', [newscontroller::class, 'dashboardIndex'])->name('newsdash');

    Route::get('doctordash', [MedicalStaffcontroller::class, 'dashboardIndex'])->name('doctordash');

    Route::get('about_us_dash', [AboutUsController::class, 'dashboardIndex'])->name('about_us.dashboard');

    Route::get('newserviesdash',function(){
           return view('./dashbord/newservices');
       }) ->name('newserviesdash');

    Route::post('services/store', [Newservicescontroller::class, 'store'])->name('services.store');
    Route::get('services/index', [Newservicescontroller::class, 'index'])->name('services.index');
    Route::get('services/show/{id}', [Newservicescontroller::class, 'show'])->name('services.show');
    Route::get('services/edit/{id}', [Newservicescontroller::class, 'edit'])->name('services.edit');
    Route::put('services/update/{id}', [Newservicescontroller::class, 'update'])->name('services.update');
    Route::delete('services/destroy/{id}', [Newservicescontroller::class, 'destroy'])->name('services.destroy');

    Route::get('new_news',function(){
          return view('./dashbord/new_news');
      }) ->name('new_news');

    Route::post('news/store', [newscontroller::class, 'store'])->name('news.store');
    Route::get('news/index', [newscontroller::class, 'index'])->name('news.index');
    Route::get('news/edit/{id}', [newscontroller::class, 'edit'])->name('news.edit');
    Route::put('news/update/{id}', [newscontroller::class, 'update'])->name('news.update');
    Route::delete('news/destroy/{id}', [newscontroller::class, 'destroy'])->name('news.destroy');

    Route::get('addDoctor',function(){
          return view('./dashbord/addDoctor');
      }) ->name('addDoctor');

    Route::post('medical_staff/store', [MedicalStaffcontroller::class, 'store'])->name('medical_staff.store');
    Route::get('medical_staff/index', [MedicalStaffcontroller::class, 'index'])->name('medical_staff.index');
    Route::get('medical_staff/show/{id}', [MedicalStaffcontroller::class, 'show'])->name('medical_staff.show');
    Route::get('medical_staff/edit/{id}', [MedicalStaffcontroller::class, 'edit'])->name('medical_staff.edit');
    Route::put('medical_staff/update/{id}', [MedicalStaffcontroller::class, 'update'])->name('medical_staff.update');
    Route::delete('medical_staff/destroy/{id}', [MedicalStaffcontroller::class, 'destroy'])->name('medical_staff.destroy');

    Route::put('about_us/update', [AboutUsController::class, 'update'])->name('about_us.update');
});


























