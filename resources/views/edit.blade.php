@extends('layout')

@section('content')
<div class="row">
    <div class="col=lg-12 margin-tb">
        <div class="pull-left">
            <h2>EDIT USERS </h2> 
</div>
<div class="pull-right">
</div>
</div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <form action="{{ route('student.update', $students->id)}}" method="POST">
    @csrf
    <div class="col-sm-4">
    <div class="left">
            <strong>id</strong>
            <input type="text" name="id" class="form-control" value="{{$students->id}}" placeholder="id">
        </div>
        <div class="left">
            <strong>Name</strong>
            <input type="text" name="studentno" class="form-control" value="{{$students->studentno}}" placeholder="Studetno">
        </div>
        <div class="left">
            <strong>Phone</strong>
            <input class="form-control" name="name"  class="form-control" value="{{$students->name}}"   placeholder="Name"></textarea>
        </div>

        <div class="left">
            <strong>Occupation</strong>
            <input class="form-control" name="service"  class="form-control" value="{{$students->service}}"   placeholder="Service"></textarea>
        </div>

        <br>
        <div class="left">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
</div>

@endsection 