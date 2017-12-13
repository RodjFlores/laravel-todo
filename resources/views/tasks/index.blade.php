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

    <table class="table table-table table-striped">
                <thead>
                <tr>                    
                    <th>Task Name</th>
                    <th>Completed</th>
                    <th>Created </th>
                    <th>Status</th>    
                    <th>Delete</th>                
                </tr>
                </thead>
                <tbody>
                @foreach($tasks as $task)
                @if($task->user_id == auth()->id())
                <tr >                    
                    <td><a href="/heroku/public/tasks/{{$task->id}}">{{$task->body}}</a></td>
                    <?php
                            if (!($task->completed)){
                              echo "<td bgcolor= \"#DFA1A1\">";  
                              echo "Incomplete";
                              echo "</td>";
                            } else {
                                echo "<td bgcolor= \"#A1DFAB\">";     
                              echo "Complete";
                              echo "</td>";
                            }
                            ?>
                
                    <td> {{$task -> created_at}}</td> 
                    <td>
                             <form action="/heroku/public/tasks/{{$task->id}}/edit" method="post" class="col-sm-8">
        
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    {{ method_field('patch') }}           
                                
        
                            
                                <button type="submit" class="btn btn-primary">Change State</button>
        
        
        
        
            </form>
                    
                    
        <td>
        <form action="/heroku/public/task/{{$task->id}}/delete" method="post" class="col-sm-8">
                    {{csrf_field()}}
                    {{ method_field('delete') }}
                     <button type="submit" class="btn btn-primary">Delete</button> 
                    </form> 
        
        </td>
                </tr>
                @endif
                </tbody>

                @endforeach
                
        @endif
            
    
    
</body>
@include('tasks/create')
</html>
@endsection