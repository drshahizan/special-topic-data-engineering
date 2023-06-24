<!DOCTYPE html>
<html lang="en">

<head>
  <title>CodeX TV Show Recommendation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="upload_style.css">
  <script type="text/javascript" src="jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="upload_script.js"></script>





  <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand">CodeX</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav me-auto">
          <li class="nav-item">
            <a class="nav-link active" href="adminindex.php">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">TV Shows</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="adminnewshow.php">Add New Show</a>

          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Rating</a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="adminrating.php">User Rating</a>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a class="nav-link" href="logout.php">Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>