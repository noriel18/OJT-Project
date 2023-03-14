
@extends('layout')

@section('content')
    <h2>Please Go to Cashier Counter 1</h2>
    <table class="table table-striped">
    <tr>
        <th>Student Number</th>
        <th>Name</th>
        <th>Service</th>
        <th>Time</th>
        <th>Option</th>
    <tr>
        <td>{{ $info->studentno }}</td>
        <td>{{ $info->name }}</td>
        <td>{{ $info->service }}</td>
        <td>{{ $info->created_at }}</td>
    <td>  
        <form method="POST" action="{{ route('student.destroys',$info->id)}}">
            @csrf
            
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <input type="hidden" value="{{ $info->id }}" name="id">
            <button type="button" class="btn btn-success delete" value="{{ $info->id }}">Delete</button>      
        </form>
    </td>
    <table>

    </table>
</tr>
    </td>
    </tr>
    <td><h2>Next Transactions.....</h2></td>


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
                    url: "{{ route('student.destroys') }}",
                    method: "POST",
                    data: {
                        "id": id,
                    },
                    success: function(data){
                        alert("Record Deleted!");
                        // location.reload();
                        location.href = "/";

                    },
                    error: function(){
                        alert('Error');
                    },
                });
            }
        });
    </script>
@endsection


