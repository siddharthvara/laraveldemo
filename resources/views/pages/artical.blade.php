<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<body>
<div class="container"> -->

@extends('layouts.app')

@section('content')

    <table class="table">
        <tr>
            <td>Title</td>
            <td>Discription</td>
            <td></td>
        </tr>
        @foreach ($flights as $artical)
        <tr>
            <td><a href="Artical/{{$artical->id}}">{{ $artical->title }}</a></td>
            <td>{{ $artical->body }}</td>
            <td><a href="Artical/delete/{{$artical->id}}">Delete</a></td>
        </tr>
        @endforeach
    </table>
    
@endsection
    <!--
    </div>
</body>
</html>
-->