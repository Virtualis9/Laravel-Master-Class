<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task List App</title>
    @yield('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    <h1>
        @if(session()->has('success'))
            <div>
                {{ session('success')}}
            </div>
        @endif
            
        
        @yield('title')
        

    </h1>
    <div>
        @yield('content')
    </div>

    
</body>
</html>