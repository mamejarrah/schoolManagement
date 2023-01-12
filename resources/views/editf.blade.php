@extends('layout')
@section('content')
<h3>Edit Filiere</h3>
<form method="POST" action="{{ route('filieres.update', $filiere->id) }}" enctype="multipart/form-data" >

    @method('PATCH')
            @csrf

   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" value="{{ $filiere->name }}" name="name" />
</div>

<div class="form-group>
    <label for="name" >Description: </label>
    <input type="text" class="form-control" value="{{ $filiere->description }}" name="description" />
</div>



<button type="submit" class="btn btn-primary" >Update</button>

</form>

@endsection
