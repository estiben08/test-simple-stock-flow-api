<?php
use Illuminate\Support\Facades\Route;
use App\Presentation\Http\Controller\SaleController;

Route::get('/health', function () {
    return response()->json(['status' => 'ok']);
});

Route::post('/sales', [SaleController::class, 'store']);
