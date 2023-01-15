<?php

use App\Http\Controllers\CartItemController;
use App\Http\Controllers\ControlPageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CustomerTransactionController;
use App\Http\Controllers\ExportProductController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PosController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomAuthController;

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

//Authentication
Route::get('index', [CustomAuthController::class, 'dashboard']);
Route::get('signin', [CustomAuthController::class, 'index'])->name('signin');
Route::post('custom-login', [CustomAuthController::class, 'customSignin'])->name('signin.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');

//Product management
Route::get('/productlist', [ProductController::class, 'index'])->name('productlist');
Route::post('/add-product', [ProductController::class, 'store'])->name('addProduct');
Route::get('/product-details/{product}', [ProductController::class, 'show'])->name('product-details');
Route::get('/editproduct/{product}', [ProductController::class, 'edit'])->name('editproduct');
Route::post('/update-product/{product}', [ProductController::class, 'update'])->name('update-product');
Route::get('/print-income-invoice/{transaction}', [CustomerTransactionController::class, 'printIncomeInvoice'])->name('print-income-invoice');

Route::get('/export/product', [ExportProductController::class,'export'])->name('export-excel-sheet');
//Customer Management
Route::post('/customer', [CustomerController::class, 'store'])->name('create-customer');
Route::get('/financial-account-details/{customer}', [CustomerTransactionController::class, 'index'])->name('financial-account-details');

//Point of sale Management
Route::get('/pos', [PosController::class, 'index'])->name('pos');

//Cart Management
Route::post('/cart', [CartItemController::class, 'store'])->name('addItemToCart');

//print invoice route
Route::get('/print/{order}', InvoiceController::class)->name('print-invoice');

Route::get('/customerlist', [CustomerController::class, 'webIndex']);
Route::get('/edit/customer/{customer}', [CustomerController::class, 'edit'])->name('editCustomer');
Route::get('/index', [ControlPageController::class, 'index'])->name('index');
Route::get('/saleslist', [OrderController::class, 'index'])->name('saleslist');
Route::get('/sales-details/{order}', [OrderController::class, 'show'])->name('sales-details');

