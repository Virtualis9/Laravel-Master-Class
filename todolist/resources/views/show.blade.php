@extends('layouts.app')

@section('title', $task->title)

@section('content')
  
<h1>{{$task->title}}</h1>

<p>{{ $task->description}}</p>


@if($task->long_description)
<p>
    {{ $task->long_description}}
</p>
@endif

@if($task->created_at)
<p>
    {{ $task->created_at}}
</p>
@endif

@if($task->updated_at)
    <p>
        {{ $task->updated_at}}
    </p>
@endif 
@endsection
