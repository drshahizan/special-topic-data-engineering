<!DOCTYPE html>
<html>
<head>
  <!-- Basic Page Info -->
  <meta charset="utf-8">
  <title>Login - DataSphere</title>

  <!-- Site favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../images/DataSphere Logo.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/DataSphere Logo.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/DataSphere Logo.png">

  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="../css/core.css">
  <link rel="stylesheet" type="text/css" href="../css/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="../css/style1.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-119386393-1');
  </script>
</head>

<body class="login-page">
  <div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
      <div class="brand-logo">
        <a href="../index.php">
          <img src="../images/DataSphere Box Logo.svg" alt="">
        </a>
      </div>
      <div class="login-menu">
        <ul>
          <li><a href="register.php">Register</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center" style="background-image: url('../images/background.jpg'); background-size: cover; background-position: center bottom 10%;">
    <div class="container">
      <div class="row align-items-center">
        
      
        <div class="col-md-6 col-lg-7">
          <img src="../images/tweetBackground.png" alt="">
        </div>




        <div class="col-md-6 col-lg-5">
          <div class="login-box bg-white box-shadow border-radius-10">
            <div class="login-title">
              <h2 class="text-center text-primary">Login To DataSphere</h2>
            </div>
            <form method="POST" action="../includes/loginprocess.php">
              
              <div class="input-group custom">
                <input type="text" name="fusername" class="form-control form-control-lg" placeholder="Username">
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                </div>
              </div>
              <div class="input-group custom">
                <input type="password" name="fpwd" class="form-control form-control-lg" placeholder="Passwors">
                <div class="input-group-append custom">
                  <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                </div>
              </div>
              
              <div class="row">
                <div class="col-sm-12">
                  <div class="input-group mb-0">
                    
                      
                    <input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
                    
                    
                  </div>
                  <div class="font-16 weight-600 pt-10 pb-10 text-center" data-color="#707373">OR</div>
                  <div class="input-group mb-0">
                    <a class="btn btn-outline-primary btn-lg btn-block" href="register.php">Register To Create Account</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
		</div>
    </div>
  </div>
  <!-- js -->
  <script src="../js/core.js"></script>
  <script src="../js/script.min.js"></script>
  <script src="../js/process.js"></script>
  <script src="../js/layout-settings.js"></script>
</body>
</html>