<?php
  include 'dbconfig/config.php';
  include 'Session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/Home.css">
	  <link rel="icon" href="Images/ZODIAC®Logo3.png" type="image/gif" sizes="16x16">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    	<!-- Buttons -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/23b708834a.js" crossorigin="anonymous"></script>
    <title>ZODIAC® Home</title>

<script type="text/javascript" src="JS/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
		var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}

function logout() {
  alert ("Thank you for using ZODIAC®, please come again!");
  window.location.href = 'Log Out.php';
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
		$(document).ready(function(){

			/*! Fades in page on load */
			$('body').css('display', 'none');
			$('body').fadeIn(500);
		});
		 //$(document).ready(function () { $('div').hide().fadeIn(1500).delay(4000)});
		/*$(document).ready(function() {
			$('a').click(function() {
				// alert("Are you sure you want to visit this website?");
				var selected = $(this);
				$('a').removeClass('active');
				$(selected).addClass('active');
			});
			
			var $a = $('.a'),
				$b = $('.b'),
				$c = $('.c'),
				$d = $('.d'),
				$e = $('.e'),
				$home = $('.home'),
				$home = $('.aboutus');
			
			$a.click(function() {
				$home.fadeIn();
				$aboutus.fadeOut();
			});
			$b.click(function() {
				$aboutus.fadeIn();
				$home.fadeOut();
			});
		});*/
	</script>
</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader"></div>
<div style="display:none;" id="myDiv" class="background animate-bottom">

<nav class="navbar navbar-dark sticky-top" style="background-color: #072d5f;">
		<!-- Navbar content -->
	<a class="navbar-brand" href="Home.php">
    <img id="logo" src="Images/ZODIAC®Logo4.png" class="d-inline-block align-top" alt="ZODIAC® Logo">
  	</a>
      <h3 class="welcome-title">Welcome, <u><?php echo $login_session?>!</u></h3>
    <form action="" class="form-inline" method="POST">
    <a class="nav-link" href="#"><img id="logo4" src="Images/WeGo LIVE! logo.png" alt="WeGo LIVE! Logo"></a>
    <a class="nav-link" href="Profile Page.php">Profile</a>
    <a class="nav-link" href="Portfolio Page.php">Portfolio</a>
    <a class="nav-link" href="#">Recruitments</a>
    <a class="nav-link" href="#">Transaction</a>
    <a class="nav-link" href="Subscription Page.php">Subscribe Now!</a>
    <button type="button" class="btn btn-outline-danger my-2 my-sm-0"  onclick="logout()">Log Out</button>
    </form>
    </nav>

<!--Carousel Wrapper-->
    <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails" data-ride="carousel">
<!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="Images/Carousel3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h4>ZODIAC® Leo Pride of the Lion Recruitment Week!</h4>
    <p>Apply now from October 27 to October 30</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Carousel4.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h4>ZODIAC® Leo CHI vs. ZODIAC® Scorpio JOMS</h4>
    <p>Official Showdown premieres on Dec. 12, 2020</p>
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="Images/Carousel5.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h4>ZODIAC® and WeGo LIVE! Presents: WE UNITE AS ONE BANNER</h4>
    <p>12 Branches, One Community, One Banner, and One Prestigious Family</p>
    </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
    <!--/.Slides-->
    <!--/.Controls-->
    <ol class="carousel-indicators">
    <li data-target="#carousel-thumb" data-slide-to="0" class="active">
      <!-- <img src="Images/Carousel3.jpg" width="100"> -->
    </li>
    <li data-target="#carousel-thumb" data-slide-to="1">
      <!-- <img src="Images/Carousel4.jpg" width="100"> -->
    </li>
    <li data-target="#carousel-thumb" data-slide-to="2">
      <!-- <img src="Images/Carousel5.jpg" width="100"> -->
    </li>
  </ol>
</div>
<!--/.Carousel Wrapper-->

<div class="album py-5" style="background-image: url("../Images/image124.jpg");">
      <center><h2 class="branch-description">The 12 Branches of <img id="logo22" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"></h2></center>
      <br>
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Aries.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Aries</h2>
                <h5><i>Mar. 21 - April 19</i></h5>
                  <p class="card-text">Aries the Ram is an Autumn constellation, and can be best viewed in the night sky during the month of November.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#AriesModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="AriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Aries</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Aries.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Mar. 21 - April 19</i></h5>
      <p class="card-text">Aries the Ram is an Autumn constellation, and can be best viewed in the night sky during the month of November.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Aries</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Taurus.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Taurus</h2>
                <h5><i>April 20 - May 20</i></h5>
                  <p class="card-text">Taurus the Bull is an Autumn constellation, and can  be best viewed in the night sky during the month of December.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#TaurusModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="TaurusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Taurus</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Taurus.jpg" data-holder-rendered="true">
      <br>
      <h5><i>April 20 - May 20</i></h5>
      <p class="card-text">Taurus the Bull is an Autumn constellation, and can  be best viewed in the night sky during the month of December.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Taurus</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Gemini.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Gemini</h2>
                <h5><i>May 21 - June 21</i></h5>
                  <p class="card-text">Gemini the Twins is a Winter constellation, and can be best viewed in the night sky during the month of January.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#GeminiModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="GeminiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Gemini</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Gemini.jpg" data-holder-rendered="true">
      <br>
      <h5><i>May 21 - June 21</i></h5>
      <p class="card-text">Gemini the Twins is a Winter constellation, and can be best viewed in the night sky during the month of January.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Gemini</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Cancer.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Cancer</h2>
                <h5><i>June 22 - July 22</i></h5>
                  <p class="card-text">Cancer the Crab is a Winter Constellation, and can be best viewed in the night sky during the month of February.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#CancerModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="CancerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Cancer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Cancer.jpg" data-holder-rendered="true">
      <br>
      <h5><i>June 22 - July 22</i></h5>
      <p class="card-text">Cancer the Crab is a Winter Constellation, and can be best viewed in the night sky during the month of February.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Cancer</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Leo.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Leo</h2>
                <h5><i>July 23 - Aug. 22</i></h5>
                  <p class="card-text">Leo the Lion is a Winter constellation, and can be best viewed in the night during the month of March.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#LeoModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="LeoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Leo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Leo.jpg" data-holder-rendered="true">
      <br>
      <h5><i>July 23 - Aug. 22</i></h5>
      <p class="card-text">Leo the Lion is a Winter constellation, and can be best viewed in the night during the month of March.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Leo</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Virgo.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Virgo</h2>
                <h5><i>Aug. 23 - Sept. 22</i></h5>
                  <p class="card-text">Virgo the Virgin is a Spring constellation, and can be best viewed during the month of April.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#VirgoModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="VirgoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Virgo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Virgo.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Aug. 23 - Sept. 22</i></h5>
      <p class="card-text">Virgo the Virgin is a Spring constellation, and can be best viewed during the month of April.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Virgo</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Libra.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Libra</h2>
                <h5><i>Sept. 23 - Oct. 23</i></h5>
                  <p class="card-text">Libra the Scales is a Spring constellation, and can be best viewed in the night sky during the month of May.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#LibraModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="LibraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Libra</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Libra.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Sept. 23 - Oct. 23</i></h5>
      <p class="card-text">Libra the Scales is a Spring constellation, and can be best viewed in the night sky during the month of May.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Libra</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Scorpio.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Scorpio</h2>
                <h5><i>Oct. 24 - Nov. 21</i></h5>
                  <p class="card-text">Scorpio the Scorpion is a Spring constellation with an astronomical name of Scorpius, and can be best viewed in the night sky during the month of June.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#ScorpioModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="ScorpioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Scorpio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Scorpio.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Oct. 24 - Nov. 21</i></h5>
      <p class="card-text">Scorpio the Scorpion is a Spring constellation with an astronomical name of Scorpius, and can be best viewed in the night sky during the month of June.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Scorpio</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Sagittarius.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Sagittarius</h2>
                <h5><i>Nov. 22 - Dec. 21</i></h5>
                  <p class="card-text">Sagittarius the Archer is a Summer constellation, and can be best viewed in the night sky during the month July.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#SagittariusModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="SagittariusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Sagittarius</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Sagittarius.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Nov. 22 - Dec. 21</i></h5>
      <p class="card-text">Sagittarius the Archer is a Summer constellation, and can be best viewed in the night sky during the month July.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Sagittarius</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Capricorn.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Capricorn</h2>
                <h5><i>Dec. 22 - Jan. 19</i></h5>
                  <p class="card-text">Capricorn the Sea Goat is a Summer constellation with an astronomical name of Capricornus, and can be best viewed in the night sky during the month of August.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#CapricornModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="CapricornModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Capricorn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Capricorn.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Dec. 22 - Jan. 19</i></h5>
      <p class="card-text">Capricorn the Sea Goat is a Summer constellation with an astronomical name of Capricornus, and can be best viewed in the night sky during the month of August.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Capricorn</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Aquarius.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Aquarius</h2>
                <h5><i>Jan. 20 - Feb. 18</i></h5>
                  <p class="card-text">Aquarius the Water Bearer is an Summer constellation, and can be best viewed in the night sky during the month of September.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#AquariusModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
  <!-- Modal -->
  <div class="modal fade" id="AquariusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Aquarius</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Aquarius.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Jan. 20 - Feb. 18</i></h5>
      <p class="card-text">Aquarius the Water Bearer is an Summer constellation, and can be best viewed in the night sky during the month of September.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Aquarius</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
              <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="Images/ZODIAC® Pisces.jpg" data-holder-rendered="true">
                <div class="card-body">
                <h2 class="branch-description-2"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Pisces</h2>
                <h5><i>Feb. 19 - Mar. 20</i></h5>
                  <p class="card-text">Pisces the Fishes in an Autumn constellation, and can be best viewed in the night sky during the month of October.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    <a href="#"><button type="button" class="btn btn-sm btn-outline-dark" style="background-color: #072d5f;" data-toggle="modal" data-target="#PiscesModal">View</button></a>
                      <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> -->
                    </div>
                    <!-- <small class="text-muted">9 mins</small> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <!-- Modal -->
  <div class="modal fade" id="PiscesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> Pisces</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img class="card-img-top" style="height: 300px; width: 100%; display: block;" src="Images/ZODIAC® Pisces.jpg" data-holder-rendered="true">
      <br>
      <h5><i>Feb. 19 - Mar. 20</i></h5>
      <p class="card-text">Pisces the Fishes in an Autumn constellation, and can be best viewed in the night sky during the month of October.</p>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" style="background-color: #04012c;" data-dismiss="modal">Join <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Pisces</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


    <!-- Footer content -->
        <div class="footer">
        <p><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> 2020 - All Rights Reserved <img id="logo3" src="Images/ZODIAC®Logo5.png" alt="ZODIAC® Logo"></p>
        </div>
</body>
</html>