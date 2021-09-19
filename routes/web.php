<?php

use Illuminate\Support\Facades\App;
use App\Http\Controllers\Admin\AdminUser;
use App\Http\controllers\RolePermissionController;
use App\Http\controllers\Admin\CouponController;
use App\Http\controllers\Admin\ContactController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\controllers\Admin\VendorController;
use App\Http\controllers\Admin\MenuController;
use App\Http\Controllers\CompanyController;
use App\Http\controllers\HomeController;
use App\Http\controllers\CountryController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Generalcategory;
use App\Http\Controllers\RazorpayController;
use Illuminate\Support\Facades\Auth;
use App\Http\controllers\CategoryController;
use App\Http\controllers\Order;
use App\Http\controllers\Product;

//User Controller
use App\Http\Controllers\User\UserController;

//Company
use App\Http\Controllers\Company\EmployeeController;
use App\Http\Controllers\Company\CompanyContact;
//Front Controller 
use App\Http\Controllers\Frontend\FrontController;


//get all Countries
Route::get('/country',[CountryController::class, 'index'])->name('country.show');
Route::get('/get-state-list',[CountryController::class, 'getState'])->name('getState');
Route::get('/get-city-list',[CountryController::class, 'getCity'])->name('getCity');
//get categories
Route::get('/getcategories/{category_name}',[CouponController::class, 'getcategories'])->name('getcategories');
Route::get('/getsubcategories/{id}',[CategoryController::class, 'getsubcategory'])->name('getsubCategory');
Route::get('/getroles/{guard_name}',[RolePermissionController::class, 'guard_roles'])->name('getroles');
Route::get('/getpermission/{guard}',[RolePermissionController::class, 'guard_permissions'])->name('getpermission');
Route::get('/permission/{role}',[RolePermissionController::class, 'get_permission'])->name('getpermission');

// Route::get('lang/{locale}', 'LocalizationController@index');
//Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LocalizationController@switchLang']);
// Route::get('/{lang?}',function($lang = null){
    
//     App::setLocale($lang);
//     return view('front_pages.home');
// });


Route::prefix('front')->name('front.')->group(function(){  
    
    Route::get('/login',[FrontController::class,'login'])->name('login');
    Route::get('/logout',[FrontController::class,'logout'])->name('logout');
    Route::get('/register',[FrontController::class,'register'])->name('register');
    Route::post('/create',[FrontController::class,'create'])->name('create');

});

//Import & Export file 
Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');
Route::get('file-export', [UserController::class, 'fileExport'])->name('file-export');

Route::get('/home',[FrontController::class,'index'])->name('home');
Route::get('/Electronics',[FrontController::class,'electronics'])->name('electronics');
Route::get('/Watches',[FrontController::class,'watches'])->name('watches');
Route::get('/Clothes',[FrontController::class,'clothes'])->name('clothes');
Route::get('/Nursery',[FrontController::class,'nursery'])->name('nursery');
Route::get('/Bags',[FrontController::class,'bags'])->name('bags');
Route::get('/Shoes',[FrontController::class,'shoes'])->name('shoes');
Route::get('/Flower',[FrontController::class,'flower'])->name('flower');
Route::get('/Vegetable',[FrontController::class,'vegetable'])->name('vegetable');
Route::get('/Beauty',[FrontController::class,'beauty'])->name('beauty');
Route::get('/Light',[FrontController::class,'light'])->name('light');
Route::get('/Furniture',[FrontController::class,'furniture'])->name('furniture');
Route::get('/goggle',[FrontController::class,'goggle'])->name('goggle');
Route::get('/LookBook',[FrontController::class,'book'])->name('lookbook');
Route::get('/Instagram',[FrontController::class,'instagram'])->name('instagram');
Route::get('/Video',[FrontController::class,'video'])->name('video');
Route::get('/Fullpage',[FrontController::class,'fullpage'])->name('fullpage');
Route::get('/Parallax',[FrontController::class,'parallax'])->name('parallax');

//pages
Route::get('/Wishlist',[FrontController::class,'wishlist'])->name('wishlist');
Route::get('/About us',[FrontController::class,'about'])->name('about_us');
Route::get('/Search',[FrontController::class,'search'])->name('search');
Route::get('/Typography',[FrontController::class,'typography'])->name('typography');
Route::get('/Review',[FrontController::class,'review'])->name('review');
Route::get('/Look',[FrontController::class,'look'])->name('look');
Route::get('/Collection',[FrontController::class,'collection'])->name('collection');
Route::get('/orderSuccess',[FrontController::class,'ordersuccess'])->name('ordersuccess');
Route::get('/compingsoon',[FrontController::class,'comingsoon'])->name('comingsoon');



