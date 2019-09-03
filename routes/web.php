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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/admin', 'admin.dashboard.index');
Route::view('/blank', 'admin.dashboard.blank_page');
Route::view('/boot', 'admin.dashboard.bootstrap');
Route::view('/charts', 'admin.dashboard.charts');
Route::view('/form', 'admin.dashboard.formcomponent');
Route::view('/frm-cus', 'admin.dashboard.form-custom');
Route::view('/frm-noti', 'admin.dashboard.form-notification');
Route::view('/frm-sam', 'admin.dashboard.form-samples');
Route::view('/index-2', 'admin.dashboard.index-2');
Route::view('/page-cal', 'admin.dashboard.page-calender');
Route::view('/page-error', 'admin.dashboard.page-error');
Route::view('/page-invoice', 'admin.dashboard.page-invoice');
Route::view('/page-lock', 'admin.dashboard.page-lockscreen');
Route::view('/page-login', 'admin.dashboard.page-login');
Route::view('/page-mail', 'admin.dashboard.page-mailbox');
Route::view('/page-user', 'admin.dashboard.page-user');
Route::view('/read', 'admin.dashboard.read-mail');
Route::view('/table', 'admin.dashboard.table-basic');
Route::view('/tabledata', 'admin.dashboard.tabledata');
Route::view('/ui', 'admin.dashboard.ui-cards');
Route::view('/wdg', 'admin.dashboard.widgets');

Route::view('/cart', 'user.pages.cart');
Route::view('/catalog','user.pages.catalog-list-page');
Route::view('/checkout', 'user.pages.checkout');
Route::view('/users', 'user.pages.index');
Route::view('/pdc', 'user.pages.product-detail');
Route::view('/reg', 'user.pages.register');
