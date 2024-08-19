<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Pages\PagesController;
use App\Http\Controllers\Pages\InvokePagesController;

Route::get('/', InvokePagesController::class)->name('index');

Route::get('/customers/dashboard', function () {
    return view('livewire.pages.customers.dashboard');
})->middleware(['auth', 'customer'])->name('customers.dashboard');

Route::get('/dealers/dashboard', function () {
    return view('livewire.pages.dealers.dashboard');
})->middleware(['auth', 'dealer'])->name('dealers.dashboard');

Route::get('/agents/dashboard', function () {
    return view('livewire.pages.agents.dashboard');
})->middleware(['auth', 'agent'])->name('agents.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/steps/upload', function () {
    // return view('livewire.sections.steps.upload');
    return view('livewire.sections.loan-app-form');
})->name('steps.upload');

require __DIR__ . '/auth.php';

Route::get('/{page:slug}', PagesController::class)->name('page.show');
