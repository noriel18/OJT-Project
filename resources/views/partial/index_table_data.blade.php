
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Student Number</th>
        <th>Name</th>
        <th>Service</th>
        <th>Option</th>
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
            </form>
            <a class="btn btn-primarys bs-red" href="{{ route('student.view' ,$students->id)}}">Display Counter1<i class="fa-solid fa-display"></i></a>
            </form>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="button" class="btn btn-successs delete" value="{{ $students->id }}" data-toggle="modal" data-target="#submitmodal">Delete    <i class="fa-solid fa-trash-can"></i>
    </td>
</tr>
@endforeach


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
        <button type="button" class="btn btn-successs confirm_delete">Delete<i class="fa-solid fa-trash-can"></i>
      </div>
    </div>
  </div>
</div>

@endsection

</table>


