<?php include 'login-header.php'; ?>
<?php include 'dbconnect.php'; ?>
<title>Register</title>

<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Tiktokify</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-8">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate  action="registerbyadminpost.php" method="post">
                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="username" required>
                        <div class="invalid-feedback">Please choose a username</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="fullName" class="form-label">Full Name</label>
                      <input type="text" name="name" class="form-control" id="name" required>
                      <div class="invalid-feedback">Please enter your fullname</div>
                    </div>

                    <div class="col-12">
                        <label for="role" class="form-label">Role</label>
                        <select name="role" class="form-select" id="role" required>
                            <option value="">Select Role</option>
                            <?php
                            // Fetch role options from the database
                            $roleQuery = "SELECT * FROM tb_role";
                            $roleResult = mysqli_query($conn, $roleQuery);

                            // Display role options as dropdown options
                            while ($roleRow = mysqli_fetch_assoc($roleResult)) {
                            echo "<option value='".$roleRow['id']."'>".$roleRow['role']."</option>";
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">Please select a role</div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="password" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              <div class="credits">
                Designed by DatAce
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <?php include 'footer.php'; ?>