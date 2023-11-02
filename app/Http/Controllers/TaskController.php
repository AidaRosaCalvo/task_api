<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::latest()->get();
        return response()->json($tasks);        
    }

   
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_field' => 'required|string|max:255',
        ]);
        if($request->done_field!=null){
            $task=Task::create([
                'name' => $request->name_field,            
                'done' =>$request-> done_field,
            ]);
        }else{
            $task=Task::create([
                'name' => $request->name_field,                            
            ]);
        }
        
        return response()->json(["message"=>"task created successfully","task"=>$task]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        return response()->json($task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update([
            "name"=> $request->name_field,
            "done"=>$request->done_field,
        ]);
        
        return response()->json(["message"=>"the task was updated","task"=>$task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response()->json(["message "=> "deleted task", "task"=>$task]);
    }
}
