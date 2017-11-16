@extends('layouts.app')

@section('content')
<table border="1px" >
    <thead>
    <th>Name</th>
    <th>Email</th>
    <th></th>
    </thead>
    <tbody>
    <td>{{$teacher->name}}</td>
    <td>{{$teacher->email}}</td>
    <td><a href="{{ route('teacher.edit',Auth::user()->id) }}">Edit</a> </td>
    </tbody>
</table>
@endsection

