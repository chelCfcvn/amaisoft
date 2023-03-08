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
use Illuminate\Http\Request;

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


Route::group([
    'prefix' => '/staff',
    'as' => 'staff.',
], function () {
    Route::get('/create-form', [StaffController::class, 'showCreate'])->name('create.form');
    Route::get('/{staff}/edit-form', [StaffController::class, 'showEdit'])->name('update.form');
    Route::post('/create', [StaffController::class, 'create'])->name('create');
    Route::post('/{staff}/edit', [StaffController::class, 'update'])->name('update');
    Route::delete('/{staff}/delete', [StaffController::class, 'delete'])->name('delete');
});

Route::group([
    'prefix' => '/position',
    'as' => 'position.',
], function () {
    Route::get('/show', [PositionController::class, 'show'])->name('show');
    Route::get('/create-form', [PositionController::class, 'showCreate'])->name('create.form');
    Route::post('/create', [PositionController::class, 'create'])->name('create');
    Route::get('/{position}/edit-form', [PositionController::class, 'showEdit'])->name('update.form');
    Route::post('/{position}/edit', [PositionController::class, 'update'])->name('update');
    Route::delete('/{position}/delete', [PositionController::class, 'delete'])->name('delete');
});


Route::group([
    'prefix' => '/department',
    'as' => 'department.',
], function () {
    Route::get('/show', [DepartmentController::class, 'show'])->name('show');
    Route::get('/create-form', [DepartmentController::class, 'showCreate'])->name('create.form');
    Route::post('/create', [DepartmentController::class, 'create'])->name('create');
    Route::get('/{department}/edit-form', [DepartmentController::class, 'showEdit'])->name('update.form');
    Route::post('/{department}/edit', [DepartmentController::class, 'update'])->name('update');
    Route::delete('/{department}/delete', [DepartmentController::class, 'delete'])->name('delete');
});


Route::group([
    'prefix' => '/user',
    'as' => 'user.',
], function () {
    Route::get('/create-form', [UserController::class, 'showCreate'])->name('create.form');
    Route::get('/{user}/edit-form', [UserController::class, 'showEdit'])->name('update.form');
    Route::post('/create', [UserController::class, 'create'])->name('create');
    Route::post('/{user}/edit', [UserController::class, 'update'])->name('update');
    Route::delete('/{user}/delete', [UserController::class, 'delete'])->name('delete');
});
Route::get('/user', function () {
    return view('users.show');
})->name('user');



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
Route::post('/send-mail/reset', [SendMailController::class, 'sendMails'])->name('users.reset');


Route::get('/{data}/reset-password', function (Staff $data) {
    $id = $data->id;
    return view('mails.confirm', compact('id'));
})->name('user.reset');

Route::get('/pass', function () {
    $user = User::latest()->first()->toArray();
    return view('mails.pass', compact('user'));
})->name('confirm');

Route::post('/{id}/confirm-password', [UserController::class, 'confirm'])->name('user.confirm');

Route::get('/reset-show', function () {
    return view('users.reset');
})->name('reset.show');
