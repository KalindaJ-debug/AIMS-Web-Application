$(function(){

    $("#contact-form").validate({
      rules: {
        //address fields
        name: {
          required: true,
          lettersonly: true,
          minlength: 3,
          maxlength: 20
        },
  
        email: {
          required: true,
          minlength: 6,
          email:true
  
        },
  
        subject: {
          required: true,
          minlength: 4,
          maxlength: 30,
          lettersonly: true
  
        },
  
        message: {
          required: true,
          maxlength:200,
          minlength: 5
        },
  
        issueradio:{
          required:true
        }
  
      } //rules for field inputs
  
    });
  
    //functions
    jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);
        }, "Only alphabetical characters");
  
    //messages
    $.validator.messages.required = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Required Field</font></small>';
    $.validator.messages.email = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter a valid email address</font></small>';
    $.validator.messages.minlength = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter more characters</font></small>';
    $.validator.messages.digits = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter only digits</font></small>';
    $.validator.messages.maxlength = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Exceeded maximum character limit!</font></small>';
    $.validator.messages.lettersonly = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter a valid name</font></small>';
  }) //end of function
  