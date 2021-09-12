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
            <form action="/todo" method="POST">
                @method('POST')
                @csrf
                <input type="text" placeholder="To Do Name" name="todo">
                <div class="primary-button"><button>Add Todo</button></div>
            </form>
        </div>
    </div>
</body>

</html>