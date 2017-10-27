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
<div id="about" class="container text-center">
  <h3>BIOGRAPHY</h3>
  <p><em>So you wanna know about me, eh?</em></p>

  <p> I was born and raised in a quiet residental surburb of St. Louis Missouri called University City. I have an older brother who is a 6th and 7th grade teacher in surburban St. Louis. My parents are both retired. My mom taught for over 30 years in the St. Louis public school system. My dad worked for over 30 years for the US government. My parents have been happily married for 39 years and are both very active in the church. My dad is an ordained minister and my mom is a missionary. I grew up in a functional family. We had dinner together every evening. I was raised believing I can be a success in anything I desire to pursue as long as I keep faith in God and in prayer.
  <br>
My first love was not acting but music. I took piano lessons in the first grade for about a year. My parents bought a piano for me to practice but shortly thereafter I quit. The piano still sits in my parents living room in the exact location it was delivered years ago. I always had a great musical ear and I kept singing in choirs at school and church. In 5th grade I decided to make a move to the brass instrument trumpet and that is when my artistic transformation began.
  <br>
I quickly caught on to the trumpet and loved every minute off it. My first two years(5th and 6th grade) I played mostly classical music. In 7th grade I was introduced to jazz by my 7th grade band director Hiram Martin. I joined the 7th grade jazz band and the rest was history…so I thought. In 7th grade myself and 3 other classmates founded the U.City Jazz Dispatch, most noteably Neal “Sugar” Caine(currently bassist for Harry Connick Jr.) . Our jazz quartet earned rave reviews everywhere we played. In fact The St. Louis Dispatch named us “the future of jazz…” What I didn’t know was my future would soon be changed.
  <br>
In 10th grade my high school held auditions for a production of West Side Story. My childhhod friend Leonard Roberts(from NBC’s Heroes) had always been involved in drama and convinced me to audition. Leonard got the lead playing Tony and I was his understudy. I also was one of the Jets with like 14 lines. After being on stage in that production I had a feeling that I never had while playing trumpet, singing in the choir or even during my short piano stint. I wasn’t nervous! Even then I knew that I needed to learn the craft of acting. So I immediately took classes in scene study and improv. I continued to audition, earning roles in Dreamgirls, The Shadow Box, and several local film and stage productions.
  <br>
After watching the Spike Lee film Mo Betta Blues and its tragic ending I decided make trumpet hobby and go to college to pursue a degree in acting.
  <br>
I graduated from Truman State University where I earned a B.A. in Theatre. While at Truman I directed, produced and wrote several plays. As a freshman I starred alongside classmate Jenna Fischer (NBC’s The Office). Four years later I graduated from Truman and moved to Chicago to pursue my acting career further.
  <br>
While in Chicago I performed in several stage productions including Other World Lovers at Tony Award winning Victory Gardens Theatre, Roll of Thunder Hear My Cry and The Buddy Holly Story to name a few. I also made several TV guest appearances in Cupid(ABC) starring Jeremy Piven, and Early Edition(CBS) starring Fischer Stevens and Kyle Chandler.
  <br>
After working on a few more films I made the difficult decision to move west to LA where I have lived for 7 years. I currently reside in Hollywood. Since being here in LA I’ve guest starred in Crossing Jordan(NBC), Haunted(UPN), and Cold Case(CBS) to name a few. I’ve also booked several commercials and films.</p>
  <br>
</div>

<!-- SOME CONTENT HERE / fun facts? wife? -->
<div id="none" class="bg-1">
  <div class="container">
    <h3 class="text-center">Something about wife maybe</h3>
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
