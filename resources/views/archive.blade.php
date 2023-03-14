@extends('layout')

@section('content')
<h1>Archive Students Info </h1>
<table class="table table-striped">
    <tr>
        <th>No</th>
        <th>Student Number</th>
        <th>Name</th>
        <th>Service</th>
        <th>Degreee</th>
        <th>Options</th>
    <tr>

    @foreach ($students as $key => $student)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $student->studentno }}</td>
        <td>{{ $student->name }}</td>
        <td>{{ $student->service }}</td>
        <td>{{ $student->degree }}</td>
    </tr>

    @endforeach
</table>