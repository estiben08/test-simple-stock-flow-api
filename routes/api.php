<?php
use Illuminate\Support\Facades\Route;
use App\Presentation\Http\Controller\SaleController;
use App\Presentation\Http\Controller\AuthController;
use App\Presentation\Http\Controller\ProductController;

Route::get('/health', function () { return response()->json(['status' => 'ok']); });
Route::post('/login', [AuthController::class, 'login']);
Route::get('/products', [ProductController::class, 'index']);
Route::post('/products', [ProductController::class, 'store']);
Route::post('/sales', [SaleController::class, 'store']);
