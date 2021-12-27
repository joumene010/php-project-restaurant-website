<?php 
session_start();
require 'header.php';
if(!isset($_SESSION['cart']['items'])){
    $_SESSION['cart']['items']= array();
}?>

<!-- Intro Section -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>gusty</h1>
            <a href="#about" id="home-btn" class="btn  page-scroll">About US</a> 
        </div>
      </div>
    </div>
  </div>
</header>

<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/about.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>About Us</h2>
          <hr>
          <p>Food as it should be. Food should taste good. It should feel good. It should do good things for you and the world around you.</p>
          <h3>Mission:</h3>
          <p> 
            To create an environment where absolute guest satisfaction is our highest priority.
          </p>
          <h3>Vision: </h3>
          <p> 
            Through a shared commitment to excellence, we are dedicated to the uncompromising quality of our food, service, people and profit, while taking exceptional care of our guests and staff. We will continuously strive to surpass our own accomplishments and be recognized as a leader in our industry.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require 'footer.php';?>
</body>
</html>