@extends('layout')
@section('content')
<h3>Student Details</h3>
<table style="border:0px;"><tr>

    <td>

        <p><b class="lbl">ID :  </b>{{ $student->id }}</p>
        <p><b class="lbl">Name : </b>{{ $student->name }}</p>
        <p><b class="lbl">Phone : </b>{{ $student->email }}</p>
        <p><b class="lbl">Email : </b>{{ $student->phone }}</p>
        <p><b class="lbl">Section : </b>{{ $student->section}}</p>

    </td>
    <td style="padding-left:150px;">
        <img src="/image/{{ $student->image}}" width="128" height = "128"/>
    </td>
    
    
</tr>

</table>


@endsection