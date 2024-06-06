<!DOCTYPE html>
<html>
<head>
    <title>Laravel To-Do App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1>To-Do List</h1>
    <form action="/add" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="todo" class="form-control" placeholder="New to-do item" required>
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
    <form action="/reset" method="POST" class="mt-2">
        @csrf
        <button type="submit" class="btn btn-danger">Reset List</button>
    </form>
    <ul class="list-group mt-4">
        @foreach($todos as $todo)
            <li class="list-group-item">{{ $todo }}</li>
        @endforeach
    </ul>
</div>
</body>
</html>
