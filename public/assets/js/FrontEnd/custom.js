$(document).ready(function(){

        $(document).on('change','#country',function(){
                var countryID = $(this).val();
                if(countryID){
                        $('.loader').show();
                        $.ajax({
                                type:"post",
                                dataType:"json",
                                url:"/states",
                                headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                'country_id':countryID
                                },
                                success:function(res){               
                                        if(res){
                                                $("#state").empty();
                                                $.each(res,function(key,value){
                                                        $("#state").append('<option value="'+key+'">'+value+'</option>');
                                                });
                                                $('.loader').hide();
                                        }else{
                                                $("#state").empty();
                                                $('.loader').hide();
                                        }
                                }
                        });
                }
        });
        $(document).on('change','#state',function(){
                var stateID = $(this).val();
                if(stateID){
                        $('.loader').show();
                        $.ajax({
                                type:"post",
                                dataType:"json",
                                url:"/cities",
                                headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                'state_id':stateID
                                },
                                success:function(res){               
                                        if(res){
                                                $("#city").empty();
                                                $.each(res,function(key,value){
                                                        $("#city").append('<option value="'+key+'">'+value+'</option>');
                                                });
                                                $('.loader').hide();
                                        }else{
                                                $("#city").empty();
                                                $('.loader').hide();
                                        }
                                }
                        });
                }
        });

        $(document).on('click','.btnRegister',function(){
                var name = $('.register-form #name').val();
                var email = $('.register-form #email').val();
                var phone = $('.register-form #phone').val();
                var password = $('.register-form #password').val();
                var cpassword = $('.register-form #cpassword').val();
                var state = $('.register-form #state').val();
                var country = $('.register-form #country').val();
                var city = $('.register-form #city').val();
                var gender = $(".register-form input[name='gender']:checked").val();
                if(password == cpassword){
                        $('.loader').show();
                        $('.errorMsg').hide();
                        $('.register-form #password').removeClass('error');
                        $('.register-form #cpassword').removeClass('error');
                        $.ajax({
                                type:'post',
                                dataType:'json',
                                url:'/registration',
                                headers: {
                                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                        'name':name,
                                        'email':email,
                                        'phone':phone,
                                        'password':password,
                                        'state':state,
                                        'country':country,
                                        'city':city,
                                        'gender':gender,
                                },
                                success:function(res){
                                        $('.loader').hide();
                                        if(res.success){
                                                $.toaster({ priority : 'success', title : 'Success', message : res.message,settings : {'timeout': 3000} });
                                        }else{
                                                $.toaster({ priority : 'danger', title : 'Error', message : res.message,settings : {'timeout': 3000} });
                                        }
                                }
                        });

                }else{
                        $('.register-form #password').addClass('error');
                        $('.register-form #cpassword').addClass('error');
                        $('.errorMsg').show();
                }
        });
});