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
</div>

<!-- Container (Contact Section) -->
<?php include 'contact.php'; ?>
<!-- end Contact section -->

<!-- Footer -->
<?php include 'footer.php'; ?>

<!--  Audio File that plays when the page loads  -->
<audio id="my_audio" src="Audio/New%20Recording%2011.m4a"></audio>
</body>
</html>
