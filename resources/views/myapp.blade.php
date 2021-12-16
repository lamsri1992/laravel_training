<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <div>
            <h1>Hello World, Satiya'Dev</h1>
            <a href="/add">Insert Data</a>
            @foreach ($emp as $emps)
            <p>{{ $emps->id }}</p>
            <p>{{ $emps->name }}</p>
            <p>{{ $emps->position }}</p>
            <p>{{ $emps->salary }}</p>
            <a href="{{ route('show',$emps->id) }}">Edit</a>
            <a href="{{ route('delete',$emps->id) }}">Delete</a>
            <hr>
            @endforeach
        </div>
    </body>
</html>