Route::get('/', function () {
    return view('signin');
})->name('signin');
Route::get('/activities', function () {
    return view('activities');
})->name('activities');
Route::get('/add-sales', function () {
    return view('add-sales');
})->name('add-sales');
Route::get('/addbrand', function () {
    return view('addbrand');
})->name('addbrand');
Route::get('/addcategory', function () {
    return view('addcategory');
})->name('addcategory');
Route::get('/addcustomer', function () {
    return view('addcustomer');
})->name('addcustomer');
Route::get('/addproduct', function () {
    return view('addproduct');
})->name('addproduct');
Route::get('/addpurchase', function () {
    return view('addpurchase');
})->name('addpurchase');
Route::get('/addquotation', function () {
    return view('addquotation');
})->name('addquotation');
Route::get('/addstore', function () {
    return view('addstore');
})->name('addstore');
Route::get('/addsupplier', function () {
    return view('addsupplier');
})->name('addsupplier');
Route::get('/addtransfer', function () {
    return view('addtransfer');
})->name('addtransfer');
Route::get('/adduser', function () {
    return view('adduser');
})->name('adduser');
Route::get('/barcode', function () {
    return view('barcode');
})->name('barcode');
Route::get('/blankpage', function () {
    return view('blankpage');
})->name('blankpage');
Route::get('/calendar', function () {
    return view('calendar');
})->name('calendar');
Route::get('/categorylist', function () {
    return view('categorylist');
})->name('categorylist');
Route::get('/chart-apex', function () {
    return view('chart-apex');
})->name('chart-apex');
Route::get('/chart-c3', function () {
    return view('chart-c3');
})->name('chart-c3');
Route::get('/chart-flot', function () {
    return view('chart-flot');
})->name('chart-flot');
Route::get('/chart-js', function () {
    return view('chart-js');
})->name('chart-js');
Route::get('/chart-morris', function () {
    return view('chart-morris');
})->name('chart-morris');
Route::get('/chart-peity', function () {
    return view('chart-peity');
})->name('chart-peity');
Route::get('/chat', function () {
    return view('chat');
})->name('chat');
Route::get('/clipboard', function () {
    return view('clipboard');
})->name('clipboard');
Route::get('/components', function () {
    return view('components');
})->name('components');
Route::get('/counter', function () {
    return view('counter');
})->name('counter');
Route::get('/countrieslist', function () {
    return view('countrieslist');
})->name('countrieslist');
Route::get('/createexpense', function () {
    return view('createexpense');
})->name('createexpense');
Route::get('/createpermission', function () {
    return view('createpermission');
})->name('createpermission');
Route::get('/createpurchasereturn', function () {
    return view('createpurchasereturn');
})->name('createpurchasereturn');
Route::get('/createsalesreturn', function () {
    return view('createsalesreturn');
})->name('createsalesreturn');
Route::get('/createsalesreturns', function () {
    return view('createsalesreturns');
})->name('createsalesreturns');
Route::get('/currencysettings', function () {
    return view('currencysettings');
})->name('currencysettings');
Route::get('/customerreport', function () {
    return view('customerreport');
})->name('customerreport');
Route::get('/data-tables', function () {
    return view('data-tables');
})->name('data-tables');
Route::get('/drag-drop', function () {
    return view('drag-drop');
})->name('drag-drop');
Route::get('/edit-sales', function () {
    return view('edit-sales');
})->name('edit-sales');
Route::get('/editbrand', function () {
    return view('editbrand');
})->name('editbrand');
Route::get('/editcategory', function () {
    return view('editcategory');
})->name('editcategory');
Route::get('/editcustomer', function () {
    return view('editcustomer');
})->name('editcustomer');
Route::get('/editexpense', function () {
    return view('editexpense');
})->name('editexpense');
Route::get('/editpermission', function () {
    return view('editpermission');
})->name('editpermission');
Route::get('/editpurchase', function () {
    return view('editpurchase');
})->name('editpurchase');
Route::get('/editpurchasereturn', function () {
    return view('editpurchasereturn');
})->name('editpurchasereturn');
Route::get('/editquotation', function () {
    return view('editquotation');
})->name('editquotation');
Route::get('/editsalesreturn', function () {
    return view('editsalesreturn');
})->name('editsalesreturn');
Route::get('/editsalesreturns', function () {
    return view('editsalesreturns');
})->name('editsalesreturns');
Route::get('/editstate', function () {
    return view('editstate');
})->name('editstate');
Route::get('/editstore', function () {
    return view('editstore');
})->name('editstore');
Route::get('/editsubcategory', function () {
    return view('editsubcategory');
})->name('editsubcategory');
Route::get('/editsupplier', function () {
    return view('editsupplier');
})->name('editsupplier');
Route::get('/edittransfer', function () {
    return view('edittransfer');
})->name('edittransfer');
Route::get('/edituser', function () {
    return view('edituser');
})->name('edituser');
Route::get('/email', function () {
    return view('email');
})->name('email');
Route::get('/emailsettings', function () {
    return view('emailsettings');
})->name('emailsettings');
Route::get('/error-404', function () {
    return view('error-404');
})->name('error-404');
Route::get('/error-500', function () {
    return view('error-500');
})->name('error-500');
Route::get('/expensecategory', function () {
    return view('expensecategory');
})->name('expensecategory');
Route::get('/expenselist', function () {
    return view('expenselist');
})->name('expenselist');
Route::get('/forgetpassword', function () {
    return view('forgetpassword');
})->name('forgetpassword');
Route::get('/form-basic-inputs', function () {
    return view('form-basic-inputs');
})->name('form-basic-inputs');
Route::get('/form-fileupload', function () {
    return view('form-fileupload');
})->name('form-fileupload');
Route::get('/form-horizontal', function () {
    return view('form-horizontal');
})->name('form-horizontal');
Route::get('/form-input-groups', function () {
    return view('form-input-groups');
})->name('form-input-groups');
Route::get('/form-mask', function () {
    return view('form-mask');
})->name('form-mask');
Route::get('/form-select2', function () {
    return view('form-select2');
})->name('form-select2');
Route::get('/form-validation', function () {
    return view('form-validation');
})->name('form-validation');
Route::get('/form-vertical', function () {
    return view('form-vertical');
})->name('form-vertical');
Route::get('/form-wizard', function () {
    return view('form-wizard');
})->name('form-wizard');
Route::get('/generalsettings', function () {
    return view('generalsettings');
})->name('generalsettings');
Route::get('/grouppermissions', function () {
    return view('grouppermissions');
})->name('grouppermissions');
Route::get('/icon-feather', function () {
    return view('icon-feather');
})->name('icon-feather');
Route::get('/icon-flag', function () {
    return view('icon-flag');
})->name('icon-flag');
Route::get('/icon-fontawesome', function () {
    return view('icon-fontawesome');
})->name('icon-fontawesome');
Route::get('/icon-ionic', function () {
    return view('icon-ionic');
})->name('icon-ionic');
Route::get('/icon-material', function () {
    return view('icon-material');
})->name('icon-material');
Route::get('/icon-pe7', function () {
    return view('icon-pe7');
})->name('icon-pe7');
Route::get('/icon-simpleline', function () {
    return view('icon-simpleline');
})->name('icon-simpleline');
Route::get('/icon-themify', function () {
    return view('icon-themify');
})->name('icon-themify');
Route::get('/icon-typicon', function () {
    return view('icon-typicon');
})->name('icon-typicon');
Route::get('/icon-weather', function () {
    return view('icon-weather');
})->name('icon-weather');
Route::get('/importproduct', function () {
    return view('importproduct');
})->name('importproduct');
Route::get('/importpurchase', function () {
    return view('importpurchase');
})->name('importpurchase');
Route::get('/importtransfer', function () {
    return view('importtransfer');
})->name('importtransfer');
Route::get('/inventoryreport', function () {
    return view('inventoryreport');
})->name('inventoryreport');
Route::get('/invoicereport', function () {
    return view('invoicereport');
})->name('invoicereport');
Route::get('/lightbox', function () {
    return view('lightbox');
})->name('lightbox');
Route::get('/newcountry', function () {
    return view('newcountry');
})->name('newcountry');
Route::get('/newstate', function () {
    return view('newstate');
})->name('newstate');
Route::get('/newuser', function () {
    return view('newuser');
})->name('newuser');
Route::get('/newuseredit', function () {
    return view('newuseredit');
})->name('newuseredit');
Route::get('/notification', function () {
    return view('notification');
})->name('notification');
Route::get('/paymentsettings', function () {
    return view('paymentsettings');
})->name('paymentsettings');
Route::get('/popover', function () {
    return view('popover');
})->name('popover');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
Route::get('/purchaselist', function () {
    return view('purchaselist');
})->name('purchaselist');
Route::get('/purchaseorderreport', function () {
    return view('purchaseorderreport');
})->name('purchaseorderreport');
Route::get('/purchasereport', function () {
    return view('purchasereport');
})->name('purchasereport');
Route::get('/purchasereturnlist', function () {
    return view('purchasereturnlist');
})->name('purchasereturnlist');
Route::get('/rangeslider', function () {
    return view('rangeslider');
})->name('rangeslider');
Route::get('/rating', function () {
    return view('rating');
})->name('rating');
Route::get('/resetpassword', function () {
    return view('resetpassword');
})->name('resetpassword');
Route::get('/ribbon', function () {
    return view('ribbon');
})->name('ribbon');

