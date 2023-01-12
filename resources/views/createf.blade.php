@extends('layout')
@section('content')
<h3>Add Filiere</h3>
<form method="POST" action="{{ route('filieres.store') }}" enctype="multipart/form-data" >

    @csrf
   <div class="form-group>
    <label for="name" >Name: </label>
    <input type="text" class="form-control" name="name" />
</div>

 <div class="form-group>
    <label for="name" >Description: </label>
    <input type="text" class="form-control" name="description" />
</div>

<button type="submit" class="btn btn-primary" >Add Filiere</button>

</form>

@endsection
