
<?php 
include ('session.php');

if (!session_id())
{
  session_start();
}

include 'contentcreator-header.php'; 
include 'dbconnect.php'; 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        .form-center {
            margin: 0 auto;
            max-width: 700px;
        }
        .iframe-container {
  display: flex;
  justify-content: center;
  align-items: center;
}
    </style>
</head>

<main id="main" class="main">

  <div class="pagetitle">
    
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      </ol>
    </nav>
  </div>

  <div class="card">
  <div class="card-body">
    <h5 class="card-title text-center">Tiktok Dashboard for Content Creator</h5>

    <div class="iframe-container text-center">
      <iframe title="dashboard_contentcreator" width="100%" height="870" 
        src="https://app.powerbi.com/view?r=eyJrIjoiYWJjMDIxMzEtN2E3Yi00YThmLTgyM2QtOWMzNTA3ZWNmYmFhIiwidCI6IjBlMGRiMmFkLWM0MTYtNDdjNy04OGVjLWNlYWM0ZWU3Njc2NyIsImMiOjEwfQ%3D%3D&pageName=ReportSection" 
        frameborder="0" allowFullScreen="true"></iframe>
    </div>
  </div>
</div>


<?php include 'footer.php'; ?>
 