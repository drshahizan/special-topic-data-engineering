<?php include 'header.php'; ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Student Information Form</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div>

  <!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Enter Student Information</h5>

      <!-- Vertical Form -->
      <form action="form.php" class="row g-3 form-center" method="post" onsubmit="return confirm('Are you sure you want to add the student information?');"> 
        <div class="col-12">
          <label for="inputNanme4" class="form-label">Student ID</label>
          <input type="text" class="form-control" name="sid" id="sid">
        </div>
        <div class="col-12">
          <label for="inputEmail4" class="form-label">Student Name</label>
          <input type="text" class="form-control" name="sname" id="sname">
        </div>
        <div class="col-12">
          <label for="inputPassword4" class="form-label">Age</label>
          <input type="text" class="form-control" name="sage" id="sage">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Grade</label>
          <input type="text" class="form-control" name="sgrade" id="sgrade">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Emergency Contact Number</label>
          <input type="text" class="form-control" name="snumber" id="snumber">
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
      </form><!-- Vertical Form -->

    </div>
  </div>

<?php include 'footer.php'; ?>
