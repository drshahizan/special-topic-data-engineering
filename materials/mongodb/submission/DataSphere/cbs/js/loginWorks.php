<?php 



?>

<script type="text/javascript">

var otherStatus= true;
var userStatus=true;

          window.onload = function hide() {


          var errorICDiv = document.getElementById("errorICDiv");
          var errorPassDiv = document.getElementById("errorPassDiv");


          errorICDiv.style.display = "none";
          errorPassDiv.style.display = "none";


          }

document.getElementById("IdentificationNo").addEventListener("change", icValidation);
document.getElementById("inputPassword").addEventListener("change", passwordValidation);


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


  var errorPassDiv = document.getElementById("errorPassDiv");


  var regex = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[*.!@$%^&(){}[:;<>,.?/~_+|)])+/g;





    if (!regex.test(password))
    {
        document.getElementById("errorPass").innerHTML = "Passwords should consists of :";
        errorPassDiv.style.display = "block";

        document.getElementById("inputPassword").style = "border-color: var(--bs-red);";

        otherStatus=false;
    }


    if(password.length > 15)
    {
        document.getElementById("errorPass").innerHTML = "Up to 15 characters is allowded in the password field.";
        errorPassDiv.style.display = "block";  

        document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
        

        otherStatus=false;    
    }


    else if(password.length < 10)
    {
        document.getElementById("errorPass").innerHTML = "At least 10 characters is needed as a password.";
        errorPassDiv.style.display = "block";  

        document.getElementById("inputPassword").style = "border-color: var(--bs-red);";
        

        otherStatus=false;    
    }

    else
    {
      errorPassDiv.style.display = "none";
      document.getElementById("inputPassword").style = "rgb(133,135,150);"; 
      otherStatus=true;
    }

}


function formValidation()
{

  
    var password = document.getElementById('inputPassword').value;



    var ic = document.getElementById('IdentificationNo').value;

    var errorICDiv = document.getElementById("errorICDiv");

    
    var errorPassDiv = document.getElementById("errorPassDiv");




    if (ic == "") {
                    document.getElementById("errorIC").innerHTML = "IC is a required field";
                    errorICDiv.style.display = "block";  
                    document.getElementById("IdentificationNo").style = "border-color: var(--bs-red);";
                    return false;
                }




    if (password == "") {
                    document.getElementById("errorPass").innerHTML = "Password is a required field";
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

