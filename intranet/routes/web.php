<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AdministratorController,
    FamilyController,
    MedicController,
    MeetingController,
    PatientController,
    PhotoMeeController,
    PhotoPreController,
    PresentationController,
    PublicationController,
    RequestController,
    ServiceController,
    UserController
};
use App\Models\Publication;

Route::get('/', function () {
    return view('layouts.app');
})->name('app');

Route::resource('users', UserController::class);
Route::resource('administrators', AdministratorController::class);
Route::resource('medics', MedicController::class);
Route::resource('families', FamilyController::class);
Route::resource('patients', PatientController::class);
Route::resource('services', ServiceController::class);
Route::resource('meetings', MeetingController::class);
Route::resource('presentations', PresentationController::class);
Route::resource('publicactions', PublicationController::class);
Route::resource('photo-mees', PhotoMeeController::class);
Route::resource('photo-pres', PhotoPreController::class);
Route::resource('requests', RequestController::class);
