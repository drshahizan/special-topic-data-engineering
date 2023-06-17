
<style>
  .cookie_policy {
    text-decoration: underline;
  }
  .cookie_policy:hover {
    font-weight: bold;
    /*text-decoration: none !important;*/
  }
  .cookie_text{
    color: #a7a7a7;
  }
</style>
<script>
  // // Jquery EU_cookie set
  // jQuery(function($) {

  //     checkCookie_eu();

  //     function checkCookie_eu()
  //     {

  //         var consent = getCookie_eu("cookies_consent");

  //         if (consent == null || consent == "" || consent == undefined)
  //         {
  //             // show notification bar
  //             $('#cookie_directive_container').show();
  //         }

  //     }

  //     function setCookie_eu(c_name,value,exdays)
  //     {

  //         var exdate = new Date();
  //         exdate.setDate(exdate.getDate() + exdays);
  //         var c_value = escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
  //         document.cookie = c_name + "=" + c_value+"; path=/";

  //         $('#cookie_directive_container').hide('slow');
  //     }


  //     function getCookie_eu(c_name)
  //     {
  //         var i,x,y,ARRcookies=document.cookie.split(";");
  //         for (i=0;i<ARRcookies.length;i++)
  //         {
  //             x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  //             y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  //             x=x.replace(/^\s+|\s+$/g,"");
  //             if (x==c_name)
  //             {
  //                 return unescape(y);
  //             }
  //         }
  //     }

  //     $("#cookie_accept a").click(function(){
  //         setCookie_eu("cookies_consent", 1, 30);
  //     });

  // });

  $(document).ready(function () {
    if (localStorage.getItem("accept_cookie_neoflex")) {
      //localStorage.removeItem("accept_cookie_neoflex");
    }else{
      $('#cookie_directive_container').show(1000);
    }
  });

  function allowCookie() {
    if (typeof(Storage) !== "undefined") {
      localStorage.setItem("accept_cookie_neoflex", true);
      $('#cookie_directive_container').hide(1000);
    }
  }
</script>
<div id="cookie_directive_container" class="container" style="display: none; background-color: #6b0e6bd4; color: #fff;">
  <nav class="navbar navbar-default navbar-fixed-bottom" style="background-color: #6b0e6bd4;">
    <div class="container" style="padding: 10px;">
      <div class="navbar-inner navbar-content-center" id="cookie_accept">
        <div class="row">
          <div class="col-md-10">
            <p class="credit cookie_text">
              <?php echo get_settings('cookie_note'); ?> <a href="<?php echo base_url();?>index.php?general/cookie_policy" class="cookie_policy"><?php echo get_phrase('cookie_policy'); ?></a>
            </p>
          </div>
          <div class="col-md-2" style="padding-top: 5px;">
            <a href="javascript: void()" onclick="allowCookie()" class="btn btn-success btn-sm pull-right"><?php echo get_phrase('accept'); ?></a>
          </div>
        </div>
      </div>
    </div>
  </nav>
</div>