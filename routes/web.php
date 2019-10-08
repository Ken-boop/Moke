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

// Top画面(login,signup前)
Route::get('/welcome', 'HomeController@welcome');
//　ログイン・登録画面
Route::get('/resister', 'HomeController@resister');
// ログイン画面
Route::get('/login', 'HomeController@login');
// ホーム画面
Route::get('/content', 'HomeController@content');
// マイページ画面へ
//Route::get('/content/mypage', 'UsersController@showMyPage');
// // 新規イベント画面へ
// Route::get('/content/create', 'EventsController@showCreate')->name('Event.showCreate');
// // イベント編集画面へ
// Route::get('/home/edit', 'EventsController@showEdit')->name('Event.showEdit');
// // 招待画面へ
// Route::get('/home/invite', 'EventsController@showInvite')->name('Event.showInvite');
// // フレンド画面へ
// Route::get('/home/friends', 'UsersController@showFriends')->name('User.showFriends');
// // 通知画面へ
// Route::get('/home/notice', 'UsersController@showNotice')->name('User.notice');
// // イベント検索画面へ
// Route::get('/home/events', 'EventsController@showSearch')->name('Event.events');
// // ユーザー検索画面へ
// Route::get('/home/users', 'UsersController@showUsers')->name('User.users');
// // チャット画面へ
// Route::get('/home/chats', 'UsersController@showChat')->name('User.chats');


