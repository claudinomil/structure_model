<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');





Route::get('/modules', function () {
    return view('livewire.modules.index');
})->name('modules');


Route::get('/submodules', function () {
    return view('livewire.submodules.index');
})->name('submodules');

Route::get('/notifications', function () {
    return view('livewire.notifications.index');
})->name('notifications');

Route::get('/notifications-read/{registro_id}', function ($registro_id) {
    return view('livewire.notifications.index', compact('registro_id'));
})->name('notificationsRead');

Route::get('/tools', function () {
    return view('livewire.tools.index');
})->name('tools');



Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);






Route::group(['middleware' => ['auth']], function() {
    //Route::resource('notifications', NotificationController::class);


//    Route::resource('home', HomeController::class);
//    Route::resource('users', UserController::class);
//    Route::resource('roles', RoleController::class);
//    Route::resource('customizes', CustomizeController::class);
//    Route::resource('notifications', NotificationController::class);
//    Route::resource('modules', ModuleController::class);
//    Route::resource('submodules', SubmoduleController::class);
//    Route::resource('transactions', TransactionController::class);
//
//    Route::get('ficha/{id}', [UserController::class, 'ficha'])->name('ficha');
//    Route::post('ficha/{id}', [UserController::class, 'uploadfoto'])->name('uploadfoto');
//
//    //Route::get('calendars', [CalendarController::class, 'index']);
//    Route::resource('calendars', CalendarController::class);
//    Route::post('calendarsAjax', [CalendarController::class, 'ajax']);

});
