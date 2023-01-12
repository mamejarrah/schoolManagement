@extends('layout')
@section('content')
<h3>Student list</h3>


<div class="table-wrapper">

    <table class="fl-table">

    <thead><tr>

        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Filieres</th>
        <th>Image</th>
        <th>Show</th>
        <th>Update</th>
        <th>Delete</th>


    </tr> </thead>

    <tbody>
        @foreach($mark_students as $student)

        <tr>
            <td>{{ $student->id}}</td>
            <td>{{ $student->name}}</td>
            <td>{{ $student->email}}</td>
            <td>{{ $student->phone}}</td>
            <th>{{ $student->filieres}}</th>
            <td><img src="/image/{{ $student->image}}" width="96" height="96" /></td>

        <td>
            <form method="POST">
                <a class="btn btn-info" href="{{ route('students.show', $student->id)}}">Show</a>

            </form>
        </td>

         <td>
            <form method="POST">
                <a class="btn btn-primary" href="{{ route('students.edit', $student->id)}}">Edit</a>

            </form>
        </td>


            <td>
                <form action="{{ route('students.destroy', $student->id)}}" method="post">
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