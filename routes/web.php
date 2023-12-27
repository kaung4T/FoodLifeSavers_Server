<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminService;
use App\Http\Controllers\agent\AgentController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PropertyTypeController;
use Symfony\Component\HttpKernel\Event\ControllerEvent;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\EarningsController;
use App\Http\Controllers\OurWorkController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TandC;

use App\Http\Controllers\Products\LGChemController;
use App\Http\Controllers\Products\SamsungSDIController;
use App\Http\Controllers\Products\TeslaPanasonicController;

use App\Http\Controllers\Milestones\InvestmentController;
use App\Http\Controllers\Milestones\ManifestingController;
use App\Http\Controllers\Milestones\TradingReportController;

use App\Http\Controllers\Auth\Logout;
use App\Http\Controllers\Donation\Donate;
use App\Http\Controllers\Dashboard;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [Controller::class, 'index'])->name('index');
Route::post('/search', [Controller::class, 'search'])->name('search');

Route::get('/panasonic', [ProductController::class, 'Panasonic'])->name('panasonic');

// EMAIL Subscribe sign up
Route::post('/email_subscribe', [Controller::class, 'email_subscribe'])->name('email_subscribe');

Route::get('/about', [AboutController::class, 'about'])->name('about');
Route::get('/earning', [EarningsController::class, 'earning'])->name('earning');
Route::get('/our_work', [OurWorkController::class, 'our_work'])->name('our_work');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::get('/tandc', [TandC::class, 'tandc'])->name('tandc');

Route::get('/chem', [LGChemController::class, 'chem'])->name('chem');
Route::get('/samsung', [SamsungSDIController::class, 'samsung'])->name('samsung');
Route::get('/panasonic', [TeslaPanasonicController::class, 'panasonic'])->name('panasonic');

Route::get('/investment', [InvestmentController::class, 'investment'])->name('investment');
Route::get('/manifesting', [ManifestingController::class, 'manifesting'])->name('manifesting');
Route::get('/trading', [TradingReportController::class, 'trading'])->name('trading');


Route::controller(ContactController::class)->group(function () {
    // Route::get('/about', 'about')->name('about.page');
    // Route::get('/contact', 'contact')->name('contact.page');
});


Route::get('/donate', [Donate::class, 'donate'])->middleware(['auth', 'verified'])->name('donate');

Route::get('/dashboard', [Dashboard::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/logout', [Logout::class, 'out'])->name('logout');


Route::middleware('auth',)->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Admin Group Middleware
Route::middleware(['auth', 'roles:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/service', [AdminService::class, 'service'])->name('admin.service');

    Route::post('/admin/service_store', [AdminService::class, 'store'])->name('admin.service_store');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    Route::get('/admin/change/password', [AdminController::class, 'AdminChangePassword'])->name('admin.change.password');

    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');
});


// Agent Group Middleware
Route::middleware(['auth', 'roles:agent'])->group(function () {
    Route::get('/agent/dashboard', [AgentController::class, 'AgentDashboard'])->name('agent.dashboard');
});

Route::get('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');


// Admin Group Middleware
Route::middleware(['auth', 'roles:admin'])->group(function () {

    // Product Route
    Route::controller(PropertyTypeController::class)->group(function () {
        Route::get('/all/product', 'AllProduct')->name('all.product')->middleware('permission:all.type');
        Route::get('/add/product', 'AddProduct')->name('add.product')->middleware('permission:add.type');
        Route::post('/store/product', 'StoreProduct')->name('store.product')->middleware('permission:store.type');
        Route::get('/edit/product/{id}', 'EditProduct')->name('edit.product')->middleware('permission:edit.type');
        Route::post('/update/product', 'UpdateProduct')->name('update.product')->middleware('permission:update.type');
        Route::get('/delete/product/{id}', 'DeleteProduct')->name('delete.product')->middleware('permission:delete.type');
    });

    // Earning Route
    Route::controller(PropertyTypeController::class)->group(function () {
        Route::get('/all/earnings', 'AllEarning')->name('all.earnings');
        Route::get('/add/earnings', 'AddEarning')->name('add.earnings');
        Route::post('/store/earnings', 'StoreEarning')->name('store.earnings');
        Route::get('/edit/earnings/{id}', 'EditEarning')->name('edit.earnings');
        Route::post('/update/earnings', 'UpdateEarning')->name('update.earnings');
        Route::get('/delete/earnings/{id}', 'DeleteEarning')->name('delete.earnings');
    });

    // Role Permission

    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/delete/permission/{id}', 'DeletePermission')->name('delete.permission');

        Route::get('/import/permission', 'ImportPermission')->name('import.permission');
        Route::get('/export', 'Export')->name('export');
        Route::post('/import', 'Import')->name('import');
    });

    Route::controller(RoleController::class)->group(function () {
        Route::get('/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/add/roles', 'AddRoles')->name('add.roles');
        Route::post('/store/roles', 'StoreRoles')->name('store.roles');
        Route::get('/edit/roles/{id}', 'EditRoles')->name('edit.roles');
        Route::post('/update/roles', 'UpdateRoles')->name('update.roles');
        Route::get('/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');

        Route::get('/add/roles/permission', 'AddRolesPermission')->name('add.roles.permission');
        Route::post('/role/permission/store', 'RolePermissionStore')->name('role.permission.store');
        Route::get('/all/roles/permission', 'AllRolesPermission')->name('all.roles.permission');
        Route::get('/admin/edit/roles/{id}', 'AdminEditRoles')->name('admin.edit.roles');
        Route::post('/admin/roles/update/{id}', 'AdminRolesUpdate')->name('admin.roles.update');
        Route::get('/admin/delete/roles/{id}', 'AdminDeleteRoles')->name('admin.delete.roles');
    });

    // All Admin Group
    Route::controller(AdminController::class)->group(function () {
        Route::get('/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/add/admin', 'AddAdmin')->name('add.admin');
        Route::post('/store/admin', 'StoreAdmin')->name('store.admin');
        Route::get('/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');
    });
});
