<?php 



?>

<script type="text/javascript">

var otherStatus= true;
var userStatus=true;

          window.onload = function hide() {


          var errorICDiv = document.getElementById("errorICDiv");
          var errorPassDiv = document.getElementById("errorPassDiv");
          var errorPassDiv2 = document.getElementById("errorPassDiv2");
          var nameError = document.getElementById("errorNameDiv");
          var errorPhoneDiv = document.getElementById("errorPhoneDiv");


          nameError.style.display = "none";
          errorICDiv.style.display = "none";
          errorPassDiv.style.display = "none";
          errorPassDiv2.style.display = "none";
          errorPhoneDiv.style.display = "none";

          }

document.getElementById("IdentificationNo").addEventListener("change", icValidation);
document.getElementById("inputPassword2").addEventListener("change", passwordValidation);
document.getElementById("inputName").addEventListener("change", nameValidation);
document.getElementById("inputPhone").addEventListener("change", phoneValidation);

function icValidation()
{

  var ic = document.getElementById('IdentificationNo').value;

  var errorICDiv = document.getElementById("errorICDiv");

  var regName = /^[0-9]*$/;

    if (!regName.test(ic))
    {
        document.getElementById("errorIC").innerHTML = "Only digits are allowded in the Identification Number field.";
        errorICDiv.style.display = "block";
        document.getElementById("IdentificationNo").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(ic.length > 13)
    {
        document.getElementById("errorIC").innerHTML = "Up to 13 characters is allowded in the Identification Number field.";
        errorICDiv.style.display = "block";  
        document.getElementById("IdentificationNo").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorICDiv.style.display = "none";
      document.getElementById("IdentificationNo").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}



function passwordValidation()
{

  var password = document.getElementById('inputPassword').value;
  var password2 = document.getElementById('inputPassword2').value;

  var errorPassDiv = document.getElementById("errorPassDiv");
  var errorPassDiv2 = document.getElementById("errorPassDiv2");

  var regex = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[*.!@$%^&(){}[:;<>,.?/~_+|)])+/g;


  if(password != password2)
  {
      document.getElementById("errorPass").innerHTML = "Passwords entered do not match";
      errorPassDiv.style.display = "block";
      errorPassDiv2.style.display = "none";

      document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
      document.getElementById("inputPassword2").style = "border-color: var(--bs-red);";

        otherStatus=false;
  }


    else if (!regex.test(password))
    {
        document.getElementById("errorPass").innerHTML = "Passwords should consists of :";
        document.getElementById("errorPass2").innerHTML = "Uppercase, Lowercase, Digit and special characters";
        errorPassDiv.style.display = "block";
        errorPassDiv2.style.display = "block";

        document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
        document.getElementById("inputPassword2").style = "border-color: var(--bs-red);";

        otherStatus=false;
    }


    else if(password.length > 15)
    {
        document.getElementById("errorPass").innerHTML = "Up to 15 characters is allowded in the password field.";
        errorPassDiv.style.display = "block";  

        document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
        document.getElementById("inputPassword2").style = "rgb(133,135,150);";

        otherStatus=false;    
    }

    else if(password.length < 10)
    {
        document.getElementById("errorPass").innerHTML = "At least 10 characters is needed as a password.";
        errorPassDiv.style.display = "block";  

        document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
        document.getElementById("inputPassword2").style = "rgb(133,135,150);";

        otherStatus=false;    
    }

    else
    {
      errorPassDiv.style.display = "none";
      errorPassDiv2.style.display = "none";
      document.getElementById("inputPassword").style = "rgb(133,135,150);";
      document.getElementById("inputPassword2").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}

function nameValidation()
{

  var inputName = document.getElementById('inputName').value;

  var errorNameDiv = document.getElementById("errorNameDiv");

  var regName = /^[a-zA-Z ]*$/;

    if (!regName.test(inputName))
    {
        document.getElementById("errorName").innerHTML = "Only Alphabets are allowded in the name field.";
        errorNameDiv.style.display = "block";
        document.getElementById("inputName").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(inputName.length > 100)
    {
        document.getElementById("errorName").innerHTML = "Up to 100 characters is allowded in the name field.";
        errorNameDiv.style.display = "block";  
        document.getElementById("inputName").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorNameDiv.style.display = "none";
      document.getElementById("inputName").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}


function phoneValidation()
{

  var phoneNumber = document.getElementById('inputPhone').value;

  var errorPhoneDiv = document.getElementById("errorPhoneDiv");

  var regName = /^[0-9]*$/;

    if (!regName.test(phoneNumber))
    {
        document.getElementById("errorPhone").innerHTML = "Only digits are allowded in the contact number field.";
        errorPhoneDiv.style.display = "block";
        document.getElementById("inputPhone").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(phoneNumber.length > 14)
    {
        document.getElementById("errorPhone").innerHTML = "Up to 14 characters is allowded in the contact number field.";
        errorPhoneDiv.style.display = "block";  
        document.getElementById("inputPhone").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorPhoneDiv.style.display = "none";
      document.getElementById("inputPhone").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}


function formValidation()
{

    var name = document.getElementById('inputName').value;
    
    var password = document.getElementById('inputPassword').value;

    var password2 = document.getElementById('inputPassword2').value;

    var phone = document.getElementById('inputPhone').value;

    var ic = document.getElementById('IdentificationNo').value;

    var errorICDiv = document.getElementById("errorICDiv");
    var errorPhoneDiv = document.getElementById("errorPhoneDiv");
    
    var errorPassDiv = document.getElementById("errorPassDiv");
  var errorPassDiv2 = document.getElementById("errorPassDiv2");



  var errorNameDiv = document.getElementById("errorNameDiv");


    var role = document.getElementById("inputRole");



    if (ic == "") {
                    document.getElementById("errorIC").innerHTML = "IC is a required field";
                    errorICDiv.style.display = "block";  
                    document.getElementById("IdentificationNo").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (name == "") {
                    document.getElementById("errorName").innerHTML = "First name is a required field";
                    errorNameDiv.style.display = "block";  
                    document.getElementById("inputName").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (email == "") {
                    document.getElementById("errorEmail").innerHTML = "Email address is a required field";
                    errorEmailDiv.style.display = "block";
                    document.getElementById("InputEmail").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (phone == ""){
                    document.getElementById("errorPhone").innerHTML = "Phone number is a required field";
                    errorPhoneDiv.style.display = "block";
                    document.getElementById("inputPhone").style = "border-color: var(--bs-red);";
                    return false;
                }



    if (password == "") {
                    document.getElementById("errorPass").innerHTML = "Password is a required field";
                    errorPassDiv.style.display = "block";
                    document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (password2 == "") {
                    document.getElementById("errorPass").innerHTML = "You did not confirm your password";
                    errorPassDiv.style.display = "block";
                    document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
                    return false;
                }



    if (otherStatus == false){
                    return false;
                }
    
    

    return true;

}



</script>

