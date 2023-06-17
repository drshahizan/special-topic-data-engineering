var otherStatus= true;

document.getElementById("formCheckbtn").addEventListener("click", step1Process);

          window.onload = function hide() {

          
          var formStep2Div = document.getElementById("formStep2Div");
          var errorICDiv = document.getElementById("errorICDiv");
          var errorNationalityDiv = document.getElementById("errorNationalityDiv");
          var errorAddressDiv = document.getElementById("errorAddressDiv");
          var errorPostcodeDiv = document.getElementById("errorPostcodeDiv");
          var errorPostcodeDiv2 = document.getElementById("errorPostcodeDiv2");
          var errorPhoneDiv = document.getElementById("errorPhoneDiv");
          var errorjprefDiv = document.getElementById("errorjprefDiv");
          var errorexpSalaryDiv = document.getElementById("errorexpSalaryDiv");
          var errorexpSalaryDiv2 = document.getElementById("errorexpSalaryDiv2");

          formStep2Div.style.display = "none";
          errorICDiv.style.display = "none";
          errorNationalityDiv.style.display = "none";
          errorAddressDiv.style.display = "none";
          errorPostcodeDiv.style.display = "none";
          errorPostcodeDiv2.style.display = "none";
          errorPhoneDiv.style.display = "none";
          errorjprefDiv.style.display = "none";
          errorexpSalaryDiv.style.display = "none";
          errorexpSalaryDiv2.style.display = "none";

          }




function step1Process() {

  var x = document.getElementById("formCheckconsent");
  var formStep2Div = document.getElementById("formStep2Div");

  x.style.display = "none";
  formStep2Div.style.display = "block";


	document.getElementById("progressBar").style.width = "25%";
	document.getElementById("progressBar").innerHTML = "25%";

}







document.getElementById("IdentificationNo").addEventListener("change", icValidation);

document.getElementById("Nationality").addEventListener("change", nationalityValidation);

document.getElementById("Address").addEventListener("change", addressValidation);

document.getElementById("Postcode").addEventListener("change", postcodeValidation);

document.getElementById("inputCountryCode").addEventListener("change", cCodeValidation);

document.getElementById("inputPhone").addEventListener("change", phoneValidation);

document.getElementById("jpref").addEventListener("change", jprefValidation);

document.getElementById("expSalary").addEventListener("change", expSalaryValidation);


