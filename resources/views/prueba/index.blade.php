@extends('voyager::master')

@section('content')

<div class= "mb-2">
    <a class="btn btn-success" href="{{ route('prueba.create') }}">Crear</a>
</div>

<div class= "mb-2">
    <a class="btn btn-success" href="{{ route('prueba.edit') }}"> Editar</a>
</div>


<form method="post" action="{{ route('students.store') }}">
    <div class="form-group">
        @csrf
        <label for="name">Name</label>
        <input type="text" class="form-control" value="" name="name"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email"/>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" name="phone"/>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="text" class="form-control" name="password"/>
    </div>
    <button type="submit" class="btn btn-block btn-danger">Create User</button>
</form>

@endsection
