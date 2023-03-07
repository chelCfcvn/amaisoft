<?php

use App\Http\Controllers\Department\DepartmentController;
use App\Http\Controllers\Position\PositionController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\User\UserController;
use App\Models\Staff;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/', function () {
    return view('login');
});
Route::get('/login', [LoginController::class, 'login'])->name('login');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/create-staff-form', [StaffController::class, 'showCreate'])->name('staff.create.form');
Route::get('/{staff}/edit-staff-form', [StaffController::class, 'showEdit'])->name('staff.update.form');
Route::post('/create-staff', [StaffController::class, 'create'])->name('staff.create');
Route::post('/{staff}/edit-staff', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/{staff}/delete-staff', [StaffController::class, 'delete'])->name('staff.delete');


Route::get('/show-position', [PositionController::class, 'show'])->name('position.show');
Route::get('/create-position-form', [PositionController::class, 'showCreate'])->name('position.create.form');
Route::post('/create-position', [PositionController::class, 'create'])->name('position.create');
Route::get('/{position}/edit-position-form', [PositionController::class, 'showEdit'])->name('position.update.form');
Route::post('/{position}/edit-position', [PositionController::class, 'update'])->name('position.update');
Route::delete('/{position}/delete-position', [PositionController::class, 'delete'])->name('position.delete');


Route::get('/show-department', [DepartmentController::class, 'show'])->name('department.show');
Route::get('/create-department-form', [DepartmentController::class, 'showCreate'])->name('department.create.form');
Route::post('/create-department', [DepartmentController::class, 'create'])->name('department.create');
Route::get('/{department}/edit-department-form', [DepartmentController::class, 'showEdit'])->name('department.update.form');
Route::post('/{department}/edit-department', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/{department}/delete-department', [DepartmentController::class, 'delete'])->name('department.delete');


Route::get('/user', function () {
    return view('users.show');
})->name('user');
Route::get('/create-user-form', [UserController::class, 'showCreate'])->name('user.create.form');
Route::get('/{user}/edit-user-form', [UserController::class, 'showEdit'])->name('user.update.form');
Route::post('/create-user', [UserController::class, 'create'])->name('user.create');
Route::post('/{user}/edit-user', [UserController::class, 'update'])->name('user.update');
Route::delete('/{user}/delete-user', [UserController::class, 'delete'])->name('user.delete');


Route::get('/manager', [LoginController::class, 'manager'])->name('manager.show');
Route::get('/manager-profile', function () {
    return view('manager.profile');
})->name('manager.profile');

Route::get('/staff-profile', function () {
    return view('staff.profile');
})->name('staff.profile');


Route::get('test/email', function () {

    $data['email'] = 'tuyennguyen06092001@gmail.com';

    (dispatch(new App\Jobs\SendEmailJob($data)));

    dd('send mail successfully !!');
});

Route::get('/{profile}/send-mail', [SendMailController::class, 'sendMail'])->name('send.mail');


Route::get('/{id}/reset-password', function () {
    return view('mails.confirm');
})->name('confirm');

Route::get('/pass', function () {
    $user = User::latest()->first()->toArray();
    return view('mails.pass',compact('user'));
})->name('confirm');

Route::get('/{data}/confirm-password', [UserController::class, 'confirm'])->name('user.confirm');