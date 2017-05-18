<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() 
    {
		//use a model to fetch data from db table (Eloquent in a dedicated class)
		$tasks = Task::all();
		$tasks = Task::incomplete()->get();

	    return view('tasks.index', compact('tasks'));
    }

    public function show(Task $task) 
    {
		//use a model to fetch data from db table (Eloquent in a dedicated class)
		//$task = Task::find($id);

	    return view('tasks.show', compact('task'));
    }
}