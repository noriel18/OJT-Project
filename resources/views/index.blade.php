@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull=left">
                <h2 align="center">Cashier System</h2>
                
</div>
</div>
</div>
<div class="row" align="left">
<div class="pull-right">
    <a class="btn btn-success" href="{{route('student.create')}}">Register Users</a>
</div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-sucess">
    <p>{{$message}}</p> 
</div>
@endif 

<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Student Number</th>
        <th>Name</th>
        <th>Service</th>
        <th>option</th>
    <tr>
    
     @foreach ($student as $key => $students)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $students->studentno }}</td>
        <td>{{ $students->name }}</td>
        <td>{{ $students->service }}</td>
        
        <td>
        <form method="POST" action="{{ route('student.destroy',$students->id)}}">
            @csrf
            <a class="btn btn-primary bs-white" href="{{ route('student.edit' ,$students->id)}}">EDIT</a>
            </form>
            <a class="btn btn-primary bs-white" href="{{ route('student.view' ,$students->id)}}">Display </a>
            </form>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="button" class="btn btn-success delete" value="{{ $students->id }}">Delete</button>
            
    </td>
</tr>
    </td>
</tr>

@endforeach
</table>
</table>
@section('script')
    <script>
        

         var form = $('#userform');

         $(document).on('click', '.submit_btn', function(e){
            e.prevent_default;
            form.submit();
         })


        $(document).on("click", ".delete", function(e){
            var id = $(this).val();
            
            if(confirm("Do you want to delete this record?")){
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN' : "{{ csrf_token() }}"
                    },
                    url: "{{ route('student.destroy') }}",
                    method: "POST",
                    data: {
                        "id": id,
                    },
                    success: function(data){
                        alert("Record Deleted!");
                        location.reload();
                    },
                    error: function(){
                        alert('Error');
                    },
                });
            }
        });
    </script>
@endsection







    

