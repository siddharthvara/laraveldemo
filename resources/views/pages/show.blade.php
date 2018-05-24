@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $flights->title }}</h1>
        <p>{{ $flights->body }}</p>
    </div> 
    <button><a href="{{ url('/Artical') }}"><span class="glyphicon glyphicon-arrow-left"></span></a></button>   
@endsection