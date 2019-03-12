<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->resource('auth/product-categorys', ProductCategoryController::class);
    $router->resource('auth/products', ProductController::class);
    $router->resource('auth/visi-misi', VisiMisiController::class);
    $router->resource('auth/privacy-policy', PrivacyPolicyController::class);
    $router->resource('auth/term-of-use', TermOfUseController::class);
    $router->resource('auth/faq', FaqController::class);
    $router->resource('auth/about-us', TentangKamiController::class);

});
