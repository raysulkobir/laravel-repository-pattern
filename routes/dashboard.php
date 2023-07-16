<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;

/************************ Dashboard Routes Start ******************************/
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'{language}'],function(){
        Route::group(['prefix'=>'dashboards','as'=>'dashboard.'],function(){
            Route::get('demo-one',[DashboardController::class,'index'])->name('demo_one');
            Route::get('demo-two',[DashboardController::class,'demoTwo'])->name('demo_two');
            Route::get('demo-three',[DashboardController::class,'demoThree'])->name('demo_three');
            Route::get('demo-four',[DashboardController::class,'demoFour'])->name('demo_four');
            Route::get('demo-five',[DashboardController::class,'demoFive'])->name('demo_five');
            Route::get('demo-six',[DashboardController::class,'demoSix'])->name('demo_six');
            Route::get('demo-seven',[DashboardController::class,'demoSeven'])->name('demo_seven');
            Route::get('demo-eight',[DashboardController::class,'demoEight'])->name('demo_eight');
            Route::get('demo-nine',[DashboardController::class,'demoNine'])->name('demo_nine');
            Route::get('demo-ten',[DashboardController::class,'demoTen'])->name('demo_ten');
        });

        Route::group(['prefix' => 'category'], function () {
            Route::get('/', [CategoryController::class, 'index'])->name('category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
            Route::post('/', [CategoryController::class, 'store'])->name('category.store');
            Route::get('/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
            Route::Post('/{category}/update', [CategoryController::class, 'update'])->name('category.update');
            Route::get('/{category}/destroy', [CategoryController::class, 'destroy'])->name('category.destroy');
        });
        Route::group(['prefix' => 'slider'], function () {
            Route::get('/', [SliderController::class, 'index'])->name('slider.index');

        });

        // Route::resource('slider', SliderController::class);
    });
});
/************************ Dashboard Routes Ends ******************************/
