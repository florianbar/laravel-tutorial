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

Route::get('/tasks', function() {
	//use query builder
	$tasks = DB::table('tasks')->get();
	//or use a model to fetch data from db table (Eloquent in a dedicated class)
	$tasks = Task::all();
	$tasks = Task::incomplete()->get();

    return view('tasks.index', compact('tasks'));
});

// '/tasks/{task}' is called a wild card
Route::get('/tasks/{task}', function($id) {
	//use query builder
	$task = DB::table('tasks')->find($id);
	//or use a model to fetch data from db table (Eloquent in a dedicated class)
	$task = Task::find($id);

    return view('tasks.show', compact('task'));
});
