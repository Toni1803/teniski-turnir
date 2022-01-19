@extends('app')

@section('content')
<table class="table table-hover">
    <tr class="table-dark">
    <th>Id</th>
    <th>Kategorija</th>
    <th>Actions</th>
    </tr>

    @foreach($kategorije_turnira as $kategorija_turnira)
       <tr>
         <td>{{ $kategorija_turnira->id}}</td>
         <td>{{ $kategorija_turnira->kategorija}}</td>
         <td>
           <a href="javascript.alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
           <a class="btn btn-outline-danger" href="{{ route('kategorije_turnira.destroy', ['kategorija_turnira' => $kategorija_turnira->id]) }}">Delete</a>
         </td>
       </tr>
    @endforeach
</table>
@endsection