<?php
include "mongodb.php";
include "session.php";

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
    <h1 class="mt-4">Create Ramen Rating</h1>
    <ol class="breadcrumb mb-4">
      <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="ramenlist.php">Ramen Rating List</a></li>
      <li class="breadcrumb-item active">Create Ramen Rating</li>
    </ol>
                        
    <div class="card mb-4">
      <div class="card-header">
          <i class="fas fa-table me-1"></i>
            Create Ramen Rating
      </div>
    <div class="card-body">
      <form method="POST" action="createramenprocess.php">

        <div class="form-floating mb-3">
          <input class="form-control" id="Brand" type="text" name="Brand" />
            <label for="Brand">Brand</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Variety" type="text" name="Variety" />
            <label for="Variety">Variety</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Style" type="text" name="Style" />
            <label for="Style">Style</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Country" type="text" name="Country" />
            <label for="Country">Country</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="Stars" type="number" step="any" name="Stars" />
            <label for="Stars">Stars</label>
        </div>

        <div class="form-floating mb-3">
          <input class="form-control" id="TopTen" type="text" name="TopTen" />
            <label for="TopTen">World Ranking</label>
        </div>

        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </form>                                                                            