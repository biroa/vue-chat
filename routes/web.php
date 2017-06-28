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

use App\Events\MessagePosted;

Route::get('/', function () {
    return view('welcome');
});
//Use the middleware auth to authenticate
Route::get('/chat', function () {
    return view('chat');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/messages', function(){
    return App\Message::with('user')->get();
})->middleware('auth');

Route::post('/messages', function(){
    $user = Auth::user();
    $user->messages()->create([
        'message' => request()->get('message')
    ]);

    // Announce that a new message has been posted
    event(new MessagePosted());

    return ['status' => 'OK'];

})->middleware('auth');
