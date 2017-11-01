@extends('layout')

@section('content')

{{$name}}
@foreach($tasks as $task)
    <li>{{$task}}</li>
@endforeach
<h1>Hello World</h1>
@endsection

