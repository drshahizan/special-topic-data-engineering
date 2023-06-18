<?php 
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}
include 'dbconnect.php';

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
                                        <h4 class="text-dark mb-4">Modify your booking!</h4>
                                    </div>






<form class="form-horizontal" method="POST" onsubmit="return formValidation()" action="customermodifyprocess.php">
        <fieldset>

          <legend>Booking Form</legend>

          <div class="form-group">


            <label for="InputCar" class="form-label mt-4">Booking ID: <?php 
              echo $bid;
             ?></label>
             <br><br>


            <label for="InputCar" class="form-label mt-4">Modify Vehicle</label>
            <?php  
              $sqlv = "SELECT * FROM tb_vehicle";
              $resultv = mysqli_query($con, $sqlv);

              echo '<select name="fcar" class="form-control form-control-user" id="InputVehicleModel">';
              while ($rowv = mysqli_fetch_array($resultv))
              {
                if($rowv['v_reg'] == $row['b_vehicle'])
                {
                  echo "<option selected='selected' value = '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
                }

                else
                {
                  echo "<option value = '".$rowv['v_reg']."'>".$rowv['v_model']."</option>";
                }
              }
              echo "</select>";
            ?>  
          </div>

          <div class="form-group">
            <label for="InputBookingDate" class="form-label mt-4">Select Pickup Date</label>
            
              <div>
              <?php 

                echo '<input type="date" name="fbdate" class="form-control form-control-user" id="InputBookingDate" value="'.$row['b_bdate'].'">';

               ?>
              </div>
          </div>

          <div class="form-group">
            <label for="InputReturnDate" class="form-label mt-4">Select Return Date</label>
            <input type="date" name="frdate" class="form-control form-control-user" id="InputReturnDate" value="<?php 

            echo $row['b_rdate'];

             ?>" required>
          </div>

          <input type="hidden" name="fbid" class="form-control" id="fbid" value="<?php 

            echo $row['b_id'];

             ?>">

                <!-- Time Error message --->

                <div class="mb-3" style="height: 27px;" id="errorTimeDiv">
                      <div class="col-auto" style="height: 53px;">      
                            <small class="form-text text-start text-danger" style="padding: 4%;" id="errorTime"> </small>
                    </div>   
                </div>


          <div class="w-100" style="padding-bottom: 6%;"></div>



          <div class="btn-group"  role="group" style="width: 100%;" aria-label="Basic example">
          <button type="reset" class="btn btn-danger d-block btn-user w-100">Clear</button>
          <button type="submit" class="btn btn-info d-block btn-user w-100">Modify</button>
          </div>

        </fieldset>
    </form>







        </div>
      </div>
    </div>


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


<script type="text/javascript">
  
var otherStatus=true;

          window.onload = function hide() {
          var errorTimeDiv = document.getElementById('errorTimeDiv');
          errorTimeDiv.style.display = "none";
          }


  document.getElementById("InputReturnDate").addEventListener("change", timeValidation);
  document.getElementById("InputBookingDate").addEventListener("change", timeValidation);
  var errorTime = document.getElementById('errorTime');
  var errorTimeDiv = document.getElementById('errorTimeDiv'); 



  function timeValidation()
  {
  
        // Create date from input value
        var inputTimeTo = document.getElementById("InputReturnDate").value;

        var inputTimeFrom = document.getElementById("InputBookingDate").value;


      if (inputTimeTo == "")
      {
         errorTimeDiv.style.display = "none";
        document.getElementById("InputReturnDate").style = "rgb(133,135,150);";
        document.getElementById("InputBookingDate").style = "rgb(133,135,150);";
        otherStatus=false;
      }

      else if (inputTimeTo <= inputTimeFrom)
      {
          document.getElementById("errorTime").innerHTML = "Return date cannot be earlier or on the pickup date";
          errorTimeDiv.style.display = "block";
          document.getElementById("InputReturnDate").style = "border-color: var(--bs-red);";
          document.getElementById("InputBookingDate").style = "border-color: var(--bs-red);";
          otherStatus=false;
      }


      else
      {
        errorTimeDiv.style.display = "none";
        document.getElementById("InputReturnDate").style = "rgb(133,135,150);";
        document.getElementById("InputBookingDate").style = "rgb(133,135,150);";
        otherStatus=true;
      }

  }


