$(document).ready(function(){

    $('input[name="username"]').keydown(function(){
        $(this).removeClass('is-invalid');
        $('#userErr').addClass('d-none');
    })

    $('input[name="password"]').keydown(function(){
        $(this).removeClass('is-invalid');
        $('#passErr').addClass('d-none');
    })

    $('#formLogin').submit(function(e){
        e.preventDefault();
        //set display errors
        $('input[name="password"]').removeClass('is-invalid');
        $('input[name="password"]').removeClass('is-invalid');
        $('#userErr').addClass('d-none');
        $('#passErr').addClass('d-none');

        //set button loading...
        $('button[type="submit"]').addClass('disabled');
        $('button[type="submit"]').html('Loading...');
        $.ajax({
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(data){
                $('button[type="submit"]').removeClass('disabled');
                $('button[type="submit"]').html('Let me in');
                if(data.status == 400){
                    if(data.username){
                        $('#userErr').html(data.username);
                        $('#userErr').removeClass('d-none');
                        $('input[name="username"]').addClass('is-invalid');
                    }
                    if(data.password){
                        $('#passErr').html(data.password);
                        $('#passErr').removeClass('d-none');
                        $('input[name="password"]').addClass('is-invalid');
                    }
                } else {
                    window.location.assign(base_url + 'Dashboard');
                }
            },
            error: function(xhr, ajaxOptions, thrownError){
                $('button[type="submit"]').removeClass('disabled');
                $('button[type="submit"]').html('Let me in');
                swal.fire({
                    title: xhr.status,
                    icon: 'warning',
                    text: thrownError
                })
            }
        })
    })

})