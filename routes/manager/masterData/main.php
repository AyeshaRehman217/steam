<?php

use App\Http\Controllers\Manager\MasterData\CityController;
use App\Http\Controllers\Manager\MasterData\CountryController;
use App\Http\Controllers\Manager\MasterData\PaymentTypeController;
use App\Http\Controllers\Manager\MasterData\RegionController;
use App\Http\Controllers\Manager\MasterData\StatusTypeController;
use App\Http\Controllers\Manager\MasterData\RegistrationTypeController;
use App\Http\Controllers\Manager\MasterData\CertificateStatusController;
use App\Http\Controllers\Manager\MasterData\ConferenceYearController;
use App\Http\Controllers\Manager\MasterData\StateController;
use App\Http\Controllers\Manager\MasterData\OnsiteSubmissionTypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
| Here is where you can register backend web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the prefix "manager" middleware group. Now create something great!
|
*/
//Backend Routes
Route::group(['middleware' => ['auth','verified','xss','user.status','user.module:manager'], 'prefix' => 'manager','as' => 'manager.'], function() {

    // Conference Year
    Route::resource('conference-year', ConferenceYearController::class);
    Route::get('get-conference-year', [ConferenceYearController::class, 'getIndex'])->name('get.conference-year');
//    Route::get('conference-year/{sid}/user-registration', [ConferenceYearController::class, 'conferenceYearRegistrations'])->name('get.conference-year-user-registration');
    Route::get('get-conference-year-select', [ConferenceYearController::class, 'getIndexSelectConferenceYear'])->name('get.conference-year-select');
    Route::get('get-conference-year-activity/{id}', [ConferenceYearController::class, 'getActivity'])->name('get.conference-year-activity');
    Route::get('get-conference-year-status/{id}', [ConferenceYearController::class, 'editStatus'])->name('get.conference-year-status');
    Route::put('get-conference-year-update-status/{id}', [ConferenceYearController::class, 'updateStatus'])->name('get.conference-year-update-status');
    Route::get('get-conference-year-activity-log/{id}', [ConferenceYearController::class, 'getActivityLog'])->name('get.conference-year-activity-log');
    Route::get('get-conference-year-activity-trash', [ConferenceYearController::class, 'getTrashActivity'])->name('get.conference-year-activity-trash');
    Route::get('get-conference-year-activity-trash-log', [ConferenceYearController::class, 'getTrashActivityLog'])->name('get.conference-year-activity-trash-log');

    // Registration Type
    Route::resource('registration-type', RegistrationTypeController::class);
    Route::get('get-registration-type', [RegistrationTypeController::class, 'getIndex'])->name('get.registration-type');
    Route::get('get-registration-type-select', [RegistrationTypeController::class, 'getIndexRegistrationTypeSelect'])->name('get.registration-type-select');
    Route::get('get-registration-type-activity/{id}', [RegistrationTypeController::class, 'getActivity'])->name('get.registration-type-activity');
    Route::get('get-registration-type-activity-log/{id}', [RegistrationTypeController::class, 'getActivityLog'])->name('get.registration-type-activity-log');
    Route::get('get-registration-type-activity-trash', [RegistrationTypeController::class, 'getTrashActivity'])->name('get.registration-type-activity-trash');
    Route::get('get-registration-type-activity-trash-log', [RegistrationTypeController::class, 'getTrashActivityLog'])->name('get.registration-type-activity-trash-log');

    // Certificate Staus
    Route::get('get-certificate-status-select', [CertificateStatusController::class, 'getIndexCertificateStatusSelect'])->name('get.certificate-status-select');

    // Payment Type
    Route::resource('payment-type', PaymentTypeController::class);
    Route::get('get-payment-type', [PaymentTypeController::class, 'getIndex'])->name('get.payment-type');
    Route::get('get-payment-type-select', [PaymentTypeController::class, 'getIndexPaymentTypeSelect'])->name('get.payment-type-select');
    Route::get('get-payment-type-activity/{id}', [PaymentTypeController::class, 'getActivity'])->name('get.payment-type-activity');
    Route::get('get-payment-type-activity-log/{id}', [PaymentTypeController::class, 'getActivityLog'])->name('get.payment-type-activity-log');
    Route::get('get-payment-type-activity-trash', [PaymentTypeController::class, 'getTrashActivity'])->name('get.payment-type-activity-trash');
    Route::get('get-payment-type-activity-trash-log', [PaymentTypeController::class, 'getTrashActivityLog'])->name('get.payment-type-activity-trash-log');

    // Status Type
    Route::resource('status-type', StatusTypeController::class);
    Route::get('get-status-type', [StatusTypeController::class, 'getIndex'])->name('get.status-type');
    Route::get('get-status-type-select', [StatusTypeController::class, 'getIndexStatusTypeSelect'])->name('get.status-type-select');
    Route::get('get-status-type-activity/{id}', [StatusTypeController::class, 'getActivity'])->name('get.status-type-activity');
    Route::get('get-status-type-activity-log/{id}', [StatusTypeController::class, 'getActivityLog'])->name('get.status-type-activity-log');
    Route::get('get-status-type-activity-trash', [StatusTypeController::class, 'getTrashActivity'])->name('get.status-type-activity-trash');
    Route::get('get-status-type-activity-trash-log', [StatusTypeController::class, 'getTrashActivityLog'])->name('get.status-type-activity-trash-log');

    // Region
    Route::resource('region', RegionController::class);
    Route::get('get-region', [RegionController::class, 'getIndex'])->name('get.region');
//    Route::get('get-region-select', [RegionController::class, 'getIndexSelect'])->name('get.region-select');
    Route::get('get-region-activity/{id}', [RegionController::class, 'getActivity'])->name('get.region-activity');
    Route::get('get-region-activity-log/{id}', [RegionController::class, 'getActivityLog'])->name('get.region-activity-log');
    Route::get('get-region-activity-trash', [RegionController::class, 'getTrashActivity'])->name('get.region-activity-trash');
    Route::get('get-region-activity-trash-log', [RegionController::class, 'getTrashActivityLog'])->name('get.region-activity-trash-log');

    // Country
    Route::get('get-country-select', [CountryController::class, 'getCountryIndexSelect'])->name('get.country-select');

    // State
    Route::get('get-state-select', [StateController::class, 'getStateIndexSelect'])->name('get.state-select');

    // City
    Route::get('get-city-select', [CityController::class, 'getCityIndexSelect'])->name('get.city-select');

});


