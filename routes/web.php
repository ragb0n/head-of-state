<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('hello');
})->name('hello');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/dashboard', 'CityController@getCity')->name('dashboard');

    Route::view(uri: 'profile', view: 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');
    Route::delete('profile', [\App\Http\Controllers\ProfileController::class, 'destroy'])
        ->name('profile.destroy');
}); 

Route::group(['middleware' => 'auth', 'prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});

    Route::resource(name: 'buildings', controller: BuildingController::class)->middleware('auth');
    Route::resource(name: 'researches', controller: ResearchController::class)->middleware('auth');
    Route::resource(name: 'units', controller: UnitController::class)->middleware('auth');
    Route::resource(name: 'map', controller: CityController::class)->middleware('auth');
    Route::resource(name: 'ranking', controller: RankingController::class)->middleware('auth');
    
    Route::get('/city/{city_id}/buildings/{building_id}', 'BuildingController@levelUpBuilding')->middleware('auth');
    Route::get('/city/{city_id}/researches/{research_id}', 'ResearchController@levelUpResearch')->middleware('auth');
    Route::get('/city/{city_id}/units/{unit_id}', 'UnitController@recruitUnit')->middleware('auth');
    Route::post('/profile/rename', 'CityController@renameCity')->middleware('auth');
    
    require __DIR__.'/auth.php';
