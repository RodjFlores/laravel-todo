@extends('layout');

@section('content')
<html>
    <head>
        
    </head>
    
<body>
<br>
<br>
<br>
    <h1>{{$task->body}}</h1>   
    <p>
    Status: {{$task -> completed}}
    </p> 
</body>


</html>
@endsection