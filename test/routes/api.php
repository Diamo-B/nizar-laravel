<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;

$router->group([], function () use ($router) {
    $router->post('products', [ProductsController::class, 'create']);
});
