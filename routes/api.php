<?php

use Illuminate\Http\Request;
Route::get('',function (){
   return response()->json(["version"=>"0.1","status"=>"ok","last_update"=>"2017-01-17"],200);
})->name('index');

Route::group(['prefix'=>'mail'],function (){
    Route::get('',function(){
        return response()->json(["version"=>"0.1","status"=>"ok","last_update"=>"2017-01-17","functions"=>["post"=>["send"],"get"=>["test"]]],200);
    })->name('mail');

    Route::post('send','\App\Modules\Mail\Controllers\MailController@send')->name('mail.send');
    Route::get('test','\App\Modules\Mail\Controllers\MailController@test')->name('mail.test');
});
