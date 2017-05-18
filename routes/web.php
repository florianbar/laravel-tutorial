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

use App\Task;

/* 
 * For most routes you'd need a:
 * - controller => PostsController
 * - Eloquent model => Post
 * - migration => create_posts_table
 *
 * Seperate commands
 * -----------------
 * php artisan make:controller PostsController
 * php artisan make:model Post
 * php artisan make:migration create_posts_table --create=posts
 *
 * Combined command to create all 3
 * --------------------------------
 * php artisan make:model Post -mc
 */

Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TasksController@index');

/* 
 * '/tasks/{task}' is called a wild card
 */
Route::get('/tasks/{task}', 'TasksController@show');

