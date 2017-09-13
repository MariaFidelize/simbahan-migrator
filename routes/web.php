<?php

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

Route::get('/', 'DefaultController@index');

Route::get('/migrate/organization', 'DefaultController@organization');

Route::post('/migrate/organization', 'DefaultController@migrateOrganization');

Route::get('/migrate/gospel', 'DefaultController@gospel');

Route::post('/migrate/gospel', 'DefaultController@migrateGospel');

Route::get('/migrate/prayer', 'DefaultController@prayer');

Route::post('/migrate/prayer', 'DefaultController@migratePrayer');

Route::get('/migrate/saint', 'DefaultController@saint');

Route::post('/migrate/saint', 'DefaultController@migrateSaint');

Route::get('/migrate/reflection', 'DefaultController@reflection');

Route::post('/migrate/reflection', 'DefaultController@migrateReflection');

Route::get('/migrate/quote/religious', 'DefaultController@religiousQuote');

Route::post('/migrate/quote/religious', 'DefaultController@migrateReligiousQuote');

Route::get('/migrate/church/reviews', 'DefaultController@migrateChurchReviews');

Route::post('/migrate', 'DefaultController@migrate');

Route::get('reset', 'DefaultController@resetMigration');

Route::get('fix', function () {
    $massDetails = \App\Models\MassDetail::where('Time', 'LIKE', '0.%')->get();
    $adorations = \App\Models\AdorationChapel::where('Time', 'LIKE', '0.%')->get();
    $confessions = \App\Models\ConfessionDetail::where('Time', 'Like', '0.%')->get();

    foreach ($massDetails as $massDetail)
    {
        $massDetail->Time = \Carbon\Carbon::parse(\PHPExcel_Style_NumberFormat::toFormattedString($massDetail->Time, "hh:mm:ss"))->format('h:m:s a');

        $massDetail->save();
    }

    foreach ($adorations as $adoration)
    {
        $adoration->Time = \Carbon\Carbon::parse(\PHPExcel_Style_NumberFormat::toFormattedString($adoration->Time, "hh:mm:ss"))->format('h:m:s a');

        $adoration->save();
    }

    foreach ($confessions as $confession)
    {
        $confession->Time = \Carbon\Carbon::parse(\PHPExcel_Style_NumberFormat::toFormattedString($confession->Time, "hh:mm:ss"))->format('h:m:s a');

        $confession->save();
    }

    return \Illuminate\Support\Facades\Response::json(true);
});

Route::get('test', function() {
    dd(phpinfo());
});