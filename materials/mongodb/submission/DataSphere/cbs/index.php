<?php  
include ('dbconnect.php');
//Retrieve SQL operation [Get user data based on login info]
$sql = "SELECT * FROM tb_user";

// Execute SQL
$result = mysqli_query($con, $sql); // Execute SQL Statement
$row = mysqli_fetch_array($result); // Retrieve result
$count = mysqli_num_rows($result);  // Count result found


//Retrieve SQL operation [Get user data based on login info]
$sql2 = "SELECT * FROM tb_vehicle";

// Execute SQL
$result2 = mysqli_query($con, $sql2); // Execute SQL Statement
$row2 = mysqli_fetch_array($result2); // Retrieve result
$count2 = mysqli_num_rows($result2);  // Count result found



?>





<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>CBS</title>
    <link rel="icon" type="image/jpeg" sizes="16x16" href="images/favicon.ico">
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
    <link rel="stylesheet" href="css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.4.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Home">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Home.html" data-home-page-title="Home" class="u-body u-xl-mode"><header class="u-clearfix u-header u-sticky-419c u-header" id="sec-d197"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index.php" class="u-image u-logo u-image-1" data-image-width="512" data-image-height="512">
          <img src="images/logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="index.php" style="padding: 10px 20px;">Home</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="login.php" style="padding: 10px 20px;">Booking</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="login.php" style="padding: 10px 20px;">Login</a></li>
              <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="register.php" style="padding: 10px 20px;">Register</a></li>              
            </ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Home</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">Booking</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="login.php">Login</a></li>
                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="register.php">Register</a></li>
              </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div>


    </header>




    <section class="u-clearfix u-image u-section-1" id="carousel_ec5f" style="background: url(&quot;images/pexels-photo-733745.jpeg&quot;)  center / cover;height : 850px;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-left-cell u-size-24 u-size-30-md u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <h5 class="u-text u-text-body-alt-color u-text-1">Car booking system</h5>
                  <p class="u-text u-text-body-alt-color u-text-2">Developed by <strong>DataSphere</strong> for a test as part of System Development Technology course.</p>
                </div>
              </div>
              <div class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-size-12 u-size-30-md u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2"><span class="u-icon u-icon-circle u-text-body-alt-color u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 54.757 54.757" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-c58a"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-c58a" x="0px" y="0px" viewBox="0 0 54.757 54.757" style="enable-background:new 0 0 54.757 54.757;" xml:space="preserve" class="u-svg-content"><g><path d="M27.557,12c-3.859,0-7,3.141-7,7s3.141,7,7,7s7-3.141,7-7S31.416,12,27.557,12z M27.557,24c-2.757,0-5-2.243-5-5   s2.243-5,5-5s5,2.243,5,5S30.314,24,27.557,24z"></path><path d="M40.94,5.617C37.318,1.995,32.502,0,27.38,0c-5.123,0-9.938,1.995-13.56,5.617c-6.703,6.702-7.536,19.312-1.804,26.952   L27.38,54.757L42.721,32.6C48.476,24.929,47.643,12.319,40.94,5.617z M41.099,31.431L27.38,51.243L13.639,31.4   C8.44,24.468,9.185,13.08,15.235,7.031C18.479,3.787,22.792,2,27.38,2s8.901,1.787,12.146,5.031   C45.576,13.08,46.321,24.468,41.099,31.431z"></path>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <h5 class="u-text u-text-body-alt-color u-text-3">location</h5>
                </div>
              </div>
              <div class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-size-12 u-size-30-md u-layout-cell-3">
                <div class="u-container-layout u-valign-middle u-container-layout-3"><span class="u-icon u-icon-circle u-text-body-alt-color u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 468 468" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6a14"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-6a14" x="0px" y="0px" viewBox="0 0 468 468" style="enable-background:new 0 0 468 468;" xml:space="preserve" class="u-svg-content"><g><g><path d="M450.1,187.5l-10.2-10.8l-35.8-96.5C398,63.9,382.4,53.1,365,53H109.3c-17.4,0-33,10.9-39.1,27.2l-35.3,95.3l-14.7,13.6    C7.4,200,0,216,0,232.8v140.6c0.1,23,18.8,41.6,41.8,41.6h26.4c23,0,41.7-18.6,41.8-41.6V353h248v20.4c0.1,23,18.8,41.6,41.8,41.6    h26.4c23,0,41.7-18.6,41.8-41.6V229.1C467.9,213.4,461.5,198.4,450.1,187.5z M89,87c3.2-8.5,11.3-14,20.3-14h255.8    c9,0,17.1,5.6,20.3,14l31.2,84h-23.3c-5.5-37.5-40.4-63.4-77.9-57.8c-29.9,4.4-53.4,27.9-57.8,57.8H57.8L89,87z M372.9,171h-95.1    c5.5-26.3,31.3-43.1,57.6-37.6C354.2,137.4,368.9,152.1,372.9,171z M90,373.4c-0.1,12-9.8,21.6-21.8,21.6H41.8    c-12,0-21.7-9.6-21.8-21.6v-26.2c6,3.9,13.9,5.8,21.8,5.8H90V373.4z M448,373.4c-0.1,12-9.8,21.6-21.8,21.6h-26.4    c-12,0-21.7-9.7-21.8-21.6V353h48.2c7.9,0,15.8-1.9,21.8-5.8V373.4z M426.2,333H41.8c-11.9,0.1-21.7-9.4-21.8-21.4v-78.8    c0-11,4.9-21.5,13.3-28.6c0.1-0.1,0.3-0.3,0.4-0.4L47.3,191H426l9.6,10.3c0.1,0.2,0.4,0.3,0.5,0.5c7.5,7.1,11.8,17,11.8,27.3v82.5    h0.1C447.9,323.5,438.1,333.1,426.2,333z"></path>
