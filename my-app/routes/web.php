<?php

// routes/web.php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController; 
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\ContactLogController; 
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => app()->version(),
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Routes for CustomerController
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index'); 
    Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::put('/customer-update{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');


    // Routes for ProductsController
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

    // Routes for contact log
    Route::get('/contact_logs/create', [ContactLogController::class, 'create'])->name('contact_logs.create');
    Route::post('/contact_logs', [ContactLogController::class, 'store'])->name('contact_logs.store');
    
    // Display a list of contact logs
    Route::get('/contact_logs', [ContactLogController::class, 'index'])->name('contact_logs.index');
    
    // Update an existing contact log
    Route::get('/contact_logs/{id}/edit', [ContactLogController::class, 'edit'])->name('contact_logs.edit');
    Route::put('/contact_logs/{id}', [ContactLogController::class, 'update'])->name('contact_logs.update');
    
    // Delete a contact log
    Route::delete('/contact_logs/{id}', [ContactLogController::class, 'destroy'])->name('contact_logs.destroy');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
