<?php


use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\InvoiceController;
use Illuminate\Support\Facades\Route;



//api/V1/endpoint

Route::group(['prefix'=>'V1', 'middleware' => 'auth:sanctum'], function (){

    Route::apiResource('customers', CustomerController::class); // this method omits the edit and create endpoints
    Route::apiResource('invoices', InvoiceController::class);

    Route::post('invoices/bulk', [InvoiceController::class , 'bulkStore']);
});
