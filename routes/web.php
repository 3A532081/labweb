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
/*首頁*/
Route::get('/', ['as' => 'index', 'uses' => 'MemberController@index']);

/*各分頁*/
Route::get('about', ['as' => 'about', 'uses' => 'MemberController@about']);
Route::get('paper', ['as' => 'paper', 'uses' => 'MemberController@paper']);
Route::get('paperyahan', ['as' => 'paper_y', 'uses' => 'MemberController@paper_yahan']);
Route::get('paperpeiju', ['as' => 'paper_p', 'uses' => 'MemberController@paper_peiju']);
Route::get('enviro', ['as' => 'enviro', 'uses' => 'MemberController@enviro']);
Route::get('members', ['as' => 'members', 'uses' => 'MemberController@members']);
Route::get('tech', ['as' => 'tech', 'uses' => 'MemberController@tech']);

/*後台成員分頁*/
Route::get('/back/members'    , 'MemberController@back_member')->name('back.members');
Route::get('/back/members/create'    , 'MemberController@back_member_create')->name('back.members.create');
Route::post('/back/members', 'MemberController@back_member_store')->name('back.members.store');
Route::get('/back/members/{id}/edit' , 'MemberController@back_member_edit')->name('back.members.edit');
Route::patch('/back/members/{id}'    , 'MemberController@back_member_update')->name('back.members.update');
Route::delete('/back/members/{id}'   , 'MemberController@back_member_destroy')->name('back.members.destroy');
/*後台老師paper分頁*/
Route::get('/back/papers'    , 'MemberController@back_papers')->name('back.papers');
Route::get('/back/papers/create'    , 'MemberController@back_papers_create')->name('back.papers.create');
Route::post('/back/papers', 'MemberController@back_papers_store')->name('back.papers.store');
Route::get('/back/papers/{id}/edit' , 'MemberController@back_papers_edit')->name('back.papers.edit');
Route::patch('/back/papers/{id}'    , 'MemberController@back_papers_update')->name('back.papers.update');
Route::delete('/back/papers/{id}'   , 'MemberController@back_papers_destroy')->name('back.papers.destroy');
/*登入用的路由 */
Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/
Route::get('/back/home', 'HomeController@index_lab')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
