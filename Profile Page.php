<?php
    include('dbconfig/config.php');
    include 'Session.php';

    $usrnm = $user_check;

    $logStatement = "SELECT * FROM zodiacusers where zodiacusername LIKE '".$usrnm."' ;";

    if ($result = mysqli_query($con, $logStatement))
    {
    // Fetch one and one row
    while ($row= $result->fetch_assoc())
      {
        $id = $row['id'];
        $target_dir = $row['image'];
	    $wegoliveusername = $row['wegoliveusername'];
	    $fname = $row['fname'];
        $lname = $row['lname'];
        $birthdate = $row['birthdate'];
	    $email = $row['email'];
	    $contactno = $row['contactno'];
	    $zodiacusername = $row['zodiacusername'];
	    $branch = $row['branch'];
	    $refcode = $row['refcode'];
        $dateandtime = date('Y-m-d');
      }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="CSS/Profile Page.css">
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
    <title>ZODIAC® Profile</title>

<script type="text/javascript" src="JS/jquery-1.11.3.min.js"></script>
<script type="text/javascript">
	var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 300);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

function logout(){
    alert ("Thank you for using ZODIAC®, please come again!");
    window.location.href = 'Log Out.php';
}

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
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

<nav class="navbar sticky-top navbar-dark" style="background-color: #072d5f;">
		<!-- Navbar content -->
	<a class="navbar-brand" href="Home.php">
    <img id="logo" src="Images/ZODIAC®Logo4.png" class="d-inline-block align-top" alt="ZODIAC® Logo">
  	</a>
      <h3 class="welcome-title">Welcome, <u><?php echo $login_session?>!</u></h3>
    <form action="" class="form-inline" method="POST">
    <a class = "nav-link" href="#"><img id="logo4" src="Images/WeGo LIVE! logo.png" alt="WeGo LIVE! Logo"></a>
    <a class="nav-link" href="Profile Page.php">Profile</a>
    <a class="nav-link" href="Portfolio Page.php">Portfolio</a>
    <a class="nav-link" href="#">Recruitments</a>
    <a class="nav-link" href="#">Transaction</a>
    <a class="nav-link" href="Subscription Page.php">Subscribe Now!</a>
    <button type="button" class="btn btn-outline-danger my-2 my-sm-0"  onclick="logout()">Log Out</button>
    </form>
    </nav>

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        <?php //echo '<img id="myImg" src="Images/'.$image.'" />'; ?>
                        <img id="MyImg" src="<?php echo $target_dir ?>" alt="Profile Picture">
                            <div class="file">
                                <!-- <input type="file" name="file"/> 
                                    btn btn-lg btn-primary-->
                            </div>
                                <!-- The Modal -->
                            <div id="myModal" class="modal">

                            <!-- The Close Button -->
                            <span class="close">&times;</span>

                            <!-- Modal Content (The Image) -->
                            <img class="modal-content" id="img01">

                            <!-- Modal Caption (Image Text) -->
                            <div id="caption"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                    <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"><img id="logo3" src="Images/ZODIAC®Logo5.png" alt="ZODIAC® Logo">
                        <div class="profile-head">
                                    <br>
                                    <h2 class="header-info">
                                    <p class="proile-rating">FULL NAME: </p>
                                    <?php  echo $fname ?>  <?php  echo $lname ?>
                                    </h2>
                                    <h3 class="header-info">
                                    <p class="proile-rating">FAMILY BRANCH: </p><?php  echo $branch ?>
                                    </h3>
                                    <br>
                                    <!-- <p class="proile-rating">RATING: <span><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i><i class="fas fa-3x fa-star"></i></span></p>
                                    <p class="proile-rating">RANKING: <span>10/10 Top 5, NCR, Philippines</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="Edit Profile Page.php"><input type="button" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">              
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u><img id="logo4" src="Images/WeGo LIVE! logo.png" alt="WeGo LIVE! Logo">ID:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $id?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u><img id="logo4" src="Images/WeGo LIVE! logo.png" alt="WeGo LIVE! Logo">Username:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $wegoliveusername?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo">Username:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $zodiacusername?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Birthdate:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $birthdate?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>E-mail:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $email?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Contact Number:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $contactno?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Referral Code:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $refcode?></h6>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Date Joined:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6><?php echo $dateandtime?></h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label><u>Hours Accumulated:</u></label>
                                            </div>
                                            <div class="col-md-6">
                                                <h6></h6>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>English Level</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Expert</p>
                                            </div>
                                        </div> -->
                                        <!-- <div class="row">
                                            <div class="col-md-6">
                                                <label>Availability</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>6 months</p>
                                            </div>
                                        </div> -->
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p>Your detail description</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

     <!-- Footer content -->
     <div class="footer">
        <p><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo"> 2020 - All Rights Reserved <img id="logo3" src="Images/ZODIAC®Logo5.png" alt="ZODIAC® Logo"></p>
        </div>

</body>
</html>