Route::get('/',[UserController::class,'login'])->name('login');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
       
        Route::get('/login',[UserController::class,'login'])->name('login');
        Route::get('/register',[UserController::class,'register'])->name('register');
        Route::post('/create',[UserController::class,'create'])->name('create');
        Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::get('/home',[UserController::class,'home'])->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          
    });

    //Products
    Route::get('/add/product',[Product:: class, 'product'])->name('product.add');
    Route::post('/save/product',[Product:: class, 'save_product'])->name('product.save');
    Route::get('/all/product',[Product:: class, 'all_product'])->name('product.show');
    Route::get('/update/product',[Product:: class, 'update_product'])->name('product.update');
    Route::get('/delete/product',[Product:: class, 'delete_product'])->name('product.delete');

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        
        Route::get('/home',[AdminController::class,'dashboard'])->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
        //Add user
        Route::get('/add/user',[AdminUser:: class, 'index'])->name('user.add');
        Route::get('/all/users',[AdminUser:: class, 'all_users'])->name('user.show');
        Route::post('/user/save',[AdminUser:: class, 'save'])->name('user.save');
        Route::get('/user/update',[AdminUser:: class, 'index'])->name('user.update');
        Route::get('/profile',[AdminUser:: class, 'profile'])->name('profile');
        Route::get('/serch',[AdminUser:: class, 'search'])->name('users.search');

        //Add Role & Permission 
        Route::get('/add/Role',[RolePermissionController:: class, 'index'])->name('add.role');
        Route::post('/save/Role',[RolePermissionController:: class, 'create_role'])->name('save.role');
        Route::get('/add/permission',[RolePermissionController:: class, 'permission'])->name('add.permission');
        Route::post('/save/permission',[RolePermissionController:: class, 'create_permission'])->name('save.permission');
        Route::get('/add/role_permission',[RolePermissionController:: class, 'role_permission'])->name('add.role_permission');
        Route::post('/save/role_permission',[RolePermissionController:: class, 'assign_permission_to_role'])->name('save.role_permission');
        
        //Add Companies
        Route::get('/add/Company',[CompanyController:: class, 'index'])->name('company.add');
        Route::post('/all/Companies',[CompanyController:: class, 'all_Companies'])->name('company.show');
        Route::post('/Company/save',[CompanyController:: class, 'create'])->name('Company.save');
        Route::get('/Company/update',[CompanyController:: class, 'index'])->name('company.update');
        Route::get('/Company/search',[CompanyController:: class, 'search'])->name('company.search');
        //Route::get('/profile',[CompanyController:: class, 'profile'])->name('company.profile');
       
        //Add general category
        Route::get('/add/Companycategory',[Generalcategory:: class, 'index'])->name('company_category.add');
        //Route::post('/all/Companycategory',[Generalcategory:: class, 'all_categories'])->name('company_category.show');
        //Route::post('/Companycategory/save',[Generalcategory:: class, 'save'])->name('company_category.save');
        Route::get('/Companycategory/update',[Generalcategory:: class, 'index'])->name('company_category.update');
        Route::post('/Companycategory/delete',[GeneralCategory:: class, 'delete'])->name('Companycategory.delete');

        //Products
        Route::get('/add/product',[Product:: class, 'product'])->name('product.add');
        Route::get('/product',[Product:: class, 'all_product'])->name('product.show');
        Route::get('/update/product',[Product:: class, 'update_product'])->name('product.update');
        Route::get('/delete/product',[Product:: class, 'delete_product'])->name('product.delete');

        //Menu
        Route::get('/add/menu',[MenuController:: class, 'menu'])->name('menu.add');
        Route::get('/all/menu',[MenuController:: class, 'all_menu'])->name('menu.show');
        Route::post('/menu/save',[MenuController:: class, 'save_menu'])->name('menu.save');
        Route::get('/menu/update',[MenuController:: class, 'menu'])->name('menu.update');
        Route::get('/menu/search',[MenuController:: class, 'search'])->name('menu.delete');
        
        
        //General Product
        Route::get('/general_product',[Product:: class, 'generalproduct'])->name('general_product.show');
        Route::post('/detail/general_product',[Product:: class, 'detail_general_product'])->name('general_product.detail');
        
        //Digital Product
        Route::get('/add/digital_product',[Product:: class, 'DigitalProduct'])->name('digital_product.add');
        Route::post('/save/product',[Product:: class, 'save_Product'])->name('product.save');
        Route::get('/digital_product',[Product:: class, 'all_digital_product'])->name('digital_product.show');
        Route::get('/update/digital_product',[Product:: class, 'update_DigitalProduct'])->name('digital_product.update');
        Route::get('/delete/digital_product',[Product:: class, 'delete_DigitalProduct'])->name('digital_product.delete');
        
        //Cupon
        Route::get('/add/Coupon',[CouponController:: class, 'index'])->name('coupon.add');
        Route::post('/save/Coupon',[CouponController:: class, 'save_coupon'])->name('coupon.save');
        Route::get('/all/Coupon',[CouponController:: class, 'all_coupon'])->name('coupon.show');

        //Order
        Route::get('/all/order',[Order:: class, 'all_order'])->name('order.show');
        
        //Report
        Route::get('/all/report',[Order:: class, 'all_report'])->name('report.show');
        
        //Invoice
        Route::get('/all/invoice',[Order:: class, 'all_invoices'])->name('invoice.show');
        
        //Taxes
        Route::get('/all/taxes',[Order:: class, 'all_taxes'])->name('taxes.show');

        //vendor
        Route::get('/add/vendor',[VendorController:: class, 'vendor'])->name('vendor.add');
        Route::post('/save/vendor',[VendorController:: class, 'save_vendor'])->name('vendor.save');
        Route::get('/all/vendor',[VendorController:: class, 'all_vendor'])->name('vendor.show');
        
        //Physical category
        Route::get('/add/category',[CategoryController:: class, 'PhysicalCategory'])->name('PhysicalCategory.add');
        Route::post('/category/save',[CategoryController:: class, 'save_category'])->name('Category.save');
        Route::get('/category/update',[CategoryController:: class, 'update_category'])->name('category.update');
        Route::post('/category/delete',[CategoryController:: class, 'delete'])->name('category.delete');

        //Digital Sub Category
        Route::get('/add/sub_physical_category',[CategoryController:: class, 'Sub_PhysicalCategory'])->name('SubPhysicalCategory.add');
        //Route::post('/physical_category/save_physical_category',[CategoryController:: class, 'save_sub_PhysicalCategory'])->name('SubPhysicalCategory.save');

        //Digital category
        Route::get('/add/digital_category',[CategoryController:: class, 'DigitalCategory'])->name('DigitalCategory.add');
        //Route::post('/digital_category/save_digital_category',[CategoryController:: class, 'save_digital_category'])->name('digital_category.save');
        //Route::get('/sub_category/update_sub_category',[Sub_CategoryController:: class, 'update'])->name('sub_category.update');
        
        //Digital Sub Category
        Route::get('/add/sub_digital_category',[CategoryController:: class, 'Sub_DigitalCategory'])->name('SubDigitalCategory.add');
        Route::post('/subcategory/save',[CategoryController:: class, 'save_subCategory'])->name('SubCategory.save');
        //Route::get('/sub_category/update_sub_category',[Sub_CategoryController:: class, 'update'])->name('sub_category.update');
        
        //All Contacts
        Route::get('/contact',[ContactController:: class, 'contact'])->name('contact.show');
        Route::get('/contact/edit/',[ContactController:: class, 'edit_contact{{$id}}'])->name('contact.edit');
        Route::post('/contact/delete',[ContactController:: class, 'delete_contact'])->name('contact.delete');
        


    });

});

