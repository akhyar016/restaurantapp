<?php
use App\Http\Middleware\checkAuthMiddleware;
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

Route::get('/', 'AuthController@index')->name('login')->middleware('guest');
Route::post('/auth', ['uses' => 'AuthController@login', 'as' => 'auth'])->middleware('guest');

Route::group(['middleware' => 'auth'], function () {

   // Route::get('/user-home','SalerecordControlller@index')->name('place.item.user');
    
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::get('/home', 'DashboardController@index')->name('home');
    Route::post('/logout', 'AuthController@logout')->name('logout');

    //USer routes
    Route::get('/home/user','UserController@index')->name('get.user');
    Route::get('/home/user/create','UserController@create')->name('user.create');





    //Items route
    Route::get('/items','ItemController@index')->name('item');
    Route::post('/items/create','ItemController@postCreate')->name('create');
    Route::get('/items/get-edit/{id}','ItemController@getEdit')->name('get.edit');
    Route::post('/items/post-edit/{id}','ItemController@postEdit')->name('post.edit');
    Route::get('/items/delete/{id}','ItemController@delete')->name('delete');
    Route::post('/items/searchfood','SearchController@searchFoodItem');
    
    //Order Placement
    //Route::get('/food-orders', 'OrderController@index')->name('place.order');
    Route::get('/food-orders', 'SalerecordController@index')->name('place.item');
    Route::post('/food-orders/searchfood', 'SearchController@searchOrderFoodItem');
    Route::post('addOrder', 'SalerecordController@postCreateSale');
    Route::get('/delete-item/{id}','SalerecordController@getDeleteItem')->name('newsale.delete');
    Route::post('/food-order/confirm','OrderController@postOrderCreate')->name('newsale.save');
    Route::get('/food-order/clear','SalerecordController@deleteUserOrder')->name('newsale.clear');
    Route::get('/food-order/update/{id}','SalerecordController@edit')->name('newsaleItem.update');
    Route::post('/food-order/update/{id}','SalerecordController@update')->name('order.item.edit');
    ///Customers

    Route::get('/admin/customer','CustomerController@index')->name('customer');
    Route::post('/customer/search','SearchController@searchCustomers');
    Route::post('/admin/customer/create','CustomerController@postCreate')->name('customer.create');
    Route::get('/admin/customer/edit/{id}', 'CustomerController@edit')->name('get.edit');
    Route::get('/admin/customer/delete/{id}','CustomerController@delete')->name('get.delete');
    Route::post('/admin/customer/update/{id}','CustomerController@update')->name('post.update');

    ///Online- OtherOrders 

    Route::get('/admin/other-order','OnlineSalerecordController@index')->name('online.order');
    Route::post('/admin/other-order/update/{id}','OnlineSalerecordController@update')->name('online.newsaleItem.update');
    Route::get('/admin/other-order/edit/{id}','OnlineSalerecordController@edit')->name('online.newsaleItem.edit');
    Route::get('/admin/other-order/delete-item/{id}','OnlineSalerecordController@getDeleteItem')->name('online.newsale.delete');
    Route::post('/admin/addOnlineOrder', 'OnlineSalerecordController@postCreateSale');
    Route::post('/food-orders/searchOnlinefood', 'SearchController@searchOnlineOrderFoodItem');
    Route::post('/customer/search/online','SearchController@searchOnlineCustomers');
    Route::post('/other-order/confirm','OnlineOrderController@postOrderCreate')->name('online.newsale.save');
    Route::get('/other-order/clear','OnlineSalerecordController@deleteUserOrder')->name('online.newsale.clear');
    Route::get('/admin/online-customer/add/{id}','OnlineSalerecordController@getCustomers')->name('get.customer');

    //Taway-Orders
    Route::get('/taway-orders', 'TakeAwayItemController@index')->name('taway-orders');  
    Route::get('/taway-orders/drinks','TakeAwayItemController@drinks')->name('taway-orders-drinks'); 
    Route::get('/taway-orders/desert','TakeAwayItemController@desert')->name('taway-orders-desert'); 
    Route::get('/taway-orders/sides','TakeAwayItemController@sides')->name('taway-orders-sides'); 
    Route::get('/taway-orders/pizza','TakeAwayItemController@pizza')->name('taway-orders-pizza'); 
    Route::get('/taway-orders/curry','TakeAwayItemController@curry')->name('taway-orders-curry'); 
    Route::get('/taway-orders/shawarma','TakeAwayItemController@shawarma')->name('taway-orders-shawarma'); 
    Route::get('/taway-orders/wrap','TakeAwayItemController@wrap')->name('taway-orders-wrap'); 
    Route::get('/taway-orders/burgers','TakeAwayItemController@burgers')->name('taway-orders-burgers'); 
    Route::get('/taway-orders/grilled','TakeAwayItemController@grilled')->name('taway-orders-grilled'); 
    Route::get('/taway-orders/salads','TakeAwayItemController@salads')->name('taway-orders-salads'); 
    Route::get('/taway-orders/spdeals','TakeAwayItemController@spdeals')->name('taway-orders-spdeals'); 
    
    //T-away Preview
    Route::get('/taway-orders/preview','TawayOrderController@preview')->name('taway-orders-preview');
    
    //T-away item Add
    Route::post('/taway-orders/add-drinks','OnlineSalerecordController@addDrinks');
    Route::post('/taway-orders/add-curry','OnlineSalerecordController@addCurry');
    Route::post('/taway-orders/add-shawarma','OnlineSalerecordController@addShawarma');
    Route::post('/taway-orders/add-salads','OnlineSalerecordController@addSalads');
    Route::post('/taway-orders/add-spdeals','OnlineSalerecordController@addSpdeals');
    Route::post('/taway-orders/add-drinks','OnlineSalerecordController@addDrinks');
    Route::post('/taway-orders/add-cake','OnlineSalerecordController@addCake');
    Route::post('/taway-orders/add-sides','OnlineSalerecordController@addSides');
    Route::post('/taway-orders/add-pizza','OnlineSalerecordController@addPizza');
    Route::post('/taway-orders/add-wrap','OnlineSalerecordController@addWrap');
    Route::post('/taway-orders/add-burger','OnlineSalerecordController@addBurger');
    Route::post('/taway-orders/add-grill','OnlineSalerecordController@addGrill');

    //Delete T-Away
    Route::post('/taway-orders/delete-drinks','OnlineSalerecordController@deleteDrinks');
    Route::post('/taway-orders/delete-curry','OnlineSalerecordController@deleteCurry');
    Route::post('/taway-orders/delete-shawarma','OnlineSalerecordController@deleteShawarma');
    Route::post('/taway-orders/delete-wrap','OnlineSalerecordController@deleteWrap');
    Route::post('/taway-orders/delete-sides','OnlineSalerecordController@deleteSides');
    Route::post('/taway-orders/delete-salads','OnlineSalerecordController@deleteSalads');
    Route::post('/taway-orders/delete-spdeals','OnlineSalerecordController@deleteSpdeals');
    Route::post('/taway-orders/delete-cake','OnlineSalerecordController@deleteCake');
    Route::post('/taway-orders/delete-pizza','OnlineSalerecordController@deletePizza');
    Route::post('/taway-orders/delete-burger','OnlineSalerecordController@deleteBurger');
    Route::post('/taway-orders/delete-grill','OnlineSalerecordController@deleteGrill');

    // Confirm T-away orders
    Route::post('/taway-orders/confirm-orders','TawayOrderController@confirmOrder')->name('taway-confirm-order');
    
    //Delete All orders
    Route::get('allDelete-orders','OnlineSalerecordController@deleteUserOrder')->name('order-clear');

    //Onsite-Orders
    Route::get('/onsite-orders', 'OnsiteItemController@index')->name('onsite-orders');
    Route::get('/onsite-orders/drinks','OnsiteItemController@drinks')->name('onsite-orders-drinks'); 
    Route::get('/onsite-orders/desert','OnsiteItemController@desert')->name('onsite-orders-desert'); 
    Route::get('/onsite-orders/sides','OnsiteItemController@sides')->name('onsite-orders-sides'); 
    Route::get('/onsite-orders/pizza','OnsiteItemController@pizza')->name('onsite-orders-pizza'); 
    Route::get('/onsite-orders/curry','OnsiteItemController@curry')->name('onsite-orders-curry'); 
    Route::get('/onsite-orders/shawarma','OnsiteItemController@shawarma')->name('onsite-orders-shawarma'); 
    Route::get('/onsite-orders/wrap','OnsiteItemController@wrap')->name('onsite-orders-wrap'); 
    Route::get('/onsite-orders/burgers','OnsiteItemController@burgers')->name('onsite-orders-burgers'); 
    Route::get('/onsite-orders/grilled','OnsiteItemController@grilled')->name('onsite-orders-grilled'); 
    Route::get('/onsite-orders/salads','OnsiteItemController@salads')->name('onsite-orders-salads'); 
    Route::get('/onsite-orders/spdeals','OnsiteItemController@spdeals')->name('onsite-orders-spdeals');
    
    //Onsite Preview
    Route::get('/onsite-orders/preview','OnsiteOrderController@preview')->name('onsite-orders-preview');

    //Onsite item Add
    Route::post('/onsite-orders/add-drinks','OnlineSalerecordController@addDrinks');
    Route::post('/onsite-orders/add-curry','OnlineSalerecordController@addCurry');
    Route::post('/onsite-orders/add-shawarma','OnlineSalerecordController@addShawarma');
    Route::post('/onsite-orders/add-salads','OnlineSalerecordController@addSalads');
    Route::post('/onsite-orders/add-spdeals','OnlineSalerecordController@addSpdeals');
    Route::post('/onsite-orders/add-drinks','OnlineSalerecordController@addDrinks');
    Route::post('/onsite-orders/add-cake','OnlineSalerecordController@addCake');
    Route::post('/onsite-orders/add-sides','OnlineSalerecordController@addSides');
    Route::post('/onsite-orders/add-pizza','OnlineSalerecordController@addPizza');
    Route::post('/onsite-orders/add-wrap','OnlineSalerecordController@addWrap');
    Route::post('/onsite-orders/add-burger','OnlineSalerecordController@addBurger');
    Route::post('/onsite-orders/add-grill','OnlineSalerecordController@addGrill');

    //Delete Onsite
    Route::post('/onsite-orders/delete-drinks','OnlineSalerecordController@deleteDrinks');
    Route::post('/onsite-orders/delete-curry','OnlineSalerecordController@deleteCurry');
    Route::post('/onsite-orders/delete-shawarma','OnlineSalerecordController@deleteShawarma');
    Route::post('/onsite-orders/delete-wrap','OnlineSalerecordController@deleteWrap');
    Route::post('/onsite-orders/delete-sides','OnlineSalerecordController@deleteSides');
    Route::post('/onsite-orders/delete-salads','OnlineSalerecordController@deleteSalads');
    Route::post('/onsite-orders/delete-spdeals','OnlineSalerecordController@deleteSpdeals');
    Route::post('/onsite-orders/delete-cake','OnlineSalerecordController@deleteCake');
    Route::post('/onsite-orders/delete-pizza','OnlineSalerecordController@deletePizza');
    Route::post('/onsite-orders/delete-burger','OnlineSalerecordController@deleteBurger');
    Route::post('/onsite-orders/delete-grill','OnlineSalerecordController@deleteGrill'); 

    // Confirm T-away orders
    Route::post('/onsite-orders/confirm-orders','OnsiteOrderController@confirmOrder')->name('onsite-confirm-order');















});