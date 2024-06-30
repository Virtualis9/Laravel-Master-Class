@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
<style>
    .error-message{
        color: red;
        font-size: 0, 8rem;

    }
</style>
@endsection

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">
                Title
            </label>
            <input text="text" name="title" id="title">
            @error('title')
            <p> {{$message}}</p>                
            @enderror
        </div>

        <div>
            <label>Description</label>
            <textarea name="description" id="description" rows="5"></textarea>
            @error('description')
            <p> {{$message}}</p>                
            @enderror
        </div>

        <div>
            <label>Long Description</label>
            <textarea name="long_description" id="long_description" rows="10"></textarea>
            @error('long_description')
            <p> {{$message}}</p>                
            @enderror
        </div>

        <div>
            <button type="submit">Add Task</button>
        </div>
    </form>
@endsection