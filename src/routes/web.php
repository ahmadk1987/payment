<?php

    use Roocket\Cms\Models\Admin;

    Route::group(['middleware'=>'admin:protected','namespace'=>'Roocket\Cms\Http\Controllers'],function (){
        Route::get('/adminpanel/index','AdminPanelController@index');
//        Route::get('/adminpanel/config',function (){
//           return config('cms.url');
//        });

        return Admin::all();
    });
