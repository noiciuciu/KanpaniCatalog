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

Route::get('chara_thumbnail/{id}', function ($id) {
    $url = "http://img4.kanpani.jp/img/character/".$id."/illust/thumbnail.png";
    $fileName = "public/thumbnail_".$id.".png";
    if (!Storage::exists($fileName)) {
        Storage::put($fileName, fopen($url, 'r'));
    }
    return Storage::url($fileName);
});

Route::get('equip_thumbnail/{id}', function ($id) {
    $url = "http://img4.kanpani.jp/img/icon/equipment/small/".$id."_1.png";
    $fileName = "public/equipment_small_".$id.".png";
    if (!Storage::exists($fileName)) {
        Storage::put($fileName, fopen($url, 'r'));
    }
    return Storage::url($fileName);
});