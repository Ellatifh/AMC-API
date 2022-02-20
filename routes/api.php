<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AmcController;
use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\ProduitAnnexeController;
use App\Http\Controllers\TierController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/register', [AuthController::class, 'register']);

Route::get('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::get('/amc', [AmcController::class, 'index']);
    Route::get('/agences', [AgenceController::class, 'index']);
    Route::get('/contrats', [ContratController::class, 'index']);
    Route::get('/produit_annexes', [ProduitAnnexeController::class, 'index']);
    Route::get('/tiers', [TierController::class, 'index']);
});
