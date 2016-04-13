<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//region Test routes

use App\Models\Education\EducationServiceProvider;

Route::get('/', function () {
    return view('welcome');
});

Route::post('api/foo/bar', function () {
    return 'post :: Hello World';
});

Route::put('api/foo/bar', function () {
    //
    return 'put :: Hello World';
});

Route::delete('api/foo/bar', function () {
    //
    return 'delete :: Hello World';
});

Route::get('api/db_check', function () {
    $results = EducationServiceProvider::get();
    // var_dump($results);
    return "DB Check :: TODO : " . $results[0]['edtype'];
});
//endregion

//region API Routes

Route::get('api/get_categories', 'CategoryController@index');


Route::get('api/education/all', 'Education_allController@index');
Route::get('api/get_sub_categories/{cat_id}', 'CategoryController@show');
Route::get('api/get_sub_categories', 'SubCategoryController@index');
Route::get('api/get_edu_service_provider', 'EducationController@index');
Route::get('api/get_edu_course', 'EducationController@course');
Route::get('api/get_edu_result', 'EducationController@result');
Route::get('api/get_edu_fees', 'EducationController@fees');


Route::get('api/entertainment/all', 'Entertainment_allController@index');
Route::get('api/entertainment','EntertainmentController@index');
Route::get('api/entertainment/bookshop','EntertainmentController@EntBookShop');
Route::get('api/entertainment/centre','EntertainmentController@EntCentre');
Route::get('api/entertainment/field','EntertainmentController@EntField');
Route::get('api/entertainment/fitness_beauty','EntertainmentController@EntFitnessBeauty');
Route::get('api/entertainment/musical_group','EntertainmentController@EntMusicalGroup');
Route::get('api/entertainment/ngo','EntertainmentController@EntNGO');
Route::get('api/entertainment/park','EntertainmentController@EntPark');
Route::get('api/entertainment/shishupark','EntertainmentController@EntShishuPark');
Route::get('api/entertainment/theatre','EntertainmentController@EntTheatre');

//****Legal aid GET requests*****
Route::get('api/legal/all', 'Legal_allController@index');
Route::get('api/legal_aid', 'LegalAidController@index');
Route::get('api/salishi', 'LegalAidController@salishi');
Route::get('api/advice', 'LegalAidController@advice');

//****Job GET requests*****
Route::get('api/job/all', 'Job_allController@index');
Route::get('api/job', 'JobController@index');
Route::get('api/job/sub_category', 'JobController@subCategory');
Route::get('api/jobtype', 'JobController@type');

//****Health GET requests*****
Route::get('api/health/all', 'Health_allController@index');
Route::get('api/health', 'HealthController@index');
Route::get('api/healthPharmacy', 'HealthController2@index');
Route::get('api/healthVaccines', 'HealthController3@index');
Route::get('api/healthServices', 'HealthController4@index');
Route::get('api/healthSpecialist', 'HealthController5@index');
//****Finance GET requests*****

Route::get('api/finance/all', 'Finance_allController@index');
Route::get('api/finance', 'FinanceController@index');
Route::get('api/bills', 'FinanceController@bills');
Route::get('api/loan', 'FinanceController@loan');
Route::get('api/payment', 'FinanceController@payment');
Route::get('api/insurance', 'FinanceController@insurance');
Route::get('api/social', 'FinanceController@social');
Route::get('api/tax', 'FinanceController@tax');
Route::get('api/transaction', 'FinanceController@transaction');
Route::get('api/tuition', 'FinanceController@tuition');
//endregion

//****Gov GET requests*****
Route::get('api/gov', 'GovController@index');
Route::get('api/gov/service_center', 'GovController@service_center');
Route::get('api/gov/service_center_data', 'GovController@service_center_data');

