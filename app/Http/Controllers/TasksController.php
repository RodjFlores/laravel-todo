<?php

namespace App\Http\Controllers;
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    

    public function index()
    {  
             
        $tasks = Task::all();// cannot find App/task goes to controller folder
        return view("tasks/index", compact('tasks'));
    }

    public function show(Task $task)
    {

        return view('tasks/show', compact('task'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tasks = Task::all();
        return view('task.create', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $task = new Task;
        $task->body = request('body');
        $task->user_id = auth()->id();
        $task->completed = 0;
        $task->save();
        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //        
        $task = Task::find($task->id);
        if($task -> completed == 0) {
            $task -> completed = 1;
        }else{
            $task -> completed = 0;
        }
        $task->save();
        

        return redirect('/tasks');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Task $task)
    {
        //
        $task->body = request('body');
        $task->completed = request('completed');
        $task->save();
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete(Task $task)
    {
        $task->delete();
        // redirect
        return redirect('/tasks');
    }
}