Route::prefix('Company')->name('Company.')->group(function(){

       Route::middleware(['guest:Company','PreventBackHistory'])->group(function(){
            Route::view('/login','company.login')->name('login');
            Route::view('/register','company.register')->name('register');
            Route::post('/create',[CompanyController::class,'create'])->name('create');
            Route::post('/check',[CompanyController::class,'check'])->name('check');
       });

       Route::middleware(['auth:Company','PreventBackHistory'])->group(function(){    
            
            Route::get('/home',[CompanyController::class,'dashboard'])->name('home');
            
            Route::post('logout',[CompanyController::class,'logout'])->name('logout');
            
            // Company can be add employee as instead user but all fields should be same  
            Route::get('/add/employee',[EmployeeController:: class, 'index'])->name('employee.add');
            Route::post('/all/employee',[EmployeeController:: class, 'all_employee'])->name('employee.show');
            Route::post('/employee/save',[EmployeeController:: class, 'save'])->name('employee.save');
            Route::get('/employee/update',[EmployeeController:: class, 'index'])->name('employee.update');
            //Route::get('/users/search','EmployeeController@search')->name('');
            Route::get('/profile',[EmployeeController:: class, 'profile'])->name('user.profile');
            Route::get('/serch',[EmployeeController:: class, 'search'])->name('users.search');

            Route::get('/message',[CompanyContact::class,'contact'])->name('contact');
            Route::post('/save/message',[CompanyContact::class,'save_contact'])->name('contact.save');

        });

});


