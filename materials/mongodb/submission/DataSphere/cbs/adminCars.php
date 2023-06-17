<?php 
include 'cbssessionAdmin.php'; 
if(!session_id())
{
  session_start();
}

include 'headeradmin.php'; 
include 'dbconnect.php';

$path = "img/";


?>

<div class="container">
    

    <section class="u-clearfix u-white u-section-1" id="carousel_cbcf">

    <a class="button btn btn-secondary btn-sm d-none d-sm-inline-block" id="formToggle" data-modal="modalOne" style="width: 10%;transform: perspective(0px) translate(21px);position: absolute;right: 1%;top: 20px;font-size: 15px;">Add Car</a>

      <?php include 'createCar.php';  ?>

      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-20 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">

            <div class="u-size-30 u-size-60-md">
              <div class="u-layout-row">

            <?php  
              $sql2 = "SELECT * FROM tb_vehicle";
              $result2 = mysqli_query($con, $sql2);

              
              while ($row2 = mysqli_fetch_array($result2))
              {

              ?> 

                  <div class="u-container-style u-layout-cell u-right-cell u-similar-fill u-size-20 u-size-20-md u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3" style="border-color: #333333; border-width: 1px; ">
                      <img class="u-expanded-width u-image u-image-3" src="<?php echo $path.$row2['v_pic']; ?>">
                      <h3 class="u-custom-font u-font-patua-one u-text u-text-5"><?php echo $row2['v_reg']; ?></h3> 
                      <p class="u-text u-text-6"><?php echo $row2['v_model']; ?><br><?php echo $row2['v_type']; ?><br>RM<?php echo $row2['v_price']; ?></p>

                      <div class="btn-group" style="position: absolute;right: 6%;" role="group" aria-label="Basic example">
                      
                      
                      <?php echo "<a href='adminModifyCar.php?id=".$row2['v_reg']."' class='btn btn-primary' > View Details </a> "; ?>
                      
                      </div>

                    </div>
                  </div>


            <?php 
              }
              
            ?>   

 

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
              


    

  </div>


    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>
