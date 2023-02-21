@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>ADD NEW USERS</h2>
</div>
<div class="pull-right">    
</div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $errors)
        <li>{{$error}}</li>
        @endforeach
</ul>
</div>
@endif

<div class="row">
<form  id="userform" action="{{ route('student.store')}}" method="POST">
    @csrf
<div class="col-sm-4">
    <div class="left">
    <strong>Student Number</strong>
    <input type="text" name="studentno" class="form-control" placeholder="StudentNumber " required>
</div>
 
<div class="left">
    <strong>Name</strong>
    <input class="form-control" name="name" placeholder="Name" required></textarea>
</div>

<div class="left">
    <strong>Service</strong>
    <input class="form-control" name="service" placeholder="Service" required></textarea>
</div>

<br>
<div class="left ">
    <button type="submit bg-success " class="btn btn-primary ">Submit</button>
</div>
</div>
</form>
</div>

@endsection 