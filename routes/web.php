<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RelatorioController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::prefix('inventory')->name('inventory.')->group(function () {
    Route::get('/', [InventoryController::class, 'index'])->name('index');
    Route::get('/create', [InventoryController::class, 'create'])->name('create');
    Route::post('/', [InventoryController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [InventoryController::class, 'edit'])->name('edit');
    Route::put('/{id}', [InventoryController::class, 'update'])->name('update');
    Route::delete('/{id}', [InventoryController::class, 'destroy'])->name('destroy');
});

// Rotas para outras páginas, como contato e produtos
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $busca = request('search');
    return view('produtos', ['busca' => $busca]);
});

Route::get('/produto_teste/{id?}', function ($id = null) {
    return view('produto', ['id' => $id]);
});

Route::get('/relatorio', [RelatorioController::class, 'index'])->name('relatorio');