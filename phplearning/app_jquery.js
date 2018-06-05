$(document).ready(function(){
  $("#registerform").validate({
    rules: {
      verify_username: {
        required: true,
        email:true,
        equalTo:"#username"
      }
    }
  });

});