</g>
</g><g><g><path d="M132,231H57c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C142,235.5,137.5,231,132,231z M122,283    H67v-32h55V283z"></path>
</g>
</g><g><g><path d="M411,231h-75c-5.5,0-10,4.5-10,10v52c0,5.5,4.5,10,10,10h75c5.5,0,10-4.5,10-10v-52C421,235.5,416.5,231,411,231z     M401,283h-55v-32h55V283z"></path>
</g>
</g><g><g><path d="M282.3,273h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,273,282.3,273z"></path>
</g>
</g><g><g><path d="M282.3,242h-96.6c-5.5,0-10,4.5-10,10s4.5,10,10,10h96.6c5.5,0,10-4.5,10-10S287.8,242,282.3,242z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <h5 class="u-text u-text-body-alt-color u-text-4"><?php echo $count2; ?> cars</h5>
                </div>
              </div>
              <div class="u-align-center-lg u-align-center-xl u-align-left-md u-align-left-sm u-align-left-xs u-container-style u-layout-cell u-right-cell u-size-12 u-size-30-md u-layout-cell-4">
                <div class="u-container-layout u-valign-middle u-container-layout-4"><span class="u-icon u-icon-circle u-text-body-alt-color u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6d09"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-6d09" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve" class="u-svg-content"><g><g><path d="M262.809,494.93c-1.859-1.86-4.439-2.93-7.069-2.93c-2.631,0-5.211,1.07-7.07,2.93c-1.86,1.86-2.93,4.44-2.93,7.07    s1.069,5.21,2.93,7.07c1.859,1.86,4.439,2.93,7.07,2.93c2.63,0,5.21-1.07,7.069-2.93c1.86-1.86,2.931-4.44,2.931-7.07    S264.67,496.79,262.809,494.93z"></path>
