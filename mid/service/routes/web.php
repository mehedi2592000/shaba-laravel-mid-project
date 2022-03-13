<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProviderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderdetailController;




use App\Http\Controllers\service_reges;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/Servicprovider',[ProviderController::class,'Servicprovider'])->name('Servicprovider');
Route::get('/invalidServicprovider',[ProviderController::class,'invalidServicprovider'])->name('invalidServicprovider');

Route::get('/customerlist',[CustomerController::class,'customerlist'])->name('customerlist');
Route::get('/customerpermissionlist',[CustomerController::class,'customerpermissionlist'])->name('customerpermissionlist');

Route::get('/employeelist',[EmployeeController::class,'employeelist'])->name('employeelist');


Route::get('/addServicprovider',[ProviderController::class,'addServicprovider'])->name('addServicprovider');
Route::post('/addServicprovider',[ProviderController::class,'submitedaddServicprovider'])->name('addServicprovider');

Route::get('/addcustomer',[CustomerController::class,'addcustomer'])->name('addcustomer');
Route::post('/addcustomer',[CustomerController::class,'submitaddcustomer'])->name('addcustomer');

Route::get('/Servicproviderupdate/{id}/{name}',[ProviderController::class,'Servicproviderupdate'])->name('Servicproviderupdate');
Route::post('/Servicproviderupdate',[ProviderController::class,'submitServicproviderupdate'])->name('Servicproviderupdate');
Route::get('/providerDelete/{id}/{name}',[ProviderController::class,'providerDelete'])->name('providerDelete');


Route::get('/customerupdate/{id}/{name}',[CustomerController::class,'customerupdate'])->name('customerupdate');
Route::post('/customerupdate',[CustomerController::class,'submitcustomerupdate'])->name('customerupdate');
Route::get('/customerupdatepermission/{id}/{name}',[CustomerController::class,'customerupdatepermission'])->name('customerupdatepermission');
Route::post('/customerupdatepermission',[CustomerController::class,'permisssionsubmitcustomerupdate'])->name('customerupdatepermission');



Route::get('/customerDelete/{id}/{name}',[CustomerController::class,'customerDelete'])->name('customerDelete');

Route::get('/employeeupdate/{id}/{name}',[EmployeeController::class,'employeeupdate'])->name('employeeupdate');
Route::post('/employeeupdate',[EmployeeController::class,'submitemployeeupdate'])->name('employeeupdate');

Route::get('/Dashboard',[EmployeeController::class,'Dashboard'])->name('Dashboard');

Route::get('/logine',[LoginController::class,'logine'])->name('logine');
Route::post('/logine',[loginController::class,'loginSubmit'])->name('logine');
Route::get('/home',[LoginController::class,'home'])->name('home');


Route::get('/logout',[loginController::class,'logout'])->name('logout');


Route::get('/productlist',[ProductController::class,'productlist'])->name('productlist');

Route::get('/productadd',[ProductController::class,'productadd'])->name('productadd');
Route::post('/productadd',[ProductController::class,'productaddsubmit'])->name('productadd');


Route::get('/detaillist',[ProductController::class,'detaillist'])->name('detaillist');
Route::get('/productlistlist',[ProductController::class,'productlistlist'])->name('productlistlist');

Route::get('/productdetail/{id}/{name}',[ProductController::class,'productdetail'])->name('productdetail');
Route::post('/productdetail',[ProductController::class,'submitemployeeupdate'])->name('productdetail');


Route::get('/orderdetaillist',[OrderdetailController::class,'orderdetaillist'])->name('orderdetaillist');

Route::get('/orderdetailupdate/{id}',[OrderdetailController::class,'orderdetailupdate'])->name('orderdetailupdate');
Route::post('/orderdetailupdate',[OrderdetailController::class,'submitorderdetailupdateupdate'])->name('orderdetailupdate');

Route::get('/providerDelete/{id}',[OrderdetailController::class,'providerDelete'])->name('providerDelete');

