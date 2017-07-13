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

Route::get('/', function () {
    return view('welcome');
});

Route::get('chara_thumbnail/{id}', 'ImageController@retrieveThumbnail');
Route::get('equip_thumbnail/{id}', 'ImageController@retrieveEquipThumbnail');
Route::get('large_equip_thumbnail/{id}', 'ImageController@retrieveLargeEquipThumbnail');
Route::get('item_effect/{id}', 'ImageController@retrieveItemEffect');

Route::post('master/update_skills', 'MasterDataController@updateSkills');
Route::get('master/skills', 'MasterDataController@getMasterSkills');