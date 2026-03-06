<?php
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\IdeaController;
use App\Http\Controllers\Auth\SessionsController;
use Illuminate\Support\Facades\Route;
use App\Models\Idea;
//index
Route::get('/ideas',[IdeaController::class,'index']);

//create
Route::get('/ideas/create', [IdeaController::class, 'create']);

//store
Route::post('/ideas',[IdeaController::class,'store']);

//show
Route::get('/ideas/{idea}',[IdeaController::class,'show']);

//edit
Route::get('/ideas/{idea}/edit',[IdeaController::class,'edit']);

//update
Route::patch('/ideas/{idea}',[IdeaController::class,'update']);

//Destroy
Route::delete('/ideas/{idea}',[IdeaController::class,'destroy']);

//Register
Route::get('register',[RegisteredUserController::class, 'create']);
Route::post('register',[RegisteredUserController::class, 'store']);

Route::get('/login',[SessionsController::class, 'create']);
Route::post('/login',[SessionsController::class, 'store']);
Route::delete('/logout',[SessionsController::class, 'destroy']);
