<div>
    Name : {{$teacher->name}}<br>
    @include('teachers.partials.favorite-button')

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