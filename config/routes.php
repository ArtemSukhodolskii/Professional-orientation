<?php

use App\Controllers\HomeController;
use APP\Kernel\Router\Route;
use App\Controllers\TeenagerController;
use App\Controllers\ParentController;
use App\Controllers\TestsController;
use App\Controllers\AdviceController;

return [
    Route::get('/',  [HomeController::class, 'index']),
    Route::get('/home',  [HomeController::class, 'index']),
    Route::get('/teenager', [TeenagerController::class, 'index']),
    Route::get('/parent', [ParentController::class, 'index']),
    Route::get('/tests', [TestsController::class, 'index']),
    Route::get('/advice', [AdviceController::class, 'index']),

];