@extends('app')

@section('content')
<table class="table table-striped">
    <tr class="table-dark">
    <th>Id</th>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Datum_rođenja</th>
    <th>Pozicija</th>
    <th>Spol</th>
    <th>Drzava</th>
    <th>Actions</th>
    </tr>

    @foreach($igraci as $igrac)
       <tr>
         <td>{{ $igrac->id}}</td>
         <td>{{ $igrac->ime}}</td>
         <td>{{ $igrac->prezime}}</td>
         <td>{{ $igrac->datum_rođenja}}</td>
         <td>{{ $igrac->pozicija}}</td>
         <td>{{ $igrac->spol}}</td>
         <td>{{ $igrac->drzava}}</td>
         <td>
           <a href="javascript.alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
           <a class="btn btn-outline-danger" href="{{ route('igraci.destroy', ['igrac' => $igrac->id]) }}">Delete</a>
         </td>
       </tr>
    @endforeach
</table>
@endsection