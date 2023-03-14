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
        <td>{{ $key + 3 }}</td>
        <td>{{ $students->studentno }}</td>
        <td>{{ $students->name }}</td>
        <td>{{ $students->service }}</td>
        

    </tr>
@endforeach

</table>


</table>