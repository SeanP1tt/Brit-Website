<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#index">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><<?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'class="active"' ?> a href="index.php">HOME</a></li>
        <li><<?php if (basename($_SERVER['PHP_SELF']) == 'about.php') echo 'class="active"' ?>a href="about.php">ABOUT</a></li>
        <li><<?php if (basename($_SERVER['PHP_SELF']) == 'resume.php') echo 'class="active"' ?>a href="resume.php">RESUME</a></li>
        <li><<?php if (basename($_SERVER['PHP_SELF']) == 'gallery.php') echo 'class="active"' ?>a href="gallery.php">GALLERY</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Merchandise</a></li>
            <li><a href="#">Extras</a></li>
            <li><a href="#">Media</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>
