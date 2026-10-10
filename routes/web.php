<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get(
    '/course',
    [CourseController::class, 'index']
)->name("course");

Route::get(
    '/about',
    [CourseController::class, 'about']
)->name("about");



Route::get('/contact', function () {
    return view('contact');
})->name("contact");

Route::post('/contact', function (Request $request) {
    return 'Formulaire reçu par POST';
});

Route::resource(
    'products',
    ProductController::class
)->whereNumber('product');;

Route::get('/search', [ProductController::class, 'search'])->name("search");


Route::get('/debug/request', function (Request $request) {
    return response()->json([
        'method' => $request->method(),
        'path' => $request->path(),
        'query' => $request->query(),
        'accept' => $request->header('Accept'),
    ]);
});


Route::get('/test-uri', function () {
    return route('products.show', ['product' => 5]);
});

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/dashboard', function () {
            return 'Dashboard';
        })->name('dashboard');

        Route::get('/products', function () {
            return 'Admin products';
        })->name('products');
    });
