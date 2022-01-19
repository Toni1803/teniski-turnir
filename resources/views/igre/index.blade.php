@extends('app')

@section('content')
<table class="table">
    <tr class="table-dark">
    <th>Id_turniri</th>
    <th>Id_igraci</th>
    <th>Kada</th>
    <th>Actions</th>
    </tr>

    @foreach($igre as $igra)
       <tr>
         <td>{{ $igra->turnir->ime_turnira}}</td>
         <td>{{ $igra->igrac->ime}}</td>
         <td>{{ $igra->kada}}</td>
         <td>
           <a href="javascript.alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
           <a class="btn btn-outline-danger" href="{{ route('igre.destroy', ['igra' => $igra->id]) }}">Delete</a>
         </td>
       </tr>
    @endforeach
</table>
@endsection