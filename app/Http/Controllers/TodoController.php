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
            'todo' => 'required|string|max:255',
        ]);

        $todos = Session::get('todos',[]);
        $newTodo = $request->input('todo');
        array_unshift($todos,$newTodo);
        Session::put('todos',$todos);
        Session::flash('success', 'To-do added successfully!');

        return redirect('/');
    }


    public function reset(){
        Session::forget('todos');
        Session::flash('success', 'To-do reset successfully!');


        return redirect('/');
    }

}
