<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Todos</title>
    <style>
    </style>
</head>
<body>
<h2>{{ $todo->id . ": " . $todo->title }}</h2>
<div>
    <p><b>Description:</b> {{ $todo->description }}</p>
    <p><b>Created at:</b> {{ $todo->created_at }}</p>
</div>

<a class="Todos_new" href="/todo">All Todos</a>
</body>
</html>
