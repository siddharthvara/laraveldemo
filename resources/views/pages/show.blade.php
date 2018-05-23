@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $flights->title }}</h1>
        <p>{{ $flights->body }}</p>
    </div>    
@endsection