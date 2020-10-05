<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/order',  App\Http\Controllers\OrderController::class);
Route::resource('/employee', App\Http\Controllers\EmployeeController::class);
Route::resource('/customer', App\Http\Controllers\CustomerController::class);
Route::resource('/supplier', App\Http\Controllers\SupplierController::class);
Route::resource('/salary', App\Http\Controllers\SalaryController::class);
Route::resource('/category', App\Http\Controllers\CategoryController::class);
Route::resource('/product', App\Http\Controllers\ProductController::class);
Route::resource('/expense', App\Http\Controllers\ExpenseController::class);
Route::resource('/attendence', App\Http\Controllers\AttendenceController::class);
Route::resource('/setting', App\Http\Controllers\SettingsController::class);
Route::resource('/sales', App\Http\Controllers\SaleController::class);


//Product Import and Export
Route::get('/productImport', [App\Http\Controllers\ProductController::class, 'productImport'])->name('productImport');
Route::get('/export', [App\Http\Controllers\ProductController::class, 'export'])->name('export');
Route::post('/import', [App\Http\Controllers\ProductController::class, 'import'])->name('import');

//POS
Route::get('/pos', [App\Http\Controllers\PosController::class, 'index'])->name('pos');
Route::get('/pending-order', [App\Http\Controllers\PosController::class, 'pendingOrder'])->name('pending-order');
//Order






//Cart Controller
Route::post('/add-cart', [App\Http\Controllers\CartController::class, 'index'])->name('add-cart');
Route::post('/update/{rowId}', [App\Http\Controllers\CartController::class, 'update'])->name('update');
Route::get('/remove/{rowId}', [App\Http\Controllers\CartController::class, 'remove'])->name('remove');
//Invoice
Route::post('/invoice', [App\Http\Controllers\CartController::class, 'invoice'])->name('invoice');
Route::post('/final-invoice', [App\Http\Controllers\CartController::class, 'store'])->name('final-invoice');

//Salary
Route::get('/totalsalary', [App\Http\Controllers\SalaryController::class, 'totalsalary'])->name('totalsalary');
Route::get('/todayexpense', [App\Http\Controllers\ExpenseController::class, 'todayexpense'])->name('todayexpense');
Route::get('/yearly', [App\Http\Controllers\ExpenseController::class, 'yearly'])->name('yearly');
Route::get('/january', [App\Http\Controllers\ExpenseController::class, 'january'])->name('january');
Route::get('/february', [App\Http\Controllers\ExpenseController::class, 'february'])->name('february');
Route::get('/march', [App\Http\Controllers\ExpenseController::class, 'march'])->name('march');
Route::get('/april', [App\Http\Controllers\ExpenseController::class, 'april'])->name('april');
Route::get('/may', [App\Http\Controllers\ExpenseController::class, 'may'])->name('may');
Route::get('/june', [App\Http\Controllers\ExpenseController::class, 'june'])->name('june');
Route::get('/july', [App\Http\Controllers\ExpenseController::class, 'july'])->name('july');
Route::get('/august', [App\Http\Controllers\ExpenseController::class, 'august'])->name('august');
Route::get('/september', [App\Http\Controllers\ExpenseController::class, 'september'])->name('september');
Route::get('/october', [App\Http\Controllers\ExpenseController::class, 'october'])->name('october');
Route::get('/november', [App\Http\Controllers\ExpenseController::class, 'november'])->name('november');
Route::get('/december', [App\Http\Controllers\ExpenseController::class, 'december'])->name('december');

//Sales

Route::get('/todaysale', [App\Http\Controllers\SaleController::class, 'todaysale'])->name('todaysale');
Route::get('/yearlysale', [App\Http\Controllers\SaleController::class, 'yearlysale'])->name('yearlysale');
Route::get('/januarysale', [App\Http\Controllers\SaleController::class, 'januarysale'])->name('januarysale');
Route::get('/februarysale', [App\Http\Controllers\SaleController::class, 'februarysale'])->name('februarysale');
Route::get('/marchsale', [App\Http\Controllers\SaleController::class, 'marchsale'])->name('marchsale');
Route::get('/aprilsale', [App\Http\Controllers\SaleController::class, 'aprilsale'])->name('aprilsale');
Route::get('/maysale', [App\Http\Controllers\SaleController::class, 'maysale'])->name('maysale');
Route::get('/junesale', [App\Http\Controllers\SaleController::class, 'junesale'])->name('junesale');
Route::get('/julysale', [App\Http\Controllers\SaleController::class, 'julysale'])->name('julysale');
Route::get('/augustsale', [App\Http\Controllers\SaleController::class, 'augustsale'])->name('augustsale');
Route::get('/septembersale', [App\Http\Controllers\SaleController::class, 'septembersale'])->name('septembersale');
Route::get('/octobersale', [App\Http\Controllers\SaleController::class, 'octobersale'])->name('octobersale');
Route::get('/novembersale', [App\Http\Controllers\SaleController::class, 'novembersale'])->name('novembersale');
Route::get('/decembersale', [App\Http\Controllers\SaleController::class, 'decembersale'])->name('decembersale');













