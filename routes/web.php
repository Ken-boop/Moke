<?php

/*
|--------------------------------------------------------------------------
| Web Routes コントローラーの命名は単数形にしよう〜
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// // Top画面(login,signup前)
// Route::get('/welcome', 'HomeController@welcome');
// //　ログイン・登録画面
// Route::get('/resister', 'HomeController@resister');
// // ログイン画面
// Route::get('/login', 'HomeController@login');
// // ホーム画面
// Route::get('/content', 'HomeController@content');
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
// // ログアウト画面へ

// Route::get('/home/logout', 'UsersController@logout')->name('Users.logout');

// Route::get('/home/logout', 'UsersController@logout')->name('Users.logout');
// a


// Route::resource('moke', 'MokeController');
// Route::get('event/create', 'EventController@edit')->name('event.create');
Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    // ホーム画面
    Route::get('/home', 'MokeController@index')->name('moke.index');
    // マイページ画面へ
    Route::get('/home/{user}/index', 'UserController@index')->name('user.index');
    // 新規イベント画面へ
    Route::get('/home/create', 'MokeController@create')->name('moke.create');
    // 新規イベント登録 
    Route::post('/home/create', 'MokeController@store')->name('moke.create');
    // イベント編集画面へ
    Route::get('/home/{moke}/edit', 'MokeController@edit')->name('moke.edit');
    // イベント編集実行
    Route::put('/home/{moke}/update', 'MokeController@update')->name('moke.update');
    // イベント詳細画面へ
    Route::get('/home/{moke}/detail', 'MokeController@show')->name('moke.detail');
    // // 招待画面へ
    // Route::get('/home/{moke}/invite', 'NotificationController@invite')->name('notification.invite');
    // // 招待実行
    // Route::put('/home/{moke}/{user}/invite', 'NotificationController@store')->name('notification.invite');
    // フレンド画面へ
    Route::get('/home/{user}/friend', 'FriendController@index')->name('friend.index');
    // 通知画面へ
    Route::get('/home/{user}/notification', 'NotificationController@index')->name('Notification.index');
    // // イベント検索画面へaaa
    // Route::get('/home/searchMoke', 'SearchMokeController@index')->name('searchMoke.index');
    // // イベント検索
    // Route::post('/home/searchMoke', 'SearchMokeController@index')->name('searchMoke.index');
    // // ユーザー検索画面へ
    // Route::get('/home/searchUser', 'SearchUserController@index')->name('searchUser.index');
    // Route::get('/home/users', 'UsersController@showUsers')->name('User.users');
    // チャット画面へ
    Route::get('/home/{user}/chat', 'ChatController@index')->name('chat.index');
});

// TOP画面(sign in, sign up)へ
Route::get('/top', 'HomeController@index')->name('top');