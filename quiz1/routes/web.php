<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventoryController;


Route::get('hello/{name}', function($name) {
    return 'hi ' . $name; 
});

Route::resource('/inventory', InventoryController::class);
Route::get('/inventory/create', [InventoryController::class, 'create'])->name('inventory.create');
Route::post('/inventory', [InventoryController::class, 'store'])->name('inventory.store');