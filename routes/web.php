<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Route::get('/test', function () {
//    return view('test');
//});

Route::get('/test',[NvsProDuctController::class,'nvsIndex']);


Route::get('/nvs-view1',function(){
    return view('nvs-view1',['name'=>"K23CNT2 - Project 1 - lmeooo "]);
});
Route::get('/nvs-view2',function(){
    return view('nvs-view2',[
        'name'=>"K23CNT2 - Project 1 - lmeooo ",
        'array'=>[1,3,2,6,9]
    
    ]);
});
Route::get('/nvs-view2',function(){
    return view('nvs-view2',[
        'name'=>"K23CNT2", "Project 1", "lmeooo ",
        'arr'=>[1,3,2,6,9],
        'user'=>[],
    
    ]);
});