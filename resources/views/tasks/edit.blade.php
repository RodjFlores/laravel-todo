@extends('layout')

@section('content')

   <form action="/tasks/{{$task->id}}/edit" method="post" class="col-sm-8">

       <div class="form-group">
           {{ csrf_field() }}
           {{ method_field('PATCH') }}
           <label for="taskTitle">Task Title</label>
           <input type="text" class="form-control" id="taskTitle" name="body" value="{{$task->body}}">
       </div>
       <div class="form-group">
           <label for="taskStatus">Task Status</label>
           <select class="form-control" id="taskStatus" name="completed" value="{{$task->completed}}">
               <option value="1">Complete</option>
               <option value="2">Incomplete</option>
           </select>
       </div>
       <button type="submit" class="btn btn-primary">Save</button>

   </form>
   <p>
   <form action="/tasks/{{$task->id}}/delete" method="post" class="col-sm-8">
       {{ csrf_field() }}
       {{ method_field('DELETE') }}
       <button type="submit" class="btn btn-primary">Delete</button>

   </form>
   Created at: {{date("F d, Y h:i:s", strtotime($task->created_at))}}</br>
   Updated at: {{$task->updated_at}}</br>
   </p>

@endsection

store method:

       $task = new Task;
       $task->body = request('body');
       $task->completed = request('completed');
       $task->save();
       return redirect('/tasks');


[7:57] 
public function update(Task $task)
   {
       $task->body = request('body');
       $task->completed = request('completed');
       $task->save();
       return redirect('/tasks');
   }


[7:57] 
public function destroy(Task $task)
   {
       //
       $task->delete();

       // redirect
       return redirect('/tasks');
   }