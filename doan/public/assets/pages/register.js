$('#username').on('input',function(e){
    GetUsernameRegister=$('#username').val();
    //  console.log(GetUsernameRegister,'test');
     $.get(`/api/validateUserRegister/${GetUsernameRegister}`,(data,status) =>{
         $result=data;
        //  console.log($result,'result')
                 if($result!=0){
                     $('#trunguserRegister').show();
                 }
                 else{
                     $('#trunguserRegister').hide();
                 }
     });
 });
 $('#email').on('input',function(e){
    GetEmailRegister=$('#email').val();
    $.get(`/api/validateEmailRegister/${GetEmailRegister}`,(data,status)=>{
        $result=data;
        //  console.log($result,'result')
                 if($result!=0){
                     $('#trungEmailRegister').show();
                 }
                 else{
                     $('#trungEmailRegister').hide();
                 }
    });
 });

 //check validate Register homepage
 $.ajaxSetup({

    headers: {

        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

    }

});
 $('#btnRegister').on('click',function(e){
   
    var username=$('#username').val();
    var email=$('#email').val();
    var password=$('#password').val();
    var repassword=$('#repassword').val();
    e.preventDefault();
    $.ajax({
            url:`/api/registerAjax`,
            type:'POST',
            data:{username:username,email:email,password:password,repassword:repassword},
            success: function(result){
                console.log(result,'result')
                if(result==1){
                    console.log('vao if')
                    $('#success').modal('show');
                }
                else if(result==0){
                    console.log('vao trong else if')
                   
                    $('#danger').modal('show');
                }
                
                }
            });
    })