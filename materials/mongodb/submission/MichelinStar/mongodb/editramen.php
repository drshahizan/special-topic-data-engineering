<?php
include "mongodb.php";
include "session.php";

$username = $_SESSION['username'];
include "header.php";

// Check if the cusramentomer ID is provided in the URL
if (isset($_GET['id'])) {
  $ramen_id = $_GET['id'];

  // Retrieve ramen data from MongoDB
  $ramen = $collection->findOne(['Review #' => (int)$ramen_id]);

  // Check if the ramen exists
  if ($ramen) {
    $Brand = $ramen['Brand'];
    $Variety = $ramen['Variety'];
    $Style = $ramen['Style'];
    $Country = $ramen['Country'];
    $Stars = $ramen['Stars'];
    $TopTen = $ramen['Top Ten'];
  } 
  else {
    header("Location: ramenlist.php");
    exit();
  }
} 
else {
  header("Location: ramenlist.php");
  exit();
}
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
    <h1 class="mt-4">Edit Ramen Rating</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="ramenlist.php">Ramen Rating List</a></li>
      <li class="breadcrumb-item active">Edit Ramen Rating</li>
    </ol>
                        
    <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
            Edit Ramen Rating
      </div>
    <div class="card-body">
      <form method="POST" action="editramenprocess.php">

        <input type="hidden" name="id" value="<?php echo $ramen_id; ?>">

        <div class="form-floating mb-3">
          <input class="form-control" id="inputid" type="text" name="id" value="<?php echo $ramen_id; ?>" readonly/>
            <label for="inputid">Review #</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Brand" type="text" name="Brand" value="<?php echo $Brand; ?>"/>
            <label for="Brand">Brand</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Variety" type="text" name="Variety" value="<?php echo $Variety; ?>"/>
            <label for="Variety">Variety</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Style" type="text" name="Style" value="<?php echo $Style; ?>"/>
            <label for="Style">Style</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Country" type="text" name="Country" value="<?php echo $Country; ?>"/>
            <label for="Country">Country</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Stars" type="number" step="any" name="Stars" value="<?php echo $Stars; ?>"/>
            <label for="Stars">Stars</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="TopTen" type="text" name="TopTen" value="<?php echo $TopTen; ?>"/>
            <label for="TopTen">World Ranking</label>
        </div>

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>                                                                            