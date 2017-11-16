@extends('layouts.app')

@section('content')

    <h1>Edit {{ $user->name }}</h1>

    @can('update',$user)

        <form enctype="multipart/form-data" method="POST" action="{{route('teacher.update', $teacher->id)}}">

            {{csrf_field()}}


            <img src="/storage/{{$user->avatar_path}}" width="200" height="200">
           <p>Add avatar</p>

            <input type="file" name="avatar">


            <input type="hidden" name="user_id" value="{{$user->id}}">

            <div class="form-group">
                Name:
                <input class="form-control" type="text" name="name" value="{{$user->name}}">
            </div>

            <div class="form-group">
                Email:
                <input class="form-control" type="email" name="email" value="{{$user->email}}">
            </div>

            <p>Upload your work photos:</p>





            <button type="submit">Edit</button>


        </form>








    @endcan



    @include('errors.validate')




@endsection