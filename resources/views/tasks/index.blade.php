@extends('layout');

@section('content')
<html>
    <head>
        
    </head>
<body>
    
    <h1>Task List</h1>
    
    @if($tasks == null)
     Empty List 

    @else
    <ul>
    @foreach($tasks as $task)
        <li><a href="/heroku/public/tasks/{{$task->id}}">{{$task -> id}}: {{$task->body}}</a>

        <?php
            if (!($task->completed)){
                echo "Incomplete";
            } else {
                echo "Complete";
            }
        ?> 
        
        <form action="/heroku/public/task/{{$task->id}}/delete" method="post" class="col-sm-8">
            {{csrf_field()}}
             {{ method_field('delete') }}
            <button type="submit" class="btn btn-primary">Delete</button> 
        </form>

        <form action="/heroku/public/tasks/{{$task->id}}/edit" method="post" class="col-sm-8">
   

        <div class="form-group">
            <label for="taskStatus">Task Status</label>
            @if($task->completed == 0)
                <select class="form-control" id="taskStatus" name="completed">
                    <option value="0" selected>Incomplete</option>
                    <option value="1">Complete</option>
                </select>
            @else
                <select class="form-control" id="taskStatus" name="completed">
                    <option value="0">Incomplete</option>
                    <option value="1" selected>Complete</option>
                </select>
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Save</button>




    </form>

        
        </li>
        @endforeach
    </ul>
        @endif    
    
    
</body>

</html>
@endsection