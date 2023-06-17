<?php 
include("dbconnect.php");
// include 'intelsession.php';
// if(!session_id())
// {
//     session_start();
// }
include 'headeradmin.php';
?>
<body class="g-sidenav-show  bg-gray-100">  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6 class="text-center">MOVIE DASHBOARD</h6>
            </div>
            <div class='tableauPlaceholder' id='viz1687014750153' style='position: relative'><noscript><a href='#'><img alt='Dashboard 1 ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ms&#47;mso&#47;Dashboard1&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='mso&#47;Dashboard1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;ms&#47;mso&#47;Dashboard1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en-US' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1687014750153');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.width='1000px';vizElement.style.height='827px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.width='1000px';vizElement.style.height='827px';} else { vizElement.style.width='100%';vizElement.style.height='1427px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script></div>
              <html>
<head>
    <title>Tableau Chart Example</title>
    <script src="path/to/tableau-2.min.js"></script>
</head>
<body>
    <div id="tableauViz"></div>

    <script>
        function initViz() {
            var containerDiv = document.getElementById("tableauViz");
            var vizUrl = "http://public.tableau.com/javascripts/api/book1.js"; // Replace with the path to your Tableau workbook file

            var options = {
                width: "800px",
                height: "600px"
            };

            var viz = new tableau.Viz(containerDiv, vizUrl, options);
        }

        // Run the initViz function when the page has finished loading
        document.addEventListener("DOMContentLoaded", initViz);
    </script>
</body>
</html>


      </div>      
    </div>
  </main>    
</body>