<?php 
  include 'headerhome.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rivertion | Upload</title>

    <style>
      .container {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 50px;
        width: 600px; /* Adjust the width and height to make it more square */
        height: auto;
        text-align: center;
        color: white;
        border-radius: 20px; /* Add rounded corners to the container */
      }

      .container span {
        font-size: 30px; /* Increase the font size */
        font-weight: bold;
      }

      .preview-image {
        margin-bottom: 20px;
        width: 300px;
        height: 300px;
        object-fit: scale-down;
        border-radius: 0%;
      }
    </style>

  </head>
  <body background="../images/apple-bg.jpg">

    <div class="container">
      <div class="card">
        <div class="card-body">
          <form action="uploadprocess.php" method="POST" enctype="multipart/form-data">
            <h3>Upload image</h3>
            <div class="mb-3">
              <img src="../images/placeholder-image.png" class="preview-image" alt="Placeholder Image" id="preview">
              <input type="file" name="fvimg" required onchange="previewImage(event)">
            </div>
            <button type="submit" name="upload_fruit" accept="image/*" class="btn btn-primary" required>Upload</button>
          </form>
        </div>
      </div>
    </div>

    <script>
      function previewImage(event) {
        var input = event.target;
        if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {
            document.getElementById('preview').setAttribute('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
        }
      }
    </script>
    
  </body>
</html>
