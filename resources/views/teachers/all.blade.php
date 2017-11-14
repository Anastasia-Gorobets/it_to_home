@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="modal fade" id="favoritesModal"
             tabindex="-1" role="dialog"
             aria-labelledby="favoritesModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"
                            id="favoritesModalLabel">The Sun Also Rises</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Please confirm you would like to add
                            <b><span id="fav-title">The Sun Also Rises</span></b>
                            to your favorites list.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-default"
                                data-dismiss="modal">Close</button>
                        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Add to Favorites
          </button>
        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>All teachers</h1>
                @foreach($teachers as $teacher)
                    <div>
                    Name : {{$teacher->name}}<br>
                        <form  method="post" action="{{route('favorites.store')}}">
                            {{csrf_field()}}
                            <input type="hidden" name="teacher_id" value="{{$teacher->id}}">

                       <button class="btn-naked  {{in_array($teacher->id,$favorites)?'favorite' :'not-favorite'}}" type="submit">
                           <i class="glyphicon glyphicon-heart"></i>

                       </button>

                            </form>



                    <button class="send_email">Send email</button>
                        <div class="send_email_form">
                            <form action="/teachers" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="teacher_id" value="{{$teacher->id}}">
                                <div class="col-md-12">
                                    <!-- Subject Form Input -->
                                    <div class="form-group">
                                        <label class="control-label">Subject</label>
                                        <input type="text" class="form-control" id="subject_{{$teacher->id}}" name="subject" placeholder="Subject"
                                               value="{{ old('subject') }}">
                                    </div>

                                    <!-- Message Form Input -->
                                    <div class="form-group">
                                        <label class="control-label">Message</label>
                                        <textarea name="message" id="message_{{$teacher->id}}" class="form-control">{{ old('message') }}</textarea>
                                    </div>



                                <!-- Submit Form Input -->
                                    <div class="form-group">
                                        <button type="submit" id="submit_email_btn_{{$teacher->id}}" class="btn btn-primary form-control">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <br>


                        <hr>
                    </div>
                    @endforeach
            </div>
        </div>
    </div>
@endsection
