<?php


use Symfony\Component\HttpFoundation\Request;

Route::group(['prefix'=>'admin'],function (){

    Route::get('home',['as'=>'adminhome',function (Request $request){



            return view('all-section.admin.home');



    }]);

    Route::resource('admin/department','DepartmentController');


});