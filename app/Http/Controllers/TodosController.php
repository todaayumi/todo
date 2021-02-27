<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){

        $todos = Todo::all();
        return view('index')->with('todos', $todos);

    }

    public function delete(Request $request){
    
         $todo = Todo::find($request->id);
         $todo->delete();
        return redirect ('/');
    }

    public function post(Request $request){

        $todo_new = $request->task;
        Todo::create(['content' => $request->task]);
        return redirect('/');
    }
}
