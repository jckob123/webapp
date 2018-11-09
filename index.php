<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
  include("php/session.php")
  ?>
  <title>a</title>
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
    crossorigin="anonymous">
  <link href="https://vjs.zencdn.net/7.1.0/video-js.css" rel="stylesheet">
  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
    crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
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
            <a class="btn btn-info btn-logout" href="php/logout.php">Logout</a>
          </div>


          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">About me</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">@Jakob Ceferin</span>
                  </button>
                </div>
                <div class="modal-body">


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
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio similique tenetur, dolorem autem,
              suscipit nesciunt eveniet voluptas vel iusto fuga perferendis adipisci molestiae quam. Aspernatur
              temporibus quisquam expedita dignissimos minus beatae quas voluptate tempore repellendus impedit enim
              explicabo accusamus, quam nulla aliquid doloribus eum praesentium? Dolor numquam repudiandae cum
              reprehenderit tenetur recusandae debitis error atque animi porro accusamus magnam, id necessitatibus?
              Mollitia, et impedit, odit voluptatum libero tempora ullam consectetur eaque veniam vitae, necessitatibus
              molestiae unde consequatur! Iusto voluptatem libero obcaecati ea quaerat cumque asperiores. Sit aliquam
              sapiente eum illo eius blanditiis officia inventore porro autem dolore consequuntur quo corporis nisi
              ducimus cumque, suscipit in iste repellat, eligendi dignissimos? Sed enim rerum ullam nihil facilis quae
              asperiores eveniet, nam blanditiis non, qui assumenda quas, et tempore. Tempore obcaecati perspiciatis
              quam nulla illum magnam cum reiciendis repellat at inventore excepturi cumque, iure ipsam nesciunt nisi
              est, aperiam consectetur aliquam nihil consequatur, quos maiores! In dolore consequuntur doloremque,
              ullam aliquid dolorum voluptas rem voluptatum facilis a hic accusamus quis repellat beatae ab dicta
              veritatis ex neque? Impedit fugiat vitae molestiae explicabo tempora minus et sit commodi modi! Aperiam
              libero voluptatum, perferendis qui, minus recusandae animi consequatur possimus dolore vel nesciunt
              itaque maxime magnam, aut delectus at deserunt tempore labore. A rem, dolore pariatur omnis tempora
              veritatis beatae! Architecto nesciunt, est voluptatum libero numquam reprehenderit corporis quibusdam
              dolore quam quasi rem, veniam harum illo, nemo fuga quisquam facere recusandae? Unde consequuntur quia
              autem incidunt labore, pariatur hic vel, ab illum praesentium aliquam neque fugiat iure eveniet nulla,
              earum eligendi enim sequi dolore? Magnam aut id modi? Placeat quas vitae repudiandae dolore a, nisi
              recusandae unde saepe neque asperiores et! Sint excepturi dolore exercitationem fugit aperiam explicabo,
              commodi repellendus, impedit quidem nam est vitae obcaecati totam id nesciunt voluptatum accusamus? Unde
              modi repudiandae sunt exercitationem aliquid soluta quisquam reprehenderit quidem porro suscipit dicta
              rem provident incidunt eius accusantium adipisci excepturi quasi aut, omnis reiciendis molestiae ab
              cumque. Commodi itaque reprehenderit laudantium rerum porro! Nesciunt sapiente soluta necessitatibus,
              aliquid quas voluptatem mollitia, vitae sint blanditiis tempora laboriosam cum illum enim cumque eius
              magnam maiores! Nulla, dolorum magnam dolores, quaerat quas error officia perferendis temporibus, porro
              ex tempora blanditiis harum similique? Ratione culpa molestiae veniam facilis! Id, obcaecati reiciendis
              explicabo officiis nesciunt pariatur illum ipsam, odit provident laborum earum odio accusamus rem saepe
              consequatur ratione! Vitae aspernatur suscipit consectetur natus ipsum optio, aut similique magni quos.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>

</html>