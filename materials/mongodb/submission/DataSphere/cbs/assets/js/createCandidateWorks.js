
var otherStatus= true;

          window.onload = function hide() {

                //Navbar Toggle
                var navButton = document.getElementById("sidebarToggle");
                console.log("in onclick");
                navButton.click(); // this will trigger the click event

          var nameError = document.getElementById("errorNameDiv");
          var emailError = document.getElementById("errorEmailDiv");
          var usernameError = document.getElementById("errorUsernameDiv");
          var usernameError2 = document.getElementById("errorUsernameDiv2");
          var errorPassDiv = document.getElementById("errorPassDiv");
          var errorPassDiv2 = document.getElementById("errorPassDiv2");





          nameError.style.display = "none";
          emailError.style.display = "none";
          usernameError.style.display = "none";
          usernameError2.style.display = "none";
          errorPassDiv.style.display = "none";
          errorPassDiv2.style.display = "none";
          }



document.getElementById("inputName").addEventListener("change", nameValidation);

document.getElementById("InputEmail").addEventListener("change", emailValidation);

document.getElementById("InputUsername").addEventListener("change", usernameValidation);

document.getElementById("inputPassword").addEventListener("change", passwordValidation);



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



function emailValidation()
{

  var email = document.getElementById('InputEmail').value;

  var errorEmailDiv = document.getElementById("errorEmailDiv");

  var regName = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if (!regName.test(email))
    {
        document.getElementById("errorEmail").innerHTML = "Only valid email addresses are allowded in the email field.";
        errorEmailDiv.style.display = "block";
        document.getElementById("InputEmail").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(email.length > 80)
    {
        document.getElementById("errorEmail").innerHTML = "Up to 80 characters is allowded in the email field.";
        errorEmailDiv.style.display = "block";  
        document.getElementById("InputEmail").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorEmailDiv.style.display = "none";
      document.getElementById("InputEmail").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}

function usernameValidation()
{

  var username = document.getElementById('InputUsername').value;

  var errorUsernameDiv = document.getElementById("errorUsernameDiv");
  var errorUsernameDiv2 = document.getElementById("errorUsernameDiv2");

  var reglower = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])+/g;


    if (!reglower.test(username))
    {
        document.getElementById("errorUsername").innerHTML = "Username consists of :";
        document.getElementById("errorUsername2").innerHTML = "Uppercase, Lowercase and Digit characters";
        errorUsernameDiv.style.display = "block";
        errorUsernameDiv2.style.display = "block";
        document.getElementById("InputUsername").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }


    else if(username.length > 15)
    {
        document.getElementById("errorUsername").innerHTML = "Up to 15 characters is allowded in the username field.";
        errorUsernameDiv.style.display = "block";  
        document.getElementById("InputUsername").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorUsernameDiv.style.display = "none";
      errorUsernameDiv2.style.display = "none";
      document.getElementById("InputUsername").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}


function passwordValidation()
{

  var password = document.getElementById('inputPassword').value;

  var errorPassDiv = document.getElementById("errorPassDiv");
  var errorPassDiv2 = document.getElementById("errorPassDiv2");

  var regex = /(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*[*.!@$%^&(){}[:;<>,.?/~_+|)])+/g;


    if (!regex.test(password))
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


function formValidation()
{

    var name = document.getElementById('inputName').value;

    var email = document.getElementById('InputEmail').value;

    var username = document.getElementById('InputUsername').value;
    
    var password = document.getElementById('inputPassword').value;


    
  var errorPassDiv = document.getElementById("errorPassDiv");
  var errorPassDiv2 = document.getElementById("errorPassDiv2");

  var errorUsernameDiv = document.getElementById("errorUsernameDiv");
  var errorUsernameDiv2 = document.getElementById("errorUsernameDiv2");

  var errorEmailDiv = document.getElementById("errorEmailDiv");

  var errorNameDiv = document.getElementById("errorNameDiv");




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

    if (username == "") {
                    document.getElementById("errorUsername").innerHTML = "Username is a required field";
                    errorUsernameDiv.style.display = "block";
                    document.getElementById("InputUsername").style = "border-color: var(--bs-red);";
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


