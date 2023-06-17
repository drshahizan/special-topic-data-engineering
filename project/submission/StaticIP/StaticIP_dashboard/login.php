<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StaticIP</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>

                                    <form class="form-horizontal" method="POST" action="index.html">
                                    <fieldset>
                                        <div class="form-group">
                                        <label for="InputIC"class="form-label mt-4">IC Number</label>
                                        <input type="text" name="fic" class="form-control" id="InputIC" placeholder="Enter your IC number without dash (-)"required>

                                        <label for="InputPassword"class="form-label mt-4">Password</label>
                                        <input type="password" name="fwpd" class="form-control" id="InputPassword" placeholder="Enter your password"required>
                                        </div>
                                        
                                        <div class="form-group">
                                        <div class="mt-4">
                                        <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                        <button type="reset" class="btn btn-primary">Clear</button>
                                    </div>
                                    </div>
                                    </fieldset>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <p>Have no account? <a href="register.php">Register here</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>