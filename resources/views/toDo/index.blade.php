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
<h1>All of the Todos</h1>
<table class="Todos">
    <thead class="Todos_header">
    <tr>
        <td class="Todos_col">ID</td>
        <td class="Todos_col">Title</td>
        <td class="Todos_col">Description</td>
        <td class="Todos_col">Created at</td>
    </tr>
    </thead>
    <tbody>
    @if (count($todos))
        @foreach($todos as $key=>$value)
            <tr class="Todos_row">
                <td class="Todos_col">{{ $value->id }}</td>
                <td class="Todos_col"><a class="Todos_link" href="/todo/{{ $value->id }}">{{ $value->title }}</a></td>
                <td class="Todos_col">{{ $value->description }}</td>
                <td class="Todos_col">{{ $value->created_at }}</td>
            </tr>
        @endforeach
    @else
        <tr class="Todos_row">
            <td class="Todos_col" colspan="4">No todos</td>
        </tr>
    @endif
    </tbody>
</table>
<a class="Todos_new" href="/todo/create">Generate New Todo</a>
</body>
</html>
