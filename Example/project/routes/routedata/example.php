<?php

use Illuminate\Support\Facades\Route;

// url  này gọi đến cái hàm getdata trong file controller Manage.php
//Route::get('/GPT/a/{a}/b/{b}','Manage@getdata');

//Route::get('/giathua/{n}','Manage@tinhgiaithua');

//Route::group('/ptb2/a','Manage@ptb2');

Route::group(['prefix'=>'/ptb2'],function(){
   Route::get('/inputData','Manage@inputpPtb2');

    Route::post('/insertData','Manage@ptb2')-> name('insertData');
    
});


