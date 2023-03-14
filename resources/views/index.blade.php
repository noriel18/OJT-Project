@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull=left">
                <h2 align="center">Cashier System <i class="fa-solid fa-house"></i></h2>
                
</div>
</div>
</div>
<div class="row" align="left">
<div class="pull-right">


    <input class="form-control " type="text" id="search_input" name="search_input"  placeholder="Search">
    <button class="btn btn-outline-dark" id="btn_search" type="submit">Search</button>
    

</div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-sucess">
        <p>{{$message}}</p> 
    </div>
@endif 

    
    <div id="search_data">
        @include('partial.index_table_data')
    </div>
  


@section('script')
    <script>
        

         var form = $('#userform');

         var id = 0;

         $(document).on('click', '.submit_btn', function(e){
            e.prevent_default;
            form.submit();
         })


        $(document).on("click", ".delete", function(e){
            id = $(this).val();
        })

        $(document).on("click", ".confirm_delete", function(e){
            // var id = $(this).val();
            
            // if(confirm("Do you want to delete this record?")){
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
                        // alert("Record Deleted!");
                        location.reload();
                    },
                    error: function(){
                        alert('Error');
                    },
                });
            // }
        });


        $('#btn_search').on('click',function(){
           
            var query = $('#search_input').val();

            $.ajax({
                url:"search",
                type:"GET",
                data:{'search':query},

                success:function(data){
                    $('#search_data').html('');       
                    $('#search_data').html(data);       
                }
            });
        }); 
    </script>
@endsection







    

