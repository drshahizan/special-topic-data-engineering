<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

?>

<!DOCTYPE html>
<html>  <head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="../../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="../../assets/css/untitled.css">
    <style>
      .modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
      }
      .modal-content {
        margin: 50px auto;
        border: 3px solid #333333;
        width: 55%;
        border-radius: 30px;
      }
     
      form {
        padding: 25px;
        margin: 25px;
        box-shadow: 0 2px 5px #f5f5f5;
        background: #eee;
      }



      .close {
        color: #aaa;
        float: right;
        bottom: 50px;
        font-size: 28px;
        font-weight: bold;
      }
      .close:hover,

      .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
      }

    </style>
  </head>
  <body>
    <!--<h2>Popup Forms</h2>

    <p>
      <button class="button" data-modal="modalOne">Contact Us</button>
    </p>-->


    <div id="modalOne" class="modal">
      <div class="modal-content">
        <div class="contact-form" >
          <a class="close" style="padding-right: 4%;">&times;</a>
                  <div class="w-100" style="padding-bottom: 6%;"></div>

                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Create a Car!</h4>
                                    </div>

                                    <form class="user" name="RegForm" method="POST"  onsubmit="return formValidation()" enctype="multipart/form-data" action="registerCarprocess.php">

                                        <!--- Ask for name ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="fname" type="text" id="inputName" placeholder="Vehicle Model">
                                        </div>

                                        <!-- Name Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorNameDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorName"> </small>
                                            </div>   
                                        </div>


                                        <!--- Ask for seats ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="fseats" type="number" id="inputSeats" placeholder="Number of Seats">
                                        </div>

                                        <!-- Seats Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorSeatDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorSeat"> </small>
                                            </div>   
                                        </div>



                                        <!--- Ask for type ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="ftype" type="text" id="inputType" placeholder="Vehicle Type">
                                        </div>

                                        <!-- Type Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorTypeDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorType"> </small>
                                            </div>   
                                        </div>




                                        <!--- Ask for Reg ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="freg" type="text" id="inputReg" placeholder="Vehicle Registration Plate Number">
                                        </div>

                                        <!-- Type Reg message --->

                                        <div class="mb-3" style="height: 27px;" id="errorRegDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorReg"> </small>
                                            </div>   
                                        </div>

                                        <!--- Ask for price ---> 
                                        <div class="mb-3">
                                                <input class="form-control form-control-user" name="fprice" type="number" id="inputPrice" placeholder="Price of car">
                                        </div>

                                        <!-- Price Error message --->

                                        <div class="mb-3" style="height: 27px;" id="errorPriceDiv">
                                            <div class="col-auto" style="height: 53px;">      
                                                <small class="form-text text-start text-danger" style="padding: 4%;" id="errorPrice"> </small>
                                            </div>   
                                        </div>


                                        <div class="mb-3">

                                            <input class="border rounded-0 border-secondary form-control" type="file" name="file" required="">
                                            <small class="form-text">File must be less than 30MB</small><br>

                                        </div>


                                        <div class="w-10" style="height: 15px;"></div>



                                        <button id ="submitButton" name="submit" class="btn btn-primary d-block btn-user w-100" data-bss-hover-animate="pulse" type="submit">Create</button>
                                        <hr>

                                    </form>
        </div>
      </div>
    </div>

    <script src="js/createCarWorks.js"></script>

    <script>

      let modalBtns = [...document.querySelectorAll(".button")];
      modalBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.getAttribute('data-modal');
          document.getElementById(modal)
            .style.display = "block";
        }
      });
      
      let closeBtns = [...document.querySelectorAll(".close")];
      closeBtns.forEach(function(btn) {
        btn.onclick = function() {
          let modal = btn.closest('.modal');
          modal.style.display = "none";
        }
      });
      
      window.onclick = function(event) {
        if(event.target.className === "modal") {
          event.target.style.display = "none";
        }
      }
    </script>
  </body>
</html>
