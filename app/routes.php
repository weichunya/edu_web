<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// 系统
Route::group( array('prefix' => '/system'),function() {
    Route::controller('/download', 'Laravel\Controller\System\DownloadController');
});

Route::controller('/', 'Laravel\Controller\Index\IndexController');
