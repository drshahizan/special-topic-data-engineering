<?php include 'headermain.php'; ?>

<body>
  <div class="container">
    <div class="jumbotron">
      <h2 class="text-center">CodeX Recommendation System - Login Site</h2>
      <br>
      <p class="text-center">Please LOGIN to continue.</p>
    </div>

    <div class="d-flex justify-content-center align-items-center" style="height: 50vh;">
      <div class="container" style="max-width: 400px;">
        <div class="row justify-content-end">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-heading">Login</div>
              <div class="panel-body">
                <form class="form-horizontal" method="POST" action="loginprocess.php">
                  <fieldset>
                    <div class="form-group">
                      <label for="inputUsername" class="col-lg-2 control-label">IC Number</label>
                      <div class="col-lg-10">
                        <input type="text" name="fic" class="form-control" id="inputfic" placeholder="Enter your IC" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" name="fpwd" class="form-control" id="inputPassword" placeholder="Enter Your Password" required>
                      </div>
                    </div>
                    <br>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-danger">Clear</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
                <label style="margin-left: 215px;">or</label> <br>
                <label style="margin-left: 150px; margin-bottom: 50px;"><a href="register.php">Create a new account.</a></label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include 'footer.php'; ?>