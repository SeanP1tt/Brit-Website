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

  <p> I was born and raised in a quiet residental surburb of St. Louis Missouri called University City. I have an older brother who is a 6th and 7th grade teacher in surburban St. Louis. My parents are both retired. My mom taught for over 30 years in the St. Louis public school system. My dad worked for over 30 years for the US government.  I was raised believing I can be a success in anything I desire to pursue as long as I keep faith in God and in prayer.
  <br>
My first love was not acting but music. I quickly caught on to the trumpet and loved every minute off it. In 7th grade I was introduced to jazz and the rest was history…so I thought. Myself and 3 other classmates founded the U.City Jazz Dispatch, most noteably <a id="reference" href="http://www.bassplayer.com/artists/1171/neal-caine-feel-over-flash-with-harry-connick-jr/62421">Neal “Sugar” Caine</a>(currently bassist for Harry Connick Jr.) . Our jazz quartet earned rave reviews everywhere we played. In fact The St. Louis Dispatch named us “the future of jazz…” What I didn’t know was my future would soon be changed.

  <br>
In 10th grade my high school held auditions for a production of West Side Story. My childhhod friend <a id="reference" href="http://www.imdb.com/name/nm0731346/">Leonard Roberts</a> had always been involved in drama and convinced me to audition. Leonard got the lead playing Tony and I was his understudy. I also had a small role as one of The Jets. After being on stage in that production I had a feeling that I never had while playing trumpet. I wasn’t nervous! Even then I knew that I needed to learn the craft of acting. So I immediately took classes in scene study and improv. I continued to audition, earning roles in Dreamgirls, The Shadow Box, and several local film and stage productions. After watching the Spike Lee film Mo Betta Blues and its tragic ending, I decided to make trumpet a hobby and go to college to pursue a degree in Theatre.
  <br>
I graduated from Truman State University where I earned a B.A. in Theatre. While at Truman I directed, produced and wrote several plays. As a freshman I starred alongside classmate <a id="reference" href="http://www.imdb.com/name/nm0278979/">Jenna Fischer</a> in Blues For Mr Charlie. Four years later I graduated from Truman and moved to Chicago to pursue my acting career further.
  <br>

While in Chicago I performed in several stage productions including Other World Lovers at Tony Award winning Victory Gardens Theatre, Roll of Thunder Hear My Cry and The Buddy Holly Story to name a few. I also made several TV guest appearances in Cupid(ABC) starring Jeremy Piven, and Early Edition(CBS) starring Fischer Stevens and Kyle Chandler.
  <br>
After living in Los Angeles for 16 years I made the decision to move to New York, where I currently reside. </p>
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


<!-- Container (Contact Section) -->
<?php include 'contact.php'; ?>
<!-- end Contact section -->

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
