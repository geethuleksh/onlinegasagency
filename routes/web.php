<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gasController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\userController;

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
Route::get('/',[gasController::class,'index']);
Route::get('/index',[adminController::class,'index']);
Route::get('/approveconnections',[adminController::class,'approveconnections']);
Route::get('/allconnections',[adminController::class,'allconnections']);
Route::get('/newconnections',[adminController::class,'newconnections']);

Route::get('/adminprofile',[adminController::class,'adminprofile']);
Route::get('/approve/{id}',[adminController::class,'approve']);
Route::get('/reject/{id}',[adminController::class,'reject']);
Route::get('/rejectedconnections',[adminController::class,'rejectedconnections']);
Route::get('/viewpayment',[adminController::class,'viewpayment']);
Route::get('/stockdetails',[adminController::class,'stockdetails']);
Route::get('/userdetails',[adminController::class,'userdetails']);
Route::get('/changestatus/{id}',[adminController::class,'changestatus']);
Route::post('/changeaction/{id}',[adminController::class,'changeaction']);
Route::get('/addabout',[adminController::class,'addabout']);
Route::post('/aboutaction',[adminController::class,'aboutaction']);
Route::get('/viewabout',[adminController::class,'viewabout']);
Route::get('/addproduct',[adminController::class,'addproduct']);
Route::post('/productaction',[adminController::class,'productaction']);
Route::get('/approvebooking',[adminController::class,'approvebooking']);
Route::get('/viewbooking',[adminController::class,'viewbooking']);
Route::get('/approved/{id}',[adminController::class,'approved']);
Route::get('/rejected/{id}',[adminController::class,'rejected']);
Route::get('/rejectedbooking',[adminController::class,'rejectedbooking']);
Route::get('/viewproduct',[adminController::class,'viewproduct']);
Route::get('/edit/{id}',[adminController::class,'edit']);
Route::get('/delete/{id}',[adminController::class,'delete']);
Route::get('/complaints',[adminController::class,'complaints']);
Route::post('/updateaction/{id}',[adminController::class,'updateaction']);

Route::get('/changestatuss/{id}',[adminController::class,'changestatuss']);
Route::post('/changesaction/{id}',[adminController::class,'changesaction']);


Route::get('/myprofile',[userController::class,'myprofile']);
Route::post('/updatesaction/{id}',[userController::class,'updatesaction']);
Route::get('/newbooking',[userController::class,'newbooking']);
Route::get('/registration',[gasController::class,'registration']);
Route::post('/registeraction',[gasController::class,'registeraction']);
Route::get('/booking/{id}',[userController::class,'booking']);
Route::post('/bookingaction',[userController::class,'bookingaction']);
Route::get('/userlogin',[gasController::class,'userlogin']);
Route::post('/loginaction',[gasController::class,'loginaction']);
Route::get('/about',[gasController::class,'about']);
Route::get('/adminlogin',[gasController::class,'adminlogin']);
Route::get('/contact',[gasController::class,'contact']);
Route::post('/contactaction',[gasController::class,'contactaction']);



Route::get('/proceedtopayment/{id}',[userController::class,'proceedtopayment']);
Route::post('/proceedtopaymentaction/{id}',[userController::class,'proceedtopaymentaction']);

Route::get('/indexs',[userController::class,'indexs']);
Route::get('/connection',[userController::class,'connection']);
Route::post('/connectionaction',[userController::class,'connectionaction']);
Route::get('/abouts',[userController::class,'abouts']);
Route::get('/viewsbooking',[userController::class,'viewsbooking']);
Route::get('/newbooking',[userController::class,'newbooking']);
Route::get('/viewconnection',[userController::class,'viewconnection']);
Route::post('/connectionsaction',[userController::class,'connectionsaction']);
Route::post('/bookaction/{id}',[userController::class,'bookaction']);
Route::get('/logout',[userController::class,'logout']);

Route::get('razorpay-payment', [RazorpayPaymentController::class, 'index']);
Route::post('razorpay-payment', [RazorpayPaymentController::class, 'store'])->name('razorpay.payment.store');