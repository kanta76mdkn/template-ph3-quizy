

@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
<html>
    <head>
    <title>quiz1</title>        
    <style></style>
    </head>
    <body>
        <h1>１．この地名は何て読む？：高輪</h1>
        <ul>
            <li>こうわ</li>
            <li>たかわ</li>
            <li>たかなわ</li>
        </ul>
        <h1>２．この地名は何て読む？：亀戸</h1>
        <ul>
            <li>かめいど</li>
            <li>かめど</li>
            <li>かめと</li>
        </ul>
        <h1>３．この地名は何て読む？：麹町</h1>
        <ul>
            <li>かゆまち</li>
            <li>おかとまち</li>
            <li>こうじまち</li>
        </ul>
    </body>
</html>

@endsection

@section('footer')
    copyright 2020 tuyano.
@endsection



