<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index()
    {
//      making just a request to the database for all tasks and then filter them into 2 array of completed and uncompleted
        $todos = Task::all()->toArray();

//        defining callbacks
        $getCompleted = function ($todo) {
            if ($todo["completed"]) {
                return $todo;
            }
        };
        $getUncompleted = function ($todo) {
            if (!$todo["completed"]) {
                return $todo;
            }
        };


//        now filter to divide into completed or uncompleted
        $completeds = array_filter($todos, $getCompleted);
        $unCompleteds = array_filter($todos, $getUncompleted);

//      now we have both completed & uncompleted tasks now just we have to send to view
        return view('todos.show',compact('completeds' , 'unCompleteds'));
    }

    public function add()
    {
        return view('todos.add');
    }

    public function create()
    {
        $data = request()->validate([
            'title'=> 'required|min:3|unique:tasks|max:255',
            'description'=>'required|min:5'
        ]);

        Task::create($data);

        return  redirect(route('todos.showAll'));
    }

    public function show(Task $todo)
    {
        return view('todos.showEach', compact('todo'));
    }

    public function destroy(Task $todo)
    {
        $todo->delete();
        return redirect(route('todos.showAll'));
    }

    public function update(Task $todo)
    {
        request()->has('completed') ? $todo->complete($todo) : $todo->incomplete($todo);
        return redirect(route('todos.showAll'));
    }
}

