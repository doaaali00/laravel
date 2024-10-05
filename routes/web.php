<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\InvoicesAttachmentsController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\InvoicesDetailsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SectionsController;
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
    return view('auth.login');
});


Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home'               , [App\Http\Controllers\HomeController::class , 'index'])->name('home');
Route::get('/{page}'             , [AdminController::class]);


Route::resource('/home/sections'     , SectionsController::class);
Route::resource('/home/products'     , ProductsController::class);
Route::resource('/home/invoices' , InvoicesController::class);

Route::get('/section/{id}'        , [InvoicesController::class , 'getproducts']);

// Route::get('View_file/{Invoices_number}/{file_name}'        , [InvoicesAttachmentsController::class , 'open_file']);
Route::get('download/{Invoices_number}/{file_name}'        , [InvoicesAttachmentsController::class , 'get_file']);
Route::post('delete_file' , [InvoicesAttachmentsController::class ,'destroy'])->name('delete_file');

Route::get('InvoicesDetails/{id}'        , [InvoicesDetailsController::class , 'show']);
Route::resource('invoiceAttachments' , InvoicesAttachmentsController::class );
Route::post('/home/invoices' , [InvoicesController::class , 'destroy'])->name('delete_invoice');
Route::post('/home/invoices' , [InvoicesController::class , 'update'])->name('update_invoice');
Route::post('/invoices/store' , [InvoicesController::class , 'store']);
Route::get('/home/invoices/edit_invoice/{id}', [InvoicesController::class , 'edit']);

Route::resource('/home/sections/destroy' , SectionsController::class );
Route::resource('/home/sections/store' , SectionsController::class );

Route::resource('/products/store' , ProductsController::class );
Route::resource('/products/update' , ProductsController::class );
Route::resource('/home/products/destroy' , ProductsController::class );
// Route::get('/home/invoices/Status_show/{id}', [InvoicesController::class ,'show'])->name('Status_show');


