<?php include 'header.php'; ?>
<?php include 'dbconnect.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    <style>
        .profile-icon {
            display: block;
            margin: 0 auto;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background-color: #ccc;
        }

        .form-center {
            margin: 0 auto;
            max-width: 700px;
        }
    </style>
</head>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>User Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div>

  <!-- End Page Title -->
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Update Profile Information</h5>

      <body>
        <form action="" class="row g-3 form-center" method="post"> 
            <div class="col-12">
            <label for="inputNanme4" class="form-label">Username</label>
            <input type="text" class="form-control" name="sid" id="sid" value="<?php echo $sid; ?>" readonly>
            </div>
            <div class="col-12">
            <label for="inputEmail4" class="form-label">User Name</label>
            <input type="text" class="form-control" name="sname" id="sname" placeholder="Enter student name" value="<?php echo $sname; ?>">
            </div>
            <div class="text-center">
            <button type="submit" name="update" class="btn btn-primary" onclick="return confirm('Are you sure you want to update this student record?')">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
            <div class="text-center">
            <p><a href="forgot-password.php">Forgot password?</a></p>
            </div>
        </form>
           
        </body>
    </div>
  </div>

<?php include 'footer.php'; ?>
