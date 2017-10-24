<!DOCTYPE html>
<html lang="en">
<head>
  <!-- source code from W3 schools, adapted for site -->
  <title>Darwin's Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="style.js"></script>
</head>

<!-- ensures scrolling works smoothly -->
<body id="index" data-spy="scroll" data-target=".navbar" data-offset="50">

<!-- navigation bar -->
<?php include 'nav.php'; ?>
<!-- header image/ carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active slider-img">
        <img src="IMG/test1.jpeg" alt="Picture 1" width="1200" height="700" >
        <div class="carousel-caption">
          <h3>test image 1</h3>
          <p>some caption here</p>
        </div>
      </div>

      <div class="item slider-img">
        <img src="IMG/test2.jpeg" alt="Picture 2" width="1200" height="300" class="slider-img">
        <div class="carousel-caption">
          <h3>test image 2</h3>
          <p>some caption here</p>
        </div>
      </div>

      <div class="item slider-img">
        <img src="IMG/test3.jpeg" alt="Picture 3" width="1200" height="700" class="slider-img">
        <div class="carousel-caption">
          <h3>test image 3</h3>
          <p>some caption here</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The about Section) -->
<div id="about" class="container text-center">
  <h3>A WORD FROM DARWIN</h3>
  <p><em>mantras to live by</em></p>
  <p>Many people say that living life to the fullest is very important. I always try to integrate the universal human experience in the work that I choose whether it be on stage or on camera. Hopefully those who visit my site will be inspired to fully pursue whatever dreams they have. More importantly be guided by God to have the faith, perseverance and hard work to make those dreams become a reality.</p>
  <br>
</div>

<!-- Container // SOME CONTENT HERE, PERHAPS VIDEO REELS? -->
<div id="none" class="bg-1">
  <div class="container">
    <h3 class="text-center">CONTENT</h3>
    <p class="text-center">Selected projects and images<br> click the button to learn more</p>
    <!--
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">November <span class="badge">3</span></li>
    </ul>
    -->

    <div class="row text-center">
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="IMG/content.jpeg" alt="content" width="400" height="300">
          <p><strong>content</strong></p>
          <p>short description</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">view project</button>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="IMG/content.jpeg" alt="content" width="400" height="300">
          <p><strong>content</strong></p>
          <p>short description</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">view project</button>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="IMG/content.jpeg" alt="content" width="400" height="300">
          <p><strong>content</strong></p>
          <p>short description</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">view project</button>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="thumbnail">
          <img src="IMG/content.jpeg" alt="content" width="400" height="300">
          <p><strong>content</strong></p>
          <p>short description</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">view project</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>Have business inquires? Contact one of my agents using the informaton below.</em></p>
  <br>
  <div class="row">
    <!-- -->
    <div class ="col-sm-4">
      <p><span class="glyphicon glyphicon-paperclip"></span>    Pure Talent Management</p>
      <p><span class="glyphicon glyphicon-user"></span>   Manager-Katrina Herlong</p>
      <p><span class="glyphicon glyphicon-phone"></span>   (818)358-3830</p>
    </div>

    <div class ="col-sm-4">
      <p><span class="glyphicon glyphicon-paperclip"></span>   Privilege Talent</p>
      <p><span class="glyphicon glyphicon-phone"></span>   (404) 430-1104</p>
    </div>

    <div class ="col-sm-4">
      <p><span class="glyphicon glyphicon-paperclip"></span>   Commercial Representation-Stark Talent</p>
      <p><span class="glyphicon glyphicon-user"></span>    Agent-Alycia Stark</p>
      <p><span class="glyphicon glyphicon-phone"></span>   (310) 409-7383</p>
    </div>
  </div>
  <br>
</div>
<!-- end Contact section -->

<!-- Footer -->
<?php include 'footer.php'; ?>

<!--  Audio File that plays when the page loads  -->
<audio id="my_audio" src="Audio/New%20Recording%2011.m4a"></audio>
</body>
</html>
