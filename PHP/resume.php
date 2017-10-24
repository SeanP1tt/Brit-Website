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

<!-- RESUME -->
<div id="resume" class="container">
  <h3 class="text-center">RESUME</h3>
  <p class="text-center">
    <em>Check my credentials below</em>
  </p>
  <br>
  <br>
</div>
<!-- end RESUME section -->

<!-- SPLIT INBETWEEN SITE -->
<div id="none" class="bg-1">
  <div class="container">
    <h3 class="text-center">Content</h3>
    <p class="text-center">some content here</p>
    <!--
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">November <span class="badge">3</span></li>
    </ul>
    -->
    </div>
  </div>
<!-- end content -->

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

</body>
</html>
