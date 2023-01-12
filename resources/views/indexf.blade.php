@extends('layout')
@section('content')
<h3>Filiere List</h3>
<div class="table-wrapper">

    <table class="fl-table">

    <thead><tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Update</th>
        <th>Delete</th>
    </tr> </thead>

    <tbody>
        @foreach($filieres as $filiere)

        <tr>
            <td>{{ $filiere->id}}</td>
            <td>{{ $filiere->name}}</td>
            <td>{{ $filiere->description}}</td>

      
        

         <td>
            <form method="POST">
                <a class="btn btn-primary" href="{{ route('filieres.edit', $filiere->id)}}">Edit</a>

            </form>
        </td>

            
            <td>
                <form action="{{ route('filieres.destroy', $filiere->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>



        </tr>

        @endforeach
    </tbody>

    </table>


</div>


@endsection
