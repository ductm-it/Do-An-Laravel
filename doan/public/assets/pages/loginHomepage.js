$.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }
});

$('#btnLogin').on('click',function(e){
    var username=$('#username1').val();
    var password=$('#password1').val();
    e.preventDefault();
    $.ajax({
            url:`/api/loginhomepage`,
            type:'POST',
            data:{username:username,password:password},
            success: function(result){
                var wc = `Welcome <strong>${result}</strong>`;
                if(result==0){
                   
                    $('#login_fail').modal('show');
                } else
                {
                    $('#myModal4').modal('hide');
                    $('#welcome').html(wc);
                    $('#login_success').modal('show');
                }

                
                }
            });
    })
// $('#btnlogin_success').on('click',function(){
//     console.log('vao btn click okee succes login');
//     $.ajax({
//         url:`/`,
//         type:'GET',
//         success: function(result){
//         location.reload();
//             }
//         });
// })
$('#logout-user').on('click',function(){
			$.ajax({
            url:`/api/logout2`,
            type:'POST',
            success: function(result){
            location.reload();
                }
            });
        })
        $('#logout-user1').on('click',function(){
                    // $.ajax({
                    // url:`/api/logout2`,
                    // type:'POST',
                    // success: function(result){
                    location.reload();
                    //     }
                    // });
                })

        //change password homepage
        $("#changepass").on('click',function(e){
            var currentPassword=$('#currentPassword').val();
            var newPassword=$('#newPassword').val();
            e.preventDefault();
            $.ajax({
                url:`/api/changePassword`,
                type:'POST',
                data:{currentPassword:currentPassword,newPassword:newPassword},
                success: function(result){
                    if(result==1){
                        $("#change_success").modal('show');
                        }
                    else if(result==0){
                            $("#change_fail").modal('show');

                        }
                }
            });
        })

        $(document).scroll(function(){
            if ($(window).scrollTop() > 150 )
            {
                $('.ban-top').addClass('fixed');
            } else {
                $('.ban-top').removeClass('fixed');
            }
        })