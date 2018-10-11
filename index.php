<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <?php
  include("php/session.php")
  ?>
  <title>
      <?php
      echo $login_session;
      ?>
  </title>
  <!-- Bootstrap CSS CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

   <!-- Font Awesome JS -->
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
   <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
   <!-- jQuery CDN - Slim version (=without AJAX) -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
   <!-- Bootstrap JS -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
   <script src="script.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Slabo+27px" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>

   <style>
   @import "style/style.css";
   </style>
   <link href="style/style.css" rel="stylesheet" type="text/css">

</head>
<body>
  <div class="outsidewrap">
    <div class="header">

    </div>
    <div class="wrapper">
      <nav id="sidebar">
        <ul class="list-unstyled components">
          <li>
            <a href="index.html">
              <i class="fas fa-home"></i>
              Home
            </a>
          </li>
          <li>
            <a href="#aboutMe" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">about</a>
          </li>
          <ul class="collapse list-unstyled" id="aboutMe">
            <li>
              <div class="sidebar-header">
                <div class="media">
                  <div class="wrapper-Media row">
                    <img class="mr-3" id="profilepicID" src="pics/profilepic.png" alt="Generic placeholder image">
                    <div class="media-body">
                    <h5 class="mt-0">Jakob Ceferin</h5>
                      <div class="media-text">
                        <ul>
                          <li>Web developer</li>
                          <li>Java engineer</li>
                          <li>Techno music production</li>
                        </ul>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </li>
            <li>
          </ul>
          <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
              <li>
                <a href="#">My music</a>
              </li>
            </ul>
          </li>
          <li>
            <a href="contact.html">Contact</a>
          </li>
        </ul>
      </nav>

      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar-top">
            <div class="containter-fluid">
              <button onClick='cookieSet()' type="button" id="sidebarCollapse" class="btn btn-toggle">
                <i class="fas fa-align-left"></i>
                <span>Toggle sidebar</span>
              </button>
              <button type="button" class="btn btn-toggle" data-toggle="modal" data-target="#exampleModal">
                <i class="fas fas-align-left"></i>
                <span></span>
              </button>
              <button id="logoutbtn" class="btn btn-info"><a href="php/logout.php">Logout</a></button>
            </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">About me</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">@Jakob Ceferin</span>
                </button>
              </div>
              <div class="modal-body">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt at fuga repellendus excepturi quasi culpa magnam dolorum eligendi ab assumenda. Delectus facilis nesciunt maxime accusamus iure nulla sapiente! Dignissimos magnam, excepturi doloribus error ex quia accusamus molestiae laudantium incidunt tempore. Neque nemo quidem non illo voluptate aliquam eligendi inventore, quisquam natus perspiciatis iure repudiandae accusamus ipsa repellat, officiis adipisci ipsam architecto at totam omnis ex. Iure placeat nesciunt, ducimus illo a assumenda velit fuga. Sit quibusdam error ex, tempore dolorum totam et? Eaque distinctio nobis nam ipsa cum provident sequi suscipit illum veniam nihil adipisci dolorum unde architecto quod corrupti, maxime vel atque fugit minus quis obcaecati repellat expedita. Nulla ratione rerum facere cum animi modi doloremque tempore ut debitis, doloribus laboriosam reiciendis architecto similique, ex excepturi unde possimus, quas consectetur rem? Libero obcaecati officiis commodi asperiores ad, velit rem repudiandae numquam nostrum laudantium ullam, quisquam laborum. Libero doloremque ipsum ad autem dolorem dicta sint magni vitae quos molestias blanditiis nesciunt, soluta in odit sequi reprehenderit aut fugit consequuntur incidunt ipsam odio impedit enim, obcaecati! Ipsam suscipit eos, aspernatur corporis nobis, laudantium illo. Beatae rem earum est! Dolorem quia modi, qui facilis obcaecati repudiandae eaque, voluptate iusto architecto non, dolorum quos rem esse voluptatum, est quis. Esse nemo corrupti voluptate in! Non accusamus officia autem quos, eum sed consequuntur laborum id, fugit voluptatum? Velit quia reprehenderit fugit totam voluptates vero unde sunt, distinctio omnis enim minus odio laborum culpa ex sint expedita optio quidem animi nobis dolor dolores ea tempora necessitatibus. Velit enim laudantium aliquid adipisci quo nihil assumenda deserunt. Optio, commodi voluptatum. Sit consequuntur voluptate veritatis natus quos temporibus, sequi dolorem, quasi ipsam in modi. Aut nisi eos vel iusto sint repellat nostrum culpa eum nulla ut voluptatibus repudiandae impedit, asperiores, iure ratione? Tempora voluptate accusamus, et dolorem totam?

              </div>
              <div class="modal-footer">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, placeat.
              </div>
            </div>
          </div>
        </div>


        </nav>

        <div class="page-content">
          <div class="article">
              <h3>
                  O meni
              </h3>
              <p>
                  Ime mi je Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, optio incidunt aspernatur doloribus ab sit cum exercitationem nobis? Veritatis hic sequi esse officiis vero ab, corrupti temporibus iure nisi sit.
              </p>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
</html>
