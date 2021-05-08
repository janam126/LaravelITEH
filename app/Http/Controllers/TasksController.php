<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trening;

class TasksController extends Controller
{
    public function index(){
        $tasks = auth()->user()->tasks;
        return view('dashboard', compact('tasks'));
    }

    public function add(){
        return view('add');
    }

    public function create(Request $request){
        $this->validate($request, ['description' => 'required']);
        $task = new Trening();
        $task->description = $request->description;
        $task->user_id = auth()->user()->id;
        $task->save();
        return redirect('/dashboard');
    }

    public function edit(Trening $task){
        if(auth()->user()->id==$task->user_id)
            return view('edit', compact('task'));
        else
            return redirect('/dashboard');
    }

    public function update(Request $request, Trening $task){
        $this->validate($request, ['description' => 'required']);
        $task->descriotion = $request->description;
        $task->save();
        return redirect('/dashboard');
    }
}
