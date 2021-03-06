@extends('layouts.app')

@section('content')
    <div class="searchForm" style="margin-bottom: 5%;">
        <h3>Search</h3>
        <form class="form-inline" action="{{ url('/Search') }}" method="POST">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group">
              
              <input type="text" class="form-control" name="title">
            </div>
           
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
    </div>

    <table class="table" id = "myTable">
        <tr>
            <th>Title
                    <div class="dropdown">
                            <button  id="menu1" type="button" data-toggle="dropdown"><span class="caret" style="margin-left: 0px;"></span></button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('/Search') }}?val=ASC">ASC</a></li>
                              <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ url('/Search') }}?val=DESC">DESC</a></li>    
                            </ul>
                          </div>
            </th>
            <th>Discription</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($flights as $artical)
        <tr>
            <td><a href="Artical/{{$artical->id}}">{{ $artical->title }}</a></td>
            <td>{{ $artical->body }}</td>
            <td><a href="Artical/{{$artical->id}}/edit"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="Artical/delete/{{$artical->id}}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>
        @endforeach
    </table>
@endsection
   