</g>
</g><g><g><path d="M458.56,327.071l-33.358-7.969V305.87c18.516-11.703,30.848-32.342,30.848-55.818v-37.267c0-36.393-29.608-66-66.002-66    c-19.632,0-37.279,8.626-49.38,22.275c-10.598-36.703-44.495-63.623-84.564-63.623h-0.001c-40.134,0-74.077,27.005-84.616,63.798    c-12.104-13.75-29.816-22.45-49.532-22.45c-36.394,0-66.002,29.608-66.002,66v37.267c0,23.477,12.332,44.116,30.848,55.818v13.232    l-33.358,7.969C21.976,334.587,0,362.43,0,394.779V462c0,5.523,4.478,10,10,10h79.963v30c0,5.523,4.478,10,10,10h109.704    c5.522,0,10-4.477,10-10s-4.478-10-10-10h-44.643v-44.012c0-5.523-4.478-10-10-10c-5.522,0-10,4.477-10,10V492h-35.062v-45.118    c0-33.914,23.034-63.119,56.015-71.022l49.183-11.786l31.646,71.996c1.596,3.631,5.187,5.976,9.153,5.976h0.001    c3.966,0,7.558-2.344,9.154-5.975l31.614-71.891l49.04,11.715c33.011,7.885,56.065,37.096,56.065,71.034v11.159    c-0.511,1.202-0.795,2.523-0.795,3.911s0.284,2.71,0.795,3.911V492h-34.857v-44.012c0-5.523-4.478-10-10-10    c-5.522,0-10,4.477-10,10V492h-48.975c-5.522,0-10,4.477-10,10s4.478,10,10,10h113.832c5.522,0,10-4.477,10-10v-30H502    c5.522,0,10-4.477,10-10v-67.221C512,362.43,490.024,334.587,458.56,327.071z M390.047,166.785c25.365,0,46.002,20.636,46.002,46    v2.476v1.005h-28.603c-21.606,0-42.837-5.673-61.548-16.426C351.504,180.758,369.174,166.785,390.047,166.785z M344.045,248.42    c0.035-1.021,0.06-26.888,0.06-26.888c19.659,9.668,41.332,14.735,63.342,14.735h28.603v13.786    c-0.001,25.364-20.638,45.999-46.003,45.999s-46.002-20.636-46.002-46V248.42z M188.1,193.438c0-37.496,30.506-68,68.003-68    c37.496,0,68.002,30.505,68.002,68v1.304l-37.115-21.805c-4.211-2.475-9.593-1.544-12.73,2.199    c-14.42,17.208-35.568,27.078-58.021,27.078H188.1V193.438z M75.951,215.262v-2.477c0-25.365,20.637-46,46.002-46    c20.873,0,38.543,13.973,44.148,33.056c-18.711,10.752-39.941,16.426-61.548,16.426H75.951V215.262z M75.951,250.052v-13.786    h28.603c22.032,0,43.727-5.076,63.401-14.763v28.549c0,25.365-20.637,46-46.002,46S75.951,275.416,75.951,250.052z     M89.963,446.882V452H60v-44.429c0-5.523-4.478-10-10-10s-10,4.477-10,10V452H20v-57.221c0-23.055,15.662-42.898,38.087-48.255    l31.698-7.573l20.688,49.555C97.534,404.58,89.963,424.954,89.963,446.882z M121.955,364.094l-15.187-36.379    c0.017-0.239,0.031-0.478,0.031-0.72v-12.718c4.869,1.148,9.939,1.775,15.154,1.775c5.192,0,10.238-0.622,15.088-1.76v12.07    c-0.011,0.188-0.016,0.376-0.016,0.564c0,0.315,0.03,0.628,0.06,0.941L121.955,364.094z M161.317,356.411    c-5.905,1.415-11.548,3.384-16.906,5.812l9.74-23.322l31.703,7.597c2.459,0.589,4.855,1.368,7.174,2.314L161.317,356.411z     M210.953,335.568c-6.278-3.894-13.166-6.777-20.438-8.519l-33.474-8.021v-13.115c8.325-5.247,15.396-12.299,20.667-20.607    c7.539,14.729,19.11,27.063,33.245,35.547V335.568z M280.933,350.413l-24.971,56.786l-25.009-56.897v-20.624    c7.972,2.382,16.413,3.667,25.149,3.667c8.62,0,16.953-1.252,24.831-3.573V350.413z M256.103,313.346    c-37.498-0.001-68.003-30.506-68.003-68.001v-23.13h28.138c25.524,0,49.715-10.088,67.587-27.941l40.221,23.629v29.789    C322.802,284.103,292.813,313.346,256.103,313.346z M300.933,321.041h0.001c14.222-8.455,25.874-20.798,33.471-35.559    c5.26,8.231,12.289,15.22,20.554,20.431v13.115l-33.474,8.021c-7.316,1.753-14.243,4.662-20.552,8.592V321.041z M350.414,356.444    l-31.625-7.556c2.376-0.98,4.833-1.785,7.357-2.39l31.626-7.578l9.78,23.426C362.125,359.874,356.404,357.875,350.414,356.444z     M374.894,328.016c0.04-0.363,0.069-0.728,0.069-1.094c0-0.093-0.001-0.187-0.004-0.28v-12.35c4.85,1.139,9.896,1.76,15.088,1.76    c5.215,0,10.285-0.627,15.154-1.776v12.718c0,0.182,0.013,0.361,0.023,0.541l-15.268,36.559L374.894,328.016z M492,452h-20    v-44.429c0-5.523-4.478-10-10-10c-5.522,0-10,4.477-10,10V452h-30.167v-5.07c0-21.899-7.546-42.245-20.448-58.305l20.753-49.692    l31.775,7.591c22.425,5.357,38.087,25.2,38.087,48.255V452z"></path>
</g>
</g><g><g><path d="M229.529,234.18c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21,1.07-7.07,2.93s-2.93,4.44-2.93,7.07s1.069,5.21,2.93,7.07    c1.861,1.86,4.44,2.93,7.07,2.93c2.64,0,5.21-1.07,7.069-2.93c1.87-1.86,2.931-4.44,2.931-7.07S231.399,236.04,229.529,234.18z"></path>
</g>
</g><g><g><path d="M296.399,234.18c-1.859-1.86-4.439-2.93-7.069-2.93s-5.21,1.07-7.07,2.93s-2.93,4.44-2.93,7.07s1.069,5.21,2.93,7.07    c1.861,1.86,4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93c1.87-1.86,2.931-4.44,2.931-7.07S298.269,236.04,296.399,234.18z"></path>
</g>
</g><g><g><path d="M275.247,267.842c-3.906-3.905-10.236-3.905-14.143,0c-2.957,2.957-7.768,2.957-10.725,0    c-3.906-3.905-10.236-3.905-14.143,0c-3.905,3.905-3.905,10.237,0,14.143c5.378,5.377,12.441,8.066,19.505,8.066    c7.064,0,14.127-2.688,19.505-8.066C279.152,278.079,279.152,271.747,275.247,267.842z"></path>
</g>
</g><g><g><path d="M413.479,54h-6.859c-5.522,0-10,4.477-10,10s4.478,10,10,10h6.859c5.522,0,10-4.477,10-10S419.001,54,413.479,54z"></path>
</g>
</g><g><g><path d="M462,54h-6.859c-5.522,0-10,4.477-10,10s4.477,10,10,10H462c5.522,0,10-4.477,10-10S467.522,54,462,54z"></path>
</g>
</g><g><g><path d="M434.311,74.831c-5.522,0-10,4.477-10,10v6.859c0,5.523,4.477,10,10,10c5.522,0,10-4.477,10-10v-6.859    C444.311,79.308,439.833,74.831,434.311,74.831z"></path>
</g>
</g><g><g><path d="M434.311,26.31c-5.522,0-10,4.477-10,10v6.859c0,5.523,4.477,10,10,10c5.522,0,10-4.477,10-10V36.31    C444.311,30.787,439.833,26.31,434.311,26.31z"></path>
</g>
</g><g><g><path d="M56.302,54h-6.858c-5.522,0-10,4.477-10,10s4.478,10,10,10h6.858c5.522,0,10-4.477,10-10S61.824,54,56.302,54z"></path>
</g>
</g><g><g><path d="M104.823,54h-6.858c-5.522,0-10,4.477-10,10s4.477,10,10,10h6.858c5.522,0,10-4.477,10-10S110.345,54,104.823,54z"></path>
</g>
</g><g><g><path d="M77.134,74.831c-5.522,0-10,4.477-10,10v6.859c0,5.523,4.477,10,10,10c5.522,0,10-4.477,10-10v-6.859    C87.134,79.308,82.656,74.831,77.134,74.831z"></path>
</g>
</g><g><g><path d="M77.134,26.31c-5.522,0-10,4.477-10,10v6.859c0,5.523,4.477,10,10,10c5.522,0,10-4.477,10-10V36.31    C87.134,30.787,82.656,26.31,77.134,26.31z"></path>
</g>
</g><g><g><path d="M256,38.087c-5.522,0-10,4.477-10,10v26.31c0,5.523,4.478,10,10,10c5.522,0,10-4.477,10-10v-26.31    C266,42.564,261.522,38.087,256,38.087z"></path>
</g>
</g><g><g><path d="M263.069,2.93C261.21,1.07,258.63,0,256,0s-5.21,1.07-7.07,2.93C247.069,4.79,246,7.37,246,10s1.069,5.21,2.93,7.07    c1.861,1.86,4.44,2.93,7.07,2.93s5.21-1.07,7.069-2.93C264.93,15.21,266,12.63,266,10S264.93,4.79,263.069,2.93z"></path>
</g>
</g><g><g><path d="M220.955,40.119l-14.634-14.634c-3.906-3.905-10.236-3.905-14.143,0c-3.905,3.905-3.905,10.237,0,14.143l14.635,14.634    c1.953,1.953,4.512,2.929,7.071,2.929c2.559,0,5.118-0.976,7.071-2.929C224.86,50.357,224.86,44.025,220.955,40.119z"></path>
</g>
</g><g><g><path d="M319.82,24.935c-3.906-3.905-10.236-3.905-14.143,0l-15.123,15.123c-3.905,3.905-3.905,10.237,0,14.143    c1.954,1.953,4.512,2.929,7.072,2.929s5.118-0.976,7.071-2.929l15.123-15.123C323.725,35.173,323.725,28.841,319.82,24.935z"></path>
</g>
</g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></span>
                  <h5 class="u-text u-text-body-alt-color u-text-5"><?php echo $count; ?> Happy Users</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    

    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-4b83">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"> Car Systems.Co</p>
      </div>
    </footer>

  </body>
</html>