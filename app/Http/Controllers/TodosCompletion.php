<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TodosCompletion extends Controller
{
    public function store(Task $todo)
    {
        $todo->complete();
        return back();
    }

    public function destroy(Task $todo)
    {
        $todo->incomplete();
        return back();
    }
}
