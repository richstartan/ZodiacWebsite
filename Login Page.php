<?php
	include 'dbconfig/config.php';
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/Login Page.css">
	<link rel="icon" href="Images/ZODIAC®Logo3.png" type="image/gif" sizes="16x16">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>ZODIAC® Log-In</title>
</head>
<body onload="myFunction()" style="margin:0;">
<div id="loader"></div>
<div style="display:none;" id="myDiv" class="background animate-bottom">

	<div class="container" style="
    width: 1020px;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-left: 50px;
    height: 1010px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="Images/Carousel1.jpg" alt="ZODIAC® Promo 1" style="border-radius: 10px;">
        <div class="carousel-caption">
          <!-- <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="Images/Carousel2.jpg" alt="ZODIAC® Promo 2" style="border-radius: 10px;">
        <div class="carousel-caption">
          <!-- <h3>Chicago</h3>
          <p>Thank you, Chicago!</p> -->
        </div>
	  </div>
	  
	   <!-- Left and right controls -->
	   <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
	</a>
  </div>
</div>

<div id="main-wrapper">
		<center>
			<img class="logo-img" src="Images/ZODIAC®Logo2.png"/>
			<div id="pic1" class="feat-img zoom"></div>
			<h2>Log-In to <img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo" width="130px" height="30px"></h2>
		</center>

	<form class="myform" action="Login Page.php" method="POST">
		<label><img id="logo2" src="Images/ZODIAC®Logo4.png" alt="ZODIAC® Logo" width="170px" height="40px"> Username:</label>
		<input name="zodiacusername" type="text" class="inputvalues" placeholder="Type your ZODIAC® Username" required/>
		<br>
		<br>
		<label>Password:</label>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/>
		<br>
		<input name="login" type="submit" id="login_btn" value="Log-In" />
		<br>
		<center><label class="register_label">Don't have an account yet?</label></center>
		<a href="Register Page.php"><input type="button" id="register_btn" value="Register" /></a>
	</form>
	</div>

<?php
	if(isset($_POST['login']))
	{
		$zodiacusername =mysqli_real_escape_string($con,$_POST['zodiacusername']);
		$password =  mysqli_real_escape_string($con,$_POST['password']);
		$password = md5($password);
		
		$query = "select * from zodiacusers WHERE zodiacusername='$zodiacusername' AND password='$password'";

		$result = mysqli_query($con,$query);
		  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
		  $count = mysqli_num_rows($result);

		  if (!empty($zodiacusername) && !empty($password)) {
			# code...
			if($count == 1) {
			 // session_register("zodiacusername");
			 $_SESSION['login_user'] = $zodiacusername;
			 echo "<script>
			 alert('Login Successful, Welcome to ZODIAC®!');
			 window.location.href='Home.php';
			 </script>";
		  }
		  else 
		  {
			 echo '<script>alert("Invalid Username or Password!");</script>';
		  }
		}
		else
		{
			echo '<script>alert("Please Complete the Entries!");</script>';
		}
	}
?>

	</div>

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
</body>
</html>