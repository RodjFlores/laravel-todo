@extends('layout');

@section('content')
<html>
    <head>
        
    </head>
    
<body>
    <h1>{{$task->body}}</h1>   
    <p>
    Status: {{$task -> completed}}
    </p> 
</body>


</html>
@endsection