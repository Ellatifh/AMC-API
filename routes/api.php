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

Route::post('/auth/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/me', function(Request $request) {
        return auth()->user();
    });
    Route::post('/auth/logout', [AuthController::class, 'logout']);

    /************************ AMC ***************************** */
    Route::get('/amc', [AmcController::class, 'index']);
    Route::get('/amc/{id}', [AmcController::class, 'show']);
    Route::post('/amc', [AmcController::class, 'store']);
    /**************************************************************** */

    /************************ AGENCES ***************************** */
    Route::get('/agences', [AgenceController::class, 'index']);
    Route::get('/agences/{id}', [AgenceController::class, 'show']);
    /**************************************************************** */
    
    /************************ CONTRATS ***************************** */
    Route::get('/contrats', [ContratController::class, 'index']);
    Route::get('/contrats/{id}', [ContratController::class, 'show']);
    /**************************************************************** */

    /************************ PRODUIT ANNEXES ***************************** */
    Route::get('/produit_annexes', [ProduitAnnexeController::class, 'index']);
    Route::get('/produit_annexes/{id}', [ProduitAnnexeController::class, 'show']);
    /**************************************************************** */

    /************************ TIERS ***************************** */
    Route::get('/tiers', [TierController::class, 'index']);
    Route::get('/tiers/{id}', [TierController::class, 'show']);
    /**************************************************************** */

    // publishing data to external Company using their API
    Route::post('/amc/publish', [AmcController::class, 'publish']);
    Route::post('/agences/publish', [AgenceController::class, 'publish']);
    Route::post('/contrats/publish', [ContratController::class, 'publish']);
    Route::post('/produit_annexes/publish', [ProduitAnnexeController::class, 'publish']);
    Route::post('/tiers/publish', [TierController::class, 'publish']);
});
