<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>

<style>

</style>

    <ul class="list">
        <li><a href="{{route('welcome')}}">Home</a></li>
        <li><a href="{{route('about')}}">About Us</a></li>
        <li><a href="{{route('contact')}}">Contact Us</a></li>
        <li><a href="{{route('todos.showAll')}}">Tasks List</a></li>
        <li><a href="{{route('todos.add')}}">New Task</a></li>
    </ul>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
