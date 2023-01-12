@extends('layout')
@section('content')
<h3>Edit Student</h3>
<form method="POST" action="{{ route('students.update', $student->id) }}" enctype="multipart/form-data" >

    @method('PATCH') 
            @csrf
    
   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" value="{{ $student->name }}" name="name" />
</div> 

<div class="form-group>
    <label for="name" >Email: </label>
    <input type="text" class="form-control" value="{{ $student->email }}" name="email" />
</div> 

<div class="form-group>
    <label for="name" >Phone: </label>
    <input type="text" class="form-control" value="{{ $student->phone }}"  name="phone" />
</div> 

<div class="form-group>
    <label for="name" >Filieres: </label>
    <input type="text" class="form-control" value="{{ $student->filieres }}" name="filieres" />
</div>

<div class="form-group>
    <label for="name" >Image: </label>
    <input type="file" class="form-control" value="{{ $student->image}}" name="image" />
     <img src="/image/{{ $student->image}}" width="128" height = "128"/>
</div>

<button type="submit" class="btn btn-primary" >Update</button>

</form>

@endsection