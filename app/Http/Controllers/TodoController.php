<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TodoController extends Controller
{
    public function index(){
        $todos = Session::get('todos',[]);

        return view('todo',compact('todos'));
    }

    public function add(Request $request){
        $request->validate([
            'todos' => 'required|string|max:255',
        ]);

        $todos = Session::get('todos',[]);
        $newTodo = $request->input('todo');
        array_unshift($todos,$newTodo);
        Session::put('todos',$todos);

        return redirect('/');
    }


    public function reset(){
        Session::forget('todos');

        return redirect('/');
    }

}
