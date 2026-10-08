<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    '/course',
    [CourseController::class, 'index']
);

Route::get(
    '/about',
    [CourseController::class, 'about']
);

Route::get(
    '/products',
    [ProductController::class, 'index']
)->name('products.index');

Route::get(
    '/products/{id}',
    [ProductController::class, 'show']
)
->whereNumber('id')
->name('products.show');


Route::get('/search', function (Request $request) {
    $query = $request->query('q', '');
    return "Recherche : $query";
});


Route::get('/debug/request', function (Request $request) {
    return response()->json([
        'method' => $request->method(),
        'path' => $request->path(),
        'query' => $request->query(),
        'accept' => $request->header('Accept'),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function (Request $request) {
    return 'Formulaire reçu par POST';
});


Route::get('/test-uri', function () {
    return route(
        'products.show',
        ['id' => 5]
    );
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
