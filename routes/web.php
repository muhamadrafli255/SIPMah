<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoansController;
use App\Http\Controllers\RacksController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OfficersController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\PublishersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function(){
    $title = 'Dasbor';
    return view('content.index', compact('title'));
});

Route::get('/dashboard3/home', function(){
    $title = 'Beranda';
    return view('content.index', compact('title'));
});

Route::get('/dashboard2', function(){
    $title = 'Dasbor';
    return view('content.index', compact('title'));
});

Route::get('/dashboard3', function(){
    $title = 'Dasbor';
    return view('content.index', compact('title'));
});

Route::get('/', [AuthController::class, 'login']);
Route::get('/login', [AuthController::class, 'attempt']);
Route::get('/register', [AuthController::class, 'register']);
Route::get('/store', [AuthController::class, 'store']);
Route::get('/activation', [AuthController::class, 'activation']);
Route::get('/active', [AuthController::class, 'active']);
Route::get('/forgot-password', [AuthController::class, 'forgot']);
Route::get('/change-password', [AuthController::class, 'change_password']);
Route::get('/reset-password', [AuthController::class, 'reset_password']);
Route::get('/update-password', [AuthController::class, 'update_password']);
Route::get('/members', [MembersController::class, 'index']);
Route::get('/members/store', [MembersController::class, 'store']);
Route::get('/members/create', [MembersController::class, 'create']);
Route::get('/members/verify', [MembersController::class, 'verify']);
Route::get('/members/id', [MembersController::class, 'detail']);
Route::get('/members/id/edit', [MembersController::class, 'edit']);
Route::get('/members/id/update', [MembersController::class, 'update']);
Route::get('/members/id/disable', [MembersController::class, 'disable']);
Route::get('/members/id/reset', [MembersController::class, 'reset']);
Route::get('/officers', [OfficersController::class, 'index']);
Route::get('/officers/store', [OfficersController::class, 'store']);
Route::get('/officers/create', [OfficersController::class, 'create']);
Route::get('/officers/id', [OfficersController::class, 'detail']);
Route::get('/officers/id/reset', [OfficersController::class, 'reset']);
Route::get('/officers/id/update', [OfficersController::class, 'update']);
Route::get('/officers/id/disable', [OfficersController::class, 'disable']);
Route::get('/officers/id/edit', [OfficersController::class, 'edit']);
Route::get('racks', [RacksController::class, 'index']);
Route::get('dashboard3/racks', [RacksController::class, 'index']);
Route::get('dashboard3/racks/id', [CategoriesController::class, 'user']);
Route::get('racks/store', [RacksController::class, 'store']);
Route::get('racks/id', [RacksController::class, 'detail']);
Route::get('racks/id/edit', [RacksController::class, 'edit']);
Route::get('racks/id/update', [RacksController::class, 'update']);
Route::get('racks/id/destroy', [RacksController::class, 'destroy']);
Route::get('racks/create', [RacksController::class, 'create']);
Route::get('/categories', [CategoriesController::class, 'index']);
Route::get('/categories/store', [CategoriesController::class, 'store']);
Route::get('/categories/id', [CategoriesController::class, 'detail']);
Route::get('/dashboard3/categories/id', [CategoriesController::class, 'detail']);
Route::get('/categories/id/update', [CategoriesController::class, 'update']);
Route::get('/categories/id/destroy', [CategoriesController::class, 'destroy']);
Route::get('/categories/create', [CategoriesController::class, 'create']);
Route::get('/categories/id/edit', [CategoriesController::class, 'edit']);
Route::get('/publishers', [PublishersController::class, 'index']);
Route::get('/publishers/store', [PublishersController::class, 'store']);
Route::get('/publishers/id', [PublishersController::class, 'detail']);
Route::get('/publishers/id/update', [PublishersController::class, 'update']);
Route::get('/publishers/id/destroy', [PublishersController::class, 'destroy']);
Route::get('/publishers/create', [PublishersController::class, 'create']);
Route::get('/publishers/id/edit', [PublishersController::class, 'edit']);
Route::get('/books', [BooksController::class, 'index']);
Route::get('/books/create', [BooksController::class, 'create']);
Route::get('/books/store', [BooksController::class, 'store']);
Route::get('/books/id', [BooksController::class, 'detail']);
Route::get('/dashboard3/books/id', [BooksController::class, 'detail']);
Route::get('/books/id/edit', [BooksController::class, 'edit']);
Route::get('/books/id/update', [BooksController::class, 'update']);
Route::get('/books/id/destroy', [BooksController::class, 'destroy']);
Route::get('/loans', [LoansController::class, 'index']);
Route::get('loans/id', [LoansController::class, 'detail']);
Route::get('loans/id/verification', [LoansController::class, 'verification']);
Route::get('loans/create', [LoansController::class, 'create']);
Route::get('loans/store', [LoansController::class, 'store']);
Route::get('loans/id2', [LoansController::class, 'detail2']);
Route::get('loans/id/edit', [LoansController::class, 'edit']);
Route::get('loans/id/update', [LoansController::class, 'update']);
Route::get('loans/id/return', [LoansController::class, 'return']);
Route::get('/report', [ReportController::class, 'index']);
Route::get('/report/borrowed', [ReportController::class, 'borrowed']);
Route::get('/report/books', [ReportController::class, 'books']);
Route::get('/report/members', [ReportController::class, 'members']);
Route::get('/accounts', [ProfileController::class, 'account']);
Route::get('/accounts/password', [ProfileController::class, 'change_password']);
Route::get('/accounts/update', [ProfileController::class, 'update']);
