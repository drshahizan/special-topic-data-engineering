<?php 
include 'head.php';
include 'footer.php'; 

?>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">        
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                </div>
                <div class="card-body">
                <form role="form" class="form-horizontal" method="POST" action="sign-in-process.php">
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" name="femail"class="form-control" id="inputEmail" placeholder="Email" aria-label="Email" aria-describedby="email-addon" required>
                    </div>
                    <label for="inputPassword">Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="fpwd" placeholder="Password" aria-label="Password" id="inputPassword" aria-describedby="password-addon" required>
                    </div>
                    
                    <div class="text-center">
                      <button type="submit" name="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    Don't have an account?
                    <a href="sign-up.php" class="text-info text-gradient font-weight-bold">Sign up</a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/curved-images/curved6.jpg')"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>

</html>