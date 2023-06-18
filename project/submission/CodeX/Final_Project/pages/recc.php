<?php

include 'dbconnect.php';
include 'head.php';
include 'navbar.php';



$sql = "SELECT * FROM clustered_movies";


$result = mysqli_query($conn, $sql);
?>

<style>
  .custom-width-15 {
    width: 15%;
  }

  .custom-width-20 {
    width: 20%;
  }

  .custom-width-10 {
    width: 10%;
  }

  /* Add more custom-width classes for different widths as needed */
</style>
<style>
  .title-column {
    max-width: 350px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>

<!DOCTYPE html>
<html lang="en">


<body>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    
  <div>
    <div  style="max-width: 1800px;">
      <div class="container-fluid py-4" style="margin: 30px; margin-top: 10px; overflow-x: auto;">
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Movie Recommendation List</h6>
            </div>
              <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive">
                  <table class="table align-items-center mb-0" style="width: 1000px">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7">Title</th>
                            <th class="text-uppercase text-secondary text-sm font-weight-bolder opacity-7 ps-2">Cluster</th>
                          </tr>
                        </thead>
                        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tbody>
                          <tr>
                            <td class="title-column">
                              <div class="d-flex px-2 py-1">
                                
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm"><?php echo $row['Movies']; ?></h6>
                                 
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0"><?php echo $row['cluster_no']; ?></p>
                            </td>
                            
                          </tr>                    
                        </tbody>
                        <?php endwhile; ?>
                      </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


      
</main>
  
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>


</body>

</html>