function formValidation()
{


    var inputTimeTo = document.getElementById('InputReturnDate').value;
    
    var inputTimeFrom = document.getElementById('InputBookingDate').value;



 
    if (inputTimeTo == "") {
                    document.getElementById("errorTime").innerHTML = "Date fields cannot be empty";
                    errorTimeDiv.style.display = "block";
                    document.getElementById("InputReturnDate").style = "border-color: var(--bs-red);";
                    return false;
                }

    if (inputTimeFrom == "") {
                    document.getElementById("errorTime").innerHTML = "Date fields cannot be empty";
                    errorTimeDiv.style.display = "block";
                    document.getElementById("InputBookingDate").style = "border-color: var(--bs-red);";
                    return false;
                }


    if (otherStatus == false){
                    return false;
                }
    
    

    return true;

}



</script>


























<!--

<?php/* 
include 'cbssessionCustomer.php'; 
if(!session_id())
{
  session_start();
}

include 'headercustomer.php'; 
include 'dbconnect.php';*/
?>

<div class="container">

  <a class="button btn btn-primary btn-sm d-none d-sm-inline-block" id="formToggle" data-modal="modalOne" style="width: 10%;transform: perspective(0px) translate(21px);position: absolute;right: 1%;top: 20px;font-size: 15px;">Add Car</a>


  <div class="row">
    <div class="col-sm-6">

      <div class="row">
      <div class="col-sm-6"><img class="img-thumbnail" src="img/alza.jpg"></div>
      <div class="col-sm-6">Perodua Alza<br>SUV<br>RM250</div>
    </div>
    <div class="row">
      <div class="col-sm-6"><img class="img-thumbnail" src="img/myvi.jpg"></div>
      <div class="col-sm-6">Perodua Myvi<br>Sedan<br>RM170</div>
    </div>
    <div class="row">
      <div class="col-sm-6"><img class="img-thumbnail" src="img/vellfire.jpg"></div>
      <div class="col-sm-6">Toyota Vellfire<br>MPV<br>RM400</div>
    </div>
    <div class="row">
      <div class="col-sm-6"><img class="img-thumbnail" src="img/waja.jpg"></div> 
      <div class="col-sm-6">Proton Waja<br>SUV<br>RM200</div>
    </div>

  </div>
    
    <div class="col-sm-6">
      
      <form class="form-horizontal" method="POST" action="customerbookingprocess.php">
        <fieldset>

          <legend>Booking Form</legend>

          <div class="form-group">
            <label for="InputCar" class="form-label mt-4">Select Vehicle</label>
            <?php /* 
              $sql = "SELECT * FROM tb_vehicle";
              $result = mysqli_query($con, $sql);

              echo '<select name="fcar" class="form-control" id="InputVehicleModel">';
              while ($row = mysqli_fetch_array($result))
              {
                echo "<option value = '".$row['v_reg']."'>".$row['v_model']."</option>";
              }
              echo "</select>";*/
            ?>  
          </div>

          <div class="form-group">
            <label for="InputBookingDate" class="form-label mt-4">Select Pickup Date</label>
            <input type="date" name="fbdate" class="form-control" id="InputBookingDate" placeholder="Create Strong Password" required>
          </div>

          <div class="form-group">
            <label for="InputReturnDate" class="form-label mt-4">Select Return Date</label>
            <input type="date" name="frdate" class="form-control" id="InputReturnDate" placeholder="Enter your full name" required>
          </div>

          <div>      
          <button type="reset" class="btn btn-danger">Clear</button>
          <button type="submit" class="btn btn-info">Book</button>
          </div>

        </fieldset>
    </form>

    </div>
  </div>
</div>

<?php //include 'footer.php'; ?> -->