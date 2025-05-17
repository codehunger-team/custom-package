<?php

use Illuminate\Support\Facades\Route;
use CodeHunger\Learning\Http\Controllers\LearningController;


Route::group(['prefix' => 'learning',], function () {
    Route::get('/', [LearningController::class, 'index'])->name('learning.index');
});