<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlashcardController;
use App\Http\Controllers\FlashcardApiController;
use App\Http\Controllers\ContentApiController;
use App\Http\Controllers\FlashcardPairApiController;

// API認証の例
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Flashcards API
// Route::get('/flashcards/api', [FlashcardController::class, 'getFlashcards'])->name('flashcards.api');

// Flashcards CRUD
Route::delete('/flashcards/{id}', [FlashcardApiController::class, 'destroy'])->name('flashcards.destroy');

// Contents API

// フロントとバックのコンテンツを一度に登録するエンドポイント
Route::post('/flashcards/{flashcardId}/contents', [ContentApiController::class, 'storeFrontAndBackContents'])->name('api.contents.storeFrontAndBackContents');

Route::post('/flashcards/{flashcardId}/pair/create', [FlashcardPairApiController::class, 'createPair']);
// Get a flashcard pair's details for editing
Route::get('/flashcards/pairs/{pairId}', [FlashcardPairApiController::class, 'getPair']);
// Update a flashcard pair
Route::post('/flashcards/pairs/{pairId}/update', [FlashcardPairApiController::class, 'updatePair']);
// Delete a flashcard pair
Route::delete('/flashcards/pairs/{pairId}/delete', [FlashcardPairApiController::class, 'deletePair']);


// フロントとバックのコンテンツを一度に更新するエンドポイント
// Route::put('/flashcards/{flashcardId}/contents/update', [ContentApiController::class, 'updateFrontAndBackContents'])->name('api.contents.updateFrontAndBackContents');

// メンテナンス用の個別更新エンドポイント

// フロントコンテンツを個別に更新するエンドポイント
// Route::put('/flashcards/{flashcardId}/contents/front', [ContentApiController::class, 'updateFrontContents'])->name('api.contents.updateFrontContents');

// バックコンテンツを個別に更新するエンドポイント
// Route::put('/flashcards/{flashcardId}/contents/back', [ContentApiController::class, 'updateBackContents'])->name('api.contents.updateBackContents');
