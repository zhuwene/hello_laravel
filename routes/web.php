<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * 前端路由
 */
//Route::get('/', 'PagesController@root')->name('root')->middleware('verified')->middleware('verified');
Route::redirect('/', '/products')->name('root');
Route::get('products', 'ProductsController@index')->name('products.index');

// Laravel 的用户认证路由 在之前的路由里加上一个 verify 参数
Auth::routes(['verify' => true]);

// auth 中间件代表需要登录，verified中间件代表需要经过邮箱验证
Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('user_addresses', 'UserAddressesController@index')->name('user_addresses.index');
    //新增以及处理收货地址
    Route::get('user_addresses/create', 'UserAddressesController@create')->name('user_addresses.create');
    Route::post('user_addresses', 'UserAddressesController@store')->name('user_addresses.store');
    //控制器的参数名 $user_address 必须和路由中的 {user_address} 一致才可以
    Route::get('user_addresses/{user_address}', 'UserAddressesController@edit')->name('user_addresses.edit');
    //更新收货地址
    Route::put('user_addresses/{user_address}', 'UserAddressesController@update')->name('user_addresses.update');
    //删除收货地址
    Route::delete('user_addresses/{user_address}', 'UserAddressesController@destroy')->name('user_addresses.destroy');

    //新增/取消收藏
    Route::post('products/{product}/favorite', 'ProductsController@favor')->name('products.favor');
    Route::delete('products/{product}/favorite', 'ProductsController@disfavor')->name('products.disfavor');
    //收藏列表
    Route::get('products/favorites', 'ProductsController@favorites')->name('products.favorites');
    //加入购物车
    Route::post('cart', 'CartController@add')->name('cart.add');
    //查看购物车
    Route::get('cart', 'CartController@index')->name('cart.index');
    //移除购物车
    Route::delete('cart/{sku}', 'CartController@remove')->name('cart.remove');
    //提交订单
    Route::post('orders', 'OrdersController@store')->name('orders.store');
    //用户订单列表
    Route::get('orders', 'OrdersController@index')->name('orders.index');
    //用户订单详细页
    Route::get('orders/{order}', 'OrdersController@show')->name('orders.show');
});
Route::get('products/{product}', 'ProductsController@show')->name('products.show');

Route::get('alipay', function() {
    return app('alipay')->web([
        'out_trade_no' => time(),
        'total_amount' => '1',
        'subject' => 'test subject - 测试',
    ]);
});