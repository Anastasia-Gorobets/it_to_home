
$(document).on('click','.send_email', function () {
$('.send_email_form').hide();
$(this).next('.send_email_form').show();

});

$('#favoritesModal').on("show.bs.modal", function (e) {
    $("#favoritesModalLabel").html($(e.relatedTarget).data('title'));
    $("#fav-title").html($(e.relatedTarget).data('title'));
});


/*
$(document).on('click','button[id^=submit_email_btn_]', function (e) {
e.preventDefault();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    var current_id = $(this).attr('id');
    var teacher_id = current_id.slice('submit_email_btn_'.length);
    var _token = $("input[name='_token']").val();

    var subject= $("input[id='subject_"+teacher_id+"']").val();

    var message = $("textarea[id='message_"+teacher_id+"']").val();

    $.ajax({

        url: "/teachersMessage",

        type:'POST',

        data: {_token:_token, subject:subject, message:message},

        success: function(data) {

            if($.isEmptyObject(data.error)){

                alert(data.success);

            }else{

                printErrorMsg(data.error);

            }

        }

    });






});

*/
