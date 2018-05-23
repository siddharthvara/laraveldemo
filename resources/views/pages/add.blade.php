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

    <form action="{{ action('UserController@setArtical') }}" method="POST" >
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>  
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <!-- <input type="textarea" class="form" name="body"> -->
            <textarea class="form-control" rows="5"  name="body"></textarea>
        </div> 
        <button type="submit" class="btn btn-default">Submit</button>
   </form>
    
@endsection
