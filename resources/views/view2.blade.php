@extends('layout')

@section('content')
<h1>Pending Students </h1>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Student Number</th>
        <th>Name</th>
        <th>Service</th>
    <tr>
    

    @foreach ($student as $key => $students)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $students->studentno }}</td>
        <td>{{ $students->name }}</td>
        <td>{{ $students->service }}</td>
        <td>
        <form method="POST" action="{{ route('student.destroyer',$students->id)}}">
            @csrf
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="button" class="btn btn-successs delete" value="{{ $students->id }}">Delete</button>
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
                    url: "{{ route('student.destroyer') }}",
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