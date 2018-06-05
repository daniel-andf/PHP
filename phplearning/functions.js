function validate(){
  if(document.registerform.first_name.value == ""){
    alert("You must enter the First Name");

    return false;
  }
  else {
    return true;
  }
}
