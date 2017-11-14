@if(Auth::check())

@if(in_array($teacher->id,$favorites))

    {{ Form::open(['route' => ['favorites.destroy', $teacher->id],  'method' => 'DELETE']) }}
@else
    {{ Form::open(['route' => ['favorites.store'],  'method' => 'POST']) }}
@endif
{{csrf_field()}}
<input type="hidden" name="teacher_id" value="{{$teacher->id}}">
<button class="btn-naked  {{in_array($teacher->id,$favorites)?'favorite' :'not-favorite'}}" type="submit">
    <i class="fa fa-heart"></i>
</button>
{{ Form::close() }}

{{ Form::open(['route' => ['error/back'],  'method' => 'get']) }}
<button type="submit">Go back</button>
{{ Form::close() }}

    @endif