 $('document').ready(function(){

            $('#form').validate({
                    rules:{
                        "name":{
                            required:true,
                            maxlength:40
                        },
                        "phone":{
                            required:true,
                            maxlength:11,
                            digits:true
                        },

                        "email":{
                            required:true,
                            email:true,
                            maxlength:100
                        },
                        "password":{
                            required:true,
                            minlength:4
                        },
                        "repassword":{
                            required:true,
                            minlength:4,
                            equalTo:"#password"
                        },

                        "message":{
                            required:true
                        }},

                    messages:{
                        "name":{
                            required:"This field is required"
                        },
                        "phone":{
                            required:"Phone Number"
                        },

                        "email":{
                            required:"This field is required",
                            email:"Please enter a valid email address"
                        },
                        "password":{
                            required:"This field is required",
                        },
                        "repassword":{
                            required:"This field is required",
                            
                        },

                        "message":{
                            required:"This field is required"
                        }},

                    submitHandler: function(form){
                      $(form).ajaxSubmit({
        target: '#preview', 
        success: function() { 
        $('#formbox').hide('fast'); 
        } 
    }); 
            
                    }
                
            })
                        
        });