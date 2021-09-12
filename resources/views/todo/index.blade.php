<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do App</title>
    <link rel="stylesheet" href="{{URL::asset('css/index.css')}}" class="css">
</head>

<body>
    <div class="container">
        <div class="todo">
            <div class="tasks">
                @foreach($tasks as $task)
                <div class="task">
                    <h3>{{$task->todo}}</h3>
                </div>
                @endforeach
            </div>
            <div class="primary-btn"><button><a href="/todo/create">Create New Todo</a></button></div>
        </div>
    </div>
</body>

</html>