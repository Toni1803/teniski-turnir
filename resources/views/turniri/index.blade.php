@extends('app')

@section('content')
<table class="table table-bordered border-primary">
    <tr class="table-dark">
    <th>Id</th>
    <th>Ime_turnira</th>
    <th>Vrijeme_odrzavanja</th>
    <th>Vrsta podloge</th>
    <th>Lokacija</th>
    <th>Id_kategorije_turnira</th>
    <th>Id_rezultati</th>
    <th>Actions</th>
    </tr>

    @foreach($turniri as $turnir)
       <tr>
         <td>{{ $turnir->id}}</td>
         <td>{{ $turnir->ime_turnira}}</td>
         <td>{{ $turnir->vrijeme_odrzavanja}}</td>
         <td>{{ $turnir->vrsta_podloge}}</td>
         <td>{{ $turnir->lokacija}}</td>
         <td>{{ $turnir->kategorija_turnira->kategorija}}</td>
         <td>{{ $turnir->rezultat->pobjednik}}</td>
         <td>
           <a href="javascript.alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
           <a class="btn btn-outline-danger" href="{{ route('turniri.destroy', ['turnir' => $turnir->id]) }}">Delete</a>
         </td>
       </tr>
    @endforeach
</table>
@endsection