<?php include 'login-header.php'; ?>

<style>
    body {
  background: #222328;
}
</style>
        
<div class="container">
    
    <form class="contact-form bg-white rounded p-5" style="margin-left: auto; margin-right: auto; width: 80%;height: 80%;" id="comment-form" method="POST" action="logout.php">
            <p><a>Are you sure you want to log out?</a></p>

            <input class="btn btn-main btn-round-full" type="submit" name="submit-contact" id="submit_contact" value="Yes"><br><br>
            <p><a href="customer.php">Back to home</a></p>
        </form>
</div>