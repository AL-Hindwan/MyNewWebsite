<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\detailscontroller;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\MedicalStaffcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\newservicescontroller;

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

Route::get('/services', [servicescontroller::class, 'services'])->name('services');

Route::get('/MedicalStaff', [MedicalStaffcontroller::class, 'MedicalStaff'])->name('MedicalStaff');

Route::get('/news', [newscontroller::class, 'news'])->name('news');

Route::get('/details', [detailscontroller::class, 'deatails'])->name('details');

Route::get('homedash',function(){
    return view('./dashbord/homedash');
})->name('homedash');

Route::get('servicesdash',function(){
    return view('./dashbord/services');
}) ->name('servicesdash');

Route::get('newsdash',function(){
    return view('./dashbord/news');
}) ->name('newsdash');

Route::get('doctordash',function(){
    return view('./dashbord/doctor');
}) ->name('doctordash');

Route::get('newserviesdash',function(){
    return view('./dashbord/newservices');
}) ->name('newserviesdash');

Route::get('new_news',function(){
    return view('./dashbord/new_news');
}) ->name('new_news');


Route::get('addDoctor',function(){
    return view('./dashbord/addDoctor');
}) ->name('addDoctor');


























