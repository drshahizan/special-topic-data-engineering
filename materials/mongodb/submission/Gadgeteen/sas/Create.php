<?php 
include 'headeradmin.php';
?> 

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Sales Analysis System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Sales</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ms-auto d-flex">

        <li class="nav-item">
          <a class="nav-link" aria-haspopup="true" aria-expanded="false">
              <img src="img/user.jpg" alt="user-img" width="36" style="border-radius: 50%;">
              <span class="text-white">
                Ming Qi
              </span>
          </a>
        </li>
      </ul>

    </div>
  </div>
</nav>

<div class="page-wrapper">

	<div class="container-fluid">

    	<div class="white-box">
    		  <form class="form-horizontal" method="POST" action="createprocess.php" enctype="multipart/form-data">
    <fieldset>
      <h1>Create Sales</h1>

      <div class="form-group col-10 has-success">
        <label for="inputreg" class="form-label mt-4">City</label>
        <div class="col-10">
            <select id="city" name="city" class="form-control" required>
              <option value="" selected disabled hidden>Select City</option>
              <option value="Naypyitaw">Naypyitaw</option>
              <option value="Yangon">Yangon</option>
              <option value="Mandalay">Mandalay</option>
            </select>
        </div>
      </div>

      <div class="form-group col-10 has-success">
        <label for="inputreg" class="form-label mt-4">Customer type</label>
        <div class="col-10">
            <select id="customer" name="customer" class="form-control" required>
              <option value="" selected disabled hidden>Select Customer Type</option>
              <option value="Member">Member</option>
              <option value="Normal">Normal</option>
            </select>
        </div>
      </div>

      <div class="form-group col-10">
        <label for="inputType" class="form-label mt-4">Gender</label>
        <div class="col-10">
          <select id="gender" name="gender" class="form-control" required>
              <option value="" selected disabled hidden>Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
        </div>
      </div>

      <div class="form-group col-10">
        <label for="inputModel" class="form-label mt-4">Category</label>
        <div class="col-10">
          <select id="category" name="category" class="form-control" required>
              <option value="" selected disabled hidden>Select Category</option>
              <option value="Sports and travel">Sports and travel</option>
              <option value="Food and beverages">Food and beverages</option>
              <option value="Health and beauty">Health and beauty</option>
              <option value="Fashion accessories">Fashion accessories</option>
              <option value="Home and lifestyle">Home and lifestyle</option>
              <option value="Electronic accessories">Electronic accessories</option>
            </select>
        </div>
      </div>

      <div class="form-group col-10">
        <label for="inputSeat" class="form-label mt-4">Total Price</label>
        <div class="col-10">
          <input type="number" name="total" class="form-control" id="total" placeholder="Enter total price"  step="0.01" required>
        </div>
      </div>

      <div class="form-group col-10">
        <label class="form-label mt-4" for="inputPrice">Date </label>
        <div class="col-10">
          <input type="date" name="date" class="form-control" id="date" placeholder="Enter Date" required>
      	</div>
      </div>

      <div class="form-group col-10">
        <label for="inputSeat" class="form-label mt-4">Gross Income</label>
        <div class="col-10">
          <input type="number" name="income" class="form-control" id="income" placeholder="Enter gross income" step="0.01" required>
        </div>
      </div>

      <div class="form-group col-10">
        <label for="inputSeat" class="form-label mt-4">Rating : <span id="demo"></span> </label>
        <div class="col-10">
          <input type="range" name="rating" class="form-control" id="rating" placeholder="Enter rating" min="0" max="10" step="0.1"  required>
        </div>
      </div>
     
      <div class="form-group col-10">
        <div class="col-10">
          <button type="submit" id="submit" class="btn btn-primary btn-lg" style="float:right; margin-top:15px; width:150px;">Add</button>
          <button type="reset" class="btn btn-warning btn-lg" style="float:right; margin-right:20px; margin-top:15px; margin-bottom: 10px; width:150px;">Clear</button>

         <a class="btn btn-secondary btn-lg" href='index.php' style="margin-top:15px; width:150px;"> 
            Back
          </a>
        </div>
      </div>

    </fieldset>
  </form>

		</div> <!--whitebox end-->

	</div>

</div>

<?php include 'footer.php'; ?> 

<script>
  var slider = document.getElementById("rating");
  var output = document.getElementById("demo");
  output.innerHTML = slider.value;

  slider.oninput = function() {
    output.innerHTML = this.value;
  }
</script>