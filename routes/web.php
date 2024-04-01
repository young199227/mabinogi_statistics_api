<?php
use App\Http\Controllers\ConnectController;
use App\Http\Controllers\StatisticsController;
use Illuminate\Support\Facades\Route;

#測試路線
Route::get('/test', [StatisticsController::class, 'test']);

#首頁
Route::get('/indexData', [StatisticsController::class, 'getIndexData']);

#使用者上傳
Route::post('/create', [StatisticsController::class, 'create']);

#拿沒驗證的使用者
Route::get('/unverified', [StatisticsController::class, 'getUnverifiedUploads']);
