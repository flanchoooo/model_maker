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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/define', 'ModelController@index')->name('define');
Route::get('/input', 'InputVariableController@index')->name('input');
Route::get('/company', 'CompanyController@index')->name('company');
Route::POST('/company/create', 'CompanyController@create');
Route::POST('/input/store', 'InputVariableController@store');
Route::POST('/define/store', 'ModelController@store')->name('define');



//new routes
Route::get('/companies', 'CompaniesController@index')->name('companies');
Route::get('/inputs', 'InputsTableController@index')->name('inputs');
Route::POST('/edit_company', 'EditcompanyController@index')->name('edit_company');
Route::POST('/edit_input', 'EditInputController@index')->name('edit_input');
Route::POST('/edit_company/edit{id}', 'EditcompanyController@edit')->name('update_company');
Route::POST('/drop_company', 'DropCompanyController@index')->name('drop_company');
Route::POST('/drop_company/destroy{id}', 'DropCompanyController@destroy')->name('drops_company');
Route::get('/expenses', 'ExpensesController@index')->name('expenses');
Route::POST('/expenses/store', 'ExpensesController@store')->name('store_expenses');
Route::POST('/edit_input/edit{id}', 'EditInputController@edit');
Route::POST('/drop_input', 'DropInputController@index')->name('drop_company');
Route::POST('/drop_input/destroy{id}', 'DropInputController@destroy');
Route::get('/expense', 'ExpensesTableController@index');
Route::POST('/edit_expenses', 'EditExpenseController@index');
Route::POST('/edit_expenses/edit{id}', 'EditExpenseController@edit');
Route::POST('/drop_expenses', 'DropExpenseController@index');
Route::POST('/drop_expenses/destroy{id}', 'DropExpenseController@destroy');
Route::POST('/business', 'BusinessController@index')->name('business');
Route::get('/businesses', 'BusinessesController@index')->name('businesses');
Route::get('/charts', 'ChartController@index')->name('charts');
