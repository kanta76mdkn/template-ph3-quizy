<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>list</title>
    </head>

<body>
    @foreach ($links as $link)
    <div>
        <a href="{{route('quiz',['id' => $link->id ])}}">{{$link->name}}</a>
    </div>
    @endforeach 
</body>
</html>


