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


<!-- Container (The about Section) -->
<div id="gallery" class="container">
    <h3>GALLERY</h3>
 <div class="row">
    <div class="col-sm-4" ><img src="IMG/image_00001_pp.jpeg"></div>
    <div class="col-sm-4" ><img src="IMG/image_00002_pp.jpeg"></div>
    <div class="col-sm-4"><img src="IMG/image_00006_pp.jpeg"></div>
  </div>
    <br>
    <div class="row">
    <div class="col-sm-4"><img src="IMG/image_00004_pp.jpeg"></div>
    <div class="col-sm-4" ><img src="IMG/image_00005_pp.jpeg"></div>
    <div class="col-sm-4" ><img src="IMG/image_00003_pp.jpeg"></div>
  </div>
</div>
<!-- SOME CONTENT HERE, PERHAPS VIDEO REELS? -->
<div id="none" class="bg-1">
  <div class="container">
    <h3 class="text-center">Some quote or something similar</h3>
    <p class="text-center">Selected projects and images<br> click the button to learn more</p>
    <!--
    <ul class="list-group">
      <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li>
      <li class="list-group-item">November <span class="badge">3</span></li>
    </ul>
    -->
  </div>
</div>

<!-- Container (Contact Section) -->
<?php include 'contact.php'; ?>
<!-- end Contact section -->

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
