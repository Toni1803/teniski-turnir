@extends('app')

@section('content')
<table class="table table-striped table-hover">
    <tr class="table-dark">
    <th>Id</th>
    <th>Pobjednik</th>
    <th>Broj_odigranih_setova</th>
    <th>Actions</th>
    </tr>

    @foreach($rezultati as $rezultat)
       <tr>
         <td>{{ $rezultat->id}}</td>
         <td>{{ $rezultat->pobjednik}}</td>
         <td>{{ $rezultat->broj_odigranih_setova}}</td>
         <td>
           <a href="javascript.alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
           <a class="btn btn-outline-danger" href="{{ route('rezultati.destroy', ['rezultat' => $rezultat->id]) }}">Delete</a>
         </td>
       </tr>
    @endforeach
</table>
@endsection