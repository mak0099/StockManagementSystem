<?php
Route::group([
    'middleware' => 'api',
], function () {

    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');
    
    Route::apiResource('products', 'ProductController');
    Route::apiResource('product-categories', 'ProductCategoryController');
    Route::apiResource('product-groups', 'ProductGroupController');
    Route::apiResource('product-brands', 'ProductBrandController');
});