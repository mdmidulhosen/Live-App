<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\HomeBlocksController;






Route::group([
    'prefix'=> 'home'
], function(){
    Route::get('/create/slider' , [HomeController::class, 'sliderCreate'])->name('Home.Slider.Create');
    Route::post('/upload/slider/image' , [HomeController::class, 'uploadSliderImage'])->name('Home.Slider.Image.Upload');
    Route::get('/page/section' , [HomeBlocksController::class, 'homeBlocksCreatePage'])->name('Home.Blocks.Section');
    Route::post('/create/page/section' , [HomeBlocksController::class, 'homeBlocksCreateProcess'])->name('Home.Blocks.SectionCreateProcess');
    Route::get('/page/section/list', [HomeBlocksController::class, 'index'])->name('Home.Blocks.Section.IndexPage');
    Route::get('/section/product/add/{id}' , [HomeBlocksController::class, 'homeBlocksAddProductPage'])->name('Home.Blocks.Product.AddPage');
    Route::get('/section/product/edit/{id}' , [HomeBlocksController::class, 'editHomeBlock'])->name('Home.Blocks.Product.EditPage');
    Route::post('/section/product/update/{id}' , [HomeBlocksController::class, 'updateHomeBlock'])->name('Home.Blocks.Product.UpdateProcess');
    Route::post('/section/product/add/process/{id}' , [HomeBlocksController::class, 'homeBlocksAddProductProcess'])->name('Home.Blocks.Product.AddProcess');
    Route::get('/section/product/delete/{id}' , [HomeBlocksController::class, 'removeHomeBlocksProduct'])->name('Home.Blocks.Product.Delete');
    Route::get('/section/change/status', [HomeBlocksController::class, 'changeStatus'])->name('Home.Section.Status.Change');

});
