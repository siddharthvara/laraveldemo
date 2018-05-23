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
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
    <table class="table" id = "myTable">
        <tr>
            <th>Title</th>
            <th>Discription</th>
            <th></th>
            <th></th>
        </tr>
        @foreach ($flights as $artical)
        <tr>
            <td><a href="Artical/{{$artical->id}}">{{ $artical->title }}</a></td>
            <td>{{ $artical->body }}</td>
            <td><a href="Artical/delete/{{$artical->id}}">Delete</a></td>
            <td><a href="Artical/{{$artical->id}}/edit">Edit</a></td>
        </tr>
        @endforeach
    </table>

    <script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

@endsection
    <!--
    </div>
</body>
</html>
-->