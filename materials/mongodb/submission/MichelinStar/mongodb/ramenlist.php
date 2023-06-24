<?php
include "mongodb.php";
include "session.php";

$ramens = $collection->find();
$username = $_SESSION['username'];
include "header.php";
?>

<div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php echo $username; ?>
                    </div>
                </nav>
            </div>
<div id="layoutSidenav_content">

<main>
  <div class="container-fluid px-4">
    <h1 class="mt-4">Ramen Rating List</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item active">Ramen Rating List</li>
    </ol>
    <div style="padding-bottom: 15px;">
    <a class="btn btn-primary" href="createramen.php">Add New Ramen</a>
  </div>

                        
    <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
            Ramen Rating List
      </div>
    <div class="card-body">
      <table id="datatablesSimple">
          <thead>
           <tr>
              <th>Review #</th>
              <th>Brand</th>
              <th>Variety</th>
              <th>Style</th>
              <th>Country</th>
              <th>Stars</th> 
              <th>World ranking</th> 
              <th>Action</th>                          
          </tr>
          </thead>
          <tbody>
            <?php foreach ($ramens as $ramen) : ?>
                <tr>
                    <td><?php echo $ramen['Review #']; ?></td>
                    <td><?php echo $ramen['Brand']; ?></td>
                    <td><?php echo $ramen['Variety']; ?></td>
                    <td><?php echo $ramen['Style']; ?></td>
                    <td><?php echo $ramen['Country']; ?></td>
                    <td><?php echo $ramen['Stars']; ?></td>
                    <td><?php echo $ramen['Top Ten']; ?></td>

                    <td>
				            <a href="editramen.php?id=<?php echo $ramen['Review #']; ?>">
				                <i class="fas fa-edit fa-lg text-primary"></i>
				            </a>
				            <a onclick="return confirm('Do you want to delete this ramen?')" href="deleteramen.php?id=<?php echo $ramen['Review #']; ?>">
				                <i class="fas fa-trash-alt fa-lg text-danger"></i>
				            </a>
				        		</td>
                    
                </tr>
            <?php endforeach; ?>                                           
          </tbody>
        </table>
      </div>
    </div>
  </div>
</main>


<?php
include "footer.php";

?>