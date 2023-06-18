

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Spotify Recommendation Engine</title>
    <link rel="icon" type="image/x-icon" href="img/icon.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .form-popup {
      display: none;
      position: fixed;
      bottom: 0;
      right: 15px;
      border: 3px solid #f1f1f1;
      z-index: 9;
    }
  </style>
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-light position-relative shadow">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
            <a href="admin.php" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px;">
                <img src="img/icon.png" alt="Girl in a jacket" width="40" height="50">
                <span class="text-primary">Zytrex</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                <button type="button" class="btn btn-primary" onclick="myFunction5()">Logout<i class="fa fa-sign-out-alt ml-2"></i></button>
                <div class="form-popup" id="myForm5">
                  <div class="modal" style="display: flex; justify-content: center; align-items: center;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Logout</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure want to logout?</p>
                        </div>
                        <div class="modal-footer">
                          <a href="logout.php" class="btn btn-primary px-4">Logout</a>
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="closeForm5()">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <script>
  function myFunction5(){
    document.getElementById("myForm5").style.display = "block";
  }

  function closeForm5(){
    document.getElementById("myForm5").style.display = "none";
  }
</script>