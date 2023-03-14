@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>REGISTRATION</h2>
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
<form  id="userforms" action="{{ route('student.store')}}" method="POST">
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

<div class="left">
    <strong>Degree</strong>
    <input class="form-control" name="degree" placeholder="Degree" required></textarea>
</div>

<br>
<div class="left">
    <button type="button" class="btn btn-primary submit"  data-toggle="modal" data-target="#submitmodal">Submit</button>
</div>
</div>
</form>
</div>

@endsection 

@section('modal')
<div class="row">
<div class="modal fade" id="submitmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Are you sure want to Submit?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" required >&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary submit_btn" >Submit</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script>
     var form = $('#userforms');

$(document).on('click', '.submit_btn', function(e){
    e.prevent_default;
    form.submit();
})

</script>
@endsection