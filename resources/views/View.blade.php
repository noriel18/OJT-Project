@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>View</title>
</head>
<body>
    <h2>View Students</h2>
    <table class="table table-striped">
    <tr>
        <th>Student Number</th>
        <th>Name</th>
        <th>Service</th>
        <th>option</th>
    <tr>
        <td>{{ $info->studentno }}</td>
        <td>{{ $info->name }}</td>
        <td>{{ $info->service }}</td>
</body>
</html>
