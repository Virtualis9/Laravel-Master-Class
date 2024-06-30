<?php
use App\models\Task;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/', function () {
    return view('index', [
        'tasks' => Task::latest()->where('completed', true)->get()
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create') 
    -> name('tasks.create');


Route::get('/tasks/{id}', function ($id) {
return view('show', ['task' => Task::find($id)]);  
})->name('tasks.show');



Route::fallback(function () {
    return redirect()->route('tasks.index');
});

Route::post('/tasks', function(Request $request){
   $data = $request->validate([
    'title' => 'required|max:255',
    'description' => 'required',
    'long_description' => 'required'
   ]);

   $task = new Task;
   $task->title = $data['title'];
   $task->description = $data['description'];
   $task->long_description = $data['long_description'];

   $task -> save();

   return redirect()->route('tasks.show', ['id' => $task->id]);
   
})->name('tasks.store');


// Route::get('/hello', function () {
//     return 'hello';
// });


// Route::get('/xxx', function () {
//     return redirect('/greet');
// });

// Route::get('/greet/{name}', function ($name) {
//     return 'hello ' . $name . '!';
// });