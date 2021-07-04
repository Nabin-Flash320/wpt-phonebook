

$(document).ready(function(){

    function validationCeck(input, flag)
    {
      if(flag == 1){
        var regEx = /^\w{6,}$/;
        if(input.match(regEx))
         {
           return true;
         }
        else
          {
           return false;
          }
      }
      else if(flag == 2){
        var regEx = /^\d{10,}$/;
        if(input.match(regEx))
         {
           return true;
         }
        else
          {
           return false;
          }
      }
    }

    $("#signin_submit_button").click(function(event){
      const name = $("#signin_name_input").val();
      const phonenumber = $("#signin_phonenumber_input").val();
      const address = $("#signin_address_input").val();
      var error_0 = (name.length == 0 ? "Name" : (phonenumber.length == 0 ? "Phone number" : (address.length == 0 ? "Address" : true)))

      if( error_0 != true){
        $("#signin_form_error_label").html(error_0 + " is mandatory!!");
      }
      else{
        if (validationCeck(name, 1) != true){
          $("#signin_form_error_label").html("Invalid name");
        }
        else{
          $("#signin_form_error_label").html("");
          if (validationCeck(phonenumber, 2) != true){
            $("#signin_form_error_label").html("Invalid phone number");
          }
          else{
            $("#signin_form_error_label").html("");
            $.ajax({
             url:"submit.php",
             data:{
               name: name,
               phone_number:phonenumber,
               address:address,
             },
             type: 'POST',
             success:function(){
               console.log({
                 Name: name,
                 Phonenumber: phonenumber,
                 Address: address
               });
               console.log("Error while submission!");
             },
             error:function(){
               console.log("Error while submission!");
             }
           });
          }
        }
      }
     event.preventDefault();
    });

    $("#vew_button").click(function(){
      $.redirect('vew.php');
    });
  });