Route::get('/salesreport', function () {
    return view('salesreport');
})->name('salesreport');
Route::get('/salesreturnlist', function () {
    return view('salesreturnlist');
})->name('salesreturnlist');
Route::get('/salesreturnlists', function () {
    return view('salesreturnlists');
})->name('salesreturnlists');
Route::get('/scrollbar', function () {
    return view('scrollbar');
})->name('scrollbar');
Route::get('/signin', function () {
    return view('signin');
})->name('signin');
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/spinner', function () {
    return view('spinner');
})->name('spinner');
Route::get('/statelist', function () {
    return view('statelist');
})->name('statelist');
Route::get('/stickynote', function () {
    return view('stickynote');
})->name('stickynote');
Route::get('/storelist', function () {
    return view('storelist');
})->name('storelist');
Route::get('/subaddcategory', function () {
    return view('subaddcategory');
})->name('subaddcategory');
Route::get('/subcategorylist', function () {
    return view('subcategorylist');
})->name('subcategorylist');
Route::get('/supplierlist', function () {
    return view('supplierlist');
})->name('supplierlist');
Route::get('/supplierreport', function () {
    return view('supplierreport');
})->name('supplierreport');
Route::get('/sweetalerts', function () {
    return view('sweetalerts');
})->name('sweetalerts');
Route::get('/tables-basic', function () {
    return view('tables-basic');
})->name('tables-basic');
Route::get('/taxrates', function () {
    return view('taxrates');
})->name('taxrates');
Route::get('/text-editor', function () {
    return view('text-editor');
})->name('text-editor');
Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');
Route::get('/toastr', function () {
    return view('toastr');
})->name('toastr');
Route::get('/tooltip', function () {
    return view('tooltip');
})->name('tooltip');
Route::get('/transferlist', function () {
    return view('transferlist');
})->name('transferlist');
Route::get('/userlist', function () {
    return view('userlist');
})->name('userlist');
Route::get('/userlists', function () {
    return view('userlists');
})->name('userlists');
Route::get('/quotationlist', function () {
    return view('quotationlist');
})->name('quotationlist');
Route::get('/editcountry', function () {
    return view('editcountry');
})->name('editcountry');
