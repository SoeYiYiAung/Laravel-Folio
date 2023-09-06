@php
    use Illuminate\Support\Facades\Gate;

    Gate::authorize('view',$blog)
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Blog detail id - {{$blog->title}}</h1>
    <h3>Author - {{$blog->author->name}}</h3>
</body>
</html>