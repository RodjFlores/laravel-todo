<html>
    <head>
        
    </head>
<body>
    <h1>THIS IS INDEX>BLADE>PHP</h1>
    <ul>
    
    @foreach($tasks as $task)
        <li><a href="/heroku/public/tasks/{{$task->id}}">: {{$task->body}} -- made in {{$task->created_at}}</a></li>
        @endforeach
    </ul>
    
</body>

</html>