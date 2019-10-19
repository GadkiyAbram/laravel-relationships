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

//Route::get('/', function () {
//
//    $user = factory(\App\User::class)->create();    //creates a new User;
//
//    $user->phone()->create([
//        'phone' => '222-333-4444',
//    ]);
//});

Route::get('/', function (){

    $user = factory(\App\User::class)->create();

    //Option 1:
//    $post = new \App\Post([
//        'title' => 'Title Here',
//        'body' => 'body Here',
//    ]);
//
//    $user->posts()->save($post);

    //Option 2: - preferable one

    $user->posts()->create([
        'title' => 'Title Here',
        'body' => 'body Here',
    ]);

    //Updating:
    $user->posts->first()->title = 'New Title';
    $user->posts->first()->body = 'New Body';

    $user->push();

    return $user->posts;

});
