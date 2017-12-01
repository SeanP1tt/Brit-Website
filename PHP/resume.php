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
        <a class="popup" href="#!" data-link="http://www.youtube.com/embed/xl_n03Ofi9k?enablejsapi=1" data-title="Confessions of A Prodigal Son">Confessions Of A Prodigal Son</a><br>
Undefiled<br>
Your Hearts Desire<br>
        Average American Marriage <br>
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
Supporting<br>
Lead<br>       
Lead<br>
Supporting<br>     
Supporting
        </p></div>
        
    <div class="col-sm-4"><p>
        Allan Spiers/Lighting Dark<br>
Raykel Tolson/Tolson Films<br>
Raymond Parker/Gemini<br>
Charles Emmett/AUFA<br>        
Xandy Smith/Soul Uprising<br>
Keith Walley/BSP<br>
Samah Tokmachi/Indie<br>
Alexei Balabunov/Kaizen<br>
Raja Gosnell/20th Century Fox
        </p></div>
</div>
    <br>
    
<div id="video-view"></div>    
    <br>
     <h3>Television</h3>
    <div class="row">
    <div class="col-sm-4" ><p> 
The Jury-Pilot<br>
Dexter<br>
NCIS-LA<br>
*The Bay<br>
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
    ABC <br>
Showtime<br>
CBS<br>
Lany Films<br>
MYS Prod<br>
Kendall Pictures<br>
Coverage Ink<br>
Disney Channel<br>
ABC<br>
HW Productions<br>
CBS<br>
NBC<br>
CBS<br>
ABC
    </p></div>        
    </div>
    <br>
     <h3>Theatre</h3>
    <div class="row">
    <div class="col-sm-4" ><p> 
         Chase N Essence <br>
Private Hearts<br>
The Apartment<br>
Ugly<br>
Sex, Relationships and Love<br>
The Buddy Holly Story<br>
Dutchman<br>
Roll of Thunder Hear My Cry<br>
Other World Lovers<br>
Dreamgirls
        </p></div>
<div class="col-sm-4" ><p> 
    Chase <br>
    Funky Bob<br>
Leon<br>
Spoke<br>
Various Roles<br>
Apollo MC<br>
Clay<br>
Hammer<br>
Marcel<br>
C.C. White</div>
<div class="col-sm-4" ><p> 
    Santa Monica Playhouse <br>
The Cast Theatre<br>
The Cast Theatre<br>
Santa Monica Playhouse<br>
The Complex<br>
Stage West, Calgary<br>
Charles Banks Theatre<br>
Apple Tree Theatre<br>
Victory Gardens Theatre<br>
Charles Banks Theatre
    </p></div>        
    </div>
    
    <h3>Training</h3>
    <p>B.A. Theatre - Truman State University; <br>
    <b>Cold Reading</b>- Audrey Wasilewski <br>
    <b>Scene Study</b>- Steve Scott - Goodman Theatre; Amie Farrell-Adler Improv <br><b>Audition Technique</b>- Amie Farrell, Rob Adler-Adler Improv<br>
    <b>On Camera Technique</b>- Amie Farrell-Adler Improv <br></p>
    
    <h3>Special Skills: </h3>
    
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
<?php include 'contact.php'; ?>
<!-- end Contact section -->

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
