<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{

    public function index()
    {
        $todos = Todo::all();
        return \View::make('toDo.index')
            ->with('todos', $todos);

    }

    public function create()
    {
        $todo = new Todo;
        $todo->title = 'Title' . random_int(1, 9999);
        $todo->description = 'Description' . random_int(1, 9999);
        $todo->save();

        return \Redirect::to('todo');
    }

    public function show(int $id)
    {
        $todo = Todo::find($id);

        return \View::make('toDo.show')
            ->with('todo', $todo);
    }
}
