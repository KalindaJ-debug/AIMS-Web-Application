// field Validation functions
$(function(){

    $("#form-land").validate({
      rules: {
        //address fields
        addressNumber: {
          required: true,
          address:true,
          minlength: 2,
          maxlength: 10
        },
  
        street: {
          required: true,
          minlength: 6,
          lettersonly: false
  
        },
  
        lane: {
          required: true,
          minlength: 2,
          maxlength: 30,
          lettersonly: true
  
        },
  
        town: {
          required: true,
          lettersonly: true,
          minlength: 2
        },
  
        postal: {
          required: true,
          digits: true,
          minlength: 5,
          maxlength: 5
        },
  
        city: {
          required: {
            depends: function(element){
              if('none' == $('#selectCity').val()){
                $('#selectCity').val(''); //set value to empty string
              }//emd of if
              return true;
            } //end of fucntion
          } //end of required
        },
  
        district:{
          required:{
            depends: function(element){
              if('none' == $('#selectDistrict').val()){
                $('#selectDistrict').val('');
              }//end of if
              return true;
            }//end of fucntion
          } //end of required
        },
  
        province:{
          required:{
            depends: function(element){
              if('none' == $('#selectProvince').val()){
                $('#selectProvince').val('');
              }//end of if
              return true;
            }//end of function
          }//end of required
        },
  
        grama:{
          required:{
            depends:function(element){
              if('none' == $('#selectGN').val()){
                $('#selectGN').val('');
              }//end of if
              return true;
            }//end of fucntion
          } //end of required
        },
  
        hectares:{
          required: true,
          floatTest: true
        },
  
        planNo:{
          required: true,
          digits: true,
          minlength:2,
          maxlength:10
        },
  
        acre:{
          floatTest: true
        },
  
        rood:{
          floatTest: true
        },
  
        perch:{
          floatTest: true
        }
  
      } //rules for field inputs
  
    });
  
    //functions
    jQuery.validator.addMethod("lettersonly", function(value, element) {
      return this.optional(element) || /^[a-z\s]+$/i.test(value);
        }, "Only alphabetical characters");
  
    jQuery.validator.addMethod("address", function(value, element) {
      return this.optional(element) || /^\d{4}\/\d{4}\[A-Z]{2}+$/i.test(value);
    }, "Enter a valid address number");
  
    jQuery.validator.addMethod("floatTest", function(value, element){
      return this.optional(element) || /^\d+(\.\d+)*$/i.test(value);
    });
  
    // jQuery.validator.addMethod("poscode", function(value, element){
    //   return this.optional(element) || /^\\d{5}$/i.test(value);
    // }, "Enter a valid Sri Lankan postal code");
  
    //messages
    $.validator.messages.required = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Required Field</font></small>';
    $.validator.messages.minlength = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter more characters</font></small>';
    $.validator.messages.digits = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter only digits</font></small>';
    $.validator.messages.maxlength = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Exceeded maximum character limit!</font></small>';
    $.validator.messages.lettersonly = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter a valid street name</font></small>';
    $.validator.messages.address = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter a valid address number</font></small>';
    $.validator.messages.poscode = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter a valid Sri Lankan postal code</font></small>';
    $.validator.messages.floatTest = '<small class="form-text text-muted ml-3" style="margin-top:15px;"> <i class="fa fa-exclamation-circle" aria-hidden="true" style="color:#FF6347;"></i> <font class="ml-2 mr-4" style="color:#FF6347;">Please enter a valid value</font></small>';
  
  }) //end of function
  