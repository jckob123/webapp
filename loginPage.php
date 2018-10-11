<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>
    DOCUMENT
  </title>
  <!-- Bootstrap CSS CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

   <!-- Font Awesome JS -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <!-- jQuery CDN - Slim version (=without AJAX) -->
   <script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   <script src="../script.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Slabo+27px" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

   <style>
   @import "style/style.css";
   </style>
   <link href="style/style.css" rel="stylesheet" type="text/css">

</head>
<body>
  <?php
  include("php/login.php"); 
  ?>
  <div class="container-login">

    <div class="wrapperdivlogin">
      <div class="formwrap">
        <form action="#" method="post">
          <span id="formtitle">
            Wellcome
          </span>

          <div class="wrapinput">
            <span id="inputtext">Email</span>
            <input type="text" name="username">
          </div>
          <div class="wrapinput">
              <span id="inputtext">Password</span>
              <input type="password" name="password">
          </div>
          <div id="showResult">
          <?php echo $error_msg ?>
          </div>

          <button id="submitbtn" type="submit">Login</button>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
