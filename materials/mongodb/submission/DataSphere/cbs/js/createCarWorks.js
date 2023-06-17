var otherStatus= true;

//document.getElementById("formCheckbtn").addEventListener("click", step1Process);

          window.onload = function hide() {

          
          var errorNameDiv = document.getElementById("errorNameDiv");
          var errorSeatDiv = document.getElementById("errorSeatDiv");
          var errorTypeDiv = document.getElementById("errorTypeDiv");
          var errorRegDiv = document.getElementById("errorRegDiv");
          var errorPriceDiv = document.getElementById("errorPriceDiv");


          errorNameDiv.style.display = "none";
          errorSeatDiv.style.display = "none";
          errorTypeDiv.style.display = "none";
          errorRegDiv.style.display = "none";
          errorPriceDiv.style.display = "none";


          }


document.getElementById("inputName").addEventListener("change", nameValidation);

document.getElementById("inputSeats").addEventListener("change", seatsValidation);

document.getElementById("inputType").addEventListener("change", typeValidation);

document.getElementById("inputReg").addEventListener("change", regValidation);

document.getElementById("inputPrice").addEventListener("change", priceValidation);




function priceValidation()
{

  var inputPrice = document.getElementById('inputPrice').value;

  var errorPriceDiv = document.getElementById("errorPriceDiv");


  var regName = /^[0-9]*$/;

    if (inputPrice == 0)
    {
        document.getElementById("errorPrice").innerHTML = "There is no cars for free my guy.";
        errorPriceDiv.style.display = "block";
        document.getElementById("inputPrice").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }


    else
    {
      errorPriceDiv.style.display = "none";
      document.getElementById("inputPrice").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}



function regValidation()
{

  var reg = document.getElementById('inputReg').value;

  var errorRegDiv = document.getElementById("errorRegDiv");

  
  var regName = /^[A-Z0-9]*$/;

    if (!regName.test(reg))
    {
        document.getElementById("errorReg").innerHTML = "Only Captial Alphabets and Numbers are allowded in the Registration Plate field.";
        errorRegDiv.style.display = "block";
        document.getElementById("inputReg").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(reg.length > 15)
    {
        document.getElementById("errorReg").innerHTML = "Up to 15 characters is allowded in the Registration Plate field.";
        errorRegDiv.style.display = "block";  
        document.getElementById("inputReg").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorRegDiv.style.display = "none";
      document.getElementById("inputReg").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}



function typeValidation()
{

  var type = document.getElementById('inputType').value;

  var errorTypeDiv = document.getElementById("errorTypeDiv");

  
  var regName = /^[a-zA-Z]*$/;

    if (!regName.test(type))
    {
        document.getElementById("errorType").innerHTML = "Only Alphabets are allowded in the Type field.";
        errorTypeDiv.style.display = "block";
        document.getElementById("inputType").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(type.length > 20)
    {
        document.getElementById("errorType").innerHTML = "Up to 20 characters is allowded in the Type field.";
        errorTypeDiv.style.display = "block";  
        document.getElementById("inputType").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorTypeDiv.style.display = "none";
      document.getElementById("inputType").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}


function nameValidation()
{

  var name = document.getElementById('inputName').value;

  var errorNameDiv = document.getElementById("errorNameDiv");

  
  var regName = /^[a-zA-Z0-9 ]*$/;

    if (!regName.test(name))
    {
        document.getElementById("errorName").innerHTML = "Only Alphabets are allowded in the Model field.";
        errorNameDiv.style.display = "block";
        document.getElementById("inputName").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(name.length > 100)
    {
        document.getElementById("errorName").innerHTML = "Up to 100 characters is allowded in the Model field.";
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

function seatsValidation()
{

  var inputSeats = document.getElementById('inputSeats').value;

  var errorSeatDiv = document.getElementById("errorSeatDiv");


  var regName = /^[0-9]*$/;

    if (inputSeats == 0)
    {
        document.getElementById("errorSeat").innerHTML = "There is not car with 0 seats my guy.";
        errorSeatDiv.style.display = "block";
        document.getElementById("inputSeats").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }


    else
    {
      errorSeatDiv.style.display = "none";
      document.getElementById("inputSeats").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}





function formValidation()
{

    var seat = document.getElementById('inputSeats').value; //
    var name = document.getElementById('inputName').value;

    var type = document.getElementById('inputType').value;

    var errorTypeDiv = document.getElementById("errorTypeDiv");
  var reg = document.getElementById('inputReg').value;

  var errorRegDiv = document.getElementById("errorRegDiv");


    var errorNameDiv = document.getElementById("errorNameDiv");
    var errorSeatDiv = document.getElementById("errorSeatDiv");
    


  var inputPrice = document.getElementById('inputPrice').value;

  var errorPriceDiv = document.getElementById("errorPriceDiv");




    if (inputPrice == "") {
                    document.getElementById("errorPrice").innerHTML = "Price is a required field";
                    errorPriceDiv.style.display = "block";  
                    document.getElementById("inputPrice").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (seat == "") {
                    document.getElementById("errorSeat").innerHTML = "Seats is a required field";
                    errorSeatDiv.style.display = "block";  
                    document.getElementById("inputSeats").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (name == "") {
                    document.getElementById("errorName").innerHTML = "Model is a required field";
                    errorNameDiv.style.display = "block";  
                    document.getElementById("inputName").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (type == "") {
                    document.getElementById("errorType").innerHTML = "Type is a required field";
                    errorTypeDiv.style.display = "block";  
                    document.getElementById("inputType").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (reg == "") {
                    document.getElementById("errorReg").innerHTML = "Number plate is a required field";
                    errorRegDiv.style.display = "block";  
                    document.getElementById("inputReg").style = "border-color: var(--bs-red);";
                    return false;
                }




    if (otherStatus == false){
                    return false;
                }
    
    

    return true;

}




