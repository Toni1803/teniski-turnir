@extends('app')

@section('content')
<table class="table table-success table-striped">
    <tr class="table-dark">
    <th>Id</th>
    <th>Id_igrac</th>
    <th>Id_turniri</th>
    <th>Runda</th>
    <th>Rezultat</th>
    <th>Actions</th>
    </tr>

    @foreach($mecevi as $mec)
       <tr>
         <td>{{ $mec->id}}</td>
         <td>{{ $mec->id_igrac}}</td>
         <td>{{ $mec->turnir->ime_turnira}}</td>
         <td>{{ $mec->runda}}</td>
         <td>{{ $mec->rezultat}}</td>
         <td>
           <a href="javascript.alert('not implemented yet')" class="btn btn-outline-primary">Edit</a>
           <a class="btn btn-outline-danger" href="{{ route('mecevi.destroy', ['mec' => $mec->id]) }}">Delete</a>
         </td>
       </tr>
    @endforeach
</table>
@endsection