<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');
<<<<<<< HEAD
=======
    $router->resource('cate', CateController::class);
>>>>>>> 25dc6863e54ca1b0428b7d5ca12df1661ea14730

});