function nationalityValidation()
{

  var nationality = document.getElementById('Nationality').value;

  var errorNationalityDiv = document.getElementById("errorNationalityDiv");

  var regName = /^[a-zA-Z ]*$/;

    if (!regName.test(nationality))
    {
        document.getElementById("errorNationality").innerHTML = "Only Alphabets are allowded in the Nationality field.";
        errorNationalityDiv.style.display = "block";
        document.getElementById("Nationality").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(nationality.length > 60)
    {
        document.getElementById("errorNationality").innerHTML = "Up to 60 characters is allowded in the Nationality field.";
        errorNationalityDiv.style.display = "block";  
        document.getElementById("Nationality").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorNationalityDiv.style.display = "none";
      document.getElementById("Nationality").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}

function jprefValidation()
{

  var jpref = document.getElementById('jpref').value;

  var errorjprefDiv = document.getElementById("errorjprefDiv");

  var regName = /^[a-zA-Z0-9 ]*$/;

    if (!regName.test(jpref))
    {
        document.getElementById("errorjpref").innerHTML = "Only Alphabets are allowded in the Job Preference field.";
        errorjprefDiv.style.display = "block";
        document.getElementById("jpref").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(jpref.length > 64)
    {
        document.getElementById("errorjpref").innerHTML = "Up to 64 characters is allowded in the Job Preference field.";
        errorjprefDiv.style.display = "block";  
        document.getElementById("jpref").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorjprefDiv.style.display = "none";
      document.getElementById("jpref").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}

function expSalaryValidation()
{

  var expSalary = document.getElementById('expSalary').value;

  var errorexpSalaryDiv = document.getElementById("errorexpSalaryDiv");
  var errorexpSalaryDiv2 = document.getElementById("errorexpSalaryDiv2");

  var regName = /^[0-9]*$/;

    if (!regName.test(expSalary))
    {
        document.getElementById("errorexpSalary").innerHTML = "Round the expected salary to the nearest bank note.";
        document.getElementById("errorexpSalary2").innerHTML = "Only digit characters allowded.";
        errorexpSalaryDiv.style.display = "block";
        errorexpSalaryDiv2.style.display = "block"
        document.getElementById("expSalary").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(expSalary.length > 6)
    {
        document.getElementById("errorexpSalary").innerHTML = "Up to 6 characters is allowded in the expected salary field.";
        errorexpSalaryDiv.style.display = "block";  
        document.getElementById("expSalary").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorexpSalaryDiv.style.display = "none";
      errorexpSalaryDiv2.style.display = "none";
      document.getElementById("expSalary").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}



function addressValidation()
{

  var address = document.getElementById('Address').value;

  var errorAddressDiv = document.getElementById("errorAddressDiv");


     if(address.length > 200)
    {
        document.getElementById("errorAddress").innerHTML = "Up to 200 characters is allowded in the Address field.";
        errorAddressDiv.style.display = "block";  
        document.getElementById("Address").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorAddressDiv.style.display = "none";
      document.getElementById("Address").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}



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


function postcodeValidation()
{

  var postcode = document.getElementById('Postcode').value;

  var errorPostcodeDiv = document.getElementById("errorPostcodeDiv");
  var errorPostcodeDiv2 = document.getElementById("errorPostcodeDiv2");

  var reglower = /^[a-zA-Z0-9]*$/;


    if (!reglower.test(postcode))
    {
        document.getElementById("errorPostcode").innerHTML = "Postcode consists of :";
        document.getElementById("errorPostcode2").innerHTML = "Uppercase, Lowercase and Digit characters";
        errorPostcodeDiv.style.display = "block";
        errorPostcodeDiv2.style.display = "block";
        document.getElementById("Postcode").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }


    else if(postcode.length > 11)
    {
        document.getElementById("errorPostcode").innerHTML = "Up to 11 characters is allowded in the postcode field.";
        errorPostcodeDiv.style.display = "block";  
        document.getElementById("Postcode").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorPostcodeDiv.style.display = "none";
      errorPostcodeDiv2.style.display = "none";
      document.getElementById("Postcode").style = "rgb(133,135,150);";
      otherStatus=true;
    }

}



function cCodeValidation()
{

  var countryCode = document.getElementById('inputCountryCode').value;

  var errorPhoneDiv = document.getElementById("errorPhoneDiv");

  var regName = /^[0-9]*$/;

    if (!regName.test(countryCode))
    {
        document.getElementById("errorPhone").innerHTML = "Only digits are allowded in the country code field.";
        errorPhoneDiv.style.display = "block";
        document.getElementById("inputCountryCode").style = "border-color: var(--bs-red);";
        otherStatus=false;
    }

    else if(countryCode.length > 4)
    {
        document.getElementById("errorPhone").innerHTML = "Up to 4 characters is allowded in the country code field.";
        errorPhoneDiv.style.display = "block";  
        document.getElementById("inputCountryCode").style = "border-color: var(--bs-red);";
        otherStatus=false;    
    }

    else
    {
      errorPhoneDiv.style.display = "none";
      document.getElementById("inputCountryCode").style = "rgb(133,135,150);";
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

    else if(phoneNumber.length > 11)
    {
        document.getElementById("errorPhone").innerHTML = "Up to 11 characters is allowded in the contact number field.";
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

    var ic = document.getElementById('IdentificationNo').value; //

    var nationality = document.getElementById('Nationality').value; //

    var address = document.getElementById('Address').value; //
    
    var postcode = document.getElementById('Postcode').value; //

    var jpref = document.getElementById('jpref').value; //

    var expSalary = document.getElementById('expSalary').value; //

    var cCode = document.getElementById('inputCountryCode').value;

    var phone = document.getElementById('inputPhone').value;




    var errorPhoneDiv = document.getElementById("errorPhoneDiv");
    
  var errorPostcodeDiv = document.getElementById("errorPostcodeDiv");
  var errorPostcodeDiv2 = document.getElementById("errorPostcodeDiv2");

  var errorICDiv = document.getElementById("errorICDiv");

  var errorAddressDiv = document.getElementById("errorAddressDiv");

  var errorexpSalaryDiv = document.getElementById("errorexpSalaryDiv");
  var errorexpSalaryDiv2 = document.getElementById("errorexpSalaryDiv2");;

  var errorjprefDiv = document.getElementById("errorjprefDiv");

   var errorNationalityDiv = document.getElementById("errorNationalityDiv");



    if (ic == "") {
                    document.getElementById("errorIC").innerHTML = "Identification Number is a required field";
                    errorICDiv.style.display = "block";  
                    document.getElementById("IdentificationNo").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (nationality == "") {
                    document.getElementById("errorNationality").innerHTML = "Nationality is a required field";
                    errorNationalityDiv.style.display = "block";
                    document.getElementById("Nationality").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (address == "") {
                    document.getElementById("errorAddress").innerHTML = "Address is a required field";
                    errorAddressDiv.style.display = "block";
                    document.getElementById("Address").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (postcode == "") {
                    document.getElementById("errorPostcode").innerHTML = "Postcode is a required field";
                    errorPostcodeDiv.style.display = "block";
                    document.getElementById("Postcode").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (phone == ""){
                    document.getElementById("errorPhone").innerHTML = "Phone number is a required field";
                    errorPhoneDiv.style.display = "block";
                    document.getElementById("inputPhone").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (cCode == ""){
                    document.getElementById("errorPhone").innerHTML = "Country code is a required field";
                    errorPhoneDiv.style.display = "block";
                    document.getElementById("inputCountryCode").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (jpref == "") {
                    document.getElementById("errorjpref").innerHTML = "Job Preference is a required field";
                    errorjprefDiv.style.display = "block";
                    document.getElementById("jpref").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (expSalary == "") {
                    document.getElementById("errorexpSalary").innerHTML = "Expected Salary is a required field";
                    errorexpSalaryDiv.style.display = "block";
                    document.getElementById("expSalary").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (otherStatus == false){
                    return false;
                }
    
    

    return true;

}