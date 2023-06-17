<?php 
include 'headermain.php';
include 'footermain.php'; 
include 'dbconnect.php'; 
?>
<style>
  .title-column {
    max-width: 350px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
  }
</style>
<body class="g-sidenav-show  bg-gray-100">  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Movie List</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Artist</th>                      
                    </tr>
                  </thead>
                  <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                  <tbody>
                    <tr>
                      <td class="title-column ">
                        <div class="d-flex px-2 py-1">                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $row['title']; ?></h6>                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?php echo $row['artist']; ?></p>                        
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
  </main>    
</body>