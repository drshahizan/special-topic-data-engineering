<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

//Connect to DB
include ('dbconnect.php');

//Get Booking ID
If(isset($_GET['id']))
{
  $vid = $_GET['id'];
}


?>           




<!DOCTYPE html>
<html>  <head>
    <title>Title of the document</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/jpeg" sizes="16x16" href="../../assets/img/favicon.ico">
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


/* The Modal (background) */
.modal {
        display: none;
        position: fixed;
        z-index: 8;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        padding: 12% 0;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.5);
}

/* Modal Content */
.modal-content {
        margin: 50px auto;
        border: 3px solid #31346B;
        width: 55%;
        border-radius: 30px;
}



    </style>
  </head>
  <body>


    <!-- The Modal -->
<div id="myModal2" class="modal"> <!--Change myModal-->

  <!-- Modal content -->
  <div class="modal-content">
                                        <div class="w-100" style="height: 34px;"></div>
                                        <form class="user" method="POST" action="<?php echo "deleteCarProcess.php?id=$vid"; ?>">

                                        <div class="text-center">
                                        <h4 class="text-dark mb-4" style="display : inline;">Are you sure? You want to </h4> 
                                        <h4 class="text-danger mb-4"  style="display : inline;">Delete</h4> 
                                        <h4 class="text-dark mb-4"  style="display : inline;"> this car</h4>
                                        </div>

                                        <div class="w-100" style="height: 34px;"></div>

                                        <div class="btn-group" style="width: 90%; padding-left: 10%;" role="group" aria-label="Basic example">
                                        

                                        <!--Change cancelButton-->
                                        <button id ="cancelButton2" class="btn btn-danger d-block btn-user w-100" data-bss-hover-animate="pulse" type="button">Cancel</button> 
                                        <button class="btn btn-primary d-block btn-user w-100" data-bss-hover-animate="pulse" type="submit">Yes</button>

                                        </div>

                                        <div class="w-100" style="height: 34px;"></div>


                                          
                                        </form>
  </div>

</div>


<script>
// Get the modal
var modal2 = document.getElementById("myModal2"); //Change myModal the var also

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2"); //Change myBtn here and in place u want the var also

// When the user clicks the button, open the modal 
btn2.onclick = function() { //the var also
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
document.getElementById("cancelButton2").onclick = function() { //Change cancelButton
  modal2.style.display = "none";
}


</script>



  </body>
</html>