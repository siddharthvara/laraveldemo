@extends('layouts.app')

@section('content')
    <h1>Edit : {{ $flights->title }}</h1>
    <hr>
   
    <form action="{{ url('/Artical') }}/{{ $flights->id }}" method="POST" >
        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>  
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{ $flights->title }}">
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" rows="5"  name="body">{{ $flights->body }}</textarea>
        </div> 
        <button type="submit" class="btn btn-default">Update</button>
   </form>

   </br>

<!-- {{ var_dump($errors) }} -->

 @if ( $errors->any() )

     <ul class="alert alert-danger">
         @foreach ($errors->all() as $error)
             <li>{{ $error }}</li>
         @endforeach
     </ul>

 @endif
    
@endsection