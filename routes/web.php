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

//    $user = \App\User::first();
//
//    $user->roles()->sync([2, 4]);   //sync - will erase former roles and replace with the given ones
//
//    $user->roles()->syncWithoutDetaching([3]);  //will add the given role without deleting the previous ones

    $role = \App\Role::find(4);

    $role->users()->sync([5]);

});
