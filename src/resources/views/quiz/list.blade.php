<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>list</title>
    </head>

<body>
    <!-- <div class="links">
        <a href="./quiz/1">東京</a>
        <a href="./quiz/2">広島</a>
    </div>   -->
    @foreach ($links as $link)
    <div>
        <a href="quiz/{{$link->id}}">{{$link->name}}</a>
    </div>
    @endforeach 
</body>
</html>






 