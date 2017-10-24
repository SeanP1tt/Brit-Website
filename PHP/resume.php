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
    <h3>Film</h3>
    <div class="row">
    <div class="col-sm-4" ><p>
        Confessions Of A Prodigal Son<br>
Undefiled<br>
Heart’s Desire<br>
Trespass<br>
The Boston Strangler<br>
Lost<br>
Brat 2<br>
Home Alone 3

        </p></div>
        
    <div class="col-sm-4" ><p>
        Lead<br>
Lead<br>
Lead<br>
Supporting<br>
Lead<br>       
Lead<br>
Supporting<br>     
Supporting
        </p></div>
        
    <div class="col-sm-4"><p>
        Allan Spiers<br>
Raykel Tolson<br>
Raymond Parker<br>
Xandy Smith<br>
Keith Walley<br>
Samah Tokmachi<br>
Alexei Balabunov<br>
Raja Gosnell
        </p></div>
</div>
    <br>
     <h3>TELEVISION</h3>
    <div class="row">
    <div class="col-sm-4" ><p> 
Dexter<br>
NCIS-LA<br>
The Bay*<br>
Creative Cove<br>
Decktechs<br>
Liberator<br>
Wizards Of Waverly Place<br>
Brothers And Sisters<br>
Men Interrupted (Pilot)<br>
Cold Case<br>
Crossing Jordan<br>
Early Edition<br>
Cupid
        </p></div>
<div class="col-sm-4" ><p> 
    Co-Star<br>
Co-Star<br>
Recurring<br>
Series Regular<br>
Series Regular<br>
Recurring<br>
Co-Star<br>
Co-Star<br>
Series Regular<br>
Co-Star<br>
Co-Star<br>
Guest Star<br>
Co-Star
    </p></div>
<div class="col-sm-4" ><p> 
Alik Sakharov/Showtime<br>
Robert Florio/CBS<br>
Gregori Martin/Lany Films<br>
Cameron Lanier/MYS<br>
David Kendall/Kendall Pictures<br>
Aaron Pope/Coverage Ink<br>
Victor Gonzalez/Disney Channel<br>
Michael Morris/ABC<br>
Rick Walls/HW<br>
David Barrett/CBS<br>
Nick Gomez/NBC<br>
Gary Nelson/CBS<br>
Nick Mark/ABC
    </p></div>        